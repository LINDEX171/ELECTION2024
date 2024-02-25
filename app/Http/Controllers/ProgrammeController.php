<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
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

    // Vérifie si la requête contient un fichier avec le nom 'photo' et si le fichier est valide
    if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
        // Récupère le fichier de la requête
                $file = $request->file('photo');
       // Obtient l'extension du fichier (par exemple, jpg, png)
                $extension = $file->getClientOriginalExtension();
       // Génère un nom de fichier unique basé sur le timestamp actuel et l'extension du fichier
                $filename = time().'.'.$extension;
        // Déplace le fichier téléchargé vers le répertoire spécifié ('uploads/candidats/') avec le nom de fichier généré
                $file->move('uploads/programmes/', $filename);
        // Définit l'attribut 'photo' de l'objet $candidat avec le nom de fichier généré
                $programme->photo = $filename;



        $file = $request->pdf;
        // Obtient l'extension du fichier (par exemple, jpg, png)
                 $extension = $file->getClientOriginalExtension();
        // Génère un nom de fichier unique basé sur le timestamp actuel et l'extension du fichier
                 $filename = time().'.'.$extension;
         // Déplace le fichier téléchargé vers le répertoire spécifié ('uploads/candidats/') avec le nom de fichier généré
                  $file->move('uploads/programmes/', $filename);
         // Définit l'attribut 'photo' de l'objet $candidat avec le nom de fichier généré
                 $programme->pdf = $filename;


    }
// Enregistre l'objet $candidat, qui inclut maintenant le nom de fichier de la photo, dans la base de données
        $programme->save();
// Redirige vers la route 'liste' avec un message de succès dans la session
return redirect()->route('liste3')->with('success', 'Programme ajouté avec succès');
}



    /**
     * Update the specified resource in storage.
     */
    public function telecharger(Request $request,$file)
    {
        $filePath = public_path('uploads/programmes/' . $file);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return response()->json(['error' => 'Le fichier n\'existe pas.']);
        }
    }




    public function updateprogramme($id)
    {
        $programme = Programme::find($id);
        return view("programmes.update", compact('programme'));
    }

    public function updatestoreprogramme(Request $request)
    {
        $programme =Programme::find($request->id); //le dernier Produit est le modele Produit
         // Vérifie si la requête contient un fichier avec le nom 'photo' et si le fichier est valide
    if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
        // Récupère le fichier de la requête
                $file = $request->file('photo');
       // Obtient l'extension du fichier (par exemple, jpg, png)
                $extension = $file->getClientOriginalExtension();
       // Génère un nom de fichier unique basé sur le timestamp actuel et l'extension du fichier
                $filename = time().'.'.$extension;
        // Déplace le fichier téléchargé vers le répertoire spécifié ('uploads/candidats/') avec le nom de fichier généré
                $file->move('uploads/programmes/', $filename);
        // Définit l'attribut 'photo' de l'objet $candidat avec le nom de fichier généré
                $programme->photo = $filename;



        $file = $request->pdf;
        // Obtient l'extension du fichier (par exemple, jpg, png)
                 $extension = $file->getClientOriginalExtension();
        // Génère un nom de fichier unique basé sur le timestamp actuel et l'extension du fichier
                 $filename = time().'.'.$extension;
         // Déplace le fichier téléchargé vers le répertoire spécifié ('uploads/candidats/') avec le nom de fichier généré
                  $file->move('uploads/programmes/', $filename);
         // Définit l'attribut 'photo' de l'objet $candidat avec le nom de fichier généré
                 $programme->pdf = $filename;


    }// Enregistre l'objet $candidat, qui inclut maintenant le nom de fichier de la photo, dans la base de données
         $programme->update();

         return redirect('/liste-programme')->with('success', 'programme modifier avec succès');



    }




    /**
     * Remove the specified resource from storage.
     */
    public function deleteprogramme(string $id)
    {
        $programme = Programme::find($id);
        $programme->delete();
        return redirect('/liste-programme')->with('success', 'programme supprimé avec succès');
    }
}
