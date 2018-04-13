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
    <link href="../../assets/css/admin/cadastro-produto.css" rel="stylesheet">
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
                    <div id="box-formProduto" class="">

                        <div class="row x_title">
                            <div class="col-md-6">
                                <h3 class="title-cad">Cadastro de Produto</h3>
                            </div>                    
                        </div>                        
                        <form class="" method="post" action="" id="form-cadastro">
                            <div class="col-xs-12">

                            <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Características</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content"> 
                                        <div class="form-group col-xs-12 col-sm-6 col-md-8">
                                            <label for="nome" class="control-label">Nome do Produto*: </label>
                                            <input type="text" id="nome" name="nome" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                                            <label for="area" class="control-label">Área Útil*: </label>
                                            <input type="text" id="area" name="area" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="quartos" class="control-label">Dormitórios*: </label>
                                            <input type="text" id="quartos" name="quartos" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="salas" class="control-label">Salas*: </label>
                                            <input type="text" id="salas" name="salas" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="banheiros" class="control-label">Banheiros*: </label>
                                            <input type="text" id="banheiros" name="banheiros" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="suites" class="control-label">Suítes*: </label>
                                            <input type="text" id="suites" name="suites" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12 col-md-4">
                                            <label for="tipo" class="control-label">Tipo*: </label>
                                            <select class="form-control" id="tipo" name="tipo">
                                                <option value="">Selecione...</option>
                                                <option value="1">Container</option>
                                                <option value="2">Pré-moldado</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-12 col-md-4">
                                            <label for="segmento" class="control-label">Segmento*: </label>
                                            <select class="form-control" id="segmento" name="segmento">
                                                <option value="">Selecione...</option>
                                                <option value="1">Residencial</option>
                                                <option value="2">Comercial</option>
                                                <option value="2">Decorativo</option>
                                                <option value="2">industrial</option>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group col-xs-12 col-sm-6 col-md-4">
                                            <label for="valorTotal" class="control-label">Valor Total*: </label>
                                            <input type="text" id="valorTotal" name="valorTotal" class="form-control money" placeholder="R$">
                                        </div> -->
                                        <div class="form-group col-xs-12">
                                            <label for="descricao">Descrição*: </label>
                                            <textarea id="descricao" rows="5" class="form-control" name="descricao"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Upload de Imagens e Videos <small> Faça o upload de pelo menos uma foto</small></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <section id="uploadImages" class="col-xs-12">   
                                            <div class="container_upload">
                                                <div class="droppreview"></div>

                                                <input type="hidden" name="_token" value="">
                                                <ul id="sortable" class="ui-sortable">
                                                    <input type="hidden" id="addressUpload" value="http://localhost:8090/bmape/public/proprietario/upload" class="ui-sortable-handle" style="">
                                                    <li class="upload-box ui-sortable-handle">
                                                        <p class="text">
                                                            Clique aqui para selecionar imagens do produto
                                                        </p>
                                                        <div class="dropform dz-clickable" id="dropbox"></div>
                                                    </li>                                       
                                                </ul>
                                            </div>
                                            <input type="text" id="imgDestaque" name="imgDestaque" value="" style="width:100%; visibility: hidden;">

                                            <!-- <div class="videos-inputs top_space40">
                                                <div class="form-group line-video">                                       
                                                    <div class="box-input-video first form-group col-xs-12 col-sm-8">
                                                        <label class="control-label">Vídeo do produto:</label>
                                                        <input type="url" name="video[]" class="form-control" placeholder="Insira aqui o link do vídeo...">
                                                        <i class="fa fa-close text-alert remove-video hidden" onclick="removeInput(this)"></i>
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="col-sm-6 top_space30 bottom_space30">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-8">
                                                            <button type="button" class="btn btn-info addVideo" onclick="duplicate();">
                                                                Adicionar mais videos &nbsp;
                                                                <span class="fa fa-plus"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 hidden">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for=""></label>
                                                        </div>
                                                    </div>
                                                    <button class="btn-solec danger removeVideo" onclick="removeVideo(event, $(this).parent().parent().parent())">
                                                        <span class="fa fa-remove"></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="clearfix" id="recebeVideos"></div> -->
                                        </section>
                                    </div>
                                </div>                                 

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Acabamento Interno</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="acab1" name="acabInterno">
                                                        <label for="acab1"><span></span>Acabamento 1</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="acab2" name="acabInterno">
                                                        <label for="acab2"><span></span>Acabamento 2</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="acab3" name="acabInterno">
                                                        <label for="acab3"><span></span>Acabamento 3</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="acab4" name="acabInterno">
                                                        <label for="acab4"><span></span>Acabamento 4</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Acabamento Externo</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="acab5" name="acabExterno">
                                                        <label for="acab5"><span></span>Acabamento 1</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="acab6" name="acabExterno">
                                                        <label for="acab6"><span></span>Acabamento 2</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="acab7" name="acabExterno">
                                                        <label for="acab7"><span></span>Acabamento 3</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="acab8" name="acabExterno">
                                                        <label for="acab8"><span></span>Acabamento 4</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Móveis da Sala</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisSala1" name="moveisSala">
                                                        <label for="moveisSala1"><span></span>Móvel 1</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisSala2" name="moveisSala">
                                                        <label for="moveisSala2"><span></span>Móvel 2</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisSala3" name="moveisSala">
                                                        <label for="moveisSala3"><span></span>Móvel 3</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisSala4" name="moveisSala">
                                                        <label for="moveisSala4"><span></span>Móvel 4</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Móveis do Banheiro</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisBanheiro1" name="moveisBanheiro">
                                                        <label for="moveisBanheiro1"><span></span>Acabamento 1</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisBanheiro2" name="moveisBanheiro">
                                                        <label for="moveisBanheiro2"><span></span>Acabamento 2</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisBanheiro3" name="moveisBanheiro">
                                                        <label for="moveisBanheiro3"><span></span>Acabamento 3</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisBanheiro4" name="moveisBanheiro">
                                                        <label for="moveisBanheiro4"><span></span>Acabamento 4</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Móveis da Cozinha</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisCozinha1" name="moveisCozinha">
                                                        <label for="moveisCozinha1"><span></span>Móvel 1</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisCozinha2" name="moveisCozinha">
                                                        <label for="moveisCozinha2"><span></span>Móvel 2</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisCozinha3" name="moveisCozinha">
                                                        <label for="moveisCozinha3"><span></span>Móvel 3</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisCozinha4" name="moveisCozinha">
                                                        <label for="moveisCozinha4"><span></span>Móvel 4</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Móveis do Quarto</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisQuarto1" name="moveisQuarto">
                                                        <label for="moveisQuarto1"><span></span>Móvel 1</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisQuarto2" name="moveisQuarto">
                                                        <label for="moveisQuarto2"><span></span>Móvel 2</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisQuarto3" name="moveisQuarto">
                                                        <label for="moveisQuarto3"><span></span>Móvel 3</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="check-solec">
                                                        <input type="checkbox" id="moveisQuarto4" name="moveisQuarto">
                                                        <label for="moveisQuarto4"><span></span>Móvel 4</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Condições de compra</h2>
                                        <button type="button" class="btn btn-success pull-right" onclick="maisPagamentos()">Novo Pagamento</button>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="listaPag" class="x_content">
                                        <div class="rowPagamento row">
                                            <div class="form-group col-xs-12 col-sm-6 col-md-2">
                                                <label class="control-label">Periodicidade: </label>
                                                <select class="form-control" name="tipo[]" onchange="checkPeriodicidade(this)">
                                                    <option value="">Selecione...</option>
                                                    <option value="1">Sinal</option>
                                                    <option value="2">Á Vista</option>
                                                    <option value="3">Mensais</option>
                                                    <option value="4">Semestrais</option>
                                                    <option value="5">Anual</option>
                                                    <option value="6">Financiamento</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-2">
                                                <label class="control-label">Data:</label>
                                                <input type="text" class="form-control date" placeholder="DD/MM/AAAA" name="data[]">
                                            </div>

                                            <div class="form-group col-xs-12 col-sm-6 col-md-2">
                                                <label class="control-label">Qtd Parcelas: </label>
                                                <input type="text" name="qtdParc[]" class="form-control  number input-qtd" onkeyup="calculate(this)">
                                            </div>

                                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                <label class="control-label">Valor: </label>
                                                <input type="text" name="valor[]" class="form-control input-valor money" placeholder="R$" onkeyup="calculate(this)">
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                <label class="control-label">Valor Total da Série: </label>
                                                <input type="text" name="totalSerie[]" class="form-control money input-total" placeholder="R$" disabled>
                                            </div>
                                            
                                            <span class="btn-trash" onclick="deleteLine(this)" title="Remover série de pagamento">
                                                <i class=" fa fa-trash"></i>
                                                <span class="hidden-md hidden-lg"> Remover </span>
                                            </span>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                                <label class="control-label">Valor Total do Produto: </label>
                                                <input type="text" id="valorTotal" name="valorTotal" class="form-control money input-total" placeholder="R$" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Observações Importantes</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="form-group col-xs-12">
                                            <textarea id="observacoes" rows="5" class="form-control" name="observacoes"></textarea>
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
    <script type="text/javascript" src="../../assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="../../assets/js/admin/dropzone.min.js"></script>
    <script src="../../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../assets/js/admin/custom.js"></script>
    <script src="../../assets/js/admin/main.js"></script>
    <script src="../../assets/js/admin/masks.js"></script>
    <script>
        var maxVideo = 5;
        $(function() {
             
            var url = $('#addressUpload').val();
            $("#sortable").sortable();
            $("#sortable").disableSelection();

            // jQuery
            $("#dropbox").dropzone(
                { 
                    url: url,
                    acceptedFiles: 'image/*',
                    complete: function(file){
                        addNewDropzone(file);
                        this.removeFile(file);
                    }
                , createImageThumbnails: false
                , previewsContainer: false
            });    

            // $("#form-cadastro").validate({
            //     rules: {
            //         nome: {
            //             required: true
            //         },
            //         area: {
            //             required: true
            //         },
            //         quartos: {
            //             required: true
            //         },
            //         banheiros: {
            //             required: true
            //         },
            //         salas: {
            //             required: true
            //         },
            //         suites: {
            //             required: true
            //         },
            //         descricao: {
            //             required: true
            //         },
            //         tipo: {
            //             required: true
            //         },
            //         segmento: {
            //             required: true
            //         },
            //         imgDestaque: {
            //             required: true
            //         }                    
            //     },
            //     messages: {
            //         nome: "Informe o nome do produto.",
            //         area: "Informe o tamanho da área do produto.",
            //         quartos: "Informe a quantidade de quartos.",
            //         banheiros: "Informe a quantidade de banheiros.",
            //         salas: "Informe a quantidade de salas.",
            //         suites: "Informe a quantidade de suítes.",
            //         tipo: "Escolha um tipo do produto.",
            //         segmento: "Escolha o segmento do produto.",
            //         descricao: "Preencha a descrição do produto.",
            //         imgDestaque: "Faça o upload de no mínimo uma foto.",
            //     },
            //     submitHandler: function (form) { // for demo
            //        location.href = '../destaques/index.php';
            //     }
            // });
        });

        function addNewDropzone(file) {
            getBase64(file, function(imageurl){

                var html  = '<li class="ui-state-default">';
                        html += '<i class="fa fa-close remove-img" title="Remover imagem" onclick="removeDropImg(this)"></i>';
                        html += '<input type="hidden" name="images[]" value="'+ file.name +'">';
                        html += '<div class="box_image" onclick="removeDropImg(this)">';
                        html += '<img src="'+ imageurl +'" alt="imagem">';
                        html += '<div class="overlay"><i class="fa fa-trash"></i></div>';
                        html += '</div>';
                        html += '<div class="box_opt top_space10">';
                        html += '<label><input type="radio" name="capa"><span></span>Capa</label>';
                        html += '<label><input type="checkbox" checked name="showSite"><span></span>Exibir no site</label>';
                        html += '</div>';
                        html += '<textarea class="desc_img" placeholder="Descrição da foto.."></textarea>';
                        html += '<select name="" id="" class="form-control top_space10">';
                        html += '<option value="1">Foto</option>';         
                        html += '<option value="2">Planta</option>';
                        html += '</select>';
                    html += '</li>';

                $(html).prependTo("#sortable");
                $('#imgDestaque').attr('value','1');                
            })
        }

        function getBase64(file, callback) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                callback(reader.result);
            };
            reader.onerror = function (error) {
                console.log('Error: ', error);
            };
        }

        function removeDropImg(e) {
            $(e).parent().remove();
            // Incluir ajax para excluir do servidor...

            var amount = $('.ui-state-default').length;
            if (amount == 0) {
                $('#imgDestaque').attr('value','');
            }
        }

        function duplicate(i){  
              
            var input = $('.input-video');
            var count = input.length;

            if(count < maxVideo){
                $('.box-input-video:last').after('<div class="box-input-video form-group col-xs-12 col-sm-8"><input name="video[]" type="url" class="form-control input-video" placeholder="Insira aqui o link do vídeo..."><i class="fa fa-close text-alert remove-video" onclick="removeInput(this)"></i></div>');
            }

            if (count == maxVideo -1) {
                $('.addVideo').addClass('hidden')
            } 

            return false;
        }

        function maisPagamentos() {
            $.get("../includes/rowPagamento.html", function(data){
                $('.rowPagamento:last').after(data);
                $('.money').mask('000.000.000.000.000,00', {reverse: true});
                $('.date').mask('00/00/0000');
            });
        }

        function deleteLine(e) {
            var elem = $(e).parent().remove();
            totalProduto(); 
        }

        function removeInput (e){
            var input = $('.input-video');
            var count = input.length;
            var box = $(e).parent();

            if(!box.hasClass('first')) {
                box.remove();
            } else {
                $(e).prev().val('');
                $(e).addClass('hidden');
            } 
            
            if (count == maxVideo) {
                $('.addVideo').removeClass('hidden')
            }
        }

        function verifyField(e) {
            var e = $(e);
            if (!e.val() == '') {
                e.next().removeClass('hidden');
            } else {
                e.next().addClass('hidden');
            }
        }

        function checkPeriodicidade(e) {
            var row = $(e).parents('.rowPagamento');
            var period = $(e).find(":selected").val();
            var input = row.find('.input-qtd');

            if (period == 1 || period == 2 || period == 5) {
                input.val(1).attr('disabled',true);                
            } else {
                input.val('').attr('disabled', false);
            }

            calculate(input);

        }

        function calculate(e){
            var t = 0;
            var qtdSeries;
            var row = $(e).parents('.rowPagamento ');
            var qtd = row.find('.input-qtd').val();
            var valor = row.find('.input-valor').val().replace(/[^0-9 ]/g, "");
            var totalSerie = row.find('.input-total');

            var digits = valor.length;

            if (qtd == '' || digits < 3) {
                totalSerie.val(''); 
            }

            if (qtd !== '' && valor != '' && digits > 2) {
                t = qtd * valor;
                t = t.toString();

                totalSerie.val("R$ " + formatReal(t));           
            }

            totalProduto();   
        }   

        function totalProduto(){
            var valorSerie = 0;
            var totalProduto = 0;

            $('input[name="totalSerie[]"').each(function(){
                valorSerie = $(this).val();
                if(valorSerie == '') {
                    valorSerie = 0;
                } else {
                    valorSerie = parseInt(valorSerie.replace(/[^0-9 ]/g, ""));
                }

                totalProduto += valorSerie;
            })

            $('#valorTotal').val("R$ " + formatReal(totalProduto));
        }


        
	</script>
  </body>
</html>
