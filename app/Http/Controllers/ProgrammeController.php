<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index(){
        return view('programmes.programme');
    }


    public function liste()
    {
        $programme = Programme::all();
      return view("programmes.listeprogramme", compact('programme'));
    }




    public function store(Request $request)
    {
        $programme = new Programme(); //le dernier Produit est le modele Produit
        $programme->titre = $request->titre;//pour l'enregister au niveau de la bdd
        $programme->document = $request->document;
        $programme->contenue = $request->contenue;


// Enregistre l'objet $candidat, qui inclut maintenant le nom de fichier de la photo, dans la base de données
        $programme->save();
// Redirige vers la route 'liste' avec un message de succès dans la session
return redirect()->route('liste2')->with('success', 'Programme ajouté avec succès');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
