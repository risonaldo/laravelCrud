<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('home');
    }
    public function sobre(){
        $soma = 10 + 9;
        echo "Conteudo dinamico Sobre $soma";
    }
    public function contatos(){
        echo "Conteudo dinamico Contato";
    }
    public function servicos(){
        echo "Conteudo donamico Serviços";
    }
    public function servico(int $id){
        $servicos = [
            1 => [
                'nome' => 'Lavagem de Roupa',
                'descricao' => 'descricao muito longa'
            ],
            2 => [
                'nome' => 'Lavagem de Coberta',
                'descricao' => 'descricao muito longa'
            ],
            3 => [
                'nome' => 'Lavagem de Urso',
                'descricao' => 'descricao muito longa'
            ],
        ];

        return view('servico')->with('servico', $servicos[$id]);
    }
}
