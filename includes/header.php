<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Solion - IT Solutions Template">

    <!-- ========== Page Title ========== -->
    <title>Dataflow Connect, S.A.</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />

    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>
<?php include("./includes/services-content.php"); ?>

<body>


    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inc-pad bg-gradient text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-12 info">
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>Punta Pacifica, San Francisco, Panama
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i> supportdesk@dataflowconnect.biz
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->


    <!-- Header 
    ============================================= -->

    <?php 
        $isLang = !isset($_REQUEST['lang']) || $_REQUEST['lang']!='en';
    ?>
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <div class="container ">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="?page=home" style="width:300px;">
                        <img src="assets/images/logo.png" class="logo w-75" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left mt-3" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="">
                            <a href="?page=home" class=" active"> <?php echo !isset($_REQUEST['lang']) || $_REQUEST['lang']!='en' ? 'INICIO' : 'Home' ?> </a>
                        </li>
                        <li class="dropdown">
                            <a href="?page=our-proposal" class="dropdown-toggle" data-toggle="dropdown"><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang']!='en' ? 'NUESTRA PROPUESTA' : 'OUR PROPOSAL' ?></a>
                            <ul class="dropdown-menu">
                             <?php foreach ($services as $service): ?>
                                    <li><a href="?page=our-proposal&service=<?= $service['link'] ?>"><?= $service['title'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="">
                            <a href="?page=solutions-by-sector" class=""><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang']!='en' ? 'SOLUCIONES POR SECTOR' : 'SOLUTIONS BY SECTOR' ?></a>
                        </li>
                        <li class="">
                            <a href="?page=digital-infrastructure" class=""><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang']!='en' ? 'INFRAESTRUCTURA DIGITAL' : 'DIGITAL INFRASTRUCTURE' ?></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left mt-3" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="">
                            <a href="?page=discover-more" class=""><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang']!='en' ? 'DESCUBRA MAS' : 'DISCOVER MORE' ?></a>
                        </li>
                        <li class="">
                            <a href="?page=frequesntly-asked-question" class=""><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang']!='en' ? 'PREGUNTAS FRECUENTES' : 'FREQUENTLY ASKED QUESTIONS' ?></a>
                        </li>
                        <li>
                            <a href="?page=contact-us"><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang']!='en' ? 'CONTACTENOS' : 'CONTACT US' ?></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>

    <?php if ($_REQUEST['page'] != 'home'): ?>

        <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/12.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Services Single</h2>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li class="active">Single</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>