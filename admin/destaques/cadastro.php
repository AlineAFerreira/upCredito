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
    <link href="../../assets/css/admin/cadastro-destaque.css" rel="stylesheet">
    <link href="../../assets/css/admin/dropzone.min.css" rel="stylesheet">
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
                    <div class="dashboard_graph">

                        <div class="row x_title">
                            <div class="col-md-6">
                                <h3 class="title-cad">Cadastro de <span class="type-cad"></span></h3>
                            </div>                    
                        </div>                        
                        <form class="" method="post" action="" id="form-cadastro">
                                <!-- Alterar o load do form para php -->
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
     <script src="../../assets/js/admin/dropzone.min.js"></script>
     <script src="../../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../assets/js/admin/custom.js"></script>
    <script>
        
        $(function() {
           
            var url = $('#addressUpload').val(); 
            var param = window.location.search.substring(1);
            var title = "";

            if (param.indexOf("destaques") > -1){
                $("#form-cadastro").load('../includes/form-cadastro-destaque.html');
                title = "Destaques";
            } else {
                $("#form-cadastro").load('../includes/form-cadastro-banner.html');
                title = "Banners";
            }

            $('.title-cad .type-cad').text(title);

            $("#dropbox").dropzone({ 
                    url: url,
                    maxFiles: 1,
                    acceptedFiles: 'image/*',
                    complete: function(file){
                        addNewDropzone(file);
                        this.removeFile(file);
                    }
                , createImageThumbnails: false
                , previewsContainer: false
            });     

            $("#form-cadastro").validate({
                rules: {
                    produto: {
                        required: true
                    },
                    tipo: {
                        required: true
                    },
                    descricao: {
                        required: true
                    },
                    imgDestaque: {
                        required: true
                    }                    
                },
                messages: {
                    produto: "Escolha um produto.",
                    tipo: "Escolha um tipo de destaque.",
                    descricao: "Preencha a descrição.",
                    imgDestaque: "Faça o upload de uma foto.",
                },
                submitHandler: function (form) { // for demo
                   location.href = '../destaques/index.html';
                }
            });
        });

        function getBase64 (file, callback) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                callback(reader.result);
            };
            reader.onerror = function (error) {
                console.log('Error: ', error);
            };
        };

        function removeDropImg(e) {
            $(e).parent().remove();
            $(".upload-box").removeClass("hidden");
            $('#imgDestaque').attr('value','');
            // Incluir ajax para excluir do servidor...
        };

        function addNewDropzone(file) {
            getBase64(file, function(imageurl){

                var html  = '<li class="ui-state-default">';
                    html += '<i class="fa fa-close remove-img" title="Remover imagem" onclick="removeDropImg(this)"></i>';
                    html += '<input type="hidden" name="images[]" value="'+ file.name +'">';
                    html += '<div class="box_image">';
                    html += '<img src="'+ imageurl +'" alt="imagem">';
                    html += '</div>';
                    html += '</li>';

                $(html).prependTo("#sortable");
                $('#imgDestaque').attr('value','1');
                $(".upload-box").addClass("hidden");
            });
        }; 
	</script>
  </body>
</html>
