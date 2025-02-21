<x-layout titulo="Cadastrar">
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de Negociação</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ícones do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
 
    <!-- Barra de Navegação -->

 
    <!-- Banner Principal com Imagem de Fundo -->
    <header class="bg-dark text-white text-center py-5" style="background-image: url('https://via.placeholder.com/1500x600'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4 fw-bold">Bem-vindo à MAC.</h1>
            <p class="lead">MAC: Conexões reais, soluções únicas para você</p>
            <a href="/cadastrar" class="btn btn-light btn-lg shadow-sm">Cadastrar Cliente</a>
        </div>
    </header>
   
 
    <!-- Seção Sobre -->
    <section id="sobre" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Sobre Nós</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="fw-bold">Nossa Missão</h4>
                    <p>"A MAC tem o compromisso de proporcionar uma experiência única e personalizada a cada cliente, criando conexões verdadeiras e duradouras. Nosso objetivo é ouvir, entender e superar as expectativas dos nossos clientes, sempre com qualidade, transparência e empatia, garantindo a satisfação plena em todas as interações."</p>
                </div>
                <div class="col-md-6">
                    <h4 class="fw-bold">Nossa Visão</h4>
                    <p>Ser reconhecida como líder em excelência no relacionamento com o cliente, criando laços fortes e duradouros, e sendo a primeira escolha dos consumidores por nossa dedicação, inovação e compromisso com a satisfação. Queremos transformar cada interação em uma oportunidade de impactar positivamente a vida de nossos clientes.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h4 class="fw-bold">Nossos Valores</h4>
                    <ul>
                        <li>Empatia: Colocamos-nos no lugar do cliente, entendendo suas necessidades e oferecendo soluções que realmente atendem às suas expectativas.</li>
                        <li>Transparência: Valorizamos a comunicação clara, honesta e aberta em todas as nossas interações, criando um ambiente de confiança.</li>
                        <li>Comprometimento: Estamos sempre prontos para fazer o que for necessário para garantir a satisfação e o sucesso dos nossos clientes.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="fw-bold">Equipe</h4>
                    <p>Contamos com uma equipe altamente qualificada, formada por profissionais experientes em negociações e atendimento ao cliente. Nosso objetivo é entender suas necessidades e oferecer soluções eficientes, sempre buscando os melhores resultados para você.</p>
                </div>
            </div>
        </div>
    </section>

      <!-- Seção Como Funciona -->
      <section id="como-funciona" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Como Funciona?</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card shadow border-0 mb-4">
                        <img src="../img/cliente.png" class="card-img-top" alt="Cliente">
                        <div class="card-body">
                            <h5 class="card-title">1. Cliente Inicia a Negociação</h5>
                            <p class="card-text">O cliente pode iniciar uma negociação com um funcionário para obter o melhor acordo.</p>
                            <!-- Botão com link dentro do card -->
                            <a href="/paginaEditar" class="btn btn-primary">Iniciar Negociação</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-0 mb-4">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Funcionário">
                        <div class="card-body">
                            <h5 class="card-title">2. Funcionário Responde</h5>
                            <p class="card-text">Os funcionários respondem com propostas personalizadas, buscando o melhor interesse para ambas as partes.</p>
                            <!-- Botão com link dentro do card -->
                            <a href="/cadastrarcliente" class="btn btn-primary">Responder Proposta</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-0 mb-4">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Acordo Final">
                        <div class="card-body">
                            <h5 class="card-title">3. Acordo Fechado</h5>
                            <p class="card-text">Uma vez que ambas as partes estejam satisfeitas, o acordo é fechado de maneira segura e eficiente.</p>
                            <!-- Botão com link dentro do card -->
                            <a href="/consultarCliente" class="btn btn-primary">Fechar Acordo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
   
 
    <!-- Seção Contato -->
    <section id="contato" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Entre em Contato</h2>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg shadow-sm">Enviar Mensagem</button>
            </form>
        </div>
    </section>
    
 
    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2025 MAC. Todos os direitos reservados.</p>
            <!-- Link para o GitHub -->
            <p>
                <a href="https://github.com/seu-usuario" target="_blank" class="text-white">
                    <i class="bi bi-github"></i> GitHub
                </a>
            </p>
            <!-- Equipe que fez o site -->
            <p class="mb-0">Feito pela equipe de desenvolvimento: Alan, Murilo e Carlos</p>
        </div>
    </footer>
 
    <!-- Bootstrap JS e dependências -->
</body>
</html>
</x-layout>
