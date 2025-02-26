<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelEmail; 

class registroEmailsController extends Controller 
{
    public function index(){
        $dados = modelEmail::all(); // Todos os dados da tabela do BD
        return view('paginas.index')->with('dados', $dados);
    }

    public function store(Request $request) { 
        $nome = $request->input('nomeContato');
        $email = $request->input('email');
        $mensagem  = $request->input('mensagemContato');
        
        $model = new modelEmail(); 
        $model->nomeContato = $nome;
        $model->emailContato = $email;
        $model->mensagemContato = $mensagem;
        // $model->save(); 
        return redirect('/');
    }
}
