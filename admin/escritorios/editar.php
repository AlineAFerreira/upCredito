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
    <link href="../../assets/css/admin/switchery.min.css" rel="stylesheet">
    <link href="../../assets/css/admin/cadastro-escritorio.css" rel="stylesheet">
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
                                <h3 class="title-cad">Edição de Escritórios</h3>
                            </div>                    
                        </div>                        
                        <form class="" method="post" action="" id="form-escritorio">
                            <div class="col-xs-12">

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Dados Gerais</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content"> 
                                        <div class="form-group col-xs-12 col-sm-6">
                                            <label for="nome" class="control-label">Nome da Unidade*: </label>
                                            <input type="text" id="nome" name="nome" class="form-control">                                            
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group col-xs-12 col-sm-6 bottom_space30">
                                            <label for="cep" class="control-label">Localize o endereço: </label>
                                            <input type="text" id="autocomplete" name="autocomplete" class="form-control col-xs-12" placeholder="Informe o logradouro ou CEP do escritório" onFocus="geolocate()" >
                                            <div class="clearfix"></div>
                                            <small>
                                                Alguns endereços não estão completos na base do Google. Desta forma, confirme os dados antes de salvar.
                                            </small>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                                            <label for="route" class="control-label">Logradouro*: </label>
                                            <input type="text" id="route" name="route" class="form-control">
                                        </div>
                                    
                                        <div class="form-group col-xs-12 col-sm-6 col-md-2">
                                            <label for="numero" class="control-label">Número: </label>
                                            <input type="text" id="numero" name="numero" class="form-control number">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="complemento" class="control-label">Complemento: </label>
                                            <input type="text" id="complemento" name="complemento" class="form-control">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="sublocality_level_1" class="control-label">Bairro: </label>
                                            <input type="text" id="sublocality_level_1" name="sublocality_level_1" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="administrative_area_level_2" class="control-label">Cidade: </label>
                                            <input type="text" id="administrative_area_level_2" name="administrative_area_level_2" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="administrative_area_level_1" class="control-label">Estado: </label>
                                            <input type="text" id="administrative_area_level_1" name="administrative_area_level_1" class="form-control">
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="postal_code" class="control-label">CEP: </label>
                                            <input type="text" id="postal_code" name="postal_code" class="form-control cep" placeholder="00000-000">
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="telefone" class="control-label">Telefone Fixo: </label>
                                            <input type="text" id="telefone" name="telefone" class="form-control phone" placeholder="(00)0000-0000">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="telefone2" class="control-label">Telefone Fixo 2: </label>
                                            <input type="text" id="telefone2" name="telefone2" class="form-control phone" placeholder="(00)0000-0000">
                                        </div> 
                                        <div class="form-group col-xs-12 col-sm-6 col-md-3">
                                            <label for="celular" class="control-label">Celular: </label>
                                            <input type="text" id="celular" name="celular" class="form-control cel-mask" placeholder="(00)00000-0000">
                                            <div class="checkbox">
                                                <label for="whats">
                                                    <input type="checkbox" name="whats" id="whats"> Possui WhatsApp?
                                                </label>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <label>
                                                    <input type="checkbox" class="js-switch" checked /> Exibir endereço no site.
                                                </label>
                                            </div>                                        
                                        </div>                                 
                                    </div>
                                </div>

                                <div class="col-xs-12 top_space20">
                                    <small>(*) Campos obrigatórios </small><br>
                                </div>

                                <div class="col-xs-12 top_space20">
                                    <a href="index.php" class="btn btn-default">Cancelar</a>
                                    <!-- To do Exibir apenas na edição -->
                                    <a class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Excluir</a>
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
            <br />
        </div>
        <!-- /.right_col | page content -->

        <!-- Modal -->
        <div class="modal fade modalAlert" id="deleteModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <p class="text">Excluir <span id="msg-type"></span>?</p>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" onclick="deleteObj(2)">Excluir</a>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsyQBIFPszspQBpMj9M-pulW883eYc24A&libraries=places&callback=initAutocomplete" async defer></script>
    <script type="text/javascript" src="../../assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="../../assets/js/admin/switchery.min.js"></script>
    <script src="../../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../assets/js/admin/custom.js"></script>
    <script>
        var placeSearch, autocomplete;
        var componentForm = {
            route: 'long_name',
            sublocality_level_1: 'long_name',
            administrative_area_level_2: 'long_name',
            administrative_area_level_1: 'short_name',
            postal_code: 'short_name'
        };

        function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }

        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                      center: geolocation,
                      radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }

        $(function() {
            $('.phone').mask('(00)0000-0000');
            $('.cep').mask('00000-000');
            $('.cel-mask').mask('(00)00000-0000');
            $('.number').mask('000.000', {reverse: true});
            $('#msg-type').text('escritório');

            $("#form-escritorio").validate({
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
                   location.href = '../escritorios/index.php';
                }
            });
        });

        function deleteObj (type){
            $("#deleteModal").modal('hide');
            location.href = '../escritorios/index.php';
        }

	</script>
  </body>
</html>
