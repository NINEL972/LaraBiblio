<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    PUBLIC function index()
    {
        return view('welcome');
    }
    //
}
