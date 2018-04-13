<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Aline Alves Ferreira">

    <title>Solec | Admin </title>

    <!-- Favicons ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/icons/favicon-16x16.png">
    <link rel="manifest" href="../../assets/img/icons/manifest.json">
    <link rel="mask-icon" href="../../assets/img/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../../assets/img/icons/favicon.ico">
    <meta name="msapplication-config" content="../../assets/img/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../../node_modules/font-awesome/css/font-awesome.min.css">

    <link href="../../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css" rel="stylesheet"/>
    <link href="../../assets/css/admin/cadastro-usuario.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
            <?php require_once('../includes/nav-left.html'); ?>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <?php require_once('../includes/nav-top.html'); ?>            
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="box-formProduto" class="">

                        <div class="row x_title">
                            <div class="col-md-6">
                                <h3 class="title-cad">Cadastro de Usuário</h3>
                            </div>                    
                        </div>                        
                        <form class="" method="post" action="" id="form-usuario">
                            <div class="col-xs-12">

                            <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Dados Gerais</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content"> 
                                        <div class="form-group col-xs-12 col-sm-6">
                                            <label for="nome" class="control-label">Nome*: </label>
                                            <input type="text" id="nome" name="nome" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="email" class="control-label">E-mail*: </label>
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="telefone" class="control-label">Telefone: </label>
                                            <input type="text" id="telefone" name="telefone" class="form-control phone" placeholder="(00)0000-0000">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="celular" class="control-label">Celular: </label>
                                            <input type="text" id="celular" name="celular" class="form-control cel-mask" placeholder="(00)00000-0000">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="cargo" class="control-label">Função/ Cargo: </label>
                                            <input type="text" id="cargo" name="cargo" class="form-control">
                                        </div>                                    
                                    </div>
                                </div>

                                <div class="col-xs-12 top_space20">
                                    <small>(*) Campos obrigatórios </small><br>
                                </div>

                                <div class="col-xs-12 top_space20">
                                    <a href="index.php" class="btn btn-default">Cancelar</a>
                                    <!-- To do Exibir apenas na edição -->
                                    <a class="btn btn-danger hidden" data-toggle="modal" data-target="#deleteModal">Excluir</a>
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </div>
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
            <br />
        </div>
        <!-- /.right_col | page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

    <!-- jQuery -->
    <script type="text/javascript" src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../../assets/js/jquery.mask.js"></script>
    <script src="../../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../assets/js/admin/custom.js"></script>
    <script>

        $(function() {
            $('.phone').mask('(00)0000-0000');
            $('.cel-mask').mask('(00)00000-0000');
   

            $("#form-usuario").validate({
                rules: {
                    nome: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true       
                    }
                  
                },
                messages: {
                    nome: "Informe o nome do usuário.",
                    email: {
                        required: "Informe o e-mail do usuário.",
                        email: "Por favor, informe um e-mail válido."
                    }
                },
                submitHandler: function (form) { // for demo
                   location.href = '../usuarios/index.php';
                }
            });
        });

	</script>
  </body>
</html>
