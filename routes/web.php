<?php

use App\Http\Controllers\cadastro;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LancamentosController;
use App\Models\Cadastro as ModelsCadastro;
use App\Models\Lancamento;
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

Route::prefix('lancamento')->group(function(){
    Route::get('/', [LancamentosController::class, 'index'])->name('lancamento-index');
    Route::get('/create', [LancamentosController::class, 'create'])->name('lancamento-create');
    Route::post('/', [LancamentosController::class, 'store'])->name('lancamento-store');
});

Route::prefix('cadastro')->group(function(){
    Route::get('/', [CadastroController::class, 'index'])->name('cadastro-index');
    Route::get('/create', [CadastroController::class, 'create'])->name('cadastro-create');
    Route::post('/', [CadastroController::class, 'store'])->name('cadastro-store');
});

Route::fallback(function(){
    return "Erro!";
});
