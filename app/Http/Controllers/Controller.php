<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class WelcomeController extends Controller
{
public function index()
{
return view('welcome');
}
}
//le premier paramètre correspond à l'URL
//le second paramètre spécifie le contrôleur et la méthode à appeler.
//name permet de donner un alias à la route (utile pour les liens vers la page)
Route::get('/','WelcomeController@index')->name('accueil');
