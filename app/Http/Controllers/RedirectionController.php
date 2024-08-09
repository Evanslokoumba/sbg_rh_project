<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Auth::user());
        if (Auth::check()) {
            $infosUser = Auth::user();
            # code...

             //return view('contenus.pages.accueil');goals-performs.content-layout
        return view('goals-performs.content-layout',compact('infosUser'));
        }
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contenus.pages.connexion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        //
    }
}
