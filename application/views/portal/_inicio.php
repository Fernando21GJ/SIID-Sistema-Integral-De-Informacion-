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
  <link rel="stylesheet" href="assets/css/default.css" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="<?php echo base_url('recursos-panel') ?>/assets/img/favicon.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

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
            <div class="col-sm-10">
              <ul class="list-inline topList">
                <li><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                <li><i class="fa fa-phone bg-color-2" aria-hidden="true"></i> +1 234 567 8900</li>
                <li><i class="fa fa-clock-o bg-color-6" aria-hidden="true"></i> Open: 9am - 6pm</li>
              </ul>
            </div>
            <div class="col-sm-2">
              <ul class="list-inline functionList">
                <li><i class="fa fa-unlock-alt bg-color-5" aria-hidden="true"></i> <a href='#loginModal' data-toggle="modal" >Login</a></li>
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
            <a class="navbar-brand" href="index-v3.html"><img src="<?php echo base_url('recursos-panel') ?>/assets/img/logo-daycare.png" alt="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active dropdown singleDrop color-1">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-home bg-color-1" aria-hidden="true"></i> <span>Home</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-left ">
                  <li class=""><a href="#">Kidz School</a></li>
                  <li class=""><a href="#">Kidz Store</a></li>
                  <li class=" active "><a href="#">Kidz Daycare</a></li>
                  <li class=""><a href="#">Kidz Fashion</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-3">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul bg-color-3" aria-hidden="true"></i> <span>pages</span></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li class=" "><a href="about_us.html">About</a></li>
                  <li class="dropdown dropdown-submenu ">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Team<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li class=" "><a href="#">Teachers</a></li>
                      <li class=" "><a href="#">Teacher Details</a></li>
                    </ul>
                  </li>
                  <li class=" "><a href="#">Testimonial</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Events <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class=" "><a href="#">All Events</a></li>
                      <li class=""><a href="#">Single Event Left Sidebar</a></li>
                      <li class=""><a href="#">Single Event Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class=""><a href="#">Photo Gallery</a></li>
                  <li class=""><a href="#">Pricing Table</a></li>
                  <li class=""><a href="#">Services</a></li>
                  <li class=""><a href="#">Services Details</a></li>
                  <li class=""><a href="#">Search Results</a></li>
                  <li class=""><a href="#">Contact Us</a></li>
                  <li class=""><a href="#">FAQ</a></li>
                  <li class=""><a href="#">Sign Up / Login</a></li>
                  <li class="" ><a href="#">Error 404</a></li>
                  <li><a href="#">Coming Soon</a></li>
                </ul>
              </li>
              <li class=" dropdown megaDropMenu color-2">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">
                  <i class="fa fa-file-text-o bg-color-2" aria-hidden="true"></i>
                  <span>Courses</span>
                </a>
                <ul class="row dropdown-menu">
                  <li class="col-md-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Courses Grid</li>
                      <li class=""><a href="#">Courses Grid Fullwidth</a></li>
                      <li class=""><a href="#">Courses Grid Left Sidebar</a></li>
                      <li class=""><a href="#">Courses Grid Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="col-md-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Courses List</li>
                      <li class=""><a href="#">Courses List Fullwidth</a></li>
                      <li class=""><a href="#">Courses List left Sidebar</a></li>
                      <li class=""><a href="#">Courses List Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="col-md-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Single Course</li>
                      <li class=""><a href="#">Single Course Fullwidth</a></li>
                      <li class=""><a href="#">Single Course left Sidebar</a></li>
                      <li class=""><a href="#">Single Course Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="col-md-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Checkout</li>
                      <li class="" ><a href="#">Personal Info</a></li>
                      <li class="" ><a href="#">Payment Info</a></li>
                      <li class="" ><a href="#">Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-4">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-pencil-square-o bg-color-4" aria-hidden="true"></i>
                  <span>Store</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown">Products<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class=""><a href="#">Products Fullwidth</a></li>
                      <li class=""><a href="#">Products Left Sidebar</a></li>
                      <li class=""><a href="#">Products Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class=""><a href="#">Single Product</a></li>
                  <li class=""><a href="#">Product Categories</a></li>
                  <li class=""><a href="#">Cart</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Checkout<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class=" "><a href="#">Personal Info</a></li>
                      <li class=" "><a href="#">Payment Info</a></li>
                      <li class=" "><a href="#">Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-5 ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-calendar bg-color-5" aria-hidden="true"></i>
                  <span>Blog</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class=""><a href="#">Blog Grid Fullwidth</a></li>
                      <li class=""><a href="#">Blog Grid Left Sidebar</a></li>
                      <li class=""><a href="#">Blog Grid Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog List<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class=""><a href="#">Blog List Fullwidth</a></li>
                      <li class=""><a href="#">Blog List Left Sidebar</a></li>
                      <li class=""><a href="#">Blog List Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class=""><a href="#">Single Blog Fullwidth</a></li>
                      <li class=""><a href="#">Single Blog Left Sidebar</a></li>
                      <li class=""><a href="#">Single Blog Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-6">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gg bg-color-6" aria-hidden="true"></i> <span>Components</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class=" "><a href="#">Accordions &amp; Toggles</a></li>
                  <li class=" "><a href="#">Tabs &amp; Dropdowns</a></li>
                  <li class=" "><a href="#">Alert-Label-badges</a></li>
                  <li class=" "><a href="#">Progress Bar</a></li>
                  <li class=" "><a href="#">Buttons</a></li>
                  <li class=" "><a href="#">Forms</a></li>
                  <li class=" "><a href="#">Listgroups Panel</a></li>
                  <li class=" "><a href="#">Tooltip Pagination</a></li>
                  <li class=" "><a href="#">Typography</a></li>
                  <li class=" "><a href="#">Responsive Embed</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="cart-dropdown">
            <a href="#" class="bg-color-6 shop-cart" >
              <i class="fa fa-unlock-alt " aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li>
                  <div class="panel-heading bg-color-1 border-color-1">
                    <h3 class="panel-title">Login</h3>
                  </div>
                  <br>
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
                    <p class="help-block"><a href="#">Forgot password?</a></p>
                  </div>
                  <?php echo form_close(); ?>
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
            <li data-transition="random" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/sliderV3/slider-1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  S<span>II</span>D
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
                  <a target="_blank" href="https://goo.gl/98HEu6" class="btn btn-default">Buy Kidz</a>
                </div>
              </div>
            </li>
            <li data-transition="random" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
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
                  S<span>II</span>D
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
                  <a target="_blank" href="https://goo.gl/98HEu6" class="btn btn-default">Leer más</a>
                </div>
              </div>
            </li>
            <li data-transition="random" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
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
                  S<span>II</span>D
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
                  <a target="_blank" href="https://goo.gl/98HEu6" class="btn btn-default">Leer más</a>
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
                    S<span>II</span>D
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
                  <a target="_blank" href="https://goo.gl/98HEu6" class="btn btn-default">Leer más</a>
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
              <h2>Wellcome to <br>
              <span>kidz school</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
              <p class="aboutP2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              <a href="#" class="btn btn-primary">read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================================
    ——— COLOR SECTION
    ===================================== -->
    <section class="colorSection full-width clearfix bg-color-4 servicesSection">
      <div class="container">
        <div class="sectionTitle text-center alt wow fadeInUp">
          <h2>
            <span class="shape shape-left bg-color-3"></span>
            <span>Our Services</span>
            <span class="shape shape-right bg-color-3"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-cutlery bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Delicious Food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-heart bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Love &amp; Care</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-shield bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Meny Sports</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 hidden-xs">
            <div class="text-center wow fadeInUp">
              <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/services.png" alt="image">
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-car bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Transportation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-graduation-cap bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Experience Teachers</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent wow fadeInUp">
              <span class="media-left">
                <i class="fa fa-leaf bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Physical Activity</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================================
    ——— WHITE SECTION
    ===================================== -->
    <section class="whiteSection full-width clearfix eventSection" id="ourEvents">
      <div class="container">
        <div class="sectionTitle text-center wow fadeInUp">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Our Events</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-6 col-xs-12 block">
            <div class="media eventContent bg-color-1 wow fadeInUp">
              <a class="media-left" href="single-event-left-sidebar.html">
                <img class="media-object" src="<?php echo base_url('recursos-panel') ?>/assets/img/home/event/event-1.jpg" alt="Image">
                <span class="sticker-round">10 <br>July</span>
              </a>
              <div class="media-body">
                <h3 class="media-heading"><a href="single-event-left-sidebar.html">Curabitur tempor metus.</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="#" class="btn btn-primary">read more</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12 block">
            <div class="media eventContent bg-color-2 wow fadeInUp">
              <a class="media-left" href="single-event-left-sidebar.html">
                <img class="media-object" src="<?php echo base_url('recursos-panel') ?>/assets/img/home/event/event-2.jpg" alt="Image">
                <span class="sticker-round">10 <br>July</span>
              </a>
              <div class="media-body">
                <h3 class="media-heading"><a href="single-event-left-sidebar.html">Aenean vel leo vitae sem.</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                <ul class="list-inline btn-green">
                  <li><a href="#" class="btn btn-primary">read more</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12 block">
            <div class="media eventContent bg-color-3 wow fadeInUp">
              <a class="media-left" href="single-event-left-sidebar.html">
                <img class="media-object" src="<?php echo base_url('recursos-panel') ?>/assets/img/home/event/event-3.jpg" alt="Image">
                <span class="sticker-round">10 <br>July</span>
              </a>
              <div class="media-body">
                <h3 class="media-heading"><a href="single-event-left-sidebar.html">Nunc suscipit sem et.</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                <ul class="list-inline btn-red">
                  <li><a href="#" class="btn btn-primary">read more</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12 block">
            <div class="media eventContent bg-color-4 wow fadeInUp">
              <a class="media-left" href="single-event-left-sidebar.html">
                <img class="media-object" src="<?php echo base_url('recursos-panel') ?>/assets/img/home/event/event-4.jpg" alt="Image">
                <span class="sticker-round">10 <br>July</span>
              </a>
              <div class="media-body">
                <h3 class="media-heading"><a href="single-event-left-sidebar.html">Suspendisse eleifend ipsum.</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                <ul class="list-inline btn-sky">
                  <li><a href="#" class="btn btn-primary">read more</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================================
    ——— COLOR SECTION
    ===================================== -->
    <section class="colorSection full-width clearfix bg-color-6 teamSection">
      <div class="container">
        <div class="sectionTitle text-center alt wow fadeInUp">
          <h2>
            <span class="shape shape-left"></span>
            <span>Meet Our Staff</span>
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
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="#">Amanda Smith</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-2.jpg" alt="img" class="img-circle">
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
                    <h3><a href="#">Amanda Stone</a></h3>
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
                    <h3><a href="#">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-1.jpg" alt="img" class="img-circle">
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
                    <h3><a href="#">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide wow fadeInUp">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/team/team-2.jpg" alt="img" class="img-circle">
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
                    <h3><a href="#">Amanda Stone</a></h3>
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
                    <h3><a href="#">Amanda Stone</a></h3>
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
    ——— TESTIMONIAL SECTION
    ===================================== -->
    <section class="mainContent full-width clearfix testimonialArea">
      <div class="container">
        <div class="sectionTitle text-center wow fadeInUp">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Testimonials</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row testimonial-grid wow fadeInUp">
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-1 wow fadeInUp">
              <span class="userSign border-color-1"><i class="fa fa-quote-left color-1" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-2 wow fadeInUp">
              <span class="userSign border-color-2"><i class="fa fa-quote-left color-2" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-3 wow fadeInUp">
              <span class="userSign border-color-3"><i class="fa fa-quote-left color-3" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-4 wow fadeInUp">
              <span class="userSign border-color-4"><i class="fa fa-quote-left color-4" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-5 wow fadeInUp">
              <span class="userSign border-color-5"><i class="fa fa-quote-left color-5" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-6 wow fadeInUp">
              <span class="userSign border-color-6"><i class="fa fa-quote-left color-6" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
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
          <h2>Some Fun Facts</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod</p>
        </div>

        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter">179</div>
              <div class="counterInfo bg-color-1">Events Held</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter">579</div>
              <div class="counterInfo bg-color-2">Happy Funs</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter">279</div>
              <div class="counterInfo bg-color-3">happy clients</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center wow fadeInUp">
              <div class="counter">479</div>
              <div class="counterInfo bg-color-4">hours support</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================================
    ——— PRICE SECTION
    ===================================== -->
    <section class="whiteSection full-width clearfix">
      <div class="container">
        <div class="sectionTitle text-center wow fadeInUp">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Pricing Table</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricingTable wow fadeInUp">
              <div class="priceUper">
              <div class="priceTitle alt bg-color-1"><h3>Morning Session</h3></div>
                <div class="priceInfo alt p-n bg-color-1"><img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/news/news-1.jpg" class="img-responsive"></div>
              </div>
              <div class="priceLower">
                <ul class="list-unstyled priceOffer">
                  <li><i class="fa fa-birthday-cake color-1" aria-hidden="true"></i> 2 Meals/Day</li>
                  <li><i class="fa fa-medkit color-1" aria-hidden="true"></i> Medical Assistance</li>
                  <li><i class="fa fa-paint-brush color-1" aria-hidden="true"></i> Drowing &amp; Dancing</li>
                  <li><i class="fa fa-taxi color-1" aria-hidden="true"></i> Free Transport</li>
                </ul>
                <div class="priceBtn">
                  <a href="checkout-step-1.html" class="btn btn-primary bg-color-1">Choose Plan</a>
                  <h4 class="color-1">$69 <br><small>Per Month</small></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricingTable wow fadeInUp">
              <div class="priceUper">
              <div class="priceTitle alt bg-color-2"><h3>Weekly Session</h3></div>
                <div class="priceInfo alt p-n bg-color-2"><img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/news/news-2.jpg" class="img-responsive"></div>
              </div>
              <div class="priceLower">
                <ul class="list-unstyled priceOffer">
                  <li><i class="fa fa-birthday-cake color-2" aria-hidden="true"></i> 2 Meals/Day</li>
                  <li><i class="fa fa-medkit color-2" aria-hidden="true"></i> Medical Assistance</li>
                  <li><i class="fa fa-paint-brush color-2" aria-hidden="true"></i> Drowing &amp; Dancing</li>
                  <li><i class="fa fa-taxi color-2" aria-hidden="true"></i> Free Transport</li>
                </ul>
                <div class="priceBtn">
                  <a href="checkout-step-1.html" class="btn btn-primary bg-color-2">Choose Plan</a>
                  <h4 class="color-2">$69 <br><small>Per Month</small></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricingTable wow fadeInUp">
              <div class="priceUper">
              <div class="priceTitle alt bg-color-3"><h3>Fullday Session</h3></div>
                <div class="priceInfo alt p-n bg-color-3"><img src="<?php echo base_url('recursos-panel') ?>/assets/img/home/news/news-3.jpg" class="img-responsive"></div>
              </div>
              <div class="priceLower">
                <ul class="list-unstyled priceOffer">
                  <li><i class="fa fa-birthday-cake color-3" aria-hidden="true"></i> 2 Meals/Day</li>
                  <li><i class="fa fa-medkit color-3" aria-hidden="true"></i> Medical Assistance</li>
                  <li><i class="fa fa-paint-brush color-3" aria-hidden="true"></i> Drowing &amp; Dancing</li>
                  <li><i class="fa fa-taxi color-3" aria-hidden="true"></i> Free Transport</li>
                </ul>
                <div class="priceBtn">
                  <a href="checkout-step-1.html" class="btn btn-primary bg-color-3">Choose Plan</a>
                  <h4 class="color-3">$69 <br><small>Per Month</small></h4>
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
      <div class="footerInfoArea full-width clearfix bg-image" style="background-image: url(<?php echo base_url('recursos-panel') ?>/assets/img/footer/footer-bg3.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <a href="#"><img src="<?php echo base_url('recursos-panel') ?>/assets/img/logov3.png"></a>
              </div>
              <div class="footerInfo">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia.Lorem ipsum dolor sit amet.</p>
                <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Useful Links</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled footerList">
                  <li>
                    <a href="index.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz School
                    </a>
                  </li>
                  <li>
                    <a href="about_us.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>About Kidz School
                    </a>
                  </li>
                  <li>
                    <a href="index-v2.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz Store
                    </a>
                  </li>
                  <li>
                    <a href="index-v3.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz Daycare
                    </a>
                  </li>
                  <li>
                    <a href="photo-gallery.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                      Photo Gallery
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Recent Post</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled postLink">
                  <li>
                    <div class="media">
                      <a class="media-left" href="single-blog.html">
                        <img class="media-object img-rounded border-color-1" src="<?php echo base_url('recursos-panel') ?>/assets/img/footer/footer-img-1.png" alt="Image">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="#">A Clean Website Gives More Experience To The Visitors</a></h5>
                        <p>July 7 - 2016</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <a class="media-left" href="single-blog-left-sidebar.html">
                        <img class="media-object img-rounded border-color-2" src="<?php echo base_url('recursos-panel') ?>/assets/img/footer/footer-img-2.png" alt="Image">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="#">A Clean Website Gives More Experience To The Visitors</a></h5>
                        <p>July 7 - 2016</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <a class="media-left" href="single-blog-left-sidebar.html">
                        <img class="media-object img-rounded border-color-4" src="<?php echo base_url('recursos-panel') ?>/assets/img/footer/footer-img-3.png" alt="Image">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="#">A Clean Website Gives More Experience To The Visitors</a></h5>
                        <p>July 7 - 2016</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4>Mailing List</h4>
              </div>
              <div class="footerInfo">
                <p>Sign up for our mailing list to get latest updates and offers.</p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Email address" aria-describedby="basic-addon21">
                  <button type="submit" class="input-group-addon" id="basic-addon21"><i class="fa fa-check" aria-hidden="true"></i></button>
                </div>
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
              <ul class="list-inline">
                <li><a href="#" class="bg-color-1"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-2"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-3"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-4"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-5"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="col-sm-7 col-sm-pull-5 col-xs-12">
              <div class="copyRightText">
                <p>© 2016 Copyright Kidz School Bootstrap Template by <a href="https://www.iamabdus.com/">Abdus</a>.</p>
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
              <!-- <form action="#" method="POST" role="form"> -->
              <div class="">

              </div>
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
                <p class="help-block"><a href="#">Forgot password?</a></p>
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
</body>

</html>
;
