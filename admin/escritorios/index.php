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
    <link href="../../assets/css/admin/dataTable/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/admin/dataTable/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/admin/dataTable/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/admin/dataTable/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/admin/dataTable/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/admin/listagem.css" rel="stylesheet">
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
                    <div id="escritorios" class="dashboard_graph lista">

                        <div class="row x_title">
                            <div class="col-s-12">
                                <h3 class="title-cad">Escritórios Cadastrados
                                    <a href="cadastro.php" class="btn btn-success btn-action">Novo Escritório</a>
                                </h3>
                            </div>                    
                        </div>                        
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">     
                                    <div class="options col-xs-12">
                                        <div class="row">
                                            <div class="box-action col-xs-12">    
                                                <a title="Excluir" class="btn-delete pointer" onclick="confirmModal(1, 1)">
                                                    <i class="fa fa-trash"></i> <span>Excluir selecionados</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>                           
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="check-all" class="flat" onchange="checkAll(this);"></th>
                                                <th>Unidade</th>
                                                <th>Endereço</th>
                                                <th>Telefone Fixo</th>
                                                <th>Celular</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="id_escritorio" class="row-produto">
                                                <td><input type="checkbox" class="flat"  name="table_records"></td>
                                                <td>Morumbi <i class="fa fa-check-circle text-success left_space10 fa-lg" title="Exibindo no site"></i></td>
                                                <td>Rua Doutor Luiz Migliano, 1986 - Sala 100, Morumbi - São Paulo/SP - 00058-000</td>
                                                <td>(11)5513-2521</td>
                                                <td>(11)95513-2521</td>
                                                <td>
                                                    <div class="box-action">
                                                        <a href="../escritorios/editar.php?id=1" title="Editar" class="btn-edit"><i class="fa fa-edit"></i></a>
                                                        <a title="Excluir" class="btn-delete pointer" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr> 
                                            <tr id="id_escritorio" class="row-produto">
                                                <td><input type="checkbox"  name="table_records" class="flat"></td>
                                                <td>Paulista</td>
                                                <td>Avenida Paulista, 1986 - Sala 100, Bela Vista - São Paulo/SP - 00058-000</td>
                                                <td>(11)5223-2521</td>
                                                <td>(11)92213-2521</td>
                                                <td>
                                                    <div class="box-action">
                                                        <a href="../escritorios/editar.php?id=1" title="Editar" class="btn-edit"><i class="fa fa-edit"></i></a>
                                                        <a title="Excluir" class="btn-delete pointer" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                    

                    </div>
                </div>
            </div>
        </div>
        <!-- /.right_col | page content -->

        <!-- Modal -->
        <div class="modal fade modalAlert" id="deleteModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <p class="text">Excluir esse <span id="msg-type"></span>?</p>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" onclick="deleteObj(2)">Excluir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade modalAlert" id="confirmModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <p id="acao" class="text"></p>
                        <button type="button" class="btn btn-default" onclick="CloseAllModals()">Cancelar</button>
                        <button type="button" id="btnAction" class="btn btn-danger" onclick="">Confirmar</a>
                    </div>
                </div>
            </div>
        </div>

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
     <script src="../../assets/js/admin/dropzone.min.js"></script>
     <script src="../../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- Datatables -->
    <script src="../../assets/js/admin/dataTable/jquery.dataTables.min.js"></script>
    <script src="../../assets/js/admin/dataTable/dataTables.bootstrap.min.js"></script>
    <script src="../../assets/js/admin/dataTable/dataTables.buttons.min.js"></script>
    <script src="../../assets/js/admin/dataTable/buttons.bootstrap.min.js"></script>
    <script src="../../assets/js/admin/dataTable/buttons.flash.min.js"></script>
    <script src="../../assets/js/admin/dataTable/buttons.html5.min.js"></script>
    <script src="../../assets/js/admin/dataTable/buttons.print.min.js"></script>
    <script src="../../assets/js/admin/dataTable/dataTables.fixedHeader.min.js"></script>
    <script src="../../assets/js/admin/dataTable/dataTables.keyTable.min.js"></script>
    <script src="../../assets/js/admin/dataTable/dataTables.responsive.min.js"></script>
    <script src="../../assets/js/admin/dataTable/responsive.bootstrap.js"></script>
    <script src="../../assets/js/admin/dataTable/dataTables.scroller.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../assets/js/admin/custom.js"></script>
    <script src="../../assets/js/admin/main.js"></script>
    <script>
        
        $(function() {
            $('#msg-type').text('escritório');            
        });

        function deleteObj (type){
            $("#deleteModal").modal('hide');
        }

        function confirmModal(act, a){
            var inputs = $("input[name=table_records]:checked");
            var qtd = inputs.length;

            if (a == 1 && qtd == 0) {
                return false;
            }

            if (a == 0) {
                qtd = 1;
            }

            if (act == 1) {
                //Excluir
                if(qtd > 1){
                    msg = "Excluir " + qtd + " itens?";
                } else {
                    msg = "Excluir esse item?";
                }
            }
            if (act == 2) {
                //Spam
                if(qtd > 1){
                    msg = "Marcar " + qtd + " emails como spam?";
                } else {
                    msg = "Marcar esse email como spam?";
                }
            }
            
            $('#confirmModal').modal('show').find('#acao').text(msg);
        }

        function CloseAllModals(){
            $(".modal").modal('hide');
            $('#msg-reply').val('');
            $('#replyEmail').slideUp();
            $('#acao').text(''); 
            $('.modal form')[0].reset();
            $(".modal form label[id*=-error]").css('display','none');
        }
	</script>
  </body>
</html>
