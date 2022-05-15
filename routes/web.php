<?php

use App\Http\Livewire\Form;
use App\Http\Livewire\Test;
use App\Http\Livewire\Dashbord;
use App\Http\Livewire\TableBasic;
use App\Http\Livewire\FormFiliere;
use App\Http\Livewire\EmploiDeTemps;
use App\Http\Livewire\EmploiDeTemps2;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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
Route::get('/test', Test::class);
Route::get('/formFiliere', FormFiliere::class);
Route::post('/formFiliere', FormFiliere::class)->name('formFiliere');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', Dashbord::class)->name('dashboard');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


