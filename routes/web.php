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

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos',[\App\Http\Controllers\SobreNos::class,'sobrenos'])->name('site.sobrenos');
Route::get('/contato',[\App\Http\Controllers\Contato::class,'contato'])->name('site.contato');

Route::prefix('/app')->group(function(){
    Route::get('/login',[\App\Http\Controllers\Login::class,'login'])->name('app.login');
    Route::get('/clientes',[\App\Http\Controllers\Clientes::class,'Clientes'])->name('app.clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedorController::class,'Index'])->name('app.fornecedores');
    Route::get('/produtos',[\App\Http\Controllers\Produtos::class,'produtos'])->name('app.produtos');
});


Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ser redirecionado a página principal.';
});