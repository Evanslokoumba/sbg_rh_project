<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Ldap\User;
//use App\Models\Acces_controle;
//use App\Models\Main;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use LdapRecord\Laravel\Auth\MultiDomainAuthentication;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        //dd($request);
        return [
            'MATRICULE' => $request->get('email'),
            'PWD' => $request->get('password')
        ];
    }

    public function username()
    {
        return 'MATRICULE';
    }

    public function guard()
    {

        return $this->getLdapGuard();

    }


    //
    public function seConnecter()
    {
        return view('contenus.pages.connexion');
    }

    public function traiterInfos(LoginRequest $request)
    {
        Auth::shouldUse('ldap');

        //Si l'utilisateur tente de se connecter avec les infos de l'AD, on verifie d'abord sa présence sur (Presonnel)
        $user = \App\Models\User::where('MATRICULE',$request->get('email'))->first();

        if ($user)
        {
            # code...Si l'utilisateur est bien présent sur la table (Présonnel)
            if (
                $user instanceof \App\Models\User
                && ($ldapuserTest   =   \LdapRecord\Models\OpenLDAP\User::where('samaccountname',$request->get('email'))->first())
                &&  $ldapuserTest   instanceof  \LdapRecord\Models\OpenLDAP\User
            )
            {

                $credentials = [
                    'samaccountname'    =>  $request->get('email'),
                    'password'          =>  $request->get('password'),
                ];

                //Auth::attempt($credentials)   =   Tentative de connexion
                if (Auth::attempt($credentials))
                { //Si la tentative de connexion est concluante

                    //dd(Auth::attempt($credentials));

                    $rhUser = \App\Models\User2::where('Identifiant',$request->get('email'))->first();


                    $presonnalUser = \App\Models\User::where('MATRICULE',$request->get('email'))
                        ->update([
                            'NOM' => $rhUser->Nom,
                            'PRENOM' => $rhUser->Prénom,
                            'SERVICE' => $rhUser->Section,
                            'DIRECTION' => $rhUser->Departement,
                            'POSTE' => $rhUser->Fonction,
                            'SITE' => $rhUser->Etablissement,
                        ]);

                    Auth::shouldUse('web');

                    Auth::login(\App\Models\User::where('MATRICULE',$request->get('email'))->first());

                    return redirect()->action([RedirectionController::class, 'index']);


                }
                else{
                    return Back()->with('message','Matricule ou mot de passe incorrects');

                }

            }
            else {


                ##################################### CONNEXION WEB #####################################

                // On pointe vers la connexion web (native à retrouver dans config/auth.php)
                Auth::shouldUse('web');
                if ($rhUser = \App\Models\User2::where('Identifiant',$request->get('email'))->first())
                {
                    # code...
                    //dd('OK sur RH');
                    return redirect()->action([RedirectionController::class, 'index']);
                }
                //Récupérer le compte natif de l'uilisateur qui tente de se connecter
                $nativieUser    =   \App\Models\User::where('MATRICULE',$request->get('email'))->get()->first();

                if($nativieUser   instanceof  \App\Models\User)
                {// S'il a déjà un compte

                    $credentials = [
                        'MATRICULE' => $request->get('email'),
                        'password'  => $request->get('password'),
                    ];

                    //dd($credentials,Auth::attempt($credentials),$request);
                    if (Auth::attempt($credentials))
                    { // On lance la tentative de  connexion sur l'annuaire (Si elle est concluante)
                        //dd('Pas présent dans l'annuaire ');

                        $rhUser = \App\Models\User2::where('Identifiant',$request->get('email'))->first();
                        $presonnalUser = \App\Models\User::where('MATRICULE',$request->get('email'))
                            ->update([
                                'NOM' => $rhUser->Nom,
                                'PRENOM' => $rhUser->Prénom,
                                'SERVICE' => $rhUser->Section,
                                'DIRECTION' => $rhUser->Departement,
                                'POSTE' => $rhUser->Fonction,
                                'SITE' => $rhUser->Etablissement
                            ]);

                        Auth::login(\App\Models\User::where('MATRICULE',$request->get('email'))->first());

                        return redirect()->action([RedirectionController::class, 'index']);
                    }
                    else
                    {
                        //mais présent sur Presonnel
                        return Back()->with('message','Informations incorrects');
                    }
                }
                else
                {

                    return Back()->with('message',"Cette utilisateur n existe pas, rapprochez vous de votre Administrateur");
                }
            }
        } else {
            dd('PAS DANS PRESONNEL...');
        }

    }
}
