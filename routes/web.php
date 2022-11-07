<?php

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

Route::get('/', function () {
    return view('welcome');
});

//le premier paramètre correspond à l'URL
//le second paramètre spécifie le contrôleur et la méthode à appeler.
//name permet de donner un alias à la route (utile pour les liens vers la page)
Route::get('/http://localhost/dossier/LaraBiblio/public','WelcomeController@index')->name('accueil');