<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
    <title>Quem somos</title>
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

        <div class="container" style="margin-top:30px">
            <div class="text-center mt-3 pt-3" id="div-quem-somos">
                <h2 id="h2-quem-somos" tabindex="0">Quem Somos</h2>
                <p tabindex="0">Integrantes do projeto Portal NERDCINE com acessibilidade, trabalho do 3° semestre de Sistemas para Internet.</p>
            </div>
        </div>

        <div class="container marketing" id="div-bio">
            <div class="row">
                <div class="col-lg-6">
                    <figure tabindex="0">
                        <img class="rounded-circle" src="img/ricardo.jpg" alt="Foto de perfil do Ricardo, integrante do projeto, em uma praia com óculos de sol olhando para o mar." width="250" height="250">
                    </figure>
                    <h3 tabindex="0">Ricardo Yamamoto</h3>
                    <h4 class="mb-2 text-muted" tabindex="0">Função: Líder e Desenvolvedor Front-End</h4>
                    <p tabindex="0">Me chamo Ricardo, 30 anos. Formado em Redes de Computadores e atuando na área desde 2007. Decidi buscar uma nova graduação, em desenvolvimento para adquirir novas habilidades fora do meio da infraestrutura TI, a programação sempre me fascinou e cada vez mais se torna mais relevante e necessário saber programar, pretendo conciliar meus conhecimentos em redes com programação e desejo desenvolver um projeto pessoal que possa ajudar pessoas.</p>
                </div>
                
                <div class="col-lg-6">
                    <figure tabindex="0">
                        <img class="rounded-circle" src="img/suelen.jpg" alt="Foto de perfil da Suelen, integrante do projeto" width="250" height="250">
                    </figure>
                    <h3 tabindex="0">Suelen Aparecida</h3>
                    <h4 class="mb-2 text-muted" tabindex="0">Função: Desenvolvedor Front-End</h4>
                    <p tabindex="0">Me chamo Suelen, tenho 19 anos, moro em Ibiúna no interior de São Paulo, no momento não atuo na área de desenvolvimento, estou cursando o terceiro semestre de Sistemas para Internet na Fatec São Roque. Resolvi estudar essa área porque acredito que a tecnologia, sendo bem desenvolvida, pode ajudar muitas pessoas.</p>
                </div>
            </div>
        </div>
    
    </main>
    <!-- FIM DO CONTEÚDO PRINCIPAL -->

    <!-- INÍCIO DO FORMULÁRIO -->
    <form id="form-fale-conosco">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <hr class="featurette-divider" id="hr-fale-conosco">
                </div>
            </div>
            <div class="py-3 text-center">
                <h2 style="padding-bottom: 10px;" tabindex="0">Fale Conosco</h2>
                <p class="lead" tabindex="0">Envie suas dúvidas, sugestões e críticas no Fale Conosco do NERDCINE. Sua opinião é muito importante para que o nosso conteúdo evolua constantemente.</p>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <input type="text" class="form-control" autocomplete="off" id="nome" placeholder="Digite seu Nome">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <input type="email" class="form-control" autocomplete="off" id="email" placeholder="Digite seu E-mail">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea class="form-control textarea" rows="6" id="mensagem" placeholder="Digite sua Mensagem"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn main-btn pull-right" id="btn">Enviar</button>
                </div>
            </div>
        </div>
    </form>
    <!-- FIM DO FORMULÁRIO -->

    <?php include 'footer.php'; ?>

</body>
</html>