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
            'cnpj' => '00.000.000/0001-00'
            ],
            1 => [
            'nome' => 'Fornecedor 2',
            'status' => 'S'
            ]


        ];



        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
