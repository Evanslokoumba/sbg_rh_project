<?php

namespace App\Http\Controllers;

use App\Models\AgentRh;
use App\Models\User;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    //
    public function creationFormulaire(){
        $agents = AgentRh::all();
        $listeDirection = User::all();

        //dd($listeDirection);

        return view('contenus.pages.creation-demande',compact('listeDirection'));
    }

    public function statutValidee(){
        return view('contenus.pages.demande-validee');
    }

    public function statutNonValidee(){
        return view('contenus.pages.demande-non-validee');
    }

    public function historiqueDemande(){
        return view('contenus.pages.historique-demande');
    }
}
