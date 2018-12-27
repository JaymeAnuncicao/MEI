
<?php
    require_once 'PHP/init.php';

    $conex = db_connect();
    $query1= "SELECT id,assunto,titulo FROM noticias ORDER BY id DESC LIMIT 6;";
    $stmt= $conex->prepare($query1);
    $stmt->execute();
    
    if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['senha'], $_POST['problema'])){
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $senha=sha1($_POST['senha']);
        $telefone=$_POST['telefone'];
        $problema=$_POST['problema'];

        $conec = db_connect();

        $query3 = 'SELECT email FROM usuarios WHERE email=:email';
        $stmt = $connec->prepare($query1);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(sizeof($array) == 0){
            $query2 = 'INSERT INTO usuarios (nome, email, telefone, senha) VALUES (:nome, :email, :telefone, :senha);';
            $stmt = $connec->prepare($query2);
            $stmt->bindValue(':nome', ucfirst($nome));
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':telefone', $telefone);
            $stmt->bindValue(':senha', $senha);
            $stmt->execute();
        }else {
            $err = 'Email já cadastrado';
            $cadastro = false;
        }
    }
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
    <link rel="stylesheet" type="text/css" media="screen" href="css/responsive.css" />
</head>
<body>
    <!---------------------NAVBAR-------------->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-darkblue fixed-top">
            <a class="navbar-brand" href="#"><img src="Media/img/logo.png" width="60" height="60" id="navLogo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-darkblue"></span>
            </button>
            <div class="collapse navbar-collapse  bg-darkblue" id="navbarNav">
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
                        <a class="nav-link active text-white mt-3" data-toggle="modal" data-target="#ModalCadastro" href="#"><i class="far fa-user mr-2"></i>Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" data-toggle="modal" data-target="#ModalLogin" href="#"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
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
        <div class="row container-fluid justify-content-center">
            <div class="col-md-4">
                <h1 class="texto ">Aprenda mais sobre a</h1>
                <p class="texto ipsum mt-5 text-justify">Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica, permanecendo essencialmente  inalterado. Se popularizou na  década de 60, quando a Letraset  lançou decalques contendo</p>
            </div>
            <div class="col-md-6 mt-5 ml-5">
                <iframe class="embed-responsive embed-responsive-21by9" height="415"  src="https://www.youtube.com/embed/fJ9rUzIMcZQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <div class="anchor"><hr noshade></div>

    <!-----------------FUNCINALIDADES------------->
    <section id="funcionalidades" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 ">
                <h1 class="texto ml-5">FUNCIONALIDADES</h1>
                <hr noshade class="linha2 ">
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

            <div class="col-md-2 text-center mr-5 ml-4"><img src="Media/img/iphone.jpg" alt=""></div>

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
        <div class="row justify-content-center mr-3">
            <a href="#"><button class="button button2 mr-5">SAIBA MAIS SOBRE TODOS ELES</button></a>
        </div>
    </section>

    <!-------------------NOTICIAS---------------------->
    

<!---------------MODAL-CADASTRO-------------->
    <div class="modal fade" id="ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document"> 
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-8 col-sm-4 text-right ml-4">
                        <h1 class="modal-title texto  mb-3 ml-5 mt-4" id="exampleModalCenterTitle">CADASTRO</h1>
                    </div>
                    <div class="col-md-3 col-sm-4 mt-1 ml-1">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>  
                <form class="text-center primary-color-dark p-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">                  
                    <input type="text" required name="nomeEmpresa" class="z-depth-1  mb-3 input1 texto" placeholder="Nome da Empresa">
                    <input type="text" required name="nomeResponsavel" class="z-depth-1  mb-3 input1 texto" placeholder="Nome do Responsavel">
                    <input type="email" required name="email" class="z-depth-1  mb-3 input1 texto" placeholder="E-mail">
                    <input type="password" required name="senha" class="z-depth-1  mb-3 input texto" placeholder="Senha">
                    <input type="text"  required name="estado" class="z-depth-1  mb-3 input texto" placeholder="Estado">
                    <input type="text" required name="CNPJ" class="z-depth-1  mb-3 input texto" placeholder="CNPJ">
                    <input type="text" required name="CNAE" class="z-depth-1  mb-3 input texto" placeholder="CNAE">
                    <input type="submit" value="Confirmar" class="btn btn-success btn-lg col-7 mt-5">
                </form>                               
            </div>
        </div>
    </div>

<!--------------------MODAL-LOGIN------------------->
    <div class="modal fade bd-example-modal-sm" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-7 col-sm-4 text-right ml-4">
                        <h1 class="modal-title texto mt-3 mb-5 ml-5" id="exampleModalCenterTitle">LOGIN</h1>
                    </div>
                    <div class="col-md-2 ml-5 mt-1">
                        <button type="button" class="close ml-5" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ml-5">&times;</span>
                        </button>
                    </div>
                </div>                                    
                <form class="text-center primary-color-dark p-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="email" required name="loginemail" class="z-depth-1  mb-5 input1 texto" placeholder="Usuario">
                    <input type="password" required name="loginsenha" class="z-depth-1  input1 texto" placeholder="Senha"> 
                    <input type="submit" value="Entrar" class="btn btn-success btn-lg col-6 mt-5">
                </form>                               
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(window).scroll(function(){
		    $("#homeLogo").css("opacity", 1 - $(window).scrollTop() / 200);
		});
		$(window).scroll(function(){
		   let $("#navLogo").css("opacity", 0 + $(window).scrollTop() / 200);
		});
    </script>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>