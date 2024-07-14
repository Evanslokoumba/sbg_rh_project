<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class User2 extends Model
{
    //
    protected   $connection     =   'rh';
    protected   $table          =   'VwListingagent2';

    /**
     *
     */
    public  function user() : User {
        return  $this->hasOne(User::class,'MATRICULE','Idenifiant');
    }
}
