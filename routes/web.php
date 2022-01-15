<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;

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
/*
****MODELO*****
Sistema -> Route Requests HTTP ( get, post, delete, put )-> CONTROLLER -> MODELS -> CONSULTAS MYSQL -> CONTROLLER -> VIEW
*/

/*Home*/
Route::get('/home', function(){
        return view('principal');
})->name('home');
/*Funcionários*/
Route::get('/funcionarios/lista', [FornecedorController::class, 'index'])
        ->name('fornecedores.lista');
