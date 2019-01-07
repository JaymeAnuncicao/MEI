
<?php
    session_start();
    $_SESSION['usuario'] = '';
    $_SESSION['email'] = '';
    $_SESSION['senha'] = '';
    $_SESSION['authenticate']= false;

    require_once 'PHP/init.php';

    $conex = db_connect();
    $query1= "SELECT id,assunto,titulo FROM noticias ORDER BY id DESC LIMIT 6;";
    $stmt= $conex->prepare($query1);
    $stmt->execute();




    if(isset($_POST['nomeEmpresa'],$_POST['nomeResponsavel'], $_POST['email'],$_POST['senha'],$_POST['estado'],$_POST['CNPJ'],$_POST['CNAE'])){
        $nomeEmpresa=$_POST['nomeEmpresa'];
        $nomeResponsavel=$_POST['nomeResponsavel'];
        $email=$_POST['email'];
        $senha=sha1($_POST['senha']);
        $estado=$_POST['estado'];
        $CNPJ=$_POST['CNPJ'];
        $CNAE=$_POST['CNAE'];       

        $conec = db_connect();

        $query3 = 'SELECT email FROM clientes WHERE email=:email';
        $stmt = $conec->prepare($query3);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(sizeof($array) == 0){
            $query2 = 'INSERT INTO clientes (nomeEmpresa,nomeResponsavel,email,senha,estado,CNPJ,CNAE) VALUES (:nomeEmpresa,:nomeResponsavel,:email,:senha,:estado,:CNPJ,:CNAE);';
            $stmt = $conec->prepare($query2);
            $stmt->bindValue(':nomeEmpresa', ucfirst($nomeEmpresa));
            $stmt->bindValue(':nomeResponsavel', ucfirst($nomeResponsavel));
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':senha', $senha);
            $stmt->bindValue(':estado', $estado);
            $stmt->bindValue(':CNPJ', $CNPJ);
            $stmt->bindValue(':CNAE', $CNAE);
            $stmt->execute();
            header("Location: index.php");

        }else {
            $err = 'Email já cadastrado';
            $cadastro = false;
        }
        
    }
    if(isset($_POST['loginemail'],$_POST['loginsenha'])){
        $login = $_POST['loginemail'];
        $lenha = $_POST['loginsenha'];
        $conec = db_connect();
        $stmt->bindValue(':loginemail',$login);
        $stmt->bindValue(':loginsenha',$lenha);
        $stmt->execute();
        $sql = "SELECT nomeResponsavel,nomeEmpresa,senha FROM clientes WHERE email ='$login',senha ='$lenha';";
        
        

        if(strcmp($login,'admin@mail.com') == 0 && strcmp($lenha,'admin') == 0){
            $_SESSION['authenticateADM'] = true;
            header("location: admin.php");
        }elseif (strcmp($lenha,$dados['senha']) == 0 && strcmp($login,$dados['email']) == 0){
            $_SESSION['usuario'] = $name;
            $_SESSION['email'] = $login;
            $_SESSION['authenticateUser'] = true;
            exit();
        }
        
    }    


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-----TITLE---->
    <title>MEI</title>
    <!-------FONTS------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-----PLUGINS CSS---->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
