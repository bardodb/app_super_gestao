<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
//mesma coisa do de cima, porém com a rota de sobre-nos


Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');


Route::get('/login', function () { return 'Login'; })->name('site.login');


//relação de dependência entre rotas. agrupamento de rotas pelo prefixo /app
Route::prefix('/app')->group(function () {

        Route::get('/clientes', function () { return 'Clientes';})->name('app.clientes');

        Route::get('/fornecedores', function () { return 'Fornecedores';})->name('app.fornecedores');

        Route::get('/produtos', function () { return 'Produtos';})->name('app.produtos');

    });

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial';
});



