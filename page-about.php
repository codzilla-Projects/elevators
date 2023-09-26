<?php 
	/**
	** Template Name: About Us Template
	**/
	get_header(); 
	get_template_part('page_title'); 
?>
<!-- ABOUT COMPANY START -->
<?php if (get_option('about_page_hidden') != '1')  :?>
<div class="section-full mobile-page-padding p-t80 p-b50 bg-light-blue">
    <div class="container">
			<div class="section-content">
            	<div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                    	<div class="about-home-3 m-b30 bg-white">
                        	<h3 class="m-t0 m-b20 sx-tilte"><?= get_option('about_page_title'); ?></h3>
                            <?= get_option('about_page_content'); ?>                                                   
                        </div>
                    </div>
                    
                	<div class="col-xl-6 col-lg-6 col-md-12">
						<div class="video-section-full-v2">
                            <div class="video-section-full bg-no-repeat bg-cover bg-center overlay-wraper m-b30" style="background-image:url('<?= get_option('about_page_img'); ?>')">
                                <div class="overlay-main bg-black opacity-04"></div>
                                <div class="video-section-inner">
                                    <div class="video-section-content">
                                         <a href="<?= get_option('about_page_youtube_link'); ?>" class="mfp-video play-now">
                                            <i class="icon fa fa-play"></i>
                                            <span class="ripple"></span>
                                        </a> 
                                        <div class="video-section-bottom">
                                            <?php $experience = round(date("Y") - get_option('about_page_year')); ?>
                                        	<h3 class="sx-title text-white"><?= $experience; ?> سنة<br>تجربة</h3>
                                        </div> 
                                    </div> 
                                </div>  
                            </div>
                        </div>
                    </div>  
                                                  
        		</div>
           </div>
     </div>
</div>   
<!-- ABOUT COMPANY END -->
<?php endif; ?>
<?php if(get_option('about_services_hidden') !='1') :?>
<!-- WHAT WE DO START -->
<div dir="rtl" class="section-full  mobile-page-padding bg-white  p-t80 p-b50 bg-repeat overflow-hide" style="background-image:url(<?= efp_URL ?>assets/images/background/cross-line2.png)">
	
	<div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="sx-separator-outer separator-center">
                <div class="sx-separator bg-moving bg-repeat-x">
                    <h3><?= get_option('about_services_title'); ?></h3>
                    <div class="heading-line"></div>
                </div>
            </div>
        </div>                   
        <!-- TITLE END -->                
        <div class="section-content">
            <div class="row number-block-three-outer justify-content-center">
                <?php
                    $number = 1;
                    $no = -1; 
                    $services = efp_get_services($no);
                    if($services->have_posts()) : 
                    while($services->have_posts()) : $services->the_post(); 
                ?>
            	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b30">
                
                    <div class="number-block-three slide-ani-top">
                        <div class="figcaption bg-light-blue  p-a30">
                            <h4 class="m-tb0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            
                            <div dir="rtl" class="figcaption-number animate-top-content">
                                <span dir="rtl">
                                    <?php if ($number < 10) {echo "0";} ?><?= $number;?>

                                </span>

                            </div>                                                                                
                        </div>
                    </div>
                                                	
                </div>
                <?php $number++; endwhile; wp_reset_query(); endif ?> 
            </div>
        </div>
    </div>
 </div>   
<!-- WHAT WE DO END -->                                
<?php endif ?>
<!-- TESTIMONIAL START -->
    <div class="section-full mobile-page-padding bg-repeat p-t80 p-b80">
        <div class="section-content">
            <div class="container">
                <!-- TITLE START -->
                <div class="section-head">
                    <div class="sx-separator-outer separator-center">
                        <div class="sx-separator bg-moving bg-repeat-x" >
                            <h3><?= get_option('testimonials_title'); ?></h3>
                            <div class="heading-line"></div>
                        </div>
                    </div>
                </div>                   
                <!-- TITLE END --> 
                
                
                <!-- TESTIMONIAL START -->   
                <div class="owl-carousel testimonial-home-two owl-btn-vertical-center">
                    <?php
                        $args = array(
                            'status' => 'approve',
                            'order' =>  'DESC'
                        );
                    $comments = get_comments($args);
                    foreach($comments as $comment) :?>
                    <div class="item">
                        <div class="testimonial-1 hover-animation-1 bg-gray">
                            <div class="testimonial-detail clearfix">
                                <h4 class="testimonial-name"><?=$comment->comment_author; ?></h4>
                                <span class="fa fa-quote-right"></span>
                            </div>                                    
                            <div class="testimonial-text">
                                <p><?=$comment->comment_content; ?></p>
                            </div>
                        </div>
                    </div> 
                    <?php endforeach; ?>            
                </div>                                                                        
            </div>
       </div>
       <div class="hilite-title text-left p-l50 text-uppercase">
            <strong><?= get_option('testimonials_title'); ?></strong>
        </div> 
    </div>   
    <!-- TESTIMONIAL  END -->                
    
</div>
<!-- CONTENT END -->
<?php get_footer(); ?>