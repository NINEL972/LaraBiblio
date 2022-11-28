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

/*Route::get('/', function () {
    return view('welcome');
});
ancienne route*/

//le premier paramètre correspond à l'URL
//le second paramètre spécifie le contrôleur et la méthode à appeler.
//name permet de donner un alias à la route (utile pour les liens vers la page)
//Route::get('/','WelcomeController@index')->name('accueil');

//le premier paramètre correspond à l'URL
//le second paramètre spécifie le contrôleur et la méthode à appeler.
//name permet de donner un alias à la route (utile pour les liens vers la page)
Route::get('/','WelcomeController@index')->name('accueil'); 
Route::get('/ouvrages','WelcomeController@ouvrages')->name('ouvrages');
Route::get('/inscrits','WelcomeController@inscrits')->name('inscrits');
Route::get('/prets','WelcomeController@prets')->name('prets');  
Route::get('/evenements','WelcomeController@evenements')->name('evenements');
//Route::get('/historique','WelcomeController@historique')->name('historique');
//Route::get('/commandes','WelcomeController@commandes')->name('commandes');

