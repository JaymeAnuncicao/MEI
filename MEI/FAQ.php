<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/faq.css" />
    <!-- LINK TEMPORARIO -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
     <!---------------------NAVBAR : APENAS DE BASE-------------->
     <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-darkblue fixed-top">
            <a class="navbar-brand" href="#">MEI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link nav-item text-white" href="index.php#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php#nossaempresa">Nossa Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php#funcionalidades">Funcinalidades</a>
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
                        <a class="nav-link active text-white float-left" href="#">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white float-left" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-----------------NAVBAR--------------->
    <section class="container-fluid">
        <div class=" marge" id="afas">
            <!-- o span é para fazer a linha embaixo -->
            <h1 class="mt-5 text"><span>PERGUNTAS FREQUENTES</span></h1>
        </div>
        <!-- LOGIN E CADASTRO -->
        <div class="col-md-3">
            <div class="row afas">
                <div class="col-md-3">
                    <button class="button button1 text-left" onclick="funcao1()">Login e Cadastro	<i class="fas fa-chevron-right float-right"></i></button>   
                </div>
            </div>
        </div>
        <!-- PLANOS -->
        <div class="col-md-3">    
            <div class="row afas">
                <div class="col-md-3">  
                    <button class="button button1 text-left" onclick="funcao2()">Planos	<i class="fas fa-chevron-right float-right"></i></button>   
                </div>
            </div>
        </div>
        <!-- POLITICA E PRIVACIDADE -->
        <div class="col-md-3">
            <div class="row afas">
                <div class="col-md-3">
                    <button class="button button1 text-left" onclick="funcao3()">Politica e privacidade	<i class="fas fa-chevron-right float-right"></i></button>   
                </div>
            </div>
        </div>
        <!-- POLITICA DA EMPRESA -->
        <div class="col-md-3">
            <div class="row afas">
                <div class="col-md-3">
                    <button class="button button1 text-left"onclick="funcao4()">Politica de compra<i class="fas fa-chevron-right float-right"></i></button>   
                </div>
            </div>
        </div>
        <div class="row acorde">
            <!-----------ACCORDION------------->
            <!-- esse accordion é fixo, e esse será mudado para os demais -->
            <div class="accordion" id="accordionExample">
                <div class="cardy">
                    <div class="" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h4>Como fazer meu cadastro?</h4>
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Collapsible Group Item #2
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
            <!-----------ACCORDION------------->
        </div>
      
    </section>


    
    <script>
        // funcões para trocar de pergunta,
        // essa função so funciona se o codigo estiver em linha ao inves de indentado,
        // tirei algumas classes do bootstrap para poder deixar transparente(card, card-header),
        // esse metodo não é tão viavel, mas deu certo.

        function funcao1() {
            document.getElementById("accordionExample").innerHTML = '<div id="accordion"><div class=""><div class="" id="headingOne"><h5 class="mb-0"><button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><h4>Como fazer meu cadastro?</h4></button></h5></div><div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"><div class="card-body">  Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class=""><div class="" id="headingTwo"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</button></h5></div><div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"><div class="card-body"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class=""><div class="" id="headingThree"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</button></h5></div><div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"><div class="card-body"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div></div>';
        }
        function funcao2() {
            document.getElementById("accordionExample").innerHTML = '<div id="accordion"><div class=""><div class="" id="headingOne"><h5 class="mb-0"><button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><h4>Quais são os planos</h4></button></h5></div><div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"><div class="card-body">  Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class=""><div class="" id="headingTwo"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</button></h5></div><div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"><div class="card-body"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class=""><div class="" id="headingThree"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</button></h5></div><div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"><div class="card-body"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div></div>';
        }
        function funcao3() {
            document.getElementById("accordionExample").innerHTML = '<div id="accordion"><div class=""><div class="" id="headingOne"><h5 class="mb-0"><button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><h4>E sobre a privacidade</h4></button></h5></div><div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"><div class="card-body">  Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class=""><div class="" id="headingTwo"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</button></h5></div><div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"><div class="card-body"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class=""><div class="" id="headingThree"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</button></h5></div><div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"><div class="card-body"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div></div>';
        }
        function funcao4() {
            document.getElementById("accordionExample").innerHTML = '<div id="accordion"><div class=""><div class="" id="headingOne"><h5 class="mb-0"><button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><h4>E os metodos de compra</h4></button></h5></div><div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"><div class="card-body">  Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class=""><div class="" id="headingTwo"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</button></h5></div><div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"><div class="card-body"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class=""><div class="" id="headingThree"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</button></h5></div><div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"><div class="card-body"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div></div>';
        }
    </script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>