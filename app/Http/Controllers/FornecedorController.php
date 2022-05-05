<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function fornecedorPrincipal(){
        $fornecedores = [
            ['nome'=>'Gustavo', 'status' => 'N', 'cnpj' => '000.000.00/000'],
            ['nome'=>'João', 'status' => 'S', 'cpf' => '000.000.000.00']
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
