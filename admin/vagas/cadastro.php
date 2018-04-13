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
    <link href="../../assets/css/admin/switchery.min.css" rel="stylesheet">

    <link href="../../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css" rel="stylesheet"/>
    <link href="../../assets/css/admin/cadastro-vagas.css" rel="stylesheet">
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
                    <div id="vagas" class="">

                        <div class="row x_title">
                            <div class="col-md-6">
                                <h3 class="title-cad">Cadastro de Vaga</h3>
                            </div>                    
                        </div>                        
                        <form class="" method="post" action="" id="form-cadastro">
                            <div class="col-xs-12">

                            <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Características</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class=" col-xs-12 col-md-8"> 
                                        <div class="form-group col-xs-12 col-sm-6 col-md-8">
                                            <label for="cargo" class="control-label">Cargo: </label>
                                            <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Ex.: Auxiliar Administrativo">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-8">
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" id="pcd" name="pcd" onchange="showFeat(this)" /> Vaga exclusiva para Pessoa com Deficiência.
                                                </label>
                                            </div>                                        
                                        </div>

                                        <div id="box-pcd" class="form-group col-xs-12 col-sm-8 top_space20">
                                            <label for="" class="control-label">Deseja restringir algum tipo de deficiência: 
                                            </label> 

                                            <div class="clearfix"></div>

                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="visual" name="restricoes">
                                                    <label for="visual"><span></span>Visual</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="auditiva" name="restricoes">
                                                    <label for="auditiva"><span></span>Auditiva</label>
                                                </div>
                                            </div> 
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="reabilitado" name="restricoes">
                                                    <label for="reabilitado"><span></span>Reabilitado</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="fisica" name="restricoes">
                                                    <label for="fisica"><span></span>Física</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="mental" name="restricoes">
                                                    <label for="mental"><span></span>Mental</label>
                                                </div>
                                            </div>  
                                        </div>
                                        
                                        <div class="form-group col-xs-12 col-sm-8">
                                            <label for="atividades">Atividades a serem desenvolvidas: </label>
                                            <textarea id="atividades" rows="5" class="form-control" name="atividades" placeholder="Descreve atribuições e responsabilidades do cargo"></textarea>
                                        </div>

                                        <div class="form-group col-xs-12 col-sm-8">
                                            <label for="requisitos">Requisitos Necessários/ Desejáveis: </label>
                                            <textarea id="requisitos" rows="5" class="form-control" name="requisitos" placeholder="Descreve a experiência, formaçao e/ou conhecimentos necessários ou desejáveis"></textarea>
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-8">
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" id="idioma" name="idioma" onchange="showFeat(this)"/> Necessário conhecimento em outro idioma
                                                </label>
                                            </div>                                        
                                        </div>
                                        <div id="box-idioma" class="form-group col-xs-12 col-sm-8">
                                            <label for="idiomasNecess">Idiomas Necessários/Desejáveis: </label>
                                            <textarea id="idiomasNecess" rows="5" class="form-control" name="idiomasNecess" placeholder="Informe aqui os idiomas necessários e/ou desejáveis."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Salário e Benefícios</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class=" col-xs-12 col-md-8">
                                        <div class="form-group col-xs-12 col-sm-6">
                                            <label for="salario" class="control-label">Salário: </label>
                                            <input type="text" id="salario" name="salario" class="form-control money" placeholder="R$">
                                        </div>

                                        <div class="form-group col-md-9 col-sm-9 col-xs-12">
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" id="idioma" name="idioma" onchange="escondeSalario(this)" /> Exibir apenas "A Combinar"
                                                </label>
                                            </div>                                        
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class=" col-xs-12 col-md-8 top_space30">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="vTransp" name="beneficios">
                                                    <label for="vTransp"><span></span>Vale Transporte</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="assisMedica" name="beneficios">
                                                    <label for="assisMedica"><span></span>Assistência Médica / Medicina em Grupo</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="vRefeicao" name="beneficios">
                                                    <label for="vRefeicao"><span></span>Vale Refeição</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="assisOdonto" name="beneficios">
                                                    <label for="assisOdonto"><span></span>Assistência Odontológica</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="sVida" name="sVida">
                                                    <label for="sVida"><span></span>Seguro de Vida em Grupo</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="vAlimentacao" name="beneficios">
                                                    <label for="vAlimentacao"><span></span>Vale Alimentação</label>
                                                </div>
                                            </div>
                                                                                                                                    
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="restEmpresa" name="beneficios">
                                                    <label for="restEmpresa"><span></span>Restaurante na Empresa</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="cestBasica" name="beneficios">
                                                    <label for="cestBasica"><span></span>Cesta Básica</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="plr" name="beneficios">
                                                    <label for="plr"><span></span>Participação nos lucros</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="convFarmacia" name="beneficios">
                                                    <label for="convFarmacia"><span></span>Convênio com Farmácia</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="estacionamento" name="beneficios">
                                                    <label for="estacionamento"><span></span>Estacionamento</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="combustivel" name="beneficios">
                                                    <label for="combustivel"><span></span>Combustível</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="auxCreche" name="beneficios">
                                                    <label for="auxCreche"><span></span>Auxílio Creche</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="celularEmpresa" name="beneficios">
                                                    <label for="celularEmpresa"><span></span>Celular fornecido pela empresa</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="segSaude" name="beneficios">
                                                    <label for="segSaude"><span></span>Seguro Saúde</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="estFaculdade" name="beneficios">
                                                    <label for="estFaculdade"><span></span>Estudo de Faculdade</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="transpEmpresa" name="beneficios">
                                                    <label for="transpEmpresa"><span></span>Transporte fornecido pela empresa</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="prevPrivada" name="beneficios">
                                                    <label for="prevPrivada"><span></span>Previdência Privada</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="curIdiomas" name="beneficios">
                                                    <label for="curIdiomas"><span></span>Curso de Idiomas</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="carEmpresa" name="beneficios">
                                                    <label for="carEmpresa"><span></span>Carro fornecido pela empresa</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="checkbox" id="pos" name="beneficios">
                                                    <label for="pos"><span></span>Estudo de Pós-Graduação/ MBA</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Regime de contratação</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class=" col-xs-12 col-md-8">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="radio" id="clt" name="regimeContratacao">
                                                    <label for="clt"><span></span>CLT (Efetivo)</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="radio" id="pj" name="regimeContratacao">
                                                    <label for="pj"><span></span>Prestador de serviços (PJ)</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="radio" id="autonomo" name="regimeContratacao">
                                                    <label for="autonomo"><span></span>Autônomo</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="radio" id="temporario" name="regimeContratacao">
                                                    <label for="temporario"><span></span>Temporário</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="radio" id="freelancer" name="regimeContratacao">
                                                    <label for="freelancer"><span></span>Freelancer</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="radio" id="cooperado" name="regimeContratacao">
                                                    <label for="cooperado"><span></span>Cooperado</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="radio" id="trainee" name="regimeContratacao">
                                                    <label for="trainee"><span></span>Trainee</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="check-solec">
                                                    <input type="radio" id="estagiario" name="regimeContratacao">
                                                    <label for="estagiario"><span></span>Estagiário</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row top_space20">
                                            <div class="form-group col-xs-12 col-sm-8">
                                                <label for="horario">Horário de Trabalho: </label>
                                                <textarea id="horario" rows="5" class="form-control" name="horario" placeholder="Ex.: Segunda a Sexta, das 09h às 18h"></textarea>
                                            </div>

                                            <div class="form-group col-xs-12 col-sm-8">
                                                <label for="adicionais">Informações adicionais sobre a vaga: </label>
                                                <textarea id="adicionais" rows="5" class="form-control" name="adicionais" placeholder="Ex.: Disponibilidade para viajar, carro próprio, etc."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="x_panel" style="">
                                    <div class="x_title">
                                        <h2>Local de Trabalho</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class=" col-xs-12 col-md-8">
                                        <div class="row">
                                            <div class="form-group col-xs-12 col-sm-6">
                                                <label for="local" class="control-label">Cidade: </label>
                                                <input type="text" id="local" name="local" class="form-control">
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-2">
                                                <label for="numVagas" class="control-label">Nº de vagas: </label>
                                                <input type="text" id="numVagas" name="numVagas" class="form-control number">
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 top_space20 hidden">
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
    <script type="text/javascript" src="../../assets/js/admin/switchery.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../assets/js/admin/custom.js"></script>
    <script>

        $(function() {
            $('.number').mask('000.000', {reverse: true});
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
        });

        function showFeat(e) {
            var elem = $(e).attr('id');
            var check = $(e).prop('checked');

            if (check) 
                $('#box-' + elem).fadeIn();
            else
                $('#box-' + elem).fadeOut();        

                if (elem == "pcd") {
                    $("#box-pcd input[type=checkbox]").prop('checked', false);
                } else {
                    $("#idiomasNecess").val('');
                }
        }

        function escondeSalario(e){
            var check = $(e).prop('checked');
            if (check) {
                $('#salario').val('').attr('disabled', true);
            } else {
                $('#salario').attr('disabled', false);
            }
        }

	</script>
  </body>
</html>
