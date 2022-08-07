<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
    <title>Normas de Utilização</title>
</head>
<body>
    
    <!-- INÍCIO DO MENU -->
    <nav class="fixed-top navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                <a class="navbar-brand" href="index.php"> <h1> <img src="img/logotipo.jpg" alt="Logotipo oficial do site NERDCINE"> </h1> <span class="sr-only">página inicial</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>            
                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <div class="col-sm">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categorias
                                </a>                    
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="acao.php">Ação</a>
                                    <a class="dropdown-item" href="animacao.php">Animação</a>
                                    <a class="dropdown-item" href="nacional.php">Nacional</a>
                                    <a class="dropdown-item" href="terror.php">Terror</a>
                                </div>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="em-breve.php">Em Breve</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="premios.php">Prêmios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="quem-somos.php">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="normas-de-utilizacao.php">Normas de Utilização</a>
                                </li>
                            </li>
                        </ul>
                    </div> <!-- col-sm -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </nav>
    <!-- FIM DO MENU -->


    <!-- INÍCIO DO CONTEÚDO PRINCIPAL -->
    <main role="main">
        
        <section class="jumbotron text-center" id="section-normas">
            <div class="container">
                <h2 class="jumbotron-heading" tabindex="0">Utilizando o NVDA (leitor de tela) para acessibilidade na web</h2>
                <p class="lead text-muted" tabindex="0">O NVDA é um software de código aberto, você pode <a href="https://www.nvaccess.org/download/">baixar o NVDA</a> gratuitamente (somente para Windows). Depois de ter o NVDA baixado e instalado, comece a utilizar pressionando Ctrl + Alt + N.</p>
            </div>
        </section>
        
        <div class="container">
            <div class="col-sm">
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <caption>Lista de teclas de atalho NVDA</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Teclas</th>
                                <th scope="col">Função</th>
                                <th scope="col">Tecla de Atalho</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1</strong> - <strong>6</strong></td>
                                <td colspan="2">Cabeçalho Nível 1 a 6</td>
                            </tr>
                            <tr>
                                <td><strong>B</strong></td>
                                <td colspan="2">Botão</td>
                            </tr>
                            <tr>
                                <td><strong>D</strong></td>
                                <td colspan="2">Landmark / Ponto de Referência</td>
                            </tr>
                            <tr>
                                <td><strong>F</strong></td>
                                <td colspan="2">Formulário</td>
                            </tr>
                            <tr>
                                <td><strong>G</strong></td>
                                <td colspan="2">Gráfico</td>
                            </tr>
                            <tr>
                                <td><strong>H</strong></td>
                                <td colspan="2">Cabeçalho</td>
                            </tr>
                            <tr>
                                <td><strong>I</strong></td>
                                <td colspan="2">Item de Lista</td>
                            </tr>
                            <tr>
                                <td><strong>K</strong></td>
                                <td colspan="2">Link</td>
                            </tr>
                            <tr>
                                <td><strong>L</strong></td>
                                <td colspan="2">Lista</td>
                            </tr>
                            <tr>
                                <td><strong>T</strong></td>
                                <td colspan="2">Tabela</td>
                            </tr>
                            <tr>
                                <td><strong>F6</strong></td>
                                <td>Barra de Endereço do Navegador</td>
                                <td><strong>Alt</strong> + <strong>D</strong> ou <strong>F6</strong></td>
                            </tr>
                            <tr>
                                <td><strong>HOME</strong></td>
                                <td>Início da Página</td>
                                <td><strong>Ctrl</strong> + <strong>HOME</strong></td>
                            </tr>
                            <tr>
                                <td><strong>END</strong></td>
                                <td>Fim da Página</td>
                                <td><strong>Ctrl</strong> + <strong>END</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- FIM DO CONTEÚDO PRINCIPAL -->

    
    <?php include 'footer.php'; ?>

</body>
</html>