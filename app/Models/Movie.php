<?php

namespace App\Models;

class Movie
{
    private static $movies = [
        [
          'movie_id' => 1,
          'movie_title' => "Labyrinth", 
          'director' => "Jim Henson", 
          'year' => 1986 
        ],
        [ 
          'movie_id' => 2,
          'movie_title' => "Highlander", 
          'director' => "Russell Mulcahy", 
          'year' => 1986 
        ],
        [ 
          'movie_id' => 3,
          'movie_title' => "Alien", 
          'director' => "Ridley Scott", 
          'year' => 1979
        ]
    ];

    public static function all () {
        return self::$movies;
    }

    public static function find ($id) {
        return array_values(array_filter(self::$movies, 
            fn($movie) => $movie['movie_id'] == $id))[0];
    }
}
