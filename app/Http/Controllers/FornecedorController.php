<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
            'nome' => 'Fornecedor',
            'status' => 'N',
            'cnpj' => '',
            'ddd' => '51',
            'telefone' => '9601-1845',
            ],
            1 => [
            'nome' => 'Fornecedor 2',
            'status' => 'S',
            'cnpj' =>null,
            'ddd' => '32',
            'telefone' => '9591-9737',

            ],
            2 => [
            'nome' => 'Fornecedor 3',
            'status' => 'S',
            'cnpj' => '00000000000000',
            'ddd' => '11',
            'telefone' => '9665-0465',
            ],

        ];



        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
