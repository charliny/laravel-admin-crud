<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Individuo;
use App\Venda;

class AppController extends Controller
{
    function telaVenda(){
    	$listaDeClientes = Individuo::all();

    	return view("tela_venda", ["lista" => $listaDeClientes]);
    }

    function realizarVenda(Request $req){
    	$venda = new Venda();
    	$nome = $req->input('cliente');
    	$cliente = Individuo::where('nome', $nome)->first();

    	$venda->id_cliente = $cliente->id;
    	$venda->descricao = $req->input('descricao');
    	$venda->valor = $req->input('valor');

    	if($venda->save()){
    		$msg = "Venda registrada com sucesso.";
    	}else{
			$msg = "Venda não registrada.";
    	}
    	
    	return view("resultado", ["mensagem" => $msg]);
    }

    function historico(){
        $listaDeClientes = Individuo::all();
        $listaDeVendas = Venda::all();

        return view("historico", ["listaDeVendas" => $listaDeVendas]);
    }
}
