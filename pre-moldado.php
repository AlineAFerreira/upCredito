<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <meta name="description" content="Solec">
        <meta name="keywords" content="">
        <meta name="author" content="Aline Alves Ferreira">

        <!-- Favicons ================================================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icons/favicon-16x16.png">
        <link rel="manifest" href="assets/img/icons/manifest.json">
        <link rel="mask-icon" href="assets/img/icons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="assets/img/icons/favicon.ico">
        <meta name="msapplication-config" content="assets/img/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">     

           <!-- Bootstrap & Icons ================================================== -->
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="node_modules/ionicons/css/ionicons.min.css"> 


        <link rel="stylesheet" href="assets/css/products-list.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>
  <body>
    <header id="headerBar" class="cbp-af-header">
        <?php require_once("includes/header.html"); ?>
    </header>

    <div id="products-list" class="container">
        <!-- Filter Controls - Simple Mode -->
        <div class="row">
            <div class="col-xs-12">
                <div class="heading">
                    <span>Confira nossas soluções</span>                        
                    <h1>Pré-moldado</h1>                    
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="simplefilter">
                <li class="active" data-filter="all">Todos</li>
                <li data-filter="1">Decorativo</li>
                <li data-filter="2">Residencial</li>
                <li data-filter="3">Comercial</li>
                <li data-filter="4">industrial</li>
                <li data-filter="5">Agro</li>
            </ul>
        </div>

        
        <div class="row">
            <!-- Search control -->
            <div class="search-row">
                <label for="filtr-search">Busca Rápida:</label>
                <input type="text" id="filtr-search" class="filtr-search" name="filtr-search" data-search placeholder="Digite aqui o que deseja encontrar.">
            </div>
            <!-- Sort Controls -->
            <select id="sortingOpt" data-sortOrder>
                <option value="null"> Ordenar por... </option>
               <option value="asc"> Menor Preço </option>
               <option value="desc"> Maior Preço </option>
            </select>
        </div>

        <div class="row">
            <div class="filtr-container">
                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1, 2" data-sort="Busy streets" data-value="25000">
                    <a href="detalhes-produto.php">
                        <div class="box-img">
                            <img class="img-responsive" src="assets/img/filterizr/city_2.jpg" alt="sample image">
                            <span class="item-desc">R$ 25.000,00</span>
                        </div>
                        <h2 class="ellipsis" title="Nome do produto aqui"><strong>Decorativo - Residencial Lorem ipsum dolor sit amet. </strong> com <strong>50m² </strong></h2> 
                    </a>
                    <div class="box-buttons">
                        <a href="detalhes-produto.php" class="btn-prod detalhes">Detalhes</a>
                        <a href="detalhes-produto.php#condicoes" class="btn-prod comprar">Comprar</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="2, 5" data-sort="Luminous night" data-value="22000">
                    <a href="detalhes-produto.php">
                        <div class="box-img">
                            <img class="img-responsive" src="assets/img/filterizr/2.jpg" alt="sample image">
                            <span class="item-desc">R$ 22.000,00</span>
                        </div>
                        <h2 class="ellipsis" title="Nome do produto aqui"><strong> Residencial e Agro</strong> com <strong>50m²  Lorem ipsum dolor sit amet</strong></h2> 
                    </a>
                    <div class="box-buttons">
                        <a href="detalhes-produto.php" class="btn-prod detalhes">Detalhes</a>
                        <a href="detalhes-produto.php#condicoes" class="btn-prod comprar">Comprar</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1, 4" data-sort="" data-value="23000">
                    <a href="detalhes-produto.php">
                        <div class="box-img">
                            <img class="img-responsive" src="assets/img/filterizr/3.jpg" alt="sample image">
                            <span class="item-desc">R$ 23.000,00</span>
                        </div>
                        <h2 class="ellipsis" title="Nome do produto aqui"><strong>Decorativo - Industrial</strong> com <strong>50m² </strong></h2> 
                    </a>
                    <div class="box-buttons">
                        <a href="detalhes-produto.php" class="btn-prod detalhes">Detalhes</a>
                        <a href="detalhes-produto.php#condicoes" class="btn-prod comprar">Comprar</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3" data-sort="" data-value="21500">
                    <a href="detalhes-produto.php">
                        <div class="box-img">
                            <img class="img-responsive" src="assets/img/filterizr/4.jpg" alt="sample image">
                            <span class="item-desc">R$ 21.500,00</span>
                        </div>
                        <h2 class="ellipsis" title="Nome do produto aqui"><strong>Container Comercial</strong> com <strong>50m² </strong></h2> 
                    </a>
                    <div class="box-buttons">
                        <a href="detalhes-produto.php" class="btn-prod detalhes">Detalhes</a>
                        <a href="detalhes-produto.php#condicoes" class="btn-prod comprar">Comprar</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3, 4" data-sort="" data-value="23500">
                    <a href="detalhes-produto.php">
                        <div class="box-img">
                            <img class="img-responsive" src="assets/img/filterizr/5.jpg" alt="sample image">
                            <span class="item-desc">R$ 23.500,00</span>
                        </div>
                        <h2 class="ellipsis" title="Nome do produto aqui"><strong>Comercial e Industrial</strong> com <strong>50m² </strong></h2> 
                    </a>
                    <div class="box-buttons">
                        <a href="detalhes-produto.php" class="btn-prod detalhes">Detalhes</a>
                        <a href="detalhes-produto.php#condicoes" class="btn-prod comprar">Comprar</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="2, 4" data-sort="" data-value="29500">
                    <a href="detalhes-produto.php">
                        <div class="box-img">
                            <img class="img-responsive" src="assets/img/filterizr/nature_1.jpg" alt="sample image">
                            <span class="item-desc">R$ 29.500,00</span>
                        </div>
                        <h2 class="ellipsis" title="Nome do produto aqui"><strong>Residencial e Industrial</strong> com <strong>50m² </strong></h2> 
                    </a>
                    <div class="box-buttons">
                        <a href="detalhes-produto.php" class="btn-prod detalhes">Detalhes</a>
                        <a href="detalhes-produto.php#condicoes" class="btn-prod comprar">Comprar</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="1, 5" data-sort="" data-value="29500">
                    <a href="detalhes-produto.php">
                        <div class="box-img">
                            <img class="img-responsive" src="assets/img/filterizr/city_2.jpg" alt="sample image">
                            <span class="item-desc">R$ 29.500,00</span>
                        </div>
                        <h2 class="ellipsis" title="Nome do produto aqui"><strong>Decorativo e Agro</strong> com <strong>50m² </strong></h2> 
                    </a>
                    <div class="box-buttons">
                        <a href="detalhes-produto.php" class="btn-prod detalhes">Detalhes</a>
                        <a href="detalhes-produto.php#condicoes" class="btn-prod comprar">Comprar</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="2, 4" data-sort="" data-value="24300">
                    <a href="detalhes-produto.php">
                        <div class="box-img">
                            <img class="img-responsive" src="assets/img/filterizr/nature_3.jpg" alt="sample image">
                            <span class="item-desc">R$ 24.300,00</span>
                        </div>
                        <h2 class="ellipsis" title="Nome do produto aqui"><strong>Residencial Industrial</strong> com <strong>50m² </strong></h2> 
                    </a>
                    <div class="box-buttons">
                        <a href="detalhes-produto.php" class="btn-prod detalhes">Detalhes</a>
                        <a href="detalhes-produto.php#condicoes" class="btn-prod comprar">Comprar</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 filtr-item" data-category="3" data-sort="" data-value="19300">
                    <a href="detalhes-produto.php">
                        <div class="box-img">
                            <img class="img-responsive" src="assets/img/filterizr/industrial_3.jpg" alt="sample image">
                            <span class="item-desc">R$ 19.300,00</span>
                        </div>
                        <h2 class="ellipsis" title="Nome do produto aqui"><strong>Container Comercial</strong> com <strong>50m² </strong></h2> 
                    </a>
                    <div class="box-buttons">
                        <a href="detalhes-produto.php" class="btn-prod detalhes">Detalhes</a>
                        <a href="detalhes-produto.php#condicoes" class="btn-prod comprar">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <section id="tf-footer" class="text-center">
        <?php require_once("includes/footer.html"); ?>
    </section>

    <a id="backToTop" class="" type="button" title="Volta para o topo" onclick="backtotop();">
        <div class="border"></div>
        <i class="ion-arrow-up-a"></i>
    </a>

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/desandro-classie/classie.js"></script>
    <script type="text/javascript" src="assets/js/cbpAnimatedHeader.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script src="assets/js/jquery.filterizr.min.js"></script>
    <script src="assets/js/veja-mais.js"></script>
  </body>
</html>
