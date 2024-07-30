<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeFormateur extends Model
{
    //use HasFactory;
    protected $table        =   'type_formateurs';
    protected $primaryKey   =   'ID';
    protected $connection   =   'rhformation';
}
