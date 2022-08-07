<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
    <title>Filmes de Terror</title>
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
    <main role="main" class="container" id="main-terror">
        
        <figure id="figure-it-2" tabindex="0">
            <img class="img-fluid rounded shadow-sm" src="img/it-capitulo-2.jpg" alt="Imagem promocional do filme 'It Capítulo Dois' com destaque para Pennywise, o palhaco do mal com seu sorriso assustador.">
        </figure>

        <div class="row">
            <div class="col-md-10 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title" tabindex="0">It: Capítulo Dois</h2>
                    <p class="text-muted" tabindex="0">Mais do que uma revanche: o real significado da luta contra Pennywise em It 2</p>      
                    
                    <blockquote tabindex="0">
                            <p class="blog-post-meta">O texto abaixo foi escrito por Mariana Canhisares do portal Omelete.</p>
                    </blockquote>
                    
                    <hr>
                    
                    <p tabindex="0">Pennywise e o Clube dos Perdedores voltam a Derry em It: Capítulo Dois quase trinta anos depois daquele encontro sinistro para um acerto de contas final. Mas, se o Palhaço Dançarino anseia por essa reunião para ter sua tão aguardada vingança, os amigos têm muito mais em jogo. Mais do que cumprir o pacto firmado no verão de 1989, o grupo está em uma guerra pessoal contra seus traumas de infância.</p>
                    <p tabindex="0">Como bem explica o trailer final da sequência (confira abaixo), “alguma coisa acontece quando você deixa esta cidade. Quanto mais longe, mais nebuloso tudo fica”. Por isso, agora na casa dos quarenta anos, os perdedores têm poucas memórias do vilão. Na realidade, eles mal se lembram uns dos outros, ou sequer têm nos corpos as cicatrizes do embate contra o Pennywise - Ben, por exemplo, não tem mais a marca na barriga, assim como nenhum deles tem qualquer vestígio do pacto de sangue que fizeram à beira da represa. “Essa é a extensão da magia de Derry. Bill não lembra nem que costumava gaguejar”, explicou James McAvoy no set do filme.</p>
                    <p style="padding-bottom: 30px;" tabindex="0">Deste modo, o alerta do Mike, o único personagem que ficou em Derry, sobre o Pennywise é tão impactante. “São memórias que eles realmente tiveram que enterrar, porque são relacionados com um drama que se perpetuou nas suas vidas adultas e são coisas bem difíceis de se confrontar”, afirmou o diretor Andy Muschietti.</p>
                </div>
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-4 order-md-2">                
                <p class="lead" tabindex="0">It Chapter Two</p>
                <p tabindex="0">Direção: Andy Muschietti</p>
                <p tabindex="0">Elenco: Bill Skarsgard, James McAvoy, Jessica Chastain, Bill Hader, Isaiah Mustafa, Jay Ryan, James Ransone, Andy Bean</p>
                <p tabindex="0">Gênero: Terror</p>
                <p tabindex="0">Nota do Crítico: Excelente</p>
                <img src="img/5-estrelas-excelente.png" alt="Nota para o filme, considerado excelente, 5 estrelas" tabindex="0">
            </div>
            <div class="col-md-3 order-md-1">
                <img class="featurette-image img-fluid mx-auto" style="padding: 10px 0 10px 0;" src="img/cartaz-it-2.jpg" alt="Cartaz do filme It Capítulo Dois" tabindex="0">
            </div>
        </div>
    </main>
    <!-- FIM DO CONTEÚDO PRINCIPAL -->

    <?php include 'footer.php'; ?>

</body>
</html>