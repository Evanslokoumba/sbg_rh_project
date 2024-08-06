<?php

namespace App\Ldap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use LdapRecord\Models\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use LdapRecord\Models\Concerns\CanAuthenticate;
use App\Models\User2;

use LdapRecord\Laravel\Auth\HasLdapUser;
use LdapRecord\Laravel\Auth\LdapAuthenticatable;
use LdapRecord\Laravel\Auth\AuthenticatesWithLdap;

class User extends Authenticatable implements LdapAuthenticatable
{
    use CanAuthenticate, HasApiTokens, HasFactory, Notifiable, AuthenticatesWithLdap, HasLdapUser  ;
    /**
     * The object classes of the LDAP model.
     */
    //protected $connection = 'default';

    public static array $objectClasses = [

            'top',
            'person',
            'organizationalperson',
            'user',

    ];
}
