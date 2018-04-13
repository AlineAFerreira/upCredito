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
    <link href="../../assets/css/admin/emails-lista.css" rel="stylesheet">
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
                    <div id="emails" class="dashboard_graph lista">

                        <div class="row x_title">
                            <div class="col-s-12">
                                <?php 
                                    $type = isset($_GET['type']) ? $_GET['type'] : '';
                                    switch ($type) {
                                        case "1":
                                            $text = "Caixa de Entrada";
                                            break;
                                        case "2":
                                            $text = "Favoritos";
                                            break;
                                        case "3":
                                            $text = "Spam";
                                            break;
                                        case "4":
                                            $text = "Apenas não lidos";
                                            break;
                                    }
                                ?>
                                <h3 class="title-cad">E-mail Recebidos <small>( <?php echo $text ?> )</small></h3>
                            </div>                    
                        </div>                        
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">                                
                                    <div class="table-responsive">
                                        <div class="options col-xs-12">
                                            <div class="box-select col-sm-3">
                                                <select class="form-control" onchange="refreshList(this.value);">
                                                    <option value="1" <?php echo $type == 1 ?  'selected' : '' ?>>Caixa de Entrada</option>
                                                    <option value="2" <?php echo $type == 2 ?  'selected' : '' ?>>Favoritos</option>
                                                    <option value="3" <?php echo $type == 3 ?  'selected' : '' ?>>Spam</option>
                                                    <option value="4" <?php echo $type == 4 ?  'selected' : '' ?>>Apenas Não Lidos</option>
                                                </select>
                                            </div>
                                            <div class="box-action col-sm-6">    
                                                <a title="Marcar como não lido" class="btn-lido pointer" onclick="unRead(this)">
                                                    <i class="fa fa-envelope-open-o"></i>
                                                </a>
                                                <a title="Favoritar" class="btn-fav pointer" onclick="favAll()">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a title="Excluir" class="btn-delete pointer" onclick="confirmModal(1, 1)">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a title="Spam" class="btn-spam pointer" onclick="confirmModal(2, 1)">
                                                    <i class="fa fa-ban"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <table id="datatable" class="table table-striped table-bordered">    
                                            <thead>
                                                <tr class="headings">
                                                    <th>
                                                        <input type="checkbox" id="check-all" class="flat" onchange="checkAll(this);">
                                                    </th>
                                                    <th class="column-title text-center">Data </th>
                                                    <th class="column-title text-center">Nome</th>
                                                    <th class="column-title text-center">Telefone</th>
                                                    <th class="column-title text-center">E-mail</th>
                                                    <th class="column-title text-center">Mensagem</th>
                                                    <th class="column-title text-center no-link last"><span class="nobr">Action</span>
                                                    </th>
                                                    <th class="bulk-actions" colspan="7">
                                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr id="id01" class="even pointer">
                                                    <td class="a-center ">
                                                        <input type="checkbox" class="flat" name="table_records">
                                                    </td>
                                                    <td><a class="item" data-toggle="modal" data-target="#emailModal">26/09/2017</a></td>
                                                    <td class="col-name"><a class="item" data-toggle="modal" data-target="#emailModal">
                                                        <i class="fa fa-star icon-fav"></i>Maria josé</a>
                                                    </td>
                                                    <td><a class="item" data-toggle="modal" data-target="#emailModal">(11)2525-6666</a></td>
                                                    <td><a class="item" data-toggle="modal" data-target="#emailModal">mariajose@yahoo.com.br</a></td>
                                                    <td class="a-right a-right">
                                                        <a class="item" data-toggle="modal" data-target="#emailModal">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget luctus ipsum. Curabitur accumsan augue sit amet neque fringilla consequat. Donec sed ipsum nec lorem faucibus scelerisque sit amet vel dolor. Ut et est luctus, tincidunt ante venenatis, sollicitudin sem. Vestibulum mattis nunc ut condimentum posuere. Nullam ac metus sed odio vehicula elementum. Morbi vel semper ante. Vestibulum suscipit lacinia tempus. 
                                                        </a>
                                                    </td>
                                                    <td class=" last nowrap">
                                                        <div class="box-action col-xs-12">    
                                                            <a title="Responder" class="btn-reply pointer" onclick="replyOne(this)">
                                                                <i class="fa fa-mail-reply"></i>
                                                            </a>
                                                            <a title="Marcar como lido" class="btn-lido pointer"><i class="fa fa-envelope-open-o"></i></a>

                                                            <a title="Favoritar" class="btn-fav pointer" onclick="favOne(this)"><i class="fa fa-star"></i></a>

                                                            <a title="Excluir" class="btn-delete pointer" onclick="confirmModal(1, 0)"><i class="fa fa-trash"></i></a>

                                                            <a title="Spam" class="btn-spam pointer" onclick="confirmModal(2, 0)"><i class="fa fa-ban"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr id="id02" class="even pointer">
                                                    <td class="a-center ">
                                                        <input type="checkbox" class="flat" name="table_records">
                                                    </td>
                                                    <td><a class="item" data-toggle="modal" data-target="#emailModal">28/09/2017</a></td>
                                                    <td class="col-name"><a class="item" data-toggle="modal" data-target="#emailModal">
                                                    <i class="fa fa-star icon-fav"></i>José Maria</a>
                                                    </td>
                                                    <td><a class="item" data-toggle="modal" data-target="#emailModal">(11)3636-6666</a></td>
                                                    <td><a class="item" data-toggle="modal" data-target="#emailModal">josemaria@yahoo.com.br</a></td>
                                                    <td class="a-right a-right">
                                                        <a class="item" data-toggle="modal" data-target="#emailModal">
                                                            Sollicitudin sem. Vestibulum mattis nunc ut condimentum posuere. Nullam ac metus sed odio vehicula elementum. Morbi vel semper ante. Vestibulum suscipit lacinia tempus.
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget luctus ipsum. Curabitur accumsan augue sit amet neque fringilla consequat. Donec sed ipsum nec lorem faucibus scelerisque sit amet vel dolor. Ut et est luctus, tincidunt ante venenatis, sollicitudin sem. Vestibulum mattis nunc ut condimentum posuere. Nullam ac metus sed odio vehicula elementum. Morbi vel semper ante. Vestibulum suscipit lacinia tempus. 
                                                        </a>
                                                    </td>
                                                    <td class=" last nowrap">
                                                        <div class="box-action col-xs-12">    
                                                            <a title="Responder" class="btn-reply pointer" onclick="replyOne(this)">
                                                                <i class="fa fa-mail-reply"></i>
                                                            </a>
                                                            <a title="Marcar como lido" class="btn-lido pointer"><i class="fa fa-envelope-open-o"></i></a>

                                                            <a title="Favoritar" class="btn-fav pointer" onclick="favOne(this)"><i class="fa fa-star"></i></a>
                                                            <a title="Excluir" class="btn-delete pointer" onclick="confirmModal(1, 0)"><i class="fa fa-trash"></i></a>
                                                            <a title="Spam" class="btn-spam pointer" onclick="confirmModal(2, 0)"><i class="fa fa-ban"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr id="id03" class="even pointer">
                                                    <td class="a-center ">
                                                        <input type="checkbox" class="flat" name="table_records">
                                                    </td>
                                                    <td><a class="item" data-toggle="modal" data-target="#emailModal">02/09/2017</a></td>
                                                    <td class="col-name"><a class="item" data-toggle="modal" data-target="#emailModal">
                                                    <i class="fa fa-star icon-fav"></i>Alberto Silva</a>
                                                    </td>
                                                    <td><a class="item" data-toggle="modal" data-target="#emailModal">(11)3636-6666</a></td>
                                                    <td><a class="item" data-toggle="modal" data-target="#emailModal">alberto@yahoo.com.br</a></td>
                                                    <td class="a-right a-right">
                                                        <a class="item" data-toggle="modal" data-target="#emailModal">
                                                            Sollicitudin sem. Vestibulum mattis nunc ut condimentum posuere. Nullam ac metus sed odio vehicula elementum. Morbi vel semper ante. Vestibulum suscipit lacinia tempus.
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget luctus ipsum. Curabitur accumsan augue sit amet neque fringilla consequat. Donec sed ipsum nec lorem faucibus scelerisque sit amet vel dolor. Ut et est luctus, tincidunt ante venenatis, sollicitudin sem. Vestibulum mattis nunc ut condimentum posuere. Nullam ac metus sed odio vehicula elementum. Morbi vel semper ante. Vestibulum suscipit lacinia tempus. 
                                                        </a>
                                                    </td>
                                                    <td class=" last nowrap">
                                                        <div class="box-action col-xs-12">    
                                                            <a title="Responder" class="btn-reply pointer" onclick="replyOne(this)">
                                                                <i class="fa fa-mail-reply"></i>
                                                            </a>
                                                            <a title="Marcar como lido" class="btn-lido pointer"><i class="fa fa-envelope-open-o"></i></a>
                                                            <a title="Favoritar" class="btn-fav pointer" onclick="favOne(this)"><i class="fa fa-star"></i></a>
                                                            <a title="Excluir" class="btn-delete pointer" onclick="confirmModal(1, 0)"><i class="fa fa-trash"></i></a>
                                                            <a title="Spam" class="btn-spam pointer" onclick="confirmModal(2, 0)"><i class="fa fa-ban"></i></a>
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
        </div>
        <!-- /.right_col | page content -->

        <!-- Modal -->
        <div class="modal fade" id="emailModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" onclick="CloseAllModals(this)">&times;</button>
                        <h4 class="modal-title"><strong>E-mail de </strong></h4>
                    </div>                    
                    <div class="modal-body">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="nome" class="control-label">Nome: </label>
                                <input type="text" disabled="disabled" id="nome" name="nome" class="form-control" value="Maria José">
                            </div>
                            <div class="form-group">
                                <label for="telefone" class="control-label">Telefone/Celular: </label>
                                <input type="text" disabled="disabled" id="telefone" name="telefone" class="form-control phone" value="(11)2525-6656">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">E-mail: </label>
                                <input type="text" disabled="disabled" id="email" name="email" class="form-control" value="mariajose@yahoo.com.br">
                            </div> 
                            <div class="form-group">
                                <label for="assunto" class="control-label">Assunto: </label>
                                <input type="text" disabled="disabled" id="assunto" name="assunto" class="form-control" value="Dúvidas sobre container">
                            </div>                                  
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="mensagem" class="control-label">Mensagem: </label>
                                <textarea id="mensagem" name="mensagem" rows="10" class="form-control" disabled>Boa Tarde! Gostaria de saber qual a altura do container.</textarea>
                            </div>
                        </div> 
                        <form class="col-xs-12 top_space20" action="" method="post" id="replyEmail">
                            <label for="msg-reply" class="control-label">Mensagem de resposta: </label>
                            <textarea id="msg-reply" name="msg-reply" placeholder="Digite a mensagem aqui" class="form-control" rows="5"></textarea>

                            <button type="submit" class="btn btn-info top_space10">Enviar Resposta</button>
                        </form> 
                        <div class="box-action col-xs-12">    
                            <a title="Responder" class="btn-reply pointer" onclick="replyBox();"><i class="fa fa-mail-reply"></i></a>
                            <a title="Marcar como lido" class="btn-lido pointer"><i class="fa fa-envelope-open-o"></i></a>
                            <a title="Favoritar" class="btn-fav pointer"><i class="fa fa-star"></i></a>
                            <a title="Excluir" class="btn-delete pointer" onclick="confirmModal(1, 0)"><i class="fa fa-trash"></i></a>
                            <a title="Spam" class="btn-spam pointer" onclick="confirmModal(2, 0)"><i class="fa fa-ban"></i></a>
                        </div>                 
                    </div>
                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <small class="pull-left"> (*) Campos Obrigatórios </small>
                        <button type="button" class="btn btn-dark" onclick="CloseAllModals(this)">Fechar</button>
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
            //on ready            
        });

        function CloseAllModals(){
            $(".modal").modal('hide');
            $('#msg-reply').val('');
            $('#replyEmail').slideUp();
            $('#acao').text(''); 
            $('.modal form')[0].reset();
            $(".modal form label[id*=-error]").css('display','none');
        }        

        function refreshList(val){
            console.log(val);
            var n;
            switch(val) {
                case "1":
                    // Caixa de Entrada
                    n = 1;
                    break;
                case "2":
                    // Favoritos
                    n = 2;
                    break;
                case "3":
                    // Spam
                    n = 3;
                    break;
                case "4":
                    // Apenas Não Lidos
                    n = 4;
                    break;                    
                default:
                    // 
            }

            window.location = "../emails/index.php?type=" + n;
        }

        function replyOne(e){
            $('#emailModal').modal('show');

            setTimeout(function(){
                $('#replyEmail').slideDown();
                $('#msg-reply').focus();
            }, 800);        
        }

        function replyBox(){
            $('#replyEmail').slideToggle( "slow", function() {
                $('#msg-reply').val('');
            });
        }       

        function unRead(){
            var tr;

            $("input[name=table_records]:checked").each(function(){ 
                tr = $(this).parents('tr');
                tr.addClass('unread')
                id = tr.attr('id');
            });
        }

        function favAll(){
            var tr, id;
            var items = [];

            $("input[name=table_records]:checked").each(function(n){ 
                tr = $(this).parents('tr');
                tr.find('.btn-fav').addClass('active');
                id = tr.attr('id');
                tr.addClass('fav');
                items[n] = id;       
            });  

            $.ajax({
                type: 'post',
                url: '#',
                data: {items: items},                
                success: function(data){                
                    //Incluir de remover as classes aqui no sucesso.
                },
                error:function (xhr, ajaxOptions, thrownError){
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            });     
        }

        function favOne(e){
            var tr = $(e).parents('tr');           
            var isFav = tr.hasClass('fav');
            var id = tr.attr('id');

            if (isFav) {
                $(e).removeClass('active');
                tr.removeClass('fav');
                url = '#';
            } else {
                $(e).addClass('active');
                tr.addClass('fav');
                url = '#';
            } 

            $.ajax({
                type: 'post',
                url: url,
                data: {id: id},                
                success: function(data){                
                    //Incluir de remover as classes aqui no sucesso.
                },
                error:function (xhr, ajaxOptions, thrownError){
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            });      
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
                    msg = "Excluir " + qtd + " emails?";
                } else {
                    msg = "Excluir esse email?";
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

        function deleteAll() {
            var tr, id;
            var inputs = $("input[name=table_records]:checked");
            var items = [];

            inputs.each(function(n){ 
                tr = $(this).parents('tr');
                id = tr.attr('id');  
                items[n] = id;            
            });  

            $.ajax({
                type: 'post',
                url: '?',
                data: {items: items},  
                beforeSend: function(data){  
                    console.log(items);             
                },               
                success: function(data){                
                    CloseAllModals();
                },
                error:function (xhr, ajaxOptions, thrownError){
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            }); 

            // Temporário, remover após entrar função backend.
            CloseAllModals();          
        }
	</script>
  </body>
</html>
