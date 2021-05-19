<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class movie {

    public $title;
    public $description;

    public function __construct($title, $description = -1) {
        
        $this -> title = $title;

        if ($description == -1)
            $this -> description = "No description available.";
        else 
            $this -> description = $description;
    }

    public function getMovieString() {

        return  "Title: " . $this -> title . " \n" . "Description: " . $this -> description;
    }

}

class moviesController extends Controller
{
    function movies() {

        $movie1 = new movie("Avengers: Endgame", "Tony stark dies.");
        $movie2 = new movie("The Lord of the Rings: The Fellowship of the Ring");

        $movies = [
            $movie1,
            $movie2
        ];

        $moviesString = "";
        foreach($movies as $movie) {

            $moviesString .= $movie -> getMovieString() . " \n";
        }

        dd($moviesString);

        return view('pages.movies');
    }
}
