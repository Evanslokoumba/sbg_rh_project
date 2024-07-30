<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCompetence extends Model
{
    //use HasFactory;
    protected $table        =   'type_competences';
    protected $primaryKey   =   'ID';
    protected $connection   =   'rhformation';
}
