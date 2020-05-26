<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIID</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/rs-plugin/css/settings.css" rel="stylesheet" >
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/selectbox/select_option1.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/isotope/isotope.css" rel="stylesheet">
  <link href="<?php echo base_url('recursos-panel') ?>/assets/plugins/animate/animate.css" rel="stylesheet">

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link href="<?php echo base_url('recursos-panel') ?>/assets/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('recursos-panel') ?>/assets/css/default.css" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="assets/img/favicon.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">
  <div class="main-wrapper">
    <!-- ====================================
    ——— HEADER
    ===================================== -->
    <header id="pageTop" class="header-wrapper">
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
            <div class="col-sm-7">
              <ul class="list-inline topList">
                <li><i class="fa fa-clock-o bg-color-2" aria-hidden="true"></i> <?php date_default_timezone_set('America/Mexico_City'); echo 'Fecha/Hora: ', date('d-m-Y', time()).'  &nbsp &nbsp';?><span id="liveclock" ></span></li>
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
                <li></li>
              </ul>
            </div>
          </div>
        </div>
      </div>


            <!-- NAVBAR -->
      <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('recursos-panel') ?>/assets/img/logo-school.png" alt="Kidz School"></a>
          </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">



              <li class="dropdown singleDrop color-4  active ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <li><a href='#loginModal' data-toggle="modal" ><i class="fa fa-user bg-color-4" aria-hidden="true"></i> Iniciar sesión</a></li>

                </a>

              </li>


            </ul>
          </div>

        </div>
      </nav>
    </header>



    <!-- ====================================
    ——— BANNER THREE
    ===================================== -->
    <section class="bannercontainer bannercontainerV3">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/sliderV3/slider-1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  <span>SIID</span>
                </div>

                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="345"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Sistema Integral de Información Docente
                </div>

                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="455"
                  data-speed="1200"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <!-- <a target="_blank" href="https://goo.gl/98HEu6" class="btn btn-default">Buy Kidz</a> -->
                </div>
              </div>
            </li>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
              <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/sliderV3/slider-2.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  <span>SIID</span>
                </div>

                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="345"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Sistema Integral de Información Docente
                </div>

                <div class="tp-caption rs-caption-3 sft text-center"
                  data-hoffset="0"
                   data-x="center"
                  data-y="455"
                  data-speed="1200"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <!-- <a target="_blank" href="https://goo.gl/98HEu6" class="btn btn-default">Buy Kidz</a> -->
                </div>
              </div>
            </li>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
              <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/sliderV3/slider-3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-right"
                  data-hoffset="0"
                  data-y="270"
                  data-x="right"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  <span>SIID</span>
                </div>

                <div class="tp-caption rs-caption-2 sft text-right"
                  data-hoffset="0"
                  data-x="right"
                  data-y="345"
                  data-x="right"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Sistema Integral de Información Docente
                </div>

                <div class="tp-caption rs-caption-3 sft text-right"
                  data-hoffset="0"
                  data-x="right"
                  data-y="455"
                  data-speed="1200"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <!-- <a target="_blank" href="https://goo.gl/98HEu6" class="btn btn-default">Buy Kidz</a> -->
                </div>
              </div>
            </li>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"  data-title="Slide 4">
              <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/sliderV3/slider-4.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                  <div class="tp-caption rs-caption-1 sft start text-right"
                    data-hoffset="0"
                    data-y="270"
                    data-x="right"
                    data-speed="800"
                    data-start="1000"
                    data-easing="Back.easeInOut"
                    data-endspeed="300">
                    <span>SIID</span>
                  </div>

                <div class="tp-caption rs-caption-2 sft text-right"
                  data-hoffset="0"
                  data-y="345"
                  data-x="right"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Sistema Integral de Información Docente
                </div>

                <div class="tp-caption rs-caption-3 sft text-right"
                  data-hoffset="0"
                  data-x="right"
                  data-y="455"
                  data-speed="1200"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <!-- <a target="_blank" href="https://goo.gl/98HEu6" class="btn btn-default">Buy Kidz</a> -->
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>


        <!-- ====================================
    ——— WHITE SECTION
    ===================================== -->
    <section class="whiteSection full-width clearfix aboutSchool">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-push-6 col-xs-12">
            <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/about-school.png" alt="image" class="img-responsive wow fadeInUp">
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-xs-12">
            <div class="schoolInfo wow fadeInUp">
              <h2>Bienvenido<br>
              <span>SIID</span></h2>
              <p>Ahora podrás subir todos tus recursos multimedia para mejorar tus clases. </p>
              <p class="aboutP2">Disponibles diferentes herramientas como notas, mensajes, eventos y más... </p>
              <a href='#loginModal' data-toggle="modal" class="btn btn-primary">Inicia Sesión</a>
            </div>
          </div>
        </div>
      </div>
    </section>

	<!-- ====================================
    ——— COUNT UP SECTION
    ===================================== -->
    <section class="countUpSection">
      <div class="container">
        <div class="sectionTitleSmall wow fadeInUp">
          <h2>Archivos multimedia en la base de datos del sistema SIID</h2>
          <p>Total de recursos disponibles</p>
        </div>

        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter"><?php echo $documentos['docx']; ?></div>
              <div class="counterInfo bg-color-1">Word</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter"><?php echo $documentos['xlsx']; ?></div>
              <div class="counterInfo bg-color-2">Excel</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter"><?php echo $documentos['pdf']; ?></div>
              <div class="counterInfo bg-color-3">PDF</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter"><?php echo $documentos['otro']; ?></div>
              <div class="counterInfo bg-color-4">Otros</div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ====================================
    ——— COLOR SECTION
    ===================================== -->
    <section class="colorSection full-width clearfix bg-color-4 teamSection">
      <div class="container">
        <div class="sectionTitle text-center alt wow fadeInUp">
          <h2>
            <span class="shape shape-left"></span>
            <span>Ventajas de guardar tus archivos en el SIID</span>
            <span class="shape shape-right"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel teamSlider">
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-1.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">

                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Fácil acceso</a></h3>
                    <p>Desde cualquier parte 24/7</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-2.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">

                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Multiplataforma</a></h3>
                    <p>Incluso desde dispositivos móviles</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-3.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">

                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Ahorra espacio</a></h3>
                    <p>No tendrás saturado tu disco duro</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-4.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">

                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Más Seguridad</a></h3>
                    <p>No pierdas más tus archivos</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-1.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">

                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Compartir información</a></h3>
                    <p>	 El intercambio de información</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-5.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">

                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-3.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-4.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- ====================================
    ——— MAP AREA SECTION
    ===================================== -->
    <section class="mapArea">
      <div id="map"></div>
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
                <h4> </h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled footerList">
                  <li>
                    <a href="https://sii.uptlax.edu.mx/docs/CALENDARIO%20ACADEMICO.pdf">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Calendario Académico
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Directorio universitario
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Accesos rápidos UPTx</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled footerList">
                  <li>
                    <a href="http://elearning.uptlax.edu.mx/">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>E-learning UPTx
                    </a>
                  </li>
                  <li>
                    <a href="https://sii.uptlax.edu.mx/index.php">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Sistema Integral de Información
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4> </h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled footerList">
                    <a href="http://uptlax.edu.mx/?page_id=3923">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                      Vinculación UPTx
                    </a>
                  </li>
                </ul>
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
              <h3 class="panel-title">Iniciar sesión</h3>
            </div>
            <div class="panel-body">
              <!-- <form action="#" method="POST" role="form"> -->
              <?php echo form_open("portal/sesion") ?>
              <div class="form-group formField">
                <!-- <input type="text" class="form-control" placeholder="User name"> -->
                <?php
                    $user = array('name'=>'usuario', 'placeholder'=>'Usuario', 'class'=>'form-control' );
                    echo form_input($user);
                ?>
              </div>
              <div class="form-group formField">
                <!-- <input type="password" class="form-control" placeholder="Password"> -->
                <?php
                    $password = array('name'=>'password', 'placeholder'=>'Contraseña', 'class'=>'form-control', 'id'=>'pass');
                    echo form_password($password);
                ?>
              </div>
              <div class="form-group formField">
                <!-- <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Log in"> -->
                <?php echo form_submit('Enviar', 'Ingresar', array('class'=>'btn btn-primary btn-block bg-color-3 border-color-3')); ?>
              </div>
              <div class="form-group formField">
                <!--<p class="help-block"><a href="#">Forgot password?</a></p>-->
              </div>
              <?php echo form_close(); ?>
              <!-- </form> -->
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
