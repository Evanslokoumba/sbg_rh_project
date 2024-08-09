<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

use App\Ldap\User as LdapUser;
use App\Models\User as User;
use App\Models\User2 as RhUser;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
        $user = User::where('MATRICULE',$request->get('email'))->first();
        //dd(User::where('samaccountname',$request->get('email'))->first());
        if ($user instanceof User)
        {
            # code...Si l'utilisateur est bien présent sur la table (Présonnel)
            if (
                ($ldapuserTest   =   LdapUser::where('samaccountname',$request->get('email'))->first())
                &&  $ldapuserTest   instanceof  LdapUser
            )
            {
                //dd($ldapuserTest); Vérification de la présence du user sur l' AD

                $credentials = [
                    'samaccountname'    =>  $request->get('email'),
                    'password'          =>  $request->get('password'),
                ];

                //Auth::attempt($credentials)   =   Tentative de connexion
                if (Auth::attempt($credentials))
                { //Si la tentative de connexion est concluante

                    $rhUser = RhUser::where('Identifiant',$request->get('email'))->first();

                    $presonnalUser = User::where('MATRICULE',$request->get('email'))
                        ->update([
                            'NOM' => $rhUser->Nom,
                            'PRENOM' => $rhUser->Prénom,
                            'SERVICE' => $rhUser->Section,
                            'DIRECTION' => $rhUser->Departement,
                            'POSTE' => $rhUser->Fonction,
                            'SITE' => $rhUser->Etablissement,
                        ]);

                    Auth::shouldUse('web');
                    Auth::login(User::where('MATRICULE',$request->get('email'))->first());
                    return redirect()->to('/accueil_page');
                }
                else{
                    return Back()->with('message','Matricule ou mot de passe incorrects, si le problème persiste veuillez contacter votre administrateur');
                }

            }
            else {


                ##################################### CONNEXION WEB #####################################

                // On pointe vers la connexion web (native à retrouver dans config/auth.php)
                Auth::shouldUse('web');
                if ($rhUser = RhUser::where('Identifiant',$request->get('email'))->first())
                {
                    # code...
                    //dd('OK sur RH');
                    return redirect()->action([RedirectionController::class, 'index']);
                }
                //Récupérer le compte natif de l'uilisateur qui tente de se connecter
                $nativieUser    =   User::where('MATRICULE',$request->get('email'))->get()->first();

                if($nativieUser   instanceof  User)
                {// S'il a déjà un compte

                    $credentials = [
                        'MATRICULE' => $request->get('email'),
                        'password'  => $request->get('password'),
                    ];

                    //dd($credentials,Auth::attempt($credentials),$request);
                    if (Auth::attempt($credentials))
                    { // On lance la tentative de  connexion sur l'annuaire (Si elle est concluante)
                        //dd('Pas présent dans l'annuaire ');

                        $rhUser = RhUser::where('Identifiant',$request->get('email'))->first();
                        $presonnalUser = User::where('MATRICULE',$request->get('email'))
                            ->update([
                                'NOM' => $rhUser->Nom,
                                'PRENOM' => $rhUser->Prénom,
                                'SERVICE' => $rhUser->Section,
                                'DIRECTION' => $rhUser->Departement,
                                'POSTE' => $rhUser->Fonction,
                                'SITE' => $rhUser->Etablissement
                            ]);

                        Auth::login(User::where('MATRICULE',$request->get('email'))->first());

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

        dd('rien');

    }

}
