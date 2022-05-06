<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){

        if(isset($_GET)){
            $response = $_GET;
            $response2 = ['tipo'=> gettype($response), 'response' => $response];
            return view('site.contato' ,compact('response2')); 
        }

        return view('site.contato');
    }
}
