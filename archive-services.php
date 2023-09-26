<?php 
	/**
	** Template Name: Services Template
	**/
	get_header(); 
	get_template_part('page_title'); 
?>
    <!-- OUR SERVICES START -->
    <div class="section-full mobile-page-padding p-t80 bg-white bg-change-section">
        <div class="container">
	        <!-- TITLE START -->
	        <div class="section-head">
	            <div class="sx-separator-outer separator-center">
	                <div class="sx-separator bg-moving bg-repeat-x">
	                    <h3><?= get_option('services_title'); ?></h3>
	                    <div class="heading-line"></div>
	                </div>
	            </div>
	        </div>                   
	        <!-- TITLE END --> 
                   
	        <div class="row"> 
	            <?php
	                $number = 1;
	                $no = -1; 
	                $services = efp_get_services($no);
	                if($services->have_posts()) : 
	                while($services->have_posts()) : $services->the_post(); 
	            ?>
	            <div class="col-xl-4 col-lg-4 col-md-4 mb-4">              
	                <div class="bgcall-block d-flex flex-wrap justify-content-center align-content-end bg-cover overlay-wraper" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
	                    <div class="overlay-main bg-black opacity-05"></div>
	                    <div class="bg-content-mid-outer">
	                        <div class="bg-content-mid">
	                            <div class="sx-icon-box-wraper center   text-white">
	                                <div class="text-overlay animated animatedFadeInUp fadeInUp">
	                                    <p>
	                                        <?php the_content(); ?>
	                                    </p>
	                                </div>
	                                <div class="icon-content">
	                                    <h4 class="sx-tilte">
	                                        <a href="Javascript:;" class="sx-text-white">
	                                            <?php the_title(); ?>
	                                        </a>
	                                    </h4>
	                                </div>                                        
	                            </div>
	                            <span class="bgcall-block-number"><?php if ($number < 10) {
	                                echo "0";
	                            } ?><?= $number;?></span>
	                            <div class="bg-overlay"></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <?php $number++; endwhile; wp_reset_query(); endif ?>
	        </div> 
        </div>     
    </div>   
    <!-- OUR SERVICES END -->
<?php get_footer(); ?>