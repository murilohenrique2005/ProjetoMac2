<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controller\registrarAtividadeController;
 
Route::get('/', function () {
    return view('paginas/index');
});
 
Route::get('/cadastrarusuario', function(){
    return view('paginas/cadastrarusuario');
});

Route::get('/cadastrarcliente', function(){
    return view('paginas/cadastrarcliente');
});
 
Route::get('/consultarCliente', function(){
    return view('paginas/consultarCliente');
});
 
Route::get('/paginaEditar', function(){
    return view('paginas/paginaEditar');
});
 
Route::get('/cadastrarusuario/salvar',[App\Http\Controllers\registrarClienteController::class, 'store']);
Route::get('/consultarCliente',[App\Http\Controllers\registrarClienteController::class, 'consultarCliente']);
Route::get('/editar/{id}', [App\Http\Controllers\registrarClienteController::class, 'paginaEditar']);
Route::get('/atualizar/{id}', [App\Http\Controllers\registrarClienteController::class, 'atualizar']);
Route::get('/excluir/{id}', [App\Http\Controllers\registrarAtividadeController::class, 'excluir']);