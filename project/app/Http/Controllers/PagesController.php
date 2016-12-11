<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function toc(){
        return view('librolibre.welcome')->withMess("This is the terms and conditions page");
    }

    function about(){
        return view('librolibre.page') -> withMessage("About page");
    }
}
