<?php

use App\Http\Controllers\Pessoa\PessoaController;
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


Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas');
Route::get('/pessoas/create', [PessoaController::class, 'create'])->name('pessoas_create');
Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas_save');
Route::get('/pessoas/{id}/edit', [PessoaController::class, 'edit'])->name('pessoas_edit');
Route::post('/pessoas/{id}/update', [PessoaController::class, 'update'])->name('pessoas_update');
Route::delete('/pessoas/{id}/delete', [PessoaController::class, 'destroy'])->name('pessoas_delete');
// Route::get('pessoas/create', [PessoaController::class, 'create']);
