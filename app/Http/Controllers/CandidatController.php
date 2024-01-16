<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("candidats.candidat");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }



    public function liste()
    {
        $candidat = Candidat::all();
      return view("candidats.listecandidat", compact('candidat'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $candidat = new Candidat(); //le dernier Produit est le modele Produit
        $candidat->id = $request->id;
        $candidat->Nom = $request->Nom;//pour l'enregister au niveau de la bdd
//$produit->Nom :c'est le champs Nom de la table Produit
//$request->Nom;requete de notre formulaire name=Nom;
        $candidat->Prenom = $request->Prenom;
        $candidat->Partie = $request->Partie;
        $candidat->Biographie = $request->Biographie;
        $candidat->validité = $request->validité;


    // Vérifie si la requête contient un fichier avec le nom 'photo' et si le fichier est valide
         if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
 // Récupère le fichier de la requête
         $file = $request->file('photo');
// Obtient l'extension du fichier (par exemple, jpg, png)
         $extension = $file->getClientOriginalExtension();
// Génère un nom de fichier unique basé sur le timestamp actuel et l'extension du fichier
         $filename = time().'.'.$extension;
 // Déplace le fichier téléchargé vers le répertoire spécifié ('uploads/candidats/') avec le nom de fichier généré
         $file->move('uploads/candidats/', $filename);
 // Définit l'attribut 'photo' de l'objet $candidat avec le nom de fichier généré
         $candidat->photo = $filename;
}// Enregistre l'objet $candidat, qui inclut maintenant le nom de fichier de la photo, dans la base de données
         $candidat->save();
// Redirige vers la route 'liste' avec un message de succès dans la session



return redirect()->route('liste')->with('success', 'Candidat ajouté avec succès');
}






/**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function updatecandidat($id)
    {
        $candidat = Candidat::find($id);
        return view("candidats.update", compact('candidat'));
    }


    public function updatestorecandidat(Request $request)
    {
        $candidat =Candidat::find($request->id); //le dernier Produit est le modele Produit
        $candidat->Nom = $request->Nom;//pour l'enregister au niveau de la bdd
//$produit->Nom :c'est le champs Nom de la table Produit
//$request->Nom;requete de notre formulaire name=Nom;
        $candidat->Prenom = $request->Prenom;
        $candidat->Partie = $request->Partie;
        $candidat->Biographie = $request->Biographie;
        $candidat->validité = $request->validité;


    // Vérifie si la requête contient un fichier avec le nom 'photo' et si le fichier est valide
         if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
 // Récupère le fichier de la requête
         $file = $request->file('photo');
// Obtient l'extension du fichier (par exemple, jpg, png)
         $extension = $file->getClientOriginalExtension();
// Génère un nom de fichier unique basé sur le timestamp actuel et l'extension du fichier
         $filename = time().'.'.$extension;
 // Déplace le fichier téléchargé vers le répertoire spécifié ('uploads/candidats/') avec le nom de fichier généré
         $file->move('uploads/candidats/', $filename);
 // Définit l'attribut 'photo' de l'objet $candidat avec le nom de fichier généré
         $candidat->photo = $filename;
}// Enregistre l'objet $candidat, qui inclut maintenant le nom de fichier de la photo, dans la base de données
         $candidat->update();

         return redirect('/liste-candidat')->with('success', 'Candidat modifié avec succès');






    }

    public function deletecandidat($id)
    {

        $candidat = Candidat::find($id);
        $candidat->delete();
        return redirect('/liste-candidat')->with('success', 'Candidat supprimé avec succès');


    }

    /**
     * Remove the specified resource from storage.
     */
   // Dans le contrôleur de candidats (CandidatController)
public function pourcentages()
{
    $candidats = Candidat::all();
    $totalVotes = Candidat::sum('votes');

    foreach ($candidats as $candidat) {
        $candidat->pourcentageVotes = ($totalVotes > 0) ? ($candidat->votes / $totalVotes) * 100 : 0;
    }

    return view('candidats.pourcentages', compact('candidats', 'totalVotes'));
}

}






