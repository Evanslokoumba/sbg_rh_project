<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chiffrage extends Model
{
    //use HasFactory;
    protected $table        =   'chiffrages';
    protected $primaryKey   =   'ID';
    protected $connection   =   'rhformation';
}
