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
                <a href="home.php" class="navbar-brand mx-auto">
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
                    <a href="playlist.php" class="nav-link text-white h4">Sua playlist</a>
                    <!-- <a href="avaliacoes.php" class="nav-link text-white h4" >Avaliações</a> -->
                    <a href="configuracoes.php" class="nav-link text-white h4">Configurações</a>
                    <a href="sobre.php" class="nav-link text-white h4">Sobre</a>
                    <a href="login.html" class="nav-link text-white h4"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/34/null/external-automatic-doors-back-to-work-flaticons-lineal-color-flat-icons-2.png"/></a>
                </div>
            </div>
        </nav>

        <div class="container text-center " >
            <div class="jumbotron mt-5 " style="background-image: url(http://markjoehope.com/wp-content/uploads/2020/11/guitar-1245856_1920.jpg); background-size:100%;">

                <div class="container bg-light p-3 mt-3 text-white bg-dark">

                        
                <table border="0" >
                    <thead >
                        <tr>
                            <th style="width:200px">Albúm</th>
                            <th style="width:200px">Artista</th>
                            <th style="width:200px">Faixa</th>
                            <!-- <th style="width:200px">duração</th> -->
                            <th style="width:200px">Nota</th>
                            <th style="width:200px"></th>
                        </tr>
                    </thead>
                    
                    <tbody style="color: yellow;">
                        <tr>
                            <td class="maiuscula">
                                <div class="module-box">
                                    <div class="module-dummy"></div>
                                    <div class="module-body">
                                        <a href=" #">
                                        <div>
                                        <img src="https://images-az.suamusica.com.br/DPib2jE0NSi20flgN7mgttFgt5s=/500x500/filters:format(webp)/507396/3714212/cd_cover.jpg" width="150" height="150" class="center-block" >
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                </td>
                            <td>Renanzin Pressão</td>
                            <td>Quando o sol raiar</td>
                            <!-- <td>1:55</td> -->
                            <td>
                                <form class="rating">
                                    <label>
                                        <input type="radio" name="stars" value="1" />
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="2" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="3" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>   
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="4" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="5" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                </form>


                            </td>

                            <!-- <td><button type="submit" class="btn btn-light">Enviar</button></td> -->
                            <td><audio src="audio/quando_o_sol_chegar.mp3" controls autoplay loop></audio></td>

                        </tr>

                        <tr>
                            <td class="maiuscula">
                            <div class="module-box">
                                <div class="module-dummy"></div>
                                <div class="module-body">
                                    <a href=" #">
                                    <div >
                                    <img src="https://images-americanas.b2w.io/produtos/01/00/item/111574/0/111574091_1GG.jpg" width="150" height="150" class="center-block" >
                                    </div>
                                    </a>
                                </div>
                            </div>
                            </td>
                            <td>Galinha pintadinha</td>
                            <td>Galinha pintadinha 2</td>
                            <!-- <td>2:27</td> -->
                            <td>
                                <form class="rating">
                                    <label>
                                        <input type="radio" name="stars" value="1" />
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="2" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="3" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>   
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="4" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="stars" value="5" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                    </label>
                                </form>

                            </td>

                            <td><audio src="audio/galinha_pintadinha.mp3" controls autoplay loop></audio></td>
                        </tr>

                        <tr>
                            <td class="maiuscula">
                            <div class="module-box">
                                <div class="module-dummy"></div>
                                <div class="module-body">
                                    <a href=" #">
                                    <div>
                                        <img src="https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-22/soundtrack/common/f22-soundtrack-fifa.jpg.adapt.crop16x9.320w.jpg" width="150" height="150" class="center-block" >
                                    </div>
                                    </a>
                                </div>
                            </div>
                            </td>
                            <td>Public Order</td>
                            <td>Feels Like Summer</td>
                            <!-- <td>2:45</td> -->
                            <td>
                            <form class="rating">
                                <label>
                                    <input type="radio" name="stars" value="1" />
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>   
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                                <label>
                                    <input type="radio" name="stars" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                </label>
                            </form>
                            </td>

                            <td><audio src="audio/feels_like_summer.mp3" controls autoplay loop></audio></td>
                            
                        </tr>



                    </tbody>
                </table>
                <!-- <input type="submit" class="btn btn-primary btn-md" value="Enviar notas" id="idBtnLogin"> -->

                </div>

            </div>
        </div>
    </header>

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