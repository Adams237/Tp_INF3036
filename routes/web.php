<?php

use App\Http\Livewire\Afficher;
use App\Http\Livewire\AfficherEmploiDeTemps;
use App\Http\Livewire\ChoixModif;
use App\Http\Livewire\Form;
use App\Http\Livewire\Test;
use App\Http\Livewire\Dashbord;
use App\Http\Livewire\TableBasic;
use App\Http\Livewire\FormFiliere;
use App\Http\Livewire\EmploiDeTemps;
use App\Http\Livewire\EmploiDeTemps2;
use App\Http\Livewire\Enseignant;
use App\Http\Livewire\Modification;
use App\Http\Livewire\PlanifierCours;
use App\Http\Livewire\Salle;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/;', function () {
    return view('welcome');
});
Route::get('/form', Form::class);
Route::get('/!', Dashbord::class);
Route::get('table-basic', TableBasic::class);
Route::get('/emploiDeTemps', EmploiDeTemps::class);
Route::post('/emploiDeTemps2', EmploiDeTemps::class)->name('emploiDeTemps');
Route::get('/planifier', PlanifierCours::class);
Route::post('/planifier2', PlanifierCours::class)->name('planifier');
Route::get('/afficherEmploi', AfficherEmploiDeTemps::class);
Route::post('/affichage', AfficherEmploiDeTemps::class)->name('afficher');
Route::get('/afficher', Afficher::class);
Route::post('/afficher', Afficher::class)->name('afficheur');
Route::get('/test', Test::class);
Route::get('/formFiliere', FormFiliere::class);
Route::post('/formFiliere', FormFiliere::class)->name('formFiliere');
Route::get('/enseignant', Enseignant::class);
Route::post('/enseignant', Enseignant::class)->name('enseignant');
Route::get('/salle', Salle::class);
Route::post('/salle', Salle::class)->name('salle');
Route::get('/choixModif', ChoixModif::class);
Route::post('/choixModif', ChoixModif::class)->name('choix');
Route::get('/modification', Modification::class);
Route::post('/modification', Modification::class)->name('modification');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', Dashbord::class)->name('dashboard');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


