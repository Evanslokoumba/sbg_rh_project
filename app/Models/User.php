<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table        =   'presonnels';
    protected $primaryKey   =   'ID';
    protected $connection   =   'vmOwd3';

    /*
    protected   $table  =   'users';
    protected   $connecion  =   'axel';
    use Notifiable;
    */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guaded = [
         'ID'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'PWD'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'matricule_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->PWD;
    }

    public function setAuthPassword($pwd) : void
    {
        $this->attributes['PWD'] = $pwd;
    }

    public function getEmailAttribute() {
        return $this->MATRICULE;
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['MATRICULE'] = strtoupper($value);
    }

    /**
     * @return void
     */
    public function accesToken()
    {
        if (empty($this->API_TOKEN)) {
            $this->API_TOKEN = Main::randomKey() . strtotime(+1);
            $this->save();
        }
        return  $this->API_TOKEN;
    }


}
