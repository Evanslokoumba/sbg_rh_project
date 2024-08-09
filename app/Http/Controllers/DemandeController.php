<?php

namespace App\Http\Controllers;

use App\Models\AgentRh;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{
    //
    public function creationFormulaire(){

        //dd(Auth::user());
    if (Auth::check()) 
    {
        $listDirection = AgentRh::where('Departement','=','DFI')->get();
        //dd($listDirection);
        $libelleFormulaire = "Demandez une formation";
        $libelleCard1 = "Agent à former";
        $infosUserNom = Auth::user()->NOM;

    //return view('contenus.pages.accueil');goals-performs.content-layout
    return view('goals-performs.create-form-layout',compact('infosUserNom','libelleFormulaire','libelleCard1','listDirection'));
    }
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
