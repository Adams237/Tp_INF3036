<?php

use App\Http\Livewire\Dashbord;
use App\Http\Livewire\EmploiDeTemps;
use App\Http\Livewire\Form;
use App\Http\Livewire\TableBasic;
use Illuminate\Support\Facades\Route;

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
Route::get('/', Dashbord::class);
Route::get('table-basic', TableBasic::class);
Route::get('table-avanced', EmploiDeTemps::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
