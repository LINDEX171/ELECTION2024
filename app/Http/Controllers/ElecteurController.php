<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Electeur;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    public function index(){
        //return Apprenant::all();
        $candidats = Candidat::all();
        return view('electeurs.electeur', compact('candidats'));
    }



    public function create()
    {

    }



    public function liste()
    {
        $electeur = Electeur::all();
      return view("electeurs.listeelecteur", compact('electeur'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $electeur = new Electeur(); //le dernier Produit est le modele Produit
        $electeur->Nom = $request->Nom;//pour l'enregister au niveau de la bdd
//$produit->Nom :c'est le champs Nom de la table Produit
//$request->Nom;requete de notre formulaire name=Nom;
        $electeur->Prenom = $request->Prenom;

    // Vérifie si la requête contient un fichier avec le nom 'photo' et si le fichier est valide
    if ($request->hasFile('CNI') && $request->file('CNI')->isValid()) {
        // Récupère le fichier de la requête
                $file = $request->file('CNI');
       // Obtient l'extension du fichier (par exemple, jpg, png)
                $extension = $file->getClientOriginalExtension();
       // Génère un nom de fichier unique basé sur le timestamp actuel et l'extension du fichier
                $filename = time().'.'.$extension;
        // Déplace le fichier téléchargé vers le répertoire spécifié ('uploads/candidats/') avec le nom de fichier généré
                $file->move('uploads/electeurs/', $filename);
        // Définit l'attribut 'photo' de l'objet $candidat avec le nom de fichier généré
                $electeur->CNI = $filename;
       }// Enregistre l'objet $candidat, qui inclut maintenant le nom de fichier de la photo, dans la base de données

        $electeur->Adresse = $request->Adresse;
        $electeur->candidat_id = $request->candidat_id;




        $electeur->save();


    // Incrémentez les votes du candidat choisi
    $candidat = Candidat::find($request->candidat_id);
    $candidat->increment('votes');


    if (auth()->user()->role === 'admin') {
        return redirect()->route('liste1')->with('success', 'Electeur ajouté avec succès');
    }
    return  view('votevalider');
        // Redirige vers la route 'liste' avec un message de succès dans la session
       // return redirect()->route('liste1')->with('success', 'Electeur ajouté avec succès');
        }






    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }




    public function updateelecteur($id)
    {

        $electeur = Electeur::find($id);
        return view("electeurs.update", compact('electeur'));


    }

 /*   public function updatestoreelecteur(Request $request)
    {
        $electeur = new Electeur(); //le dernier Produit est le modele Produit
        $electeur->Nom = $request->Nom;//pour l'enregister au niveau de la bdd
//$produit->Nom :c'est le champs Nom de la table Produit
//$request->Nom;requete de notre formulaire name=Nom;
        $electeur->Prenom = $request->Prenom;

    // Vérifie si la requête contient un fichier avec le nom 'photo' et si le fichier est valide
    if ($request->hasFile('CNI') && $request->file('CNI')->isValid()) {
        // Récupère le fichier de la requête
                $file = $request->file('CNI');
       // Obtient l'extension du fichier (par exemple, jpg, png)
                $extension = $file->getClientOriginalExtension();
       // Génère un nom de fichier unique basé sur le timestamp actuel et l'extension du fichier
                $filename = time().'.'.$extension;
        // Déplace le fichier téléchargé vers le répertoire spécifié ('uploads/candidats/') avec le nom de fichier généré
                $file->move('uploads/electeurs/', $filename);
        // Définit l'attribut 'photo' de l'objet $candidat avec le nom de fichier généré
                $electeur->CNI = $filename;
       }// Enregistre l'objet $candidat, qui inclut maintenant le nom de fichier de la photo, dans la base de données

        $electeur->Adresse = $request->Adresse;
        $electeur->candidat_id = $request->candidat_id;




        $electeur->update();
        // Redirige vers la route 'liste' avec un message de succès dans la session
        return redirect()->route('liste1')->with('success', 'Electeur ajouté avec succès');


    }*/



public function deleteelecteur($id)
{

    $electeur = Electeur::find($id);
    $electeur->delete();
    return redirect('/liste-electeur')->with('success', 'electeur supprimé avec succès');


}
}
