<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moviesController extends Controller
{
    function movies() {

        return view('pages.movies');
    }
}
