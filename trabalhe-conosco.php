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
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/icons/apple-touch-icon.png">
    	<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/icons/favicon-32x32.png">
    	<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/icons/favicon-16x16.png">
    	<link rel="manifest" href="../assets/img/icons/manifest.json">
    	<link rel="mask-icon" href="../assets/img/icons/safari-pinned-tab.svg" color="#5bbad5">
    	<link rel="shortcut icon" href="../assets/img/icons/favicon.ico">
    	<meta name="msapplication-config" content="../assets/img/icons/browserconfig.xml">
    	<meta name="theme-color" content="#ffffff">

        <!-- Bootstrap & Icons ================================================== -->
        <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../node_modules/ionicons/css/ionicons.min.css"> 

        <!-- Stylesheet ================================================== -->
        <link rel="stylesheet" type="text/css" href="../assets/css/trabalhe-conosco.css">

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
            
            <section id="trabalhe-conosco" class="temp-height">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 bottom_space30">
                            <div class="heading">
                                <span>Faça parte da nossa equipe</span>                        
                                <h1>Trabalhe conosco</h1>                    
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 form-col">
                            <p class="text">
                                Confira ao lado nossas vagas ou se preferir envie seu currículo para cadastrarmos em nossa base de dados.
                            </p>

                            <form action="" method="" id="formCurriculo">
                                <label for="nome">Nome*:</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">

                                <label for="email">E-mail*:</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Digite seu e-mail">

                                <label for="telefone">Telefone*:</label>
                                <input type="text" class="form-control phone" name="telefone" id="telefone" placeholder="(00)0000-0000">

                                <label for="celular">Celular:</label>
                                <input type="text" class="form-control cel-mask" name="celular" id="celular" placeholder="(00)00000-0000">

                                <label for="resumo">Resumo*:</label>
                                <textarea class="form-control" name="resumo" id="resumo" placeholder="Escreva um resumo do seu currículo, contento as informações principais, como experiências anteriores, certificações, etc." rows="5"></textarea>

                                <label for="fileResume" class="btn-upload"><i class="fa fa-upload"></i> Upload do Currículo</label>
                                <input type="file" name="fileResume" id="fileResume">

                                <small class="block">(*) Campos obrigatórios.</small>

                                <button type="submit" id="btn-enviar" class="btn btn-info w100">Enviar</button>
                            </form>
                        </div>
                        <div class="col-xs-12 col-md-9">
                            <div class="job-item">
                                <a href="detalhes-job.php?id=003">
                                    <div class="line">
                                        <h2 class="job-title">
                                            Auxiliar Administrativo - 
                                            <span class="code">Código: 010</span>
                                        </h2>

                                        <p class="date">Data da publicação: 02/10/2017</p>
                                        
                                        <div class="job-type"> 
                                            CLT - Efetivo
                                        </div>
                                        <div class="box-pcd" title="Essa é uma vaga exclusiva para pessoas com Deficiência."> 
                                            <i class="fa fa-wheelchair pcd"></i>
                                            <span class="text-pcd">Essa é uma vaga exclusiva para pessoas com Deficiência.</span>
                                        </div>
                                    </div>

                                    <p class="job-sallary">
                                        <i class="fa fa-money"></i> A combinar
                                    </p>
                                    <p class="job-location">
                                        <i class="fa fa-map-marker"></i> São Paulo - SP
                                    </p>                                    
                                </a>
                            </div>
                            <div class="job-item">
                                <a href="detalhes-job.php?id=003">
                                    <div class="line">
                                        <h2 class="job-title">
                                            Auxiliar Administrativo - 
                                            <span class="code">Código: 003</span>
                                        </h2>

                                        <p class="date">Data da publicação: 02/10/2017</p>
                                        
                                        <div class="job-type"> 
                                            Prestador de serviços - PJ
                                        </div>
                                    </div>

                                    <p class="job-sallary">
                                        <i class="fa fa-money"></i> R$ 2.100,00
                                    </p>
                                    <p class="job-location">
                                        <i class="fa fa-map-marker"></i> São Paulo - SP
                                    </p>                                    
                                </a>
                            </div>
                            <div class="job-item">
                                <a href="detalhes-job.php?id=003">
                                    <div class="line">
                                        <h2 class="job-title">
                                            Auxiliar Administrativo - 
                                            <span class="code">Código: 003</span>
                                        </h2>

                                        <p class="date">Data da publicação: 02/10/2017</p>
                                        
                                        <div class="job-type"> 
                                            Temporário
                                        </div>
                                    </div>

                                    <p class="job-sallary">
                                        <i class="fa fa-money"></i> R$ 2.100,00
                                    </p>
                                    <p class="job-location">
                                        <i class="fa fa-map-marker"></i> São Paulo - SP
                                    </p>                                    
                                </a>
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
        <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../node_modules/desandro-classie/classie.js"></script>
        <script type="text/javascript" src="../assets/js/cbpAnimatedHeader.min.js"></script>
        <script type="text/javascript" src="../assets/js/main.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.mask.js"></script>
        <script src="../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.phone').mask('(00)0000-0000');
                $('.cel-mask').mask('(00)00000-0000');

                $("#formCurriculo").validate({
                    rules: {
                        nome: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true 
                        },
                        telefone: {
                            required: true,
                            minlength: 13
                        },
                        resumo: {
                            required: true
                        }                    
                    },
                    messages: {
                        nome: "Informe o seu nome.",
                        email: {
                            required: "Informe o seu e-mail.",
                            email: "Por favor, informe um e-mail válido."
                        },
                        telefone: {
                            required: "Informe o seu telefone para contato.",
                            minlength: "Telefone inválido.",
                        },
                        resumo: "Faça um resumo do seu currículo."
                    },
                    submitHandler: function (form) { // for demo
                       // location.href = '';
                    }
                });
            });
        </script>
    </body>
</html>