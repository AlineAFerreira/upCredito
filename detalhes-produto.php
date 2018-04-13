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
        <!-- Stylesheet ================================================== -->
        <link rel="stylesheet" type="text/css" href="assets/css/detalhes-produto.css">

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
            
            <section id="detalhes-produto">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">
                                <span>Container</span>                        
                                <h1>Nome do produto</h1>                    
                            </div>
                        </div>
                    </div>
                </div>

                <div id="box-banner">
                    <div class="container">
                        <div class="slide col-xs-12 col-md-7">
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
                                        <img src="assets/img/sample.jpg" alt="">
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
                        </div>
                        <div class="description col-xs-12 col-md-5">
                            <h2>Descrições</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan dolor non orci posuere consequat sit amet vel felis. Donec nunc ex, laoreet sit amet massa a, rutrum vehicula odio. Aliquam pulvinar luctus tempus. Sed viverra tincidunt nisl quis auctor. Vestibulum aliquet viverra quam, eu placerat nisl semper sit amet. Praesent suscipit elit dignissim mi accumsan, at tempus risus facilisis. Ut vulputate congue fermentum. Suspendisse quis lacus ac est facilisis commodo. Fusce mollis, orci at convallis venenatis, quam sem mollis mi, nec facilisis turpis massa eget massa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">                      
                                <h2>Características</h2>                    
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-offset-2 col-md-8 box-features">
                            <div class="col-xs-4 col-sm-3 col-md-2 item-feat">
                                <img src="assets/img/icons2/6.svg" alt="">
                                <span>Área</span>
                                <strong>20m²</strong>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-2 item-feat">
                                <img src="assets/img/icons2/7.svg" alt="">
                                <span>Quartos</span>
                                <strong>1</strong>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-2 item-feat">
                                <img src="assets/img/icons2/7.svg" alt="">
                                <span>Salas</span>
                                <strong>1</strong>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-2 item-feat">
                                <img src="assets/img/icons2/16.svg" alt="">
                                <span>Banheiros</span>
                                <strong>1</strong>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-2 item-feat">
                                <img src="assets/img/icons2/8.svg" alt="">
                                <span>Suítes</span>
                                <strong>0</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">                      
                                <h2>Acabamento Interno</h2>                    
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">                      
                                <h2>Acabamento Externo</h2>                    
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">                      
                                <h2>Móveis</h2>                    
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                            <div class="col-xs-6 col-sm-4 item-topico">
                                <span>Item </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="condicoes">
                        <div class="col-xs-12">
                            <div class="heading">                      
                                <h2>Condições de compra</h2>                    
                            </div>
                        </div>
                        <div class="col-xs-12 condicoes-compra">
                            <ul class="box_condicoes">
                                <li class="box_condicoes__head">
                                    <span class="col">Nome da Série</span> 
                                    <span class="col">Quantidade</span>   
                                    <span class="col">Valor Unitário</span>
                                    <span class="col">Valor Total</span>
                                </li>

                                <li class="box_condicoes__body">
                                    <span class="col">
                                        <div class="title-xs">Nome da Série: </div> Sinal
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Quantidade: </div> 1
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Valor Unitário: </div>R$ 1.000,00
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Valor Total: </div>R$ 1.000,00
                                    </span>
                                </li>
                                <li class="box_condicoes__body">
                                    <span class="col">
                                        <div class="title-xs">Nome da Série: </div> Mesais
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Quantidade: </div> 24
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Valor Unitário: </div>R$ 638,20
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Valor Total: </div>R$ 15.317,04
                                    </span>
                                </li>
                                <li class="box_condicoes__body">
                                    <span class="col">
                                        <div class="title-xs">Nome da Série: </div> Anual
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Quantidade: </div> 1
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Valor Unitário: </div>R$ 1.400,20
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Valor Total: </div>R$ 1.400,20 
                                    </span>
                                </li>
                                <li class="box_condicoes__footer">
                                    <span class="col hidden-xs">
                                        Total do Produto:
                                    </span>
                                    <span class="col hidden-xs">
                                        &nbsp;
                                    </span>
                                    <span class="col hidden-xs">
                                        &nbsp;
                                    </span>
                                    <span class="col">
                                        <div class="title-xs">Total do Produto: </div> R$ 17.717,24
                                    </span>
                                </li>
                            </ul>
                            <div class="condicoes-bottom">
                                <div class="box-frete">
                                    <form action="" id="formConsultaFrete">
                                        <label for="cep">Insira o CEP do local da entrega</label>
                                        <input type="text" class="cep" name="cep" id="cep">
                                        <button type="submit" class="consultar">Consultar</button>
                                    </form>
                                </div>
                                <div class="box-resumo">
                                    <ul>
                                        <li class="v-produto"> 
                                            Valor do produto: 
                                            <span id="valor-unitario" class="value">R$ 17.717,24</span>
                                        </li>
                                        <li class="qtd"> 
                                            Quantidade: 
                                            <span class="value"><input type="text" name="qtd" id="qtd" class="input-qtd number" value="1" onkeyup="calculaTotal(this);"></span>
                                        </li>
                                        <li class="v-frete"> 
                                            Valor do frete: 
                                            <span id="valor-frete" class="value">a calcular</span>
                                        </li>
                                        <li class="v-total"> 
                                            Valor Total: 
                                            <span class="value" id="valor-total">R$ 17.917,24</span>
                                        </li>
                                        <li class="last text-center">
                                            <a class="enviar" onclick="modalPedido()"> 
                                                <span class="icon">
                                                    <i class="fa fa-arrow-circle-o-right"></i>
                                                </span> 
                                                Enviar pedido de compra 
                                            </a>
                                            <div id="msg-frete" class="padding_bottom10"></div>
                                        </li>
                                    </ul>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">                      
                                <h2>Consulte outros serviços</h2>                    
                            </div>
                        </div>
                        <div class="col-xs-12 outros-servicos">
                            <ul>
                                <li><a href="#">Terraplenagem de Terreno</a></li>
                                <li><a href="#">Rede de esgoto</a></li>
                                <li><a href="#">Entrada Elétrica</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">                      
                                <h2>Observações importantes</h2>                    
                            </div>
                        </div>
                        <div class="col-xs-12 obsImportantes">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan dolor non orci posuere consequat sit amet vel felis. Donec nunc ex, laoreet sit amet massa a, rutrum vehicula odio. Aliquam pulvinar luctus tempus. Sed viverra tincidunt nisl quis auctor. Vestibulum aliquet viverra quam, eu placerat nisl semper sit amet. Praesent suscipit elit dignissim mi accumsan, at tempus risus facilisis. Ut vulputate congue fermentum. Suspendisse quis lacus ac est facilisis commodo. Fusce mollis, orci at convallis venenatis, quam sem mollis mi, nec facilisis turpis massa eget massa. Quisque a vestibulum nunc. Mauris porta dictum mi dictum tincidunt. Aenean euismod quis odio ac finibus. Cras ex nulla, finibus a purus at, euismod euismod quam.
                        </div>
                    </div>
                </div>
            </section> 

            <!-- Modal -->
            <div class="modal fade" id="pedidoModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="" method="post" action="" id="form-pedido">
                            <input type="hidden" id="vl-unitario" name="vl-unitario">
                            <input type="hidden" id="quantidade" name="quantidade">
                            <input type="hidden" id="vl-frete" name="vl-frete">
                            <input type="hidden" id="vl-total" name="vl-total">
                            <input type="hidden" id="cep-usuario" name="cep-usuario">
                            <div class="modal-header">
                                <button type="button" class="close" onclick="closeModal(this)">&times;</button>
                                <h4 class="modal-title"><strong>Enviar pedido</strong></h4>
                            </div>                    
                            <div class="modal-body">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="nome" class="control-label">Nome*: </label>
                                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o seu nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label">E-mail*: </label>
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Digite o seu e-mail">
                                    </div> 
                                    <div class="form-group">
                                        <label for="telefone" class="control-label">Telefone/Celular*: </label>
                                        <input type="text" id="telefone" name="telefone" class="form-control phone" placeholder="Digite o seu telefone">
                                    </div> 
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="obs" class="control-label">Observações: </label>
                                        <textarea id="obs" name="obs" rows="10" class="form-control" placeholder="Se tiver alguma observação, informe nessa área."></textarea>
                                    </div>
                                </div>                       
                            </div>
                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <small class="pull-left"> (*) Campos Obrigatórios </small>
                                <button type="button" class="btn btn-default" onclick="closeModal(this)">Cancelar</button>
                                <button type="submit" id="submitSeg" class="btn btn-dark">Enviar pedido</a>
                            </div> 
                        </form>                   
                    </div>
                </div>
            </div>                          

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
        <script type="text/javascript" src="node_modules/desandro-classie/classie.js"></script>
        <script type="text/javascript" src="assets/js/cbpAnimatedHeader.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mask.js"></script> 
        <script type="text/javascript" src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>       
        <script type="text/javascript">
            $(function() {
                $('.cep').mask('00000-000');
                $('.phone').mask('(00)0000-00000');
                $('.number').mask('000.000', {reverse: true});
                $('.money').mask('000.000.000.000.000,00', {reverse: true});

                $('#formConsultaFrete').validate({
                    rules: {
                        cep: {
                            required: true,
                            minlength: 9
                        }                   
                    },
                    messages: {
                        cep: {
                            required: "Por favor, informe o CEP de entrega.",
                            minlength: "CEP inválido."
                        }
                    },
                    submitHandler: function (form) { 
                       consultarCep();
                    }
                });

                $("#form-pedido").validate({
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
                            minlength: 10
                        }                   
                    },
                    messages: {
                        nome: "Por favor, informe o seu nome.",
                        email: {
                            required: "Por favor, informe o seu e-mail.",
                            email: "Por favor, informe um e-mail válido."
                        },
                        telefone: {
                            required: "Por favor, informe o seu telefone",
                            minlength: "O telefone deve conter no mínimo {0} dígitos."
                        }
                    },
                    submitHandler: function (form) { // for demo
                       location.href = 'checkout.php';
                    }
                });
            })    

            function consultarCep(){
                var cep = $("#cep").val();

                if (cep != '' && cep.length == 9){
                    var frete = $("#valor-frete").text('R$ 200,00');
                }
            }        

            function calculaTotal (e){
                var unid, qtd, frete, total, f;
                
                unid  = parseInt($("#valor-unitario").text().replace(/[^0-9 ]/g, ""));
                frete = $("#valor-frete").text();                


                if (frete != "a calcular") {
                    frete = parseInt(frete.replace(/[^0-9 ]/g, ""));
                
                    qtd = $(e).val();
                    total = (unid*qtd) + frete;

                    if (qtd == '' || qtd == 0) {
                        f = unid + frete
                        $('#valor-total').text("R$ " + formatReal(f));
                        return false;
                    } else {
                        f = total.toString();
                        $('#valor-total').text("R$ " + formatReal(f));
                    }
                } else {
                    return false;
                }           
            }

            function modalPedido() {
                var msg, unid, frete, qtd, total, cep;

                frete = $('#valor-frete').text(); 
                msg = 'Por favor, calcule o valor do frete';              

                if (frete != "a calcular") {
                    unid  = $('#valor-unitario').text();
                    qtd   = $('#qtd').val();
                    frete = $('#valor-frete').text();
                    total = $('#valor-total').text();
                    cep   = $('#cep').val();

                    $('#vl-unitario').val(unid);
                    $('#quantidade').val(qtd);
                    $('#vl-frete').val(frete);
                    $('#vl-total').val(total);
                    $('#cep-usuario').val(cep);
                    $('#pedidoModal').modal('show');
                    $('#msg-frete').text('');
                } else {
                    $('#msg-frete').text(msg);
                    $('#cep').focus();
                }
  
            }
        </script>
    </body>
</html>