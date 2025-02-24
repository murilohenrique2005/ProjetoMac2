<x-layout titulo="Cadastrar">
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <!-- Link para o Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header text-center bg-dark text-white rounded-4">
                        <!-- Logo em cima do nome "MAC" -->
                        <img src="/" alt="Logo MAC" class="img-fluid mb-3" style="max-width: 150px;">
                        <h4>Cadastro de Usuário</h4>
                    </div>
                    <div class="card-body bg-light">
                        <form action="cadastrarusuario/salvar" method="GET">
                            @csrf
                            <!-- Nome Completo -->
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" name="nomeC" class="form-control" id="nome" placeholder="Nome Completo" required>
                            </div>
                            <!-- Data de Nascimento -->
                            <div class="mb-3">
                                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                                <input type="date"  class="form-control" name="dataN" id="dataNascimento" required>
                            </div>
                            <!-- CPF -->
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" required>
                            </div>
                            <!-- Telefone -->
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
                            </div>
                            <!-- Endereço -->
                            <div class="mb-3">
                                <label for="endereco" class="form-label">Endereço</label>
                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua, Número, Bairro" required>
                            </div>
                            <!-- Briefing do Projeto -->
                            <div class="mb-3">
                                <label for="briefing" class="form-label">Tema do Projeto</label>
                                <textarea class="form-control" id="briefing" name="briefing" rows="3" placeholder="Descreva o tema do projeto" required></textarea>
                            </div>
                            <!-- Data de Emissão -->
                            <div class="mb-3">
                                <label for="dataEmissao" class="form-label">Data de Emissão</label>
                                <input type="date" class="form-control" name="dataEmissao" id="dataEmissao" required>
                            </div>
                            <!-- Data de Entrega -->
                            <div class="mb-3">
                                <label for="dateEntrega" class="form-label">Data de Entrega</label>
                                <input type="date" class="form-control" name="dateEntrega" id="dateEntrega" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-lg">Cadastrar</button>
                            </div>
                        </form>
                        <a href="/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="margin-top:20px; text-align:center; align-items:center; justify-content:center; display:flex;">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link para o Bootstrap JS e Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
</x-layout>
