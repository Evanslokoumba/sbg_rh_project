<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    //
    public function creationFormulaire(){
        return view('contenus.pages.creation-demande');
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
