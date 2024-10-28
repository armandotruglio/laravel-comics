<?php

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
    return view('pages.home');
});

Route::get('/comics', function() {
    //< recuperare i miei dati
    $comics = config("comics");
    // dd($comics);

    return view('comics.index', compact("comics"));
})->name("comics.index");

Route::get('/comics/{index}', function (string $index) {
    $comics = config("comics");

    if(isset($comics[$index])) {
        $comic = $comics[$index];

        return view("comics.show", compact("comic"));
    } else {
        abort(404);
    }

})->name("comics.show");