</head>
<body>
    <!---------------------NAVBAR-------------->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-darkblue fixed-top" id="Navbar">
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
                <a href="#"><button class="button button1 mt-5 hvr-grow">SAIBA MAIS</button></a>
            </div>
        </div>
    </section>
    <div class="marge" id="enterprise"></div>

    <!--------------------------------------NOSSA EMPRESA:INICIO----------------------------------------------------------------->

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
    <!--------------------------------------NOSSA EMPRESA:FIM----------------------------------------------------------------->

    <!-----------------------------FUNCINALIDADES:INICIO--------------------------->
    <section id="funcionalidades" class="container-fluid">
        <h1 class="texto text-center">FUNCIONALIDADES</h1>
        <hr noshade class="linha2  text-center">
     
        <div class="row justify-content-center ">
        <!--------------------------BLOCO 1:INICIO------------------------------>
            <div class="col-md-4 text-right ">
                <div class="row justify-content-end">   
                    <div class="col-md-10">
                        <a href="#"><h5 class="texto">Funcionalidade 1</h5></a>
                        <hr noshade class="func">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
                <div class="row justify-content-end">
                <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 2</h5>
                        <hr noshade class="func">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
                <div class="row justify-content-end">
                <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 3</h5>
                        <hr noshade class="func">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
                <div class="row justify-content-end">
                <div class="col-md-10">
                        <h5 class="texto">Funcionalidade 4</h5>
                        <hr noshade class="func">
                        <p>Lorem Ipsum sobreviveu não só a cinco séculos, como também ao  salto para a editoração eletrônica</p>
                    </div>
                </div>
            </div>
        <!----------------------------BLOCO 1:FIM------------------------>

        <!----------------------------IMG-IPHONE:INICIO------------------------>
            <div class="col-md-4 text-center "><img src="Media/img/iphone.jpg" alt=""></div>
        <!----------------------------IMG-IPHONE:FIM------------------------>
        
        <!--------------------------BLOCO 2:INICIO------------------------------>
            <div class="col-md-4 ">
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
        <!----------------------------BLOCO 2:FIM------------------------>    
        </div>
        <div class="row justify-content-center">
            <a href="#" class=""><button class="button button2 hvr-grow">SAIBA MAIS SOBRE TODOS ELES</button></a>
        </div>
    </section>
    <!-----------------------------FUNCINALIDADES:FIM--------------------------->
    

    <!----------------------------------CARTÃO MEi:INICIO---------------------->
    <section id="cartao" class="container-fluid">
        <div class="row  justify-content-around align-items-end">
            <div class="col-md-4 mt-5">
                <div class="row justify-content-center"><img src="Media/img/cartao-mei.jpeg" alt="" width="350" height="200"></div>
                <div class="row text-justify">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex nemo, labore adipisci eveniet totam possimus delectus ab harum! Mollitia voluptatibus quam corporis maiores autem suscipit natus officiis vel atque dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptas vel cupiditate dolores ratione, totam, corrupti officiis itaque, expedita praesentium quibusdam accusantium voluptatum molestiae vero voluptate suscipit pariatur laborum. Laudantium!
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center"><img src="Media/img/faq-icon.png" alt="" width="350" height="200"></div>
                <div class="row text-justify">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex nemo, labore adipisci eveniet totam possimus delectus ab harum! Mollitia voluptatibus quam corporis maiores autem suscipit natus officiis vel atque dolor?Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptas vel cupiditate dolores ratione, totam, corrupti officiis itaque, expedita praesentium quibusdam accusantium voluptatum molestiae vero voluptate suscipit pariatur laborum. Laudantium!
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------CARTÃO MEi:FIM-------------------------->



    <!-------------------NOTICIAS:INICIO---------------------->
    <section id="noticias" class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h1 class="texto">Noticias</h1>
                <hr noshade class="linha float-center">
            </div>
        </div> 
        <div id="news">
                <div id="carouselExampleIndicators" class="carousel slide ml-5 " data-ride="carousel">
                    <ol class="carousel-indicators desce">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                            <!------------------PRIMEIRO PAR DE NOTICIAS:INCIO---------------->
                                <div class="col-md-4 backg ml-5">
                                    <div class="row">
                                        <div class="mt-3 col-md-4 mr-5">
                                            <img src="Media/img/slide1.jpg" width="220" height="150" alt="">
                                        </div>
                                        <div class="mt-3 col-md-4 ml-3">
                                        <p class=""><?php
                                                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                                                $id=$user['id'];
                                                if(isset($user['titulo'])){
                                                    
                                                    echo($user['titulo']);
                                                }else{echo('Sem noticia.');}
                                              ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 backg ml-5">
                                    <div class="row">
                                        <div class="mt-3 col-md-4 mr-5">
                                            <img src="Media/img/slide1.jpg" width="220" height="150" alt="">
                                        </div>
                                        <div class="mt-3 col-md-4 ml-3">
                                            <p class=""><?php
                                                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                                                $id=$user['id'];
                                                if(isset($user['titulo'])){
                                                    
                                                    echo($user['titulo']);
                                                }else{echo('Sem noticia.');}
                                              ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!------------------PRIMEIRO PAR DE NOTICIAS:FIM---------------->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                            <!------------------SEGUNDO PAR DE NOTICIAS:INCIO---------------->
                                <div class="col-md-4 backg ml-5">
                                    <div class="row">
                                        <div class="mt-3 col-md-4 mr-5">
                                            <img src="Media/img/slide1.jpg" width="220" height="150" alt="">
                                        </div>
                                        <div class="mt-3 col-md-4 ml-3">
                                            <p class=""><?php 
                                                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                                                $id=$user['id'];
                                                if(isset($user['titulo'])){
                                                    
                                                    echo($user['titulo']);
                                                }else{echo('Sem noticia.');}
                                            ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 backg ml-5">
                                    <div class="row">
                                        <div class="mt-3 col-md-4 mr-5">
                                            <img src="Media/img/slide1.jpg" width="220" height="150" alt="">
                                        </div>
                                        <div class="mt-3 col-md-4 ml-3">
                                            <p class=""><?php 
                                                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                                                $id=$user['id'];
                                                if(isset($user['titulo'])){
                                                    
                                                    echo($user['titulo']);
                                                }else{echo('Sem noticia.');}
                                            ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!------------------SEGUNDO PAR DE NOTICIAS:FIM---------------->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                            <!------------------TERCEIRO PAR DE NOTICIAS:INICIO---------------->
                                <div class="col-md-4 backg ml-5">
                                    <div class="row">
                                        <div class="mt-3 col-md-4 mr-5">
                                            <img src="Media/img/slide1.jpg" width="220" height="150">
                                        </div>
                                        <div class="mt-3 col-md-4 ml-3">
                                            <p><?php ?></p>
                                            <p class=""><?php 
                                                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                                                $id=$user['id'];
                                                if(isset($user['titulo'])){
                                                    echo($user['titulo']);
                                                }else{echo('Sem noticia.');} 
                                            ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 backg ml-5">
                                    <div class="row">
                                        <div class="mt-3 col-md-4 mr-5">
                                            <img src="Media/img/slide1.jpg" width="220" height="150" alt="">
                                        </div>
                                        <div class="mt-3 col-md-4 ml-3">
                                            <p class=""><?php 
                                               $user = $stmt->fetch(PDO::FETCH_ASSOC);
                                               $id=$user['id'];
                                               if(isset($user['titulo'])){
                                                    
                                                echo($user['titulo']);
                                            }else{echo('Sem noticia.');}
                                            ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!------------------TERCEIRO PAR DE NOTICIAS:FIM---------------->
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev mr-5" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
    </section>
    <!--------------------NOTICIAS:FIM-------------------------------->

    <!--------------------CONTATOS:INICIO-------------------------------->                                       
    <section id="contatos" class="container-fluid">
        <div class="row bg justify-content-center align-itens-center">
            <div class="col-6 col-sm-4 mt-5">
                <h1 class="text-white mt-5 mb-5">Entre em contato conosco</h1>
                <form action="" method="post">
                    <input type="text" name="Contnome" class="z-depth-1  mb-3 conta1 texto" placeholder="Nome">                            
                    <input type="email" name="Contemail" class="z-depth-1  mb-3 mr-3 conta texto" id="cemail"placeholder="E-email">
                    <input type="text" name="telefone" class="z-depth-1  mb-3 conta texto" placeholder="Telefone">
                    <input type="text" name="motivo" class="z-depth-1  mb-3 conta1 texto" placeholder="Motivo do contato">
                    <textarea name="mensagem" placeholder="Mensagem..." id="" cols="30" rows="10"></textarea>
                        
                </form>    
                <div class="row justify-content-center"><input type="submit" value="Enviar" class="btn btn-success btn-lg col-3 mt-2"></div>                       
            </div>
            
        </div>
    </section>                                            
   <!--------------------CONTATOS:FIM--------------------------------> 

<!---------------MODAL-CADASTRO:INICIO-------------->
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
<!---------------MODAL-CADASTRO:FIM-------------->

<!--------------------MODAL-LOGIN:INICIO------------------->
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
<!--------------------MODAL-LOGIN:FIM------------------->
    <script type="text/javascript">
      $('body').scrollspy({ target: '#Navbar' });
    </script>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>


<?php

  



?>