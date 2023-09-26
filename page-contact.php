<?php 
	/**
	** Template Name: Contact Us Template
	**/
	get_header(); 
	get_template_part('page_title'); 
?>
<!-- SECTION CONTENTG START -->
<div class="section-full p-tb80 inner-page-padding">
    <!-- LOCATION BLOCK-->
    <div class="container">
    
        <!-- GOOGLE MAP & CONTACT FORM -->
        <div class="section-content">
            <!-- CONTACT FORM-->
            <div class="row">
            	<div class="col-lg-8 col-md-12 col-sm-12">
                	<div class="contact-nav-field shadow-lg p-a30 bg-white" style="background-image:url('<?= efp_URL ?>assets/images/background/bg-map.png')">
                           <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?>
                        </div>
                </div>                        
                <div class="col-lg-4 col-md-12 col-sm-12">
                	<div class="contact-info block-shadow bg-white bg-center p-a40" style="background-image:url(images/background/bg-map.png)">

                        <div>
                            <!-- TITLE START -->
                            <div class="section-head">
                                <div class="sx-separator-outer separator-right">
                                    <div class="sx-separator bg-moving bg-repeat-x">
                                        <h3>ملعومات التواصل </h3>
                                        <div class="heading-line"></div>
                                    </div>
                                </div>
                            </div>                                                         
                            <!-- TITLE END -->                                                                     
                            <div class="sx-icon-box-wraper left p-b30">
                                <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0">رقم الهاتف</h5>
                                    <p><?= get_option('efp_phone'); ?></p>
                                </div>
                            </div>
                            
                            <div class="sx-icon-box-wraper left p-b30">
                                <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0">عنوان بريد الكتروني</h5>
                                    <p><?= get_option('efp_email'); ?></p>
                                </div>
                            </div>
                            
                            <div class="sx-icon-box-wraper left">
                                <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0">معلومات العنوان</h5>
                                    <p><?= get_option('efp_location'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>
    </div>
</div>
<div class="gmap-outline">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="<?= get_option('efp_map'); ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
</div>         
<!-- SECTION CONTENT END -->
<?php get_footer(); ?>
