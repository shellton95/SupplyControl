<?php

use App\Http\Controllers\AbastecimentoControler;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\VeiculoControler;
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

Route::get('/usuarios', [UserControler::class, 'index'])->name('users.index');
Route::post('/usuarios', [UserControler::class, 'store'])->name('users.store');
Route::get('/usuarios/cadastro', [UserControler::class, 'create']);
Route::get('usuarios/{id}', [UserControler::class, 'destroy'])->name('users.destroy');
Route::post('usuarios/edit/{id}', [UserControler::class, 'update'])->name('users.update');

Route::get('/carros', [VeiculoControler::class, 'index']);
Route::post('/carros', [VeiculoControler::class, 'store'])->name('veiculo.store');
Route::get('/carros/cadastro', [VeiculoControler::class, 'create']);
Route::post('/carros/edit/{id}', [VeiculoControler::class, 'update']); 
Route::get('/carros/{id}', [VeiculoControler::class, 'destroy']);

Route::get('/relatorio', [AbastecimentoControler::class, 'index']);
Route::post('/relatorio', [AbastecimentoControler::class, 'store'])->name('abast.store');
Route::get('/relatorio/cadastro', [AbastecimentoControler::class, 'create']);
Route::get('/relatorio/{id}', [AbastecimentoControler::class, 'destroy']);