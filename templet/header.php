<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88161040-1"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WWGPVLQ');</script>
    <!-- End Google Tag Manager -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive HTML5">
    <meta name="keywords" content="HTML5, bootstrap, interior, fashion, shopping, responsive">
    <title>Landin Pagé</title>
    <!-- Font --> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/fontawesome/css/font-awesome.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/simple-line-icons/css/simple-line-icons.css">
    <!-- Pe-icon Font -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/pe-icon/css/helper.css">
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/pe-icon/css/pe-icon-7-stroke.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/bootstrap/css/bootstrap.min.css">
    <!-- Main css -->
    <link href="<?php $this->url_templet(); ?>css/style.css" rel="stylesheet">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/slick/css/slick.css">
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/slick/css/slick-theme.css">
    <!-- owlcarousel Slider -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/owlcarousel/css/owl.theme.default.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/animate.css">
    <!-- Magnific Po;pup -->
    <link rel="stylesheet" href="<?php $this->url_templet(); ?>vendors/magnific-popup/css/magnific-popup.css"> </head>
 
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWGPVLQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Load Facebook SDK for JavaScript  icono de messenger comienza icono de messenger-->

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
      attribution="setup_tool"
      page_id="253291252082169"
      theme_color="#0084ff"
      logged_in_greeting="¡Hola !  Bienvenido a Venta Online ¿En qué podemos ayudarte?"
      logged_out_greeting="¡Hola !  Bienvenido a Venta Online ¿En qué podemos ayudarte?">
    </div>
    <!-- termina icono de messenger -->
    <div id="jmy_web"></div>
    <div id="jmy_web_tools"></div>

    <!--===================== Header =====================-->
    <!-- Nav Menu -->
    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <nav class="navbar navbar-expand-lg navbar-light"> 
                        <div id="logo" class="logo">
                                <div class="jmy_web_slider" id="logo_top" data-page="inicio" data-marco="logo_top" data-var='[{"type":"imagen","id":"logo_top_img","url":"<?php $this->url_templet(); ?>images/logo2.png"}]' ><a href="<?php $this->url_inicio(); ?>"><img alt="" class="img-fluid" title="" id="logo_top_img" src="<?php $this->pnt('logo_top_img',$this->url_templet(['return'=>true]).'images/logo2.png'); ?> "/></a></div>
                                
                        </div><!-- /#logo -->

                    
                        
                    </nav>

                </div>
                <div class="col-md-8 col-sm-8 address-block">
                        
                    <ul class="reveal fadeInUp" data-wow-delay="0.9s">                           
                        <li class="jmy_web_div"  id="header_telefono" data-page="header" data-editor="no"><a href=""><i class="fa fa-whatsapp " aria-hidden="true"> </i> <?php $this->pnt( 'header_telefono','55 15958140',["secundario"=>"header"]); ?></a></li> 
                        <li><a href="https://www.facebook.com/Venta-Online-253291252082169/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <?php // <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> ?>
                        <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="jmy_web_div"  id="header_correo" data-page="header" data-editor="no"><a href="#"><?php $this->pnt( 'header_correo','juancarlos@comsis.mx',["secundario"=>"header"]); ?></a></li> 
                        
                     </ul>

                </div>
                
            </div>
        </div>
    </div>
    <!--//End Header -->

