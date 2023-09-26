        <!-- FOOTER START -->
        <footer class="site-footer footer-large  footer-dark    footer-wide">
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper bg-cover" style="background-image:url(<?= efp_URL ?>assets/images/background/f-bg.jpg);background-attachment: fixed; background-position: center center;">
                <div class="overlay-main sx-bg-secondry opacity-08"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-6 col-md-6 col-sm-6">  
                            <div class="widget widget_about">
                                <!--<h4 class="widget-title">About Company</h4>-->
                                <div class="logo-footer clearfix p-b15">
                                    <a href="<?php bloginfo('url'); ?>"><img src="<?=get_option('efp_logo_footer_img'); ?>" alt=""></a>
                                </div>
                                <p>
                                    <?= get_option('footer_content'); ?>
                                </p>                                 
                                
                                <ul class="social-icons  sx-social-links">
                                    <?php $facebook = get_option('efp_fb');  
                                        if(!empty($facebook)) :
                                    ?>
                                    <li><a href="<?=$facebook;?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <?php endif; ?>
                                    <?php $twitter = get_option('efp_twitter');  
                                        if(!empty($twitter)) :
                                    ?>
                                    <li><a href="<?=$twitter;?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <?php endif; ?>
                                    <?php $insta = get_option('efp_insta');  
                                        if(!empty($insta)) :
                                    ?>
                                    <li><a href="<?=$insta;?>" class="insta"><i class="fa fa-instagram"></i></a></li>
                                    <?php endif; ?>
                                    <?php $youtube = get_option('efp_youtube');  
                                        if(!empty($youtube)) :
                                    ?>
                                    <li><a href="<?=$youtube;?>" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                                    <?php endif; ?> 
                                    <?php $whatsapp = get_option('efp_whatsapp');  
                                        if(!empty($whatsapp)) :
                                    ?>
                                    <li><a href="<?=$whatsapp;?>" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                    <?php endif; ?> 
                                </ul>                                     
                            </div>
                        </div> 
                                             
                        <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-3">
                            <div class="widget widget_services inline-links">
                                <h5 class="widget-title p-b40">روابط مفيدة</h5>
                                <?php if ( is_active_sidebar('first_sidebar') ) : ?>
                                    <?php dynamic_sidebar('first_sidebar'); ?>
                                <?php endif; ?>
                            </div>                           
                        </div>

                        <!-- CONTACT US -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_address_outer">
                                <h5 class="widget-title p-b40">اتصل بنا</h5>
                                <ul class="widget_address">
                                    <li>
                                        <?= get_option('efp_location'); ?>
                                    </li>
                                    <li> <?= get_option('efp_email'); ?></li>
                                    <li> <?= get_option('efp_phone'); ?></li>
                                </ul>
                            </div>                                                  
                        </div>                              
                    </div>
                </div>                   
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 w-100 text-center">
                            <span class="copyrights-text">موقع افاق للمصاعد © 2022 جميع الحقوق محفوظة</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
              
    </div>
<?php wp_footer(); ?>
</body>

</html>
