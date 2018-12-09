
<?php
    require_once 'PHP/init.php';

    $conex = db_connect();
    $query= "SELECT id,assunto,titulo FROM noticias ORDER BY id DESC LIMIT 6;";
    $stmt= $conex->prepare($query);
    $stmt->execute()
    

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MEI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
    <!---------------------NAVBAR-------------->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-darkblue fixed-top">
            <a class="navbar-brand" href="#"><img src="Media/img/logo.png" width="60" height="60" id="navLogo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-5">
                    <li class="nav-item active">
                        <a class="nav-link nav-item text-white mt-3" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" href="#enterprise">Nossa Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" href="#funcionalidades">Funcinalidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" href="#planos">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" href="#noticias">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" href="FAQ.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" href="#contatos">Contatos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active text-white mt-3" href="#"><i class="far fa-user mr-2"></i>Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" href="#"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!----------------------HOME-------------------->
    <section id="home" class="container-fluid">
        <div class="row bg">
            <div class="col-md-12 text-center text-white margem">
                <img src="Media/img/logo.png" width="300" height="300" id="homeLogo">
                <h1 class="mt-5">A melhor resposta sua micro ou pequena empresa</h1>
                <h4 class="mt-3">Você tem dúviddas? Nós respondemos</h4>
                <button class="button button1 mt-5">SAIBA MAIS</button>
            </div>
        </div>
    </section>
    <div class="marge" id="enterprise"></div>

    <!-------------------NOSSA EMPRESA---------------------->
    <section id="nossaempresa" class="container-fluid">
        <div class="row container-fluid">
            <div class="col-md-4">
                <h1 class="texto">Aprenda mais sobre a</h1>
                <h2 class="texto mt-5 text-justify">Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica, permanecendo essencialmente  inalterado. Se popularizou na  década de 60, quando a Letraset  lançou decalques contendo</h4>
            </div>
            <div class="col-md-8 mt-5">
                <iframe class="embed-responsive embed-responsive-21by9" width="560" height="315" src="https://www.youtube.com/embed/fJ9rUzIMcZQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <div class="anchor"><hr noshade></div>

    <!-----------------FUNCINALIDADES------------->
    <section id="funcionalidades" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-auto ">
                <h1 class="texto">FUNCIONALIDADES</h1>
                <hr noshade class="linha2">
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-md-4 text-right">
                <div class="row">
                    <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 1</h5>
                        <hr noshade class="func">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 2</h5>
                        <hr noshade class="func">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 3</h5>
                        <hr noshade class="func">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 4</h5>
                        <hr noshade class="func">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 text-center mr-5 ml-5"><img src="Media/img/iphone.jpg" alt=""></div>

            <div class="col-md-4 ml-5">
                <div class="row">
                    <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 5</h5>
                        <hr noshade class="func1">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 6</h5>
                        <hr noshade class="func1">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 7</h5>
                        <hr noshade class="func1">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 8</h5>
                        <hr noshade class="func1">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="#"><button class="button button2 mr-5">SAIBA MAIS SOBRE TODOS ELES</button></a>
        </div>
    </section>

    

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>