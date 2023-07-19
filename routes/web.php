<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\UsuarioController;

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


Route::get('login', [UsuarioController::class, 'formulario_login'])->name('login');

Route::get('usuarios/cadastramento', [usuarioController::class, 'formulario_cadastro']);

Route::post('usuarios/cadastramento', [usuarioController::class, 'cadastrar']);
Route::post('login', [usuarioController::class, 'logar']);
Route::get('logout', [usuarioController::class, 'sair'])->middleware('auth');

Route::get('leads/cadastramento', [LeadController::class, 'formulario_cadastro'])->middleware('auth');
Route::post('leads/cadastramento', [LeadController::class,'cadastrar'])->middleware('auth');
Route::get('leads', [LeadController::class, 'listar'])->name('index')->middleware('auth');
