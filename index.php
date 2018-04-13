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
        <link rel="apple-touch-icon" sizes="180x180" href="">
    	<link rel="icon" type="image/png" sizes="32x32" href="">
    	<link rel="icon" type="image/png" sizes="16x16" href="">
    	<link rel="manifest" href="">
    	<link rel="mask-icon" href="" color="#5bbad5">
    	<link rel="shortcut icon" href="">
    	<meta name="msapplication-config" content="">
    	<meta name="theme-color" content="#ffffff">

        <!-- Bootstrap & Icons ================================================== -->
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="node_modules/ionicons/css/ionicons.min.css"> 
        
        <!-- Animated css ================================================ -->
        <link rel="stylesheet" type="text/css" href="node_modules/animate.css/animate.min.css"/>

        <!-- Stylesheet ================================================== -->
        <link rel="stylesheet" type="text/css" href="assets/libs-css/slick.css">
        <link rel="stylesheet" type="text/css" href="assets/css/home.css">

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

            <div id="carousel-solec" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-solec" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-solec" data-slide-to="1"></li>
                    <li data-target="#carousel-solec" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="assets/img/banner_duvidas.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/img/banner_politicauso.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/img/sample.jpg" alt="">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-solec" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-solec" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- / #carousel-solec -->

            <div class="contact-vertical">
                <div class="box box-shadow">
                    <div class="line">
                        <i class="fa fa-phone"></i>
                        11.4502-3333
                    </div>
                    <div class="line">
                        <a href="#">                                
                            <i class="fa fa-comments"></i>  
                            Chat                          
                        </a>
                    </div>
                    <div class="line">
                        <a class="pointer" data-toggle="modal" data-target="#contatoModal">                                
                            <i class="fa fa-envelope-o"></i>
                            E-mail                    
                        </a>
                    </div>
                    <div class="line">
                        <a href="#">                                
                            <i class="fa fa-whatsapp"></i>
                            Whats
                        </a>
                    </div>
                </div>
            </div>

            <div class="main col-xs-12">
                <section id="carousel-pj">
                    <div class="slider">
                        <div class="item-slider">
                            <div class="item-header"> Consórcio Imobiliário </div>
                            <div class="item-body">
                                <ul>
                                    <li> Sem Burocracia;</li>
                                    <li> Sem Necessidade de comprovação de renda;</li>
                                    <li> Sem Análise de restrições financeiras;</li>
                                    <li> Sem Juros;</li>
                                    <li> Parcelas que cabem no seu bolso;</li>
                                </ul>

                                <button class="btn-action">Saiba Mais</button>
                            </div>
                        </div>
                        <div class="item-slider">
                            <div class="item-header"> Consórcio Auto </div>
                            <div class="item-body">
                                <ul>
                                    <li> Sem Burocracia;</li>
                                    <li> Sem Necessidade de comprovação de renda;</li>
                                    <li> Sem Análise de restrições financeiras;</li>
                                </ul>

                                <button class="btn-action">Saiba Mais</button>
                            </div>
                        </div>
                        <div class="item-slider">
                            <div class="item-header"> Crédito Imobiliário </div>
                            <div class="item-body">
                                <ul>
                                    <li> Sem Burocracia;</li>
                                    <li> Sem Necessidade de comprovação de renda;</li>
                                    <li> Sem Análise de restrições financeiras;</li>
                                    <li> Sem Juros;</li>
                                    <li> Parcelas que cabem no seu bolso;</li>
                                    <li> Facilitamos seu Crédito;</li>
                                    <li> Muitas Vantagens;</li>
                                </ul>

                                <button class="btn-action">Saiba Mais</button>
                            </div>
                        </div>
                        <div class="item-slider">
                            <div class="item-header"> Refinanciamento de Imóveis </div>
                            <div class="item-body">
                                <ul>                                
                                    <li> Facilitamos seu Crédito;</li>
                                    <li> Muitas Vantagens;</li>
                                </ul>

                                <button class="btn-action">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="carousel-pf" class="hidden">
                    <div class="slider">
                        <div class="item-slider">
                            <div class="item-header"> Consórcio Imobiliário </div>
                            <div class="item-body">
                                <ul>
                                    <li> Sem Burocracia;</li>
                                    <li> Sem Necessidade de comprovação de renda;</li>
                                    <li> Sem Análise de restrições financeiras;</li>
                                    <li> Sem Juros;</li>
                                    <li> Parcelas que cabem no seu bolso;</li>
                                </ul>

                                <button class="btn-action">Saiba Mais</button>
                            </div>
                        </div>
                        <div class="item-slider">
                            <div class="item-header"> Consórcio Auto </div>
                            <div class="item-body">
                                <ul>
                                    <li> Sem Burocracia;</li>
                                    <li> Sem Necessidade de comprovação de renda;</li>
                                    <li> Sem Análise de restrições financeiras;</li>
                                </ul>

                                <button class="btn-action">Saiba Mais</button>
                            </div>
                        </div>
                        <div class="item-slider">
                            <div class="item-header"> Crédito Imobiliário </div>
                            <div class="item-body">
                                <ul>
                                    <li> Sem Burocracia;</li>
                                    <li> Sem Necessidade de comprovação de renda;</li>
                                    <li> Sem Análise de restrições financeiras;</li>
                                    <li> Sem Juros;</li>
                                    <li> Parcelas que cabem no seu bolso;</li>
                                    <li> Facilitamos seu Crédito;</li>
                                    <li> Muitas Vantagens;</li>
                                </ul>

                                <button class="btn-action">Saiba Mais</button>
                            </div>
                        </div>
                        <div class="item-slider">
                            <div class="item-header"> Refinanciamento de Imóveis </div>
                            <div class="item-body">
                                <ul>                                
                                    <li> Facilitamos seu Crédito;</li>
                                    <li> Muitas Vantagens;</li>
                                </ul>

                                <button class="btn-action">Saiba Mais</button>
                            </div>
                        </div>
                    </div>
                </section>    
            </div>    
            <div class="clearfix"></div>                 

            <!-- Footer Section -->
            <section id="tf-footer" class="text-center">
                <?php require_once("includes/footer.html"); ?>    
            </section>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="contatoModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="" method="post" action="" id="form-contato">
                        <div class="modal-header">
                            <button type="button" class="close" onclick="closeModal(this)">&times;</button>
                            <h4 class="modal-title"><strong>Fale por e-mail</strong></h4>
                        </div>                    
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="nome" class="control-label">Nome*: </label>
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="telefone" class="control-label">Telefone/Celular*: </label>
                                    <input type="text" id="telefone" name="telefone" class="form-control phone" placeholder="Digite o seu telefone">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">E-mail*: </label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Digite o seu e-mail">
                                </div> 
                                <div class="form-group">
                                    <label for="assunto" class="control-label">Assunto: </label>
                                    <input type="text" id="assunto" name="assunto" class="form-control" placeholder="Digite o assunto">
                                </div>                                  
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="mensagem" class="control-label">Mensagem*: </label>
                                    <textarea id="mensagem" name="mensagem" rows="10" class="form-control"></textarea>
                                </div>
                            </div>                       
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer">
                            <small class="pull-left"> (*) Campos Obrigatórios </small>
                            <button type="button" class="btn btn-default" onclick="closeModal(this)">Cancelar</button>
                            <button type="submit" id="submitSeg" class="btn btn-dark">Enviar</a>
                        </div> 
                    </form>                   
                </div>
            </div>
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
        <script type="text/javascript" src="assets/js/jquery.mask.js"></script> 
        <script type="text/javascript" src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script> 
        <script type="text/javascript" src="assets/libs-js/slick.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.slider').slick({
                    centerMode: true,
                    infinite: true,
                    centerPadding: '0px',
                    slidesToShow: 3,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 3
                            }
                        },
                        {
                        breakpoint: 480,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            })
        </script>
    </body>
</html>