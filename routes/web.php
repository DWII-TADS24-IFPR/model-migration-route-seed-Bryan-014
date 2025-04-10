<?php

namespace App\Http\Controlers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');
Route::get('/pessoas/create', [PessoaController::class, 'create']);
Route::post('/pessoas/store', [PessoaController::class, 'store'])->name('pessoa.store');



//teste

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});