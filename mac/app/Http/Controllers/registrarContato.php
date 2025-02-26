<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelContato; 

class registrarContato extends Controller 
{
    public function index(){
        $dados = modelContato::all(); // Todos os dados da tabela do BD
        return view('paginas.index')->with('dados', $dados);
    }

    public function store(Request $request) { 
        $nome = $request->input('nomeContatos');
        $email = $request->input('emailContatos');
        $mensagem  = $request->input('mensagemContatos');
        
        $model = new modelContato(); 
        $model->nomeContatos = $nome;
        $model->emailContatos = $email;
        $model->mensagemContatos = $mensagem;
        $model->save(); 
        return redirect('/');
    }
}
