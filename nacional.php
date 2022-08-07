<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
    <title>Filmes Nacionais</title>
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
    <main role="main" class="container" id="main-nacional">
        
        <div class="embed-responsive embed-responsive-16by9" id="div-trailer" tabindex="0">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vVl1-wSq6jU" allowfullscreen></iframe>
        </div>

        <div class="row">
            <div class="col-md-10 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title" tabindex="0">Minha É Uma Peça 3</h2>
                    <p class="text-muted" tabindex="0">Sequência da comédia da Dona Hermínia está de volta no novo trailer da sequência</p>      
                    
                    <blockquote tabindex="0">
                            <p class="blog-post-meta">O texto abaixo foi escrito por Thais Araújo do portal Cinema com Rapadura.</p>
                    </blockquote>
                    
                    <hr>
                    
                    <p tabindex="0">O longa-metragem “Minha Mãe É Uma Peça 3” teve um novo trailer divulgado pela Globo Filmes esta semana. O vídeo, que você pode ver acima, mostra que Dona Hermínia terá de redescobrir e se reinventar quando seus filhos começam a formar novas famílias.</p>
                    <p tabindex="0">O filme ira mostrar a supermãe tendo que segurar a emoção para lidar com a gravidez de Marcelina, o casamento de Juliano e ainda a reaproximação de Carlos Alberto, seu ex-marido, que esteve sempre por perto, mas que agora resolve ficar ainda mais próximo.</p>
                    <p tabindex="0">A franquia “Minha Mãe É Uma Peça” é baseada na peça de mesmo nome, criada e estrelada por Paulo Gustavo e que levou milhões de espectadores ao teatro ao longo dos anos em cartaz. Lançados em 2013 e 2016, os dois primeiros filmes levaram juntos mais de 13 milhões de espectadores aos cinemas, com uma arrecadação total de R$173.798.332,00.</p>
                    <p style="padding-bottom: 30px;" tabindex="0">A produção é dirigida por Susana Garcia, Paulo Gustavo e Fil Braz. “Minha Mãe É Uma Peça 3” estreia em 26 de dezembro.</p>
                </div>
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-4 order-md-2">                
                <p class="lead" tabindex="0">Minha Mãe É Uma Peça 3</p>
                <p tabindex="0">Direção: Susana Garcia</p>
                <p tabindex="0">Elenco: Paulo Gustavo, Mariana Xavier, Rodrigo Pandolfo, Herson Capri, Samantha Schmütz, Alexandra Richter, Patrycia Travassos, Malu Valle, Stella Maria Rodrigues, Lucas Cordeiro, Cadu Fávero, Bruno Bebianno</p>
                <p tabindex="0">Gênero: Comédia</p>
                <p tabindex="0">Nota do Crítico: Bom</p>
                <img src="img/3-estrelas-bom.png" alt="Nota para o filme, considerado bom, três estrelas" tabindex="0">
            </div>
            <div class="col-md-3 order-md-1">
                <img class="featurette-image img-fluid mx-auto" style="padding: 10px 0 10px 0;" src="img/cartaz-minha-mae-e-uma-peca.jpg" alt="Cartaz do filme Minha é uma peça" tabindex="0">
            </div>
        </div>
    </main>
    <!-- FIM DO CONTEÚDO PRINCIPAL -->

    <?php include 'footer.php'; ?>

</body>
</html>