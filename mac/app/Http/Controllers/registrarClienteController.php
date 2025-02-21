<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\modelAgenda;
 
class registrarClienteController extends Controller
{
    public function index(){
        $dados =modelAgenda::all();//Todos os dados da tabela do BD
        return view('paginas.cadastrarusuario')->With('dados',$dados);
 
    }//Fim do método - retornar dados
 
    public function store(request $request){
        $nome = $request->input('nomeC');
        $data= $request->input('dataN');
        $cpf = $request->input('cpf');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');
        $briefing = $request->input('briefing');
        $dataE = $request->input('dataEmissao');
        $dateEntrega = $request->input('dateEntrega');

        $model = new modelAgenda();
        $model->nomeC = $nome;
        $model->dataN = $data;
        $model->cpf = $cpf;
        $model->telefone = $telefone;
        $model->endereco = $endereco;
        $model->briefing = $briefing;
        $model->dataEmissao = $dataE;
        $model->dateEntrega = $dateEntrega;
 
        $model->save();//Armazeranar no banco de dados
        return redirect('/cadastrar');
 
       
 
    }//Fim do método de cadastro
 
    public function consultarCliente(){
        $cpfs = modelAgenda::all();
        return view('paginas.consultarCliente', compact('cpfs'));
    }//Fim do método
 
    public function editar($cpf){
        $dado = modelAgenda::findOrFail($cpf);
        return view('paginas.editar', compact('dado'));
 
 
    }//Fim do método
 
    public function atualizar(Request $request, $cpf){
        modelAgenda::where('cpf',$cpf)->update($request->all());
        return redirect('/consultarCliente');
    }//fim do método
 
    public function excluir(Request $request, $id){
        modelAgenda::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }//fim do método
}//Todas as operações do banco de dados