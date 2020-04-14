<!DOCTYPE html>
<html lang="en">
<?php require 'definitions.php'; ?>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Inner Champ - Acompanhamento de Nutrição e treino!</title>

    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- ICON
    ================================================== -->
    <link rel="icon" href="<?php echo URL?>assets/images/icon.png" type="image/png">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URL?>assets/css/owl.theme.default.min.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="<?php echo URL?>assets/css/colorbox.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php echo URL?>assets/js/html5shiv.js"></script>
      <script src="<?php echo URL?>assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <ul class="top-info"><li>&nbsp;</li></ul> TO DELETE
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-social text-right">
                        <ul class="unstyled">
                            <li>
                                <a title="Facebook" href="https://facebbok.com/themefisher.com">
                                    <span class="social-icon"><i class="fa fa-facebook"></i></span>
                                </a>
                                <a title="Twitter" href="https://twitter.com/themefisher.com">
                                    <span class="social-icon"><i class="fa fa-twitter"></i></span>
                                </a>
                                <a title="Instagram" href="https://instagram.com/themefisher.com">
                                    <span class="social-icon"><i class="fa fa-instagram"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->

        <!-- Header start -->
        <header id="header" class="header-one">
            <div class="container">
                <div class="row">
                    <div class="logo-area clearfix">
                        <div class="logo col-xs-12 col-md-3">
                            <a href="<?php echo URL?>">
                                <img src="<?php echo URL?>assets/images/logo_champ.svg" alt="">
                            </a>
                        </div><!-- logo end -->

                        <!-- <div class="col-xs-12 col-md-9 header-right">
                            <ul class="top-info-box">
                                <li>
                                    <div class="info-box">
                                        <div class="info-box-content">
                                            <p class="info-box-title">Contactos</p>
                                            <p class="info-box-subtitle">(+351) 919 773-116</p>
                                            <p class="info-box-subtitle">(+244) 921 024-086</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-box">
                                        <div class="info-box-content">
                                            <p class="info-box-title">E-mail</p>
                                            <p class="info-box-subtitle">geral@innerchamp.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="info-box last">
                                        <div class="info-box-content">
                                            <p class="info-box-title"><i class="fa fa-map-marker">&nbsp;</i></p>
                                            <p class="info-box-subtitle">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-get-a-quote">
                                    <a class="btn btn-primary" href="contact.html">Escolher Plano</a>
                                </li>
                            </ul><!-- Ul end
                        </div> /header right end -->
                    </div><!-- logo area end -->
                </div><!-- Row end -->
            </div><!-- Container end -->

            <nav class="site-navigation navigation navdown">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="site-nav-inner pull-left">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div class="collapse navbar-collapse navbar-responsive-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="<?php echo URL ?>">Início</a></li>

                                        <li class="dropdown">
                                            <a href="quem-somos/" class="dropdown-toggle" data-toggle="dropdown">Quem somos <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo URL ?>app/view/quem-somos/#about">Sobre nós</a></li>
												<!--<li><a href="<?php echo URL ?>app/view/legal/termos/">Termos e condições</a></li>
                                                <li><a href="<?php echo URL ?>app/view/legal/politicas/">Politicas de privacidades e cookies</a></li>-->
                                            </ul>
                                        </li>
                                        
                                        <!--<li><a href="#">Planos</a></li>

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Artigos <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo URL ?>app/view/artigos/?role=receitas">Receitas</a></li>
                                                <li><a href="<?php echo URL ?>app/view/artigos/?role=suplementacao">Suplementação</a></li>
                                                <li><a href="<?php echo URL ?>app/view/artigos/?role=nutricao">Nutrição</a></li>
                                                <li><a href="<?php echo URL ?>app/view/artigos/?role=treino">Treino</a></li>
                                            </ul>
                                        </li>-->
										
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">O nosso processo <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo URL ?>app/view/artigos/?role=receitas">Como funciona</a></li>
                                                <li><a href="<?php echo URL ?>app/view/artigos/?role=suplementacao">Planos personalizados</a></li>
                                                <li><a href="<?php echo URL ?>app/view/artigos/?role=nutricao">Nosso Método</a></li>
                                                <li><a href="<?php echo URL ?>app/view/artigos/?role=treino">Orientação</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="<?php echo URL ?>app/view/casos-de-sucesso/">Serviços</a></li>

                                        <li><a href="<?php echo URL ?>app/view/contactos/">Contactos</a></li>

                                    </ul>
                                    <!--/ Nav ul end -->
                                </div>
                                <!--/ Collapse end -->

                            </div><!-- Site Navbar inner end -->

                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end 

                    <div class="nav-search">
                        <span id="search"><i class="fa fa-search"></i></span>
                    </div><!-- Search end

                    <div class="search-block" style="display: none;">
                        <input type="text" class="form-control" placeholder="O que procuras?">
                        <span class="search-close">&times;</span>
                    </div>--><!-- Site search end -->
                </div>
                <!--/ Container end -->

            </nav>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->