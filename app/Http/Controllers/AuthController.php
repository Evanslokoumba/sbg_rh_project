<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Ldap\LdapUser;
use App\Models\Acces_controle;
use App\Models\Main;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function seConnecter()
    {
        return view('contenus.pages.connexion');
    }

    public function traiterInfos(LoginRequest $request)
    {
        $credentials    = [
            'samaccountname'    =>  $request->get('email'),
            'password'          =>  $request->get('password'),
        ];

        // On pointe vers la connexion ldap (annuaire à retrouver dans config/auth.php)
        Auth::shouldUse('ldap');

        $ldapUser                       =   LdapUser::where('samaccountname',$request->get('email'))->get();
            //Si l'utilisateur qui tente de se connecter est enregistré sur l'annaire
            // $request->get('email') = MATRICULE DU USER comparé au champ samaccountname de l'annuaire
            if ($ldapUser->count()===1 && $ldapUser->first() instanceof  \App\Ldap\LdapUser) {

                //Auth::attempt($credentials)   =   Tentative de connexion
                if (Auth::attempt($credentials)) { //Si la tentative de connexion est concluante

                    $request->session()->regenerate();
                    return redirect()->intended(route('contenus.pages.accueil'));
                }
                else{
                    return to_route('/')->withErrors([
                        'email' => 'Matricule ou mot de passe incorrecte!'
                    ]);
                }
            }
            //SINON

    }
}
