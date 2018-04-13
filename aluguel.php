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
        
        <!-- Animated css ================================================ -->
        <link rel="stylesheet" type="text/css" href="node_modules/animate.css/animate.min.css"/>

        <!-- Stylesheet ================================================== -->
        <link rel="stylesheet" type="text/css" href="assets/css/aluguel.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target=".navigation">
        <div class="animation">
            <header id="headerBar" class="cbp-af-header">
                <?php require_once("includes/header.html"); ?>
            </header>

            <section id="aluguel" class="temp-height">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 hidden">
                            <div class="heading">
                                <span>...</span>                        
                                <h1>More de Aluguel</h1>                    
                            </div>
                        </div>
                        <div class="col-xs-12 under-construction">
                            <div class="centered">
                                <a class="" href="index.php">
                                    <img src="assets/img/logo.png" class="logo" alt="Solec" title="Solec" width="240px">
                                </a>
                                <h1><strong>Página em construção</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>                           

            <!-- Footer Section -->
            <section id="tf-footer" class="text-center">
                <?php require_once("includes/footer.html"); ?> 
            </section>
        </div>

        <a id="backToTop" class="" type="button" title="Volta para o topo" onclick="backtotop();">
            <div class="border"></div>
            <i class="ion-arrow-up-a"></i>
        </a>

        <!-- Javascripts -->
        <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Wow JS -->
        <script type="text/javascript" src="node_modules/wowjs/dist/wow.min.js"></script>
        <script> new WOW().init();</script>
        <script type="text/javascript" src="node_modules/desandro-classie/classie.js"></script>
        <script type="text/javascript" src="assets/js/cbpAnimatedHeader.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript">

        </script>
    </body>
</html>