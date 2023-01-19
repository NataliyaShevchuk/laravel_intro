<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'stringa pura - prova 1';
});

Route::get("/contact-me", function (){
    return view('contacts');
});


Route::get("/aboutme", function () {
    $user = [
        'name' => 'Mario',
        'surname' => 'Rossi',
    ];

    $lista = ['pane', 'pasta', 'riso', "formaggio"];

   /*  $dati = [
        "pippo" => "Ciao pippo",
        "user" => $user,
        "lista" => $lista,
        "numRand" => rand(10, 100)
    ]; */

    // view() si occupa di leggere il contenuto html del file che indichiamo come argomento,
    // e di ritornarlo come stringa
    // view() cercherà il file nella cartella /resources/views
    // Il secondo argomento della funzione view() può essere un array associativo. Ogni chiave
    // di questo array verrà convertita in una variabile leggibile all'interno della view indicata.
    return view("contacts", [
        "pippo" => "Ciao pippo",
        "user" => $user,
        "lista" => $lista,
        "numRand" => rand(10, 100)
    ]);
})->name("contacts");
