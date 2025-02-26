<x-layout titulo="Consultar">
    @csrf
    <div class="container mt-4">
        <h2 class="text-center mb-4">Consultar Clientes</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Tema do Projeto</th>
                    <th>Data de Emissão do Projeto</th>
                    <th>Data de Entrega do Projeto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cpfs as $cpf)
                <tr>
                    <td>{{$cpf->id}}</td>
                    <td>{{$cpf->nomeC}}</td>
                    <td>{{$cpf->dataN}}</td>
                    <td>{{$cpf->telefone}}</td>
                    <td>{{$cpf->endereco}}</td>
                    <td>{{$cpf->briefing}}</td>
                    <td>{{$cpf->dataEmissao}}</td>
                    <td>{{$cpf->dateEntrega}}</td>

                    <td>
                        <a href="/paginaEditar/{{$cpf->id}}" class="btn btn-primary btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach    
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="/" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</x-layout>


