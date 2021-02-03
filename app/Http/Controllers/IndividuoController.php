<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Individuo;

class IndividuoController extends Controller
{

	function telaCadastro(){
	    return view("tela_cadastro");
	}

    function telaAlteracao($id){
        $individuo = Individuo::find($id);
        return view("tela_alterar", [ "i" => $individuo]);
    }


    function adicionar(Request $req){
    	$nome = $req->input('nome');
    	$endereco = $req->input('endereco');
    	$cep = $req->input('cep');
    	$cidade = $req->input('cidade');
    	$estado = $req->input('estado');

    	$i = new Individuo();

    	$i->nome = $nome;
    	$i->endereco = $endereco;
    	$i->cep = $cep;
    	$i->cidade = $cidade; 
    	$i->estado = $estado;

    	if($i->save()){
    		$msg = "Cliente $nome salvo com Sucesso";
    	}else{
    		$msg = "Cliente $nome não foi cadastrado";
    	}

    	return view("resultado", ["mensagem" => $msg]);
    }

    function alterar(Request $req, $id){
        $i = Individuo::find($id);

        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $i->nome = $nome;
        $i->endereco = $endereco;
        $i->cep = $cep;
        $i->cidade = $cidade; 
        $i->estado = $estado;

        if($i->save()){
            $msg = "Cliente $nome salvo com Sucesso";
        }else{
            $msg = "Cliente $nome não foi cadastrado";
        }

        return view("resultado", ["mensagem" => $msg]);
    }

    function listar(){
    	$listaDeUsuarios = Individuo::all();

    	return view("lista", ["listona" => $listaDeUsuarios]);
    }

    function excluir($id){
        $individuo = Individuo::find($id);

        if($individuo->delete()){
            $msg = "Usuário excluído com sucesso.";
        }else{
            $msg = "Usuário não foi excluído.";
        }
        return view("resultado", [ "mensagem" => $msg]);
    }

}
