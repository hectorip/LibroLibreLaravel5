<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthsController extends Controller
{
    function loginn(){
        return view('librolibre.login');
    }
}
