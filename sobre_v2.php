<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>PHP - Exercícios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- define e insere um favicon no documento HTML -->
    <link href="./img/php.ico" rel="shortcut icon">

    <!-- versao gratuita do Font Awesome icons-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <!-- insira este conteudo aqui que representa o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Google  icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="./css/meu-estilo.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet"/>

</head>

<body class="fundo">
    <!-- seu codigo comeca aqui -->

    <!-- container bootstrap -->
    <header class="container px-0">

        <nav class="navbar navbar-expand-lg navbar-light px-0 bg-dark">

            <!-- logo -->
            <div> 
                <a href=login.html class="navbar-brand mx-auto">
                    <img src="./img/logotipo.png" id="logotipo-img"> <span id="title-idk">Clube da Música</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar"
                aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Navegação Alternativa">
                Menu <span class="navbar-toggler-icon"></span>
            </button>

            <!-- menu -->
            <div class="collapse navbar-collapse justify-content-end text-white" id="mynavbar">
                <div class="navbar-nav">
                    <!-- <a href="playlist.php" class="nav-link text-white h4">Sua playlist</a> -->
                    <!-- <a href="avaliacoes.php" class="nav-link text-white h4" >Avaliações</a> -->
                    <!-- <a href="configuracoes.php" class="nav-link text-white h4">Configurações</a> -->
                    <a href="sobre.php" class="nav-link text-white h4">Sobre</a>
                    <a href="login.html" class="nav-link text-white h4"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/34/null/external-automatic-doors-back-to-work-flaticons-lineal-color-flat-icons-2.png"/></a>
                </div>
            </div>
        </nav>

        <div class="container text-center " >
            <div class="jumbotron mt-5 " id="container-bg" style="background-image: url(http://markjoehope.com/wp-content/uploads/2020/11/guitar-1245856_1920.jpg); background-size:100%;">

                <div class="container bg-light p-3 mt-3 text-white bg-dark" >

                Somos um serviço brasileiro que dá acesso instantâneo a milhões de músicas de diversos criadores ao redor de todo o mundo.

                <br><br>
                        
                Nossa missão é liberar o potencial de criatividade humana, dando aos artistas a
                oportunidade de viver da sua arte e a bilhões de fãs a oportunidade de desfrutar e se inspirar por 
                ela.

                <br><br>

                Não compactuamos com qualquer tipo de música que incite o ódio ou violência. Desta forma, não promovemos artistas que demonstrem uma conduta duvidosa ou errada, de acordo com nossa política.


                </div>

            </div>
        </div>
    </header>
     <style>
        #mynavbar {}
     </style>
    <footer class="container text-center">
        <div class="row border-top border-primary bg-light">
            <div class="col font text-primary copyright bg-dark">
                <p>&copy; Copyright idk produções</p>
            </div>
        </div>
    </footer>


    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>