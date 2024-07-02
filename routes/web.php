<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);
//antes era pra ser apenas Route::get('/', 'PrincipalController@principal');
//porém a ação se fez necessário devivo a mudança de versão do laravel 8


//C:\Users\braian.sins\app_super_gestao\app\Http\Controllers\PrincipalController.php
//Route::get('/', function () {
//    return 'Olá, seja bem vindo ao curso!';
//});

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);
//mesma coisa do de cima, porém com a rota de sobre-nos


Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
