
<?php



?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
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
    <section class="container">
        <div class=" marge">
            <h1 class="mt-5">PERGUNTAS FREQUENTES</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <button onclick="funcao()">Login e Cadastro	&#9002</button>   
            </div>
            <p id="paragrafo">Rola</p>
        </div>
        <div class="row">
            <div class="col-md-3">  
                <button>Planos	&#9002</button>   
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <button>Politica e privacidade	&#9002</button>   
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <button>Politica de compra	&#9002</button>   
            </div>
        </div>
    </section>


    
    <script>
        function funcao() {
            document.getElementById("paragrafo").innerHTML = '<div id="accordion"><div class="card"><div class="card-header" id="headingOne"><h5 class="mb-0"><button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Collapsible Group Item #1</button></h5></div><div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"><div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class="card"><div class="card-header" id="headingTwo"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</button></h5></div><div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"><div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div><div class="card"><div class="card-header" id="headingThree"><h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</button></h5></div><div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"><div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent heard of them accusamus labore sustainable VHS.</div></div></div></div>';
        }
    </script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>