<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solec - Admin</title>

    <!-- CSS Padrão -->
    <link rel="stylesheet" type="text/css" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../node_modules/font-awesome/css/font-awesome.min.css">
    <link href="../../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!--Css da página --> 
    <link href="../../assets/css/admin/previewHome.css" rel="stylesheet">
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
          <!-- top tiles -->
          
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Preview Home</h3>
                  </div>
                
                </div>
                <form class="">
                    <div class="col-xs-12">
                        <div id="carousel-solec" class="carousel slide" data-ride="carousel">
                            <!-- Exibir botão apenas se NÃO tiver banners cadastrados -->
                            <div class="box-novoBanner hidden">
                                <a class="btn-novoBanner" href="cadastro.php?cad=banners">Cadastrar novo banner</a>
                            </div>

                            <!-- Indicators exibir apenas se tiver banners cadastrados-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-solec" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-solec" data-slide-to="1"></li>
                                <li data-target="#carousel-solec" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">                                
                                <div id="1" class="item active">
                                    <img src="../../assets/img/banner_duvidas.jpg" alt="">
                                    <div class="box-btn">
                                        <a href="cadastro.php?cad=banners" class="btn btn-primary btn-banner">Novo</a>
                                        <a href="editar.php?id=1&cad=banner" class="btn btn-success btn-banner">Editar</a>
                                        <a class="btn btn-danger btn-banner" onclick="removeItem(this)">Remover</a>
                                    </div>
                                </div>
                                <div id="2" class="item">
                                    <img src="../../assets/img/banner_politicauso.jpg" alt="">
                                    <div class="box-btn">
                                        <a href="cadastro.php?cad=banners" class="btn btn-primary btn-banner">Novo</a>
                                        <a href="editar.php?id=2&cad=banner" class="btn btn-success btn-banner">Editar</a>
                                        <a class="btn btn-danger btn-banner" onclick="removeItem(this)">Remover</a>
                                    </div>
                                </div>
                                <div id="3" class="item">
                                    <img src="../../assets/img/projects.jpg" alt="">
                                    <div class="box-btn">
                                        <a href="cadastro.php?cad=banners" class="btn btn-primary btn-banner">Novo</a>
                                        <a href="editar.php?id=3&cad=banner" class="btn btn-success btn-banner">Editar</a>
                                        <a class="btn btn-danger btn-banner" onclick="removeItem(this)">Remover</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls exibir apenas se tiver banners cadastrados -->
                            <a class="left carousel-control" href="#carousel-solec" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-solec" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- / #carousel-solec -->

                        <section id="produtos">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6"> 
                                        <div class="header-prods">                  
                                            <h2>
                                                Container
                                                <a class="btn btn-primary" href="cadastro.php?cad=destaques&type=container">Novo</a>
                                            </h2> 
                                        </div>
                                        <div id="sortableContainer">
                                            <div id="3" class="box-prod box-shadow item">
                                                <div class="box-btn">
                                                    <a href="editar.php?id=3&cad=destaques" class="btn btn-success absolute-edit">Editar</a>
                                                    <a class="btn btn-danger absolute-edit" onclick="removeItem(this)">Remover</a>
                                                </div>
                                                <figure>
                                                    <img src="../../assets/img/casacontainer.jpg" class="" alt="">
                                                </figure>
                                                <div class="box-prod_body">
                                                    <p>
                                                        1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at nisl condimentum, fermentum lectus a, mollis diam. Ut pellentesque tempor pellentesque. Maecenas auctor nunc eget nibh finibus, in tempor tortor vulputate. Ut porttitor turpis eget pellentesque dignissim. Vestibulum id purus non nulla aliquet euismod. 
                                                    </p>                                    
                                                </div>
                                            </div>
                                            <div id="4" class="box-prod box-shadow item">
                                                <div class="box-btn">
                                                    <a href="editar.php?id=4&cad=destaques" class="btn btn-success absolute-edit">Editar</a>
                                                    <a class="btn btn-danger absolute-edit" onclick="removeItem(this)">Remover</a>
                                                </div>
                                                <figure>
                                                    <img src="../../assets/img/casacontainer.jpg" class="" alt="">
                                                </figure>
                                                <div class="box-prod_body">
                                                    <p>
                                                        Container 2
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at nisl condimentum, fermentum lectus a, mollis diam. Ut pellentesque tempor pellentesque. Maecenas auctor nunc eget nibh finibus, in tempor tortor vulputate. 
                                                    </p>                                    
                                                </div>
                                            </div>
                                        </div>
                                        <a href="cadastro.php?cad=destaques&type=container" class="btn btn-primary btn-novoDestaque">
                                            Cadastrar novo destaque
                                        </a>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">                       
                                        <div class="header-prods">                  
                                            <h2>
                                                Pré-moldado
                                                <a class="btn btn-primary" href="cadastro.php?cad=destaques&type=premoldado">Novo</a>
                                            </h2> 
                                        </div>
                                        <div id="sortablePreMoldado">
                                            <div id="5" class="box-prod box-shadow item">
                                                <div class="box-btn">
                                                    <a href="editar.php?id=5&cad=destaques" class="btn btn-success absolute-edit">Editar</a>
                                                    <a class="btn btn-danger absolute-edit" onclick="removeItem(this)">Remover</a>
                                                </div>
                                                <figure>
                                                    <img src="../../assets/img/casapremoldada.jpg" class="" alt="">
                                                </figure>
                                                <div class="box-prod_body">
                                                    <p>
                                                        3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at nisl condimentum, fermentum lectus a, mollis diam. Ut pellentesque tempor pellentesque. Maecenas auctor nunc eget nibh finibus, in tempor tortor vulputate.
                                                    </p>                                    
                                                </div>
                                            </div>
                                            <div id="6" class="box-prod box-shadow item">
                                                <div class="box-btn">
                                                    <a href="editar.php?id=6&cad=destaques" class="btn btn-success absolute-edit">Editar</a>
                                                    <a class="btn btn-danger absolute-edit" onclick="removeItem(this)">Remover</a>
                                                </div>
                                                <figure>
                                                    <img src="../../assets/img/casapremoldada.jpg" class="" alt="">
                                                </figure>
                                                <div class="box-prod_body">
                                                    <p>
                                                        4 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at nisl condimentum, fermentum lectus a, mollis diam. Ut pellentesque tempor pellentesque. Maecenas auctor nunc eget nibh finibus, in tempor tortor vulputate.
                                                    </p>                                    
                                                </div>
                                            </div>
                                        </div>
                                        <a href="cadastro.php?cad=destaques&type=premoldado" class="btn btn-primary btn-novoDestaque">
                                            Cadastrar novo destaque
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section> 
                    </div>
                    <form action="form_upload.html" class="dropzone"></form>
                </form>
              </div>
            </div>

          </div>
          <br />
        </div>
        <!-- /page content -->

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

    <!-- Js Padrão -->
    <script type="text/javascript" src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Js da página -->
    <script type="text/javascript" src="../../assets/js/admin/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../assets/js/admin/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript"  src="../../assets/js/admin/custom.js"></script>
    <script>
        $( function() {
            $( "#sortableContainer, #sortablePreMoldado" ).sortable();
        }); 

        function removeItem(e) {
                    
            var item = $(e).parents(".item");
            var id = item.attr('id');
            var carousel = item.parents(".carousel-inner");
            item.remove();
            if (carousel.length){
                carousel.children().first().addClass( "active" );
                $(".carousel-indicators").children().last().remove();            
            }

            $.ajax({
                type: 'post',
                url: "?",
                data: id = id,
                success: function(data){
                    console.log(data);
                    //Inserir o código de remover o elemento aqui e retirá-lo la de cima.
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
