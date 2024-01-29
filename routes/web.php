<?php

use App\Http\Controllers\ComicController;
use App\Models\Comic;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    /*     $dati = config("data");
    return view('home', $dati); */
    $comic_books = Comic::all();
    return view('comics.index', compact("comic_books"));
})->name("home");



Route::resource('comic', ComicController::class);
