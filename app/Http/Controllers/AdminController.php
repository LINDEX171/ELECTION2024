<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Vous pouvez ajouter du code ici pour récupérer des données spécifiques à afficher dans le tableau de bord de l'administrateur
        // Par exemple, vous pouvez charger des statistiques, des informations, etc.
        $candidat = Candidat::all();
       return view("admin-dashboard", compact('candidat'));
       // return view('admin-dashboard');
    }
}
