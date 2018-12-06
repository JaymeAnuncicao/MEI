<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MEI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <!---------------------NAVBAR-------------->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-darkblue fixed-top">
            <a class="navbar-brand" href="#">MEI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link nav-item text-white" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#nossaempresa">Nossa Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#funcionalidades">Funcinalidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#planos">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#noticias">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="FAQ.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contatos">Contatos</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link active text-white" href="#">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Login</a>
                        </li>
                </ul>
            </div>
        </nav>
    </header>
    <!----------------------HOME-------------------->
    <section id="home" class="container-fluid">
        <div class="row bg">
            <div class="col text-center texto  margem">
                <h1>A melhor resposta sua micro ou pequena empresa</h1>
                <h4>Você tem dúviddas? Nós respondemos</h4>
                <button class="button button1">Saiba Mais</button>
            </div>
        </div>
    </section>
    <!-------------------NOSSA EMPRESA---------------------->
    <section id="nossaempresa" class="container-fluid">
        <div class="row marge">
            <div class="col-4 ml-5">
                <h1 class="mb-5">Aprenda mais sobre a</h1>
                <h4 class="">Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na <br> década de 60, quando a Letraset lançou decalques contendo</h4>
            </div>
            <div class="col-6 ml-5 mt-5">
                <iframe class="embed-responsive embed-responsive-21by9" width="560" height="315" src="https://www.youtube.com/embed/fJ9rUzIMcZQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-------------------NOTICIAS---------------------->
    <section id="noticias" class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Noticias</h1>
                <hr noshade class="linha float-center">
            </div>
        </div> 
        <div id="news">
            <div id="carouselExampleIndicators" class="carousel slide ml-5 " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 backg ml-5">
                                <div class="col-md-3">
                                    <img src="Media/img/img-test.gif" width="50" height="50" alt="">
                                </div>
                                <div class="col-md-9">
                                    <p class="mt-5">Site mostra as melhores corretoras e bancos para investir</p>
                                </div>
                            </div>
                            <div class="col-md-4 backg ml-5">
                                <div class="col-md-3">
                                    <img src="Media/img/img-test.gif" width="50" height="50" alt="">
                                </div>
                                <div class="col-md-9">
                                    <p class="mt-5">Site mostra as melhores corretoras e bancos para investir</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 backg ml-5">
                                <div class="col-md-3">
                                    <img src="Media/img/img-test.gif" width="50" height="50" alt="">
                                </div>
                                <div class="col-md-9">
                                    <p class="mt-5">Site mostra as melhores corretoras e bancos para investir</p>
                                </div>
                            </div>
                            <div class="col-md-4 backg ml-5">
                                <div class="col-md-3">
                                    <img src="Media/img/img-test.gif" width="50" height="50" alt="">
                                </div>
                                <div class="col-md-9">
                                    <p class="mt-5">Site mostra as melhores corretoras e bancos para investir</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 backg ml-5">
                                <div class="col-md-3">
                                    <img src="Media/img/img-test.gif" width="50" height="50" alt="">
                                </div>
                                <div class="col-md-9">
                                    <p class="mt-5">Site mostra as melhores corretoras e bancos para investir</p>
                                </div>
                            </div>
                            <div class="col-md-4 backg ml-5">
                                <div class="col-md-3">
                                    <img src="Media/img/img-test.gif" width="50" height="50" alt="">
                                </div>
                                <div class="col-md-9">
                                    <p class="mt-5">Site mostra as melhores corretoras e bancos para investir</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
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




    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>