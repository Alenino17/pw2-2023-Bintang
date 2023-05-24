<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        'no' => 1,
        'judul' => 'The shawshank Redemption',
        'poster' => 'image.png',
        'genre' => 'Drama',
        'negara' => 'USA',
        'tahun' => 1994,
        'rating' => 9.8,

    ],
    [
        'no' => 2,
        'judul' => 'Big 4',
        'poster' => 'image.png',
        'genre' => 'Action',
        'negara' => 'Indonesia',
        'tahun' => 2022,
        'rating' => 100,

    ],
    [
        'no' => 3,
        'judul' => 'Dilan 1990',
        'poster' => 'image.png',
        'genre' => 'Romance',
        'negara' => 'Indonesia',
        'tahun' => 2020,
        'rating' => 9.8,

    ],
    [
        'no' => 4,
        'judul' => 'Dilan 1991',
        'poster' => 'image.png',
        'genre' => 'Romance',
        'negara' => 'Indonesia',
        'tahun' => 2021,
        'rating' => 9.8,
    ],
    [
        'no' => 5,
        'judul' => 'Itaewon Class',
        'poster' => 'image.png',
        'genre' => 'Drama',
        'negara' => 'Korea',
        'tahun' => 2020,
        'rating' => 9.9,
    ],

    public function getAllMovies()
    {
        return $this->movies;
    }

}
