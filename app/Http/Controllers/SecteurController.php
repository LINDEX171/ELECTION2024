<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecteurController extends Controller
{
    //
    public function index(){
        //return Apprenant::all();
        return view('secteurs.secteur');
    }
    public function create(){
        //return Apprenant::all();
        //return view('secteurs.secteur');
    }
}
