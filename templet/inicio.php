
 <!--===================== Sticky parallax Header =====================-->
    <!-- Slider -->
    <section class="slider-bg" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <div class="slider-title">
                        <h2 class="reveal fadeInUp jmy_web_div" data-page="inicio" id="landing_titulo_slide"><?php $this->pnt('landing_titulo_slide','Create an App Landing Page. No Coding required '); ?>
                        </h2>
                        <p data-wow-delay="0.3s"  class="reveal fadeInUp jmy_web_div" data-page="inicio" id="landing_texto1"><?php $this->pnt('landing_texto1','You can create custom iOS and macOS apps for your business using Swift, our open source programming language. Apps that have the power to transform workflows, improve client relationships, and boost your productivity.'); ?> 
                        </p>
                            <a href="#" class="btn btn-primary mr-2 reveal fadeInUp" data-wow-delay="0.6s">
                            
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="RRDHS99T9CPXW">
                                    <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">


                                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                </form>
                                </a> 
                            <?php  /* <a href="#" class="btn btn-success reveal fadeInUp" data-wow-delay="0.9s">
                            <i class="fa fa-whatsapp mr-2" aria-hidden="true"></i>Contactar</a> */ ?>

                        <p class="mt-4 text-muted reveal fadeInUp jmy_web_div" data-page="inicio" id="landing_texto2" data-wow-delay="1.2s"><?php $this->pnt('landing_texto2','Version required ios 10 or later, Android Kitkat or later'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="phone-wrap reveal fadeIn"> 
                        <img src="<?php $this->url_templet(); ?>images/adult-hand-dark.png" class="phone" alt="#">
                        <div class="screen">
                            <div class="screen-slider owl-carousel owl-theme">
                                <div class="item"><img src="<?php $this->url_templet(); ?>images/screen2.png" alt="#"></div>
                                <div class="item"><img src="<?php $this->url_templet(); ?>images/screen1.png" alt="#"></div>
                                <div class="item"><img src="<?php $this->url_templet(); ?>images/screen3.png" alt="#"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Header -->
    
   
    <!--===================== variation =====================-->
    <section class="space light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 center-block">
                    <h1 class="mb-4 jmy_web_div" data-page="inicio" id="landing_divisor1_titulo">
                    <?php $this->pnt('landing_divisor1_titulo','Perfect landing page for any App'); ?>
                    </h1>

                    <p class="mb-5 jmy_web_div" data-page="inicio" id="landing_divisor1_text">
                    <?php $this->pnt('landing_divisor1_text','You can create custom iOS and macOS apps for your business using Swift, our open source programming language. Apps that have the power to transform workflows, improve client relationships, and boost your productivity.'); ?>
                    </p> 
                   <?php /* <a href="#" class="btn btn-success reveal fadeInUp" data-wow-delay="0.9s">
                    <i class="fa fa-whatsapp mr-2" aria-hidden="true"></i>Contactar</a>*/ ?>

                </div>
            </div>
        </div>
    </section> 
    <!--//End variation -->




    <!--===================== Detailed Slider =====================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-md-4 detailed-icon-wrap">
                    <div class="detailed-block reveal fadeInLeft"> <span class="pe-primary pe-7s-server"></span>
                        <h4 class="jmy_web_div" data-page="inicio" id="landing2_titulo1">
                        <?php $this->pnt('landing2_titulo1','Powerful Stack'); ?>
                        </h4>

                        <p class="text-muted jmy_web_div" data-page="inicio" id="landing2_texto1">
                        <?php $this->pnt('landing2_texto1','Conveniently redefine transparent results vis-a-vis inexpensive best practices of the tech.'); ?>   
                        </p>

                    </div>
                    <div class="detailed-block reveal fadeInLeft" data-wow-delay="0.3s"> <span class="pe-primary pe-7s-science"></span>
                        <div class="detailed-title">
                            <h4 class="jmy_web_div" data-page="inicio" id="landing2_titulo2">
                            <?php $this->pnt('landing2_titulo2','React native support'); ?></h4>

                            <p class="text-muted jmy_web_div" data-page="inicio" id="landing2_texto2">
                            <?php $this->pnt('landing2_texto2','Holisticly cultivate effective web services for leading-edge users. Completely myocardinate impactful '); ?>
                            </p>

                        </div>
                    </div>
                    <div class="detailed-block reveal fadeInLeft" data-wow-delay="0.6s"> <span class="pe-primary pe-7s-photo"></span>
                        <div class="detailed-title">
                            <h4 class="jmy_web_div" data-page="inicio" id="landing_titulo3">
                            <?php $this->pnt('landing_titulo3','Ve a tu mercado'); ?>
                                
                            </h4>

                            <p class="text-muted jmy_web_div" data-page="inicio" id="landing2_texto3">
                            <?php $this->pnt('landing2_texto3','Holisticly cultivate effe'); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 detaled-wrap-flex">

                    <div class="jmy_web_contador" data-page="inicio" id="slide2_landing" data-value="<?php $this->pnt('slide2_landing','3'); 
                     ?>" data-titulo="Inica el número de páginas a mostrar"></div>


                    <div class="deatiled-phone-wrap reveal fadeIn"> <img src="<?php $this->url_templet(); ?>images/detailed-screen.png" class="phone" alt="#">

                    <?php 
                        $paginas = $this->pnt('slide2_landing','3',["return"=>true]); 
                        $contador = 0;
                        for($i=0;$i<$paginas;$i++){ ?>

                             <div class="<?php $this->pnt('slider_cat_'.$i,'_b'); ?> jmy_web_slider" id="grupo_slider<?php echo $i;?>_b" data-page="inicio" data-marco="service-box" 

                                data-var='[
                                {"type":"imagen","id":"amamos_slide<?php echo $i;?>_imagen_b","url":"<?php $this->url_templet();?>images/screen5.png"}]'>


                                <div class="screen">
                                    <div class="screen-slider owl-carousel owl-theme">
                                        <div class="item">

                                            <img id="amamos_slide<?php echo $i; ?>_imagen_b"
                                            src="<?php $this->pnt('amamos_slide'.$i.'_imagen_b',$this->url_templet(['return'=>true]).'images/screen5.png' ); ?>" >
                                        </div>

                                    </div>
                                </div>
                            </div>

                    <?php } ?>
                    
                    </div>   
                </div>
                
                <div class="col-md-4 detailed-icon-wrap">
                    <div class="detailed-block2 reveal fadeInRight"> <span class="pe-primary pe-7s-rocket detailed-icon2"></span>
                            <h4 class="jmy_web_div" data-page="inicio"  id="landing2_ttitulo4">
                            <?php $this->pnt('landing2_ttitulo4','React native support'); ?>
                                
                            </h4>

                            <p class="text-muted jmy_web_div" data-page="inicio" id="landing2_texto4">
                            <?php $this->pnt('landing2_texto4','Holisticly cultivate effective web services for leading-edge users. Completely myocardinate impactful '); ?>
                            </p>
                    </div>
                    <div class="detailed-block2 reveal fadeInRight"> <span class="pe-primary pe-7s-medal detailed-icon2" data-wow-delay="0.3s"></span>
                            <h4 class="jmy_web_div" data-page="inicio"  id="landing2_titulo5">
                            <?php $this->pnt('landing2_titulo5','React native support'); ?></h4>

                            <p class="text-muted jmy_web_div" data-page="inicio" id="landing2_texto5">
                            <?php $this->pnt('landing2_texto5','Holisticly cultivate effective web services for leading-edge users. Completely myocardinate impactful '); ?>
                            </p>
                    </div>
                    <div class="detailed-block2 reveal fadeInRight"> <span class="pe-primary pe-7s-edit detailed-icon2" data-wow-delay="0.6s"></span>
                            <h4 class="jmy_web_div" data-page="inicio" id="landing2_titulo6">
                            <?php $this->pnt('landing2_titulo6','React native support'); ?></h4>

                            <p class="text-muted jmy_web_div" data-page="inicio" id="landing2_texto6">
                            <?php $this->pnt('landing2_texto6','Holisticly cultivate effective web services for leading-edge users. Completely myocardinate impactful '); ?>
                            </p>
                    </div>
                    <a href="#" class="btn btn-primary mr-2 reveal fadeInUp" data-wow-delay="0.6s">
                    <?php /*<i class="fa fa-paypal mr-2" aria-hidden="true"></i>Paypal*/?>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="RRDHS99T9CPXW">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form></a> 
                </div>
            </div>
        </div>
    </section>

     <!--===================== Contact =====================-->
    <section class="space light-bg">
        <div class="container light-bg">
            <div class="row">
                <div class="col-md-8">
                    <div class="reveal fadeInUp">
                        <form >
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="center-block mt-4 mb-4 jmy_web_div" data-page="inicio" id="titulo_contacto">
                            <?php $this->pnt('titulo_contacto','Contactanos'); ?></h2>
                                </div>
                                <div class="col-md-6">
                                    <div class=""> <input class="form-control jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Nombre" name="name" placeholder="Nombre"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=""> <input  class="form-control jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Email" name="email" placeholder="Email"> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class=""> <textarea class="form-control jmy_web_contacto" data-formulario="contacto_inicio" data-campo="Mensaje" name="message" placeholder="Message" rows="2"></textarea> </div>
                                      <div class="text-center">

                                       <button id="contacto_inicio" class="btn btn-primary mt-4 jmy_web_contacto_enviar"  data-formulario="contacto_inicio">Enviar<span class="pe-7s-angle-right-circle ml-3"></span></button>

                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address-block">
                        <div class="address reveal fadeInUp"> <span class="pe-7s-map-marker"></span>
                            <p class="jmy_web_div" data-page="inicio" id="direccion">
                            <?php $this->pnt('direccion','481 Boston St. <br> Mountain View, CA 94043'); ?></p>
                        </div>
                        <div class="address reveal fadeInUp" data-wow-delay="0.3s"> <span class="pe-7s-mail"></span>
                            <p class="jmy_web_div" data-page="inicio" id="correo">
                            <?php $this->pnt('correo','sales@appland.com <br> support@appland.com '); ?></p>
                        </div>
                        <div class="address reveal fadeInUp" data-wow-delay="0.6s"> <span class="pe-7s-call"></span>
                            <p class="jmy_web_div" data-page="inicio" id="telefono">
                            <?php $this->pnt('telefono','+1 (223) 243 1208 <br> +1 (351) 561 7041'); ?></p>
                        </div>
                        <ul class="reveal fadeInUp" data-wow-delay="0.9s">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Contact -->
   
    