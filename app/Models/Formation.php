<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //use HasFactory;
    protected $table        =   'formations';
    protected $primaryKey   =   'ID';
    protected $connection   =   'rhformation';
}
