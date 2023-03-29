<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class, 'index'])->name('index');


Route::get('/movie/{id}', [PageController::class, 'movieDetail'])->name('movie-detail');


// Route::get('/product/{index}', function ($index){
//     $comics = config('comicsdb');

    
//     $comic = $comics[$index];
//     // dd($comic['title']);
//     return view('details', compact('comic'));
    

// })->name('details');