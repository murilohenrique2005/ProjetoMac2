<x-layout titulo="Editar">
    <div class="container mt-4">
        <!-- Logo no topo -->
        <div class="text-center mb-4">
            <img src="caminho/para/sua/logo.png" alt="Logo" class="img-fluid" style="max-width: 150px;">
        </div>
 
        <h2 class="text-center mb-4">Editar Informações</h2>
        <form action="../atualizar/{{$dado->id}}" method="GET">
            <label for="number" class="form-label">CPF</label>
            <input type="number" id="number" name="cpf" value="{{$dado->id}}" class="form-control" disabled required />
            <br><br>
 
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="dataEvento" name="nomeC" value="{{$dado->nomeC}}" class="form-control" required />
            <br><br>
 
            <label for="descricao" class="form-label">Data</label>
            <input type="date" id="descricao" name="dataN" value="{{$dado->dataN}}" class="form-control" required />
            <br><br>

            <label for="dataEvento" class="form-label">Telefone</label>
            <input type="text" id="dataEvento" name="telefone" value="{{$dado->telefone}}" class="form-control" required />
            <br><br>
 
            <label for="descricao" class="form-label">Endereço</label>
            <input type="text" id="descricao" name="endereco" value="{{$dado->endereco}}" class="form-control" required />
            <br><br>

            <label for="dataEvento" class="form-label">Tema do Projeto</label>
            <input type="text" id="dataEvento" name="briefing" value="{{$dado->briefing}}" class="form-control" required />
            <br><br>
 
            <label for="descricao" class="form-label">Data de Emissao</label>
            <input type="date" id="descricao" name="dataEmissao" value="{{$dado->dataEmissao}}" class="form-control" required />
            <br><br>

            <label for="descricao" class="form-label">Data de Entrega</label>
            <input type="date" id="descricao" name="dateEntrega" value="{{$dado->dateEntrega}}" class="form-control" required />
            <br><br>
           
            <button type="submit" class="btn btn-success">Atualizar</button>
            <br><br>
        </form>

 
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Excluir
        </button>
 
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir cliente?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <a type="button" class="btn btn-danger" href="/excluir/{{$dado->id}}">Sim</a>
                    </div>
                </div>
            </div>
        </div>
 
        <a href="/" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</x-layout>