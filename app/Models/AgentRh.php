<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentRh extends Model
{
    //use HasFactory;
    protected $table        =   'ListingAgent';
    protected $primaryKey   =   'Société';
    protected $connection   =   'rh';
}
