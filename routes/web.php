<?php

use App\Models\Candidat;
use App\Models\Electeur;
use App\Models\Programme;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\Auth\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|*/





Route::group(['middleware' => 'auth'], function () {
    // Définissez ici toutes vos routes nécessitant une authentification
    // Par exemple, vous pouvez ajouter vos routes existantes ici
    Route::get('/accueil', function () {
        return view('welcome');
    });

    Route::get('/votevalider', function () {
        return view('votevalider');
    });


    Route::get('/parrainage', function () {
        return view('parrainage');
    });

   // candidat disponible pour les electeurs
Route::get('/candidats-disponible', function () {
    $candidat = Candidat::all();

    return view('candidats-disponible', compact('candidat'));
});


    Route::get('/candidat',[CandidatController::class,'index']);
    Route::get('/electeur',[ElecteurController::class,'index']);


   // web.php

Route::get('/admin-dashboard',[AdminController::class,'index'])->name('admin.dashboard')->middleware('auth', 'admin');


        Route::post('/storecandidats',[CandidatController::class,'store'])->name('enregistrerCandidat');
        Route::get('/liste-candidat',[CandidatController::class,'liste'])->name('liste');
        Route::get('/update-candidat/{id}',[CandidatController::class,'updatecandidat']);
        Route::post('/updatestorecandidat',[CandidatController::class,'updatestorecandidat']);
        Route::get('/delete-candidat/{id}',[CandidatController::class,'deletecandidat']);


        Route::post('/storeelecteurs',[ElecteurController::class,'store'])->name('enregistrerElecteur');
        Route::get('/liste-electeur',[ElecteurController::class,'liste'])->name('liste1');
        Route::get('/update-electeur/{id}',[ElecteurController::class,'updateelecteur']);
        Route::post('/updatestore',[ElecteurController::class,'updatestoreelecteur']);
        Route::get('/delete-electeur/{id}',[ElecteurController::class,'deleteelecteur']);


   // Route::group(['middleware' => ['role:admin']], function () {
        // Routes accessibles uniquement aux utilisateurs avec le rôle d'admin


   // });





    // Ajoutez d'autres routes si nécessaire
});





Route::get('/', [LoginController::class, 'showLoginForm']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/pourcentages', [CandidatController::class, 'pourcentages'])->name('pourcentages');






Route::get('/programme',[ProgrammeController::class,'index']);
Route::post('/storeprogrammes',[ProgrammeController::class,'store'])->name('enregistrerProgramme');
Route::get('/liste-programme',[ProgrammeController::class,'liste'])->name('liste2');


Route::get('/secteur',[SecteurController::class,'index']);
Route::post('/storesecteurs',[SecteurController::class,'store'])->name('enregistrerSecteur');
Route::get('/liste-secteur',[SecteurController::class,'liste'])->name('liste3');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
