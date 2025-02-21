<x-layout titulo="CadastrarUsuario">
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - MAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-gradient" style="background: linear-gradient(135deg, #6c757d 0%, #495057 100%);">
    <div class="card p-4 shadow-lg" style="width: 26rem; border-radius: 15px; background: #fff;">
        <div class="text-center mb-3">
            <img src="logo.png" alt="Logo MAC" class="mb-3" style="max-width: 100px; box-shadow: none;">
            <h2 class="fw-bold text-secondary">MAC</h2>
            <p class="text-muted">Crie sua conta preenchendo os campos abaixo.</p>
        </div>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Nome</label>
                <input type="text" class="form-control border-secondary" name="nome" id="name" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control border-secondary" id="email" placeholder="Digite seu email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Senha</label>
                <input type="password" class="form-control border-secondary" id="password" placeholder="Crie uma senha" required>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label fw-semibold">Confirme a Senha</label>
                <input type="password" class="form-control border-secondary" id="confirm-password" placeholder="Confirme sua senha" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label fw-semibold">CPF</label>
                <input type="text" class="form-control border-secondary" id="cpf" placeholder="Digite seu CPF" required>
            </div>
            <button type="submit" class="btn btn-secondary w-100 fw-semibold shadow-sm">Cadastrar</button>
        </form>
        <div class="text-center mt-3">
            <p class="text-muted">Já tem uma conta? <a href="login.html" class="text-secondary fw-bold">Faça login</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-layout>
