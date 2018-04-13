<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solec | Admin </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../../node_modules/font-awesome/css/font-awesome.min.css">

    <link href="../../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css" rel="stylesheet"/>
    <link href="../../assets/css/admin/chat.css" rel="stylesheet">
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
                    <div id="produtos" class="dashboard_graph">

                        <div class="row x_title">
                            <div class="col-s-12">
                                <h3 class="title-cad">Configuração Chat
                                    <!-- <a class="btn btn-success btn-action" onclick="modalSegmento(this)" data-action="Cadastrar">Novo Segmento</a> -->
                                </h3>
                            </div>                    
                        </div>                        
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">  
                                    <form id="form-chat" method="post" action="">                              
                                        <div class="form-group col-xs-12 col-sm-6">
                                            <label for="telefone" class="control-label">Html para o chat: </label>
                                            <textarea class="form-control" rows="5" name="html" placeholder="insira aqui o html necessário para o funcionamento do chat."></textarea>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="form-group col-xs-12 col-sm-6">
                                            <label for="telefone" class="control-label">Script para o chat: </label>
                                            <textarea class="form-control" rows="5" name="script" placeholder="insira aqui o script necessário para o funcionamento do chat."></textarea>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-6 alert alert-success top_space20 hidden">
                                            Alteração realizada com sucesso!
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-6 alert alert-danger top_space20 hidden">
                                            Ocorreu um erro! Tente novamente mais tarde!
                                        </div>

                                        <div class="col-xs-12 top_space20">
                                            <a href="../index.php" class="btn btn-default">Cancelar</a>
                                            <button type="button" onclick="sendForm()" class="btn btn-success">Salvar Alterações</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
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
    <!-- Custom Theme Scripts -->
    <script src="../../assets/js/admin/custom.js"></script>
    <script>
        $(function() {
           
        });

        function sendForm () {
            var form = $("#form-contato");

            $.ajax({
                type: 'post',
                url: "#",
                data: form.serialize(),
                success: function(data){
                    console.log(data);
                    $('.alert-success').fadeIn();
                },
                error:function (xhr, ajaxOptions, thrownError){
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            }); 
        }
	</script>
  </body>
</html>
