<!--===================== footer =====================-->
    <footer class="space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 center-block">
                    <p class="jmy_web_div"  id="footer_leyenda" data-page="header" data-editor="no"> <?php $this->pnt( 'footer_leyenda','Copyright © 2017. All rights reserved. Appland Inc',["secundario"=>"header"]); ?> </p> 
                    <?php /* <a href="<?php $this->url_inicio(); ?>#" class="jmy_web_div"  id="footer_PRESS" data-page="header" data-editor="no">
                        <?php $this->pnt( 'footer_PRESS','PRESS',["secundario"=>"header"]); ?></a>
                    <a  href="<?php $this->url_inicio(); ?>#" class="jmy_web_div"  id="footer_TERMS" data-page="header" data-editor="no">
                    <?php $this->pnt( 'footer_TERMS','TERMS',["secundario"=>"header"]); ?></a>
                    <a href="<?php $this->url_inicio(); ?>#" class="jmy_web_div"  id="footer_PRIVACY" data-page="header" data-editor="no">
                    <?php $this->pnt( 'footer_PRIVACY','PRIVACY',["secundario"=>"header"]); ?></a> */ ?>
                </div>
            </div>
        </div>
    </footer>
    <!--//End footer -->
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php $this->url_templet(); ?>vendors/jquery/js/jquery-3.2.1.min.js"></script>
    <script src="<?php $this->url_templet(); ?>vendors/bootstrap/js/popper.min.js"></script>
    <script src="<?php $this->url_templet(); ?>vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php $this->url_templet(); ?>vendors/skrollr/skrollr.min.js"></script>
    <script src="<?php $this->url_templet(); ?>js/script.js"></script>
     <!-- Slick JS -->
    <script src="<?php $this->url_templet(); ?>vendors/slick/js/slick.min.js"></script>
    <!-- owlcarousel JS -->
    <script src="<?php $this->url_templet(); ?>vendors/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- Wow JS (On Scroll Animation) -->
    <script src="<?php $this->url_templet(); ?>vendors/wow.min.js"></script>
    <!-- owlcarousel JS -->
    <script src="<?php $this->url_templet(); ?>vendors/magnific-popup/js/magnific-popup.min.js"></script>
    <!-- Validate JS -->
    <script src="<?php $this->url_templet(); ?>vendors/validate.js"></script>
    <!-- Contact JS -->
    <script src="<?php $this->url_templet(); ?>js/contact.js"></script>
    <!-- Script JS -->
    <script src="<?php $this->url_templet(); ?>js/script.js"></script>
    <?php  $this->llamar_js(); ?> 
</body>

</html>