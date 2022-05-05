<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{
    public function teste(int $n1, int $n2){
        //return view('site.teste', ['var1'=>$n1, 'var2'=>$n2]); //Passando um array assossiativo. 'nome_index'=>$var . Tu passa o index e a variavel do array
        //return view('site.teste', compact('var1','var2')); -> Cria um array assossiativo como no caso acima
        return view('site.teste')->with('var1',$n1)->with('var2',$n2);
    }
}
