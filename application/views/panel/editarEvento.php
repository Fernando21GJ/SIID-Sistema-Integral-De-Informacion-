<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIID</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="<?php echo base_url('recursos-panel') ?>/ssets/plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/rs-plugin/css/settings.css" rel="stylesheet" >
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/selectbox/select_option1.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/isotope/isotope.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/animate/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">


  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link href="<?php echo base_url('recursos-panel') ?>/assets/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('recursos-panel') ?>/assets/css/default.css" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="<?php echo base_url('recursos-panel') ?>/assets/img/favicon.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    body {padding-top:20px;}
  </style>
</head>
<body>

  <div id="preloader" class="smooth-loader-wrapper">
    <div class="smooth-loader">
      <div class="loader">
        <span class="dot dot-1"></span>
        <span class="dot dot-2"></span>
        <span class="dot dot-3"></span>
        <span class="dot dot-4"></span>
      </div>
    </div>
  </div>

  <div class="main-wrapper">
    <!-- ====================================
    ——— HEADER
    ===================================== -->
    <header id="pageTop" class="header-wrapper headerV3">
      <!-- COLOR BAR -->
      <div class="container-fluid color-bar top-fixed clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>

      <!-- TOP INFO BAR -->
      <div class="top-info-bar bg-color-7 hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-9">
              <ul class="list-inline topList">
                  <?php setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish'); ?>
                <li><i class="fa fa-user bg-color-1" aria-hidden="true"></i>Hola <?php echo $this->session->nombre_completo_usuario; ?></li>
                <li><i class="fa fa-clock-o bg-color-2" aria-hidden="true"></i><?php echo strftime("%A %d de %B del %Y"); ?> </li>
              </ul>
            </div>
            <div class="col-sm-3">
              <ul class="list-inline functionList">
                <li class="cart-dropdown">
                    <a href="nav-link" id="dropdownChat" data-toggle="dropdown" class="color-6 shop-cart" >
                      <i class="fa fa-comments" ></i>
                      <!-- <span class="badge bg-color-1">3</span> -->
                      <?php
                        foreach ($this->session->numero_mensaje as $row) {
                          echo'
                            <span class="badge badge-success text-white anibadge d-block">'.$row->numero.' </span>
                          ';
                        }
                      ?>
                    </a>
                    <!-- <a class="nav-link" href="#" id="dropdownChat" data-toggle="dropdown">
                        <i class="icon-Speach-Bubbles"></i>
                        <span class="badge badge-success text-white anibadge d-block">9</span>
                    </a> -->
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><i class="fa fa-comments" aria-hidden="true"></i> Mensajes nuevos</li>
                      <?php
                        //$nombre_mensaje = mensaje_principal();
                        foreach ($this->session->nombre_mensaje as $row) {
                          echo '
                            <li>
                              <a href="'.base_url("principal/".$this->siid->TAREA_LEER_MENSAJES.'/'.$row->id_mesaje).'">
                                <div class="col-md-12">
                                  <div class="col-md-2">
                                    <img src="'.base_url("recursos-panel").'/assets/img/email.png" style="width: 40px;">
                                  </div>
                                  <div class="col-md-10">
                                    <div style="font-weight: 500;
                                    text-transform: capitalize;
                                    color: inherit;">
                                        '.$row->nombre.'
                                    </div>
                                    <div style="line-height: 1.3;
                                    color: inherit;
                                    opacity: .6;">
                                        '.$row->asunto.'
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </li>
                          ';
                        }
                      ?>
                    </ul>
                </li>
                <li><i class="fa fa-unlock-alt bg-color-9" aria-hidden="true"></i> <a href='<?php echo base_url('logout') ?>' data-toggle="modal" >Cerrar sesión</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>

        <!-- NAVBAR -->
        <nav id="menuBar" class="navbar navbar-default lightHeader navbar-secondary" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('principal/'.$this->siid->TAREA_DASHBOARD) ?>"><img src="<?php echo base_url('recursos-panel') ?>/assets/img/logo-daycare.png" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if( $this->session->rol == 1){
                          ?>
                          <div class="collapse navbar-collapse navbar-ex1-collapse">
                           <ul class="nav navbar-nav navbar-right">
                               <li class="  color-1"><a href="http://[::1]/siid/principal/2" class="dropdown-toggle"  role="button" aria-haspopup="true">
                     <i class="fa fa-home bg-color-1" ></i> <span>Inicio</span>
                     </a></li><li class=" dropdown singleDrop color-1"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-file-text-o bg-color-1" aria-hidden="true"></i> <span>Usuarios</span>
                     </a><ul class="dropdown-menu dropdown-menu-left "><li class=""><a href="http://[::1]/siid/principal/20">Docentes</a></li><li class=""><a href="http://[::1]/siid/principal/22">Invitados</a></li></ul><li class=" dropdown singleDrop color-1"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-sticky-note  bg-color-1" aria-hidden="true"></i> <span>Notas</span>
                     </a><ul class="dropdown-menu dropdown-menu-left "><li class=""><a href="http://[::1]/siid/principal/13">Mis notas</a></li></ul><li class=" dropdown singleDrop color-1"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-envelope bg-color-1" aria-hidden="true"></i> <span>Mensajes</span>
                     </a><ul class="dropdown-menu dropdown-menu-left "><li class=""><a href="http://[::1]/siid/principal/11">Mis mensajes</a></li><li class=""><a href="http://[::1]/siid/principal/12">Nuevo mensaje</a></li></ul><li class=" dropdown singleDrop color-1"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-calendar bg-color-1" aria-hidden="true"></i> <span>Eventos</span>
                   </a><ul class="dropdown-menu dropdown-menu-left "><li class="active"><a href="http://[::1]/siid/principal/15">Mis Eventos</a></li></ul>
                               <li class="dropdown singleDrop color-6">
                                 <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user bg-color-6" aria-hidden="true"></i> <span>Carlos David</span></a>
                                 <ul class="dropdown-menu dropdown-menu-right">
                                   <li class=" "><a href="http://[::1]/siid/logout">Salir</a></li>
                                 </ul>
                               </li>
                           </ul>
                       </div>

               <?php
                        }
                        ?>
                       <?php
                       if($this->session->rol == 2){
                        ?>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                              <ul class="nav navbar-nav navbar-right">
                                  <li class="  color-1"><a href="http://[::1]/siid/principal/2" class="dropdown-toggle"  role="button" aria-haspopup="true">
                        <i class="fa fa-home bg-color-1" ></i> <span>Inicio</span>
                        </a></li><li class=" dropdown singleDrop color-1"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-file-text-o bg-color-1" aria-hidden="true"></i> <span>Cursos</span>
                        </a><ul class="dropdown-menu dropdown-menu-left "><li class=""><a href="http://[::1]/siid/principal/3">Todos</a></li><li class=""><a href="http://[::1]/siid/principal/4">Editar cursos</a></li></ul><li class=" dropdown singleDrop color-1"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-sticky-note  bg-color-1" aria-hidden="true"></i> <span>Notas</span>
                        </a><ul class="dropdown-menu dropdown-menu-left "><li class=""><a href="http://[::1]/siid/principal/13">Mis notas</a></li></ul><li class=" dropdown singleDrop color-1"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope bg-color-1" aria-hidden="true"></i> <span>Mensajes</span>
                        </a><ul class="dropdown-menu dropdown-menu-left "><li class=""><a href="http://[::1]/siid/principal/11">Mis mensajes</a></li><li class=""><a href="http://[::1]/siid/principal/12">Nuevo mensaje</a></li></ul><li class=" dropdown singleDrop color-1"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-calendar bg-color-1" aria-hidden="true"></i> <span>Eventos</span>
                        </a><ul class="dropdown-menu dropdown-menu-left "><li class="active"><a href="http://[::1]/siid/principal/15">Mis eventos</a></li></ul><li class="  color-1"><a href="http://[::1]/siid/principal/52" class="dropdown-toggle"  role="button" aria-haspopup="true">
                        <i class="fa fa-tv bg-color-1" ></i> <span>Proyector</span>
                        </a></li>
                                  <li class="dropdown singleDrop color-6">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user bg-color-6" aria-hidden="true"></i> <span>Candy</span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                      <li class=" "><a href="http://[::1]/siid/logout">Salir</a></li>
                                    </ul>
                                  </li>
                              </ul>
                          </div>


                      <?php
                      }

                       ?>


                    </ul>
                </div>


            </div>
        </nav>
    </header>




    <!-- ====================================
    ——— WHITE SECTION
    ===================================== -->
    <section class="whiteSection full-width clearfix eventSection mainContent productSection" >
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="sectionTitle text-center wow fadeInUp">
                <h2>
                    <span class="shape shape-left bg-color-4"></span>
                    <span>Editar Evento</span>
                    <span class="shape shape-right bg-color-4"></span>
                </h2>
            </div>

            <div class="row">
               <div class="col-sm-6 col-xs-12">
                 <div class="homeContactContent">
                   <form action="" method="POST">
                           <?php foreach ($mod as $fila){ ?>
                             <div class="form-group">
                           <input type="text" class="form-control border-color-1" name="nombre" value="<?=$fila->nombre?>"/>
                           </div>
                           <div class="form-group">
                           <input type="date" class="form-control border-color-1" name="fecha" value="<?=$fila->fecha?>"/>
                            </div>
                            <div class="form-group">
                           <input type="text" class="form-control border-color-1" name="lugar" value="<?=$fila->lugar?>"/>
                           </div>
                             <div class="form-group">
                                <input type="text" class="form-control border-color-1" name="notas" value="<?=$fila->notas?>" >

                           </div>
                            <div id="buttons">
                              <p class="space-bottom">
                           <input type="submit" class ="btn btn-success" name="submit" value="Editar"/>
                           <?php } ?>
                       </form>
                       <a type="submit" class ="btn btn-success" name="submit" href="<?=base_url('principal/'.$this->siid->TAREA_EVENTOS.'')?>">Volver</a>


                       </div>

                 </div>
               </div>
            </div>
        </div>
    </section>



    <!-- ====================================
    ——— FOOTER
    ===================================== -->
    <footer>
      <!-- COLOR BAR -->
      <div class="container-fluid color-bar clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>
      <!-- FOOTER INFO AREA -->
      <div class="footerInfoArea full-width clearfix" style="background-image: url(<?php echo base_url('recursos-panel') ?>/assets/img/footer/footer-bg-1.png);">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <a href="index.html"><img src="<?php echo base_url('recursos-panel') ?>/assets/img/logo-footer.png"></a>
              </div>
              <div class="footerInfo">


              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Accesos rápidos UPTx</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled footerList">
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Calendario Academico
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Directorio univeritario
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>E-learning UPTx
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Sistema integral de información
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                      Vinculación UPTx
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Proximos eventos</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled postLink">
                  <li>
                    <?php
                      foreach ($this->session->evento_inicio as $row) {
                        echo '
                          <div class="media">
                              <div class="media-body">
                                <h5 class="media-heading"><a>'.$row->nombre.'</a></h5>
                                <p>'.$row->fecha.'</p>
                              </div>
                          </div>
                          </li><li>
                        ';
                      }
                    ?>  
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Notas importantes</h4>
              </div>
              <div class="footerInfo">
                <p>Recuerda asistir a reunión académica después de clases de 9A</p>
        <p>Falta de tutoria la segunda parte del grupo 6B</p>
        <p>Enviar presentaciones a jefe de grupo 1A</p>

              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- COPY RIGHT -->
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-sm-push-7 col-xs-12">

            </div>
            <div class="col-sm-7 col-sm-pull-5 col-xs-12">
              <div class="copyRightText">
                <p>© SIID Universidad Politécnica de Tlaxcala<a href="index-v3"></a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

    <div class="scrolling">
      <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    </div>

    <!-- ====================================
    ——— LOGIN MODAL
    ===================================== -->
    <div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="panel panel-default formPanel">
            <div class="panel-heading bg-color-1 border-color-1">
              <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
              <form action="#" method="POST" role="form">
                <div class="form-group formField">
                  <input type="text" class="form-control" placeholder="User name">
                </div>
                <div class="form-group formField">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group formField">
                  <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Log in">
                </div>
                <div class="form-group formField">
                  <p class="help-block"><a href="#">Forgot password?</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ====================================
    ——— CREATE ACCOUNT MODAL
    ===================================== -->
    <div class="modal fade customModal" id="createAccount" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="panel panel-default formPanel">
            <div class="panel-heading bg-color-1 border-color-1">
              <h3 class="panel-title">Create  an account</h3>
            </div>
            <div class="panel-body">
              <form action="#" method="POST" role="form">
                <div class="form-group formField">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group formField">
                  <input type="text" class="form-control" placeholder="User name">
                </div>
                <div class="form-group formField">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group formField">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group formField">
                  <input type="password" class="form-control" placeholder="Re-Password">
                </div>
                <div class="form-group formField">
                  <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Register">
                </div>
                <div class="form-group formField">
                  <p class="help-block">Allready have an account? <a href="#">Log in</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/jquery/jquery-min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/waypoint/waypoints.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/counter-up/jquery.counterup.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/isotope/isotope.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/isotope/isotope-triger.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/countdown/jquery.syotimer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsQdSlW4vj5RvXp2_pLnv1s1ErfxjM5_o"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/velocity/velocity.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/smoothscroll/SmoothScroll.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/plugins/wow/wow.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/js/google-map.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url('recursos-panel') ?>/assets/notify/lib/bootstrap-notify/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('recursos-panel') ?>/assets/notify/js/plugins-custom/bs-notify-custom.js"></script>
<script>
    <?php echo mostrar_mensaje(); ?>
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/js/moment.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url('recursos-panel') ?>/assets/js/bootstrap-datetimepicker.es.js"></script>

<script type="text/javascript">
  $('#divMiCalendario').datetimepicker({
       format: 'YYYY-MM-DD HH:mm'
   });
   $('#divMiCalendario').data("DateTimePicker").show();
</script>
<body>
</html>
