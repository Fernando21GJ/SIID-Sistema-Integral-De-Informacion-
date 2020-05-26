<!DOCTYPE html>
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
    <link href="<?php echo base_url('recursos-panel/assets/lib/sweet-alerts2/sweetalert2.min.css') ?>" rel="stylesheet">



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

  <body class="body-wrapper version3">
    <!-- ====================================
    ——— PRELOADER
    ===================================== -->
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
        <!-- <div class="container-fluid color-bar top-fixed clearfix">
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
        </div> -->

        <!-- TOP INFO BAR -->
        <div class="top-info-bar bg-color-7 hidden-xs">
          <div class="container">
            <div class="row">
              <div class="col-sm-9">
                <ul class="list-inline topList">
                    <?php setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish'); ?>
                  <li><a href="<?php echo base_url('principal/'.$this->siid->TAREA_DOCENTE_EDITAR.'/'.$this->session->id_usuario)?>"><i class="fa fa-user bg-color-1" aria-hidden="true"></i>Hola <?php echo $this->session->nombre_completo_usuario; ?></a></li>
                  <li><i class="fa fa-clock-o bg-color-2" aria-hidden="true"></i><?php date_default_timezone_set('America/Mexico_City'); echo 'Fecha/Hora: ', date('d-m-Y', time()).'  &nbsp &nbsp';?><span id="liveclock" ></span> </li>
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
                        <li class="line"></li> <!-- Linea despues del titulo -->
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
                          <?php echo $menuLateral; ?>

                          <li class="dropdown singleDrop color-6">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user bg-color-6" aria-hidden="true"></i> <span><?php echo $this->session->nombre_usuario; ?></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class=" "><a href="<?php echo base_url('logout') ?>">Salir</a></li>
                            </ul>
                          </li>
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
                      <span><?php echo $titulo_tarea; ?></span>
                      <span class="shape shape-right bg-color-4"></span>
                  </h2>
              </div>

              <div class="row">
                  <?php echo $contenido; ?>
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
                      <?php
                      if($this->session->tarea_actual != $this->siid->TAREA_SUBCATEGORIAS){
                          echo '
                            <li>
                              <a href="https://sii.uptlax.edu.mx/docs/CALENDARIO%20ACADEMICO.pdf" target="_blank">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>Calendario Académico
                              </a>
                            </li>
                          ';
                      }
                      ?>

                    <li>
                      <a href="#" target="_blank">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>Directorio universitario
                      </a>
                    </li>
                    <li>
                      <a href="http://elearning.uptlax.edu.mx/" target="_blank">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>E-learning UPTx
                      </a>
                    </li>
                    <li>
                      <a href="https://sii.uptlax.edu.mx/index.php" target="_blank">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>Sistema Integral de Información
                      </a>
                    </li>
                    <li>
                      <a href="http://uptlax.edu.mx/?page_id=3923" target="_blank">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        Vinculación UPTx
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <?php if($this->session->rol != $this->siid->ROL_INVITADO['clave']){ ?>
              <div class="col-sm-3 col-xs-12">
                <div class="footerTitle">
                  <h4>Próximos eventos</h4>
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
                <?php } ?>
              <div class="col-sm-3 col-xs-12">
                <div class="footerTitle">
                  <h4>Notas importantes</h4>
                </div>
                <div class="footerInfo">
                  <?php
                    foreach ($this->session->nota_inicio as $row) {
                      echo'
                        <p>'.$row->nombre.':
                        <br>'.$row->nota.'</p>
                      ';
                    }
                  ?>
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
    <script type="text/javascript" src="<?php echo base_url('recursos-panel/assets/lib/sweet-alerts2/sweetalert2.min.js'); ?>"></script>

    <script type="text/javascript">
      $('#divMiCalendario').datetimepicker({
           format: 'YYYY-MM-DD HH:mm'
       });
       $('#divMiCalendario').data("DateTimePicker").show();
    </script>


     <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
     <script class="multiline language-js">$(document).ready(function() {
       $('#example').DataTable();
       $('#bandeja_salida').DataTable();
} );</script>

<script language="JavaScript" type="text/javascript">

    function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()

        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock=hours+":"+minutes+":"
         +seconds+" "+dn
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
    }


        window.onload=show5
   //-->

</script>

  </body>

</html>
