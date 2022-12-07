<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
   
    public function __invoke(string $nome = 'TreinaWeb')
    {
        return view('saudacao')->with('nome', $nome);
    }
}
