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
    $nome = "Matheus";
    $idade = 29;

    $arr = [10,20,30,40,50];
    $nomes = ['joao', 'maria', 'jose'];
    return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});
