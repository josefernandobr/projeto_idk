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
            <div class="jumbotron mt-5 bg-dark ">

                    <div class="container bg-light p-3 mt-3" style="background-image: url(http://markjoehope.com/wp-content/uploads/2020/11/guitar-1245856_1920.jpg); background-size:100%;">

                        <div class="row">


                        <div class="col-6 text-white">

                            <h2>Carteirinha do Sócio</h2>
                            
                            <form action="#" method="post">
                        
                            <div class="mb-3">
                                <label for="nome">Nome completo</label>
                                <input type="nome" class="form-control" id="nome" placeholder="Nome completo">          
                            </div>
                            
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Digite seu email">            
                            </div>
                    
                            <div class="mb-3">
                                <label for="senha">senha</label>
                                <input type="nome" class="form-control" id="senha" placeholder="Informe sua nova senha">         
                            </div>
                    
                            <div class="mb-3">
                                <label for="aniversario">Data de nascimento</label>
                                <input type="date" class="form-control" id="aviversario" placeholder="Digite a data de seu aniversário">
                            </div>

                            <div class="mb-3">
                                <select name="pais" id="pais">
                                    <option>Selecione seu país de nascimento</option>
                                    <option>Argentina</option>
                                    <option>Brasil</option>
                                    <option>Colômbia</option>
                                    <option>Paraguai</option>
                                    <option>uruguai</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="cartao">número do cartão de crédito</label>
                                <input type="number" class="form-control" id="cartao" placeholder="Digite o número do seu cartão de crédito">
                            </div>
                    

                                <input type="submit" class="btn btn-primary" onclick="return val()">
                                <input type="reset" class="btn btn-secondary">

                    
                        </form>

                    </div>
                    
                    <div class=" col justify-content-md-center"> 
                        <br>
                        <br>
                        <br>
                        <br>
                        <img src="https://www.fatosdesconhecidos.com.br/wp-content/plugins/wp-user-avatars/wp-user-avatars/assets/images/mystery.jpg" width="200" height="200" class="center-block" >

                        <br>
                        <form action="#">
                            <input type="file" id="myFile" name="filename" style="color:white;padding:30px;font-size: 10px;"><br>
                        </form>
                    </div>

                    <div>

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

    <script type="text/javascript">

        function val(){

            nome = document.getElementById("nome").value;
            email = document.getElementById("email").value;
            email = email.toString();

            senha = document.getElementById("senha").value;
            aniversario = document.getElementById("aviversario").value;
            aniversario = Date.parse(aniversario);
            hoje = Date.now(); 
            msec = aniversario - hoje;
            dias = msec / (1000 * 3600 * 24);

            pais = document.querySelector('#pais').value;
            cartao = document.getElementById("cartao").value;
            cartao =parseFloat(cartao);
            cartao = cartao.toString();

            if (nome.length==0) {
                alert("Digite seu nome");
            }

            else

            if (email=="") {
                alert("Digite seu email");
            }

            else

            if (senha.length<9){
                alert("sua senha deve ter no mínimo 8 caracteres");
            }
            else

            if (dias >0){
                alert("A data de nascimento deve ser menor que o dia atual");
            } 
            else

            if (pais=="Selecione seu país de nascimento"){
                alert("Você deve selecionar um país de nascimento");
            } 
            
            else

            if (cartao.length!=16){
                alert("o cartão deve conter 16 dígitos");
            } 
              
            else
            {
                return(true);
            }

        }

    </script>

</body>

</html>