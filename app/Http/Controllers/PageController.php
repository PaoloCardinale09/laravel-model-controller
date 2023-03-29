<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function homepage(){
        return view('welcome');
       
    }
    
    public function movieList(){
        $movie = Movie::all();
        dd($movie);
    
        return view('movieList');
    }
}