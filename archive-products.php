<?php 
	/**
	** Template Name: Products Template
	**/
	get_header(); 
	get_template_part('page_title'); 
?>

<!-- WHAT WE DO START -->
<div class="section-full  mobile-page-padding bg-white  p-t80 p-b50 bg-repeat overflow-hide" style="background-image:url(<?= efp_URL ?>assets/images/background/cross-line2.png)">
    
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="sx-separator-outer separator-center">
                <div class="sx-separator bg-moving bg-repeat-x">
                    <h3>التصنيفات </h3>
                    <div class="heading-line"></div>
                </div>
            </div>
        </div>                   
        <!-- TITLE END -->                 
        <div class="section-content">
            <div class="row number-block-three-outer justify-content-center">
            	<?php
	                $no        = false;  
	                $terms     = efp_get_products_terms($no);

	                foreach ($terms as $term) :
	                $number    = $term->count;
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b30">
            		<a href="<?= esc_url( get_term_link( $term ) ); ?>">
                        <div class="number-block-three slide-ani-top">
                            <div class="figcaption bg-light-blue  p-a30">
                                <h4 class="m-tb0"><?=  $term->name ; ?></h4> 
                                <div class="figcaption-number animate-top-content">
                                    <span><?php if ($number < 10) {echo "0";} ?><?= $number;?></span>
                                </div>              
                            </div>
                        </div>
                    </a>                                  
                </div>
                <?php  endforeach; ?> 
            </div>
        </div>
    </div>
 </div>   
<!-- WHAT WE DO END -->     
<!-- PRODUCTS START --> 
    <div class="section-full p-b80 inner-page-padding">
        <div class="container">
            <div class="section-content">
                <!-- TITLE START -->
                <div class="section-head">
                    <div class="sx-separator-outer separator-center">
                        <div class="sx-separator bg-moving bg-repeat-x" >
                            <h3><?= get_option('products_title'); ?></h3>
                            <div class="heading-line"></div>
                        </div>
                    </div>
                </div>                   
                <!-- TITLE END -->                                 
                <div class="work-carousel-outer">
                    <div class="row">
                        <!-- COLUMNS 1 -->
                        <?php
                            $no = 3;
                            $products = efp_get_products($no);
                            if($products->have_posts()) : 
                            while($products->have_posts()) : $products->the_post(); 
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>      
                                </div>
                                <a class="mfp-link" data-fancybox="products" data-caption="<?php the_title(); ?>"href="<?php the_post_thumbnail_url(); ?>">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                            
                           </div>
                        </div>
                        <?php endwhile;?>
                        <div class="efp-panigations-block justify-content-center">
				        <?php    
				        	$args = array(
				               'format'             => '?paged=%#%',
	                           'current'            => max( 1, get_query_var('paged') ),
	                           'total'              => $products->max_num_pages,
	                           'show_all'           => false,
	                           'end_size'           => 1,
	                           'mid_size'           => 2,
	                           'prev_next'          => true,
	                           'next_text'          => '<i class="fa fa-angle-left"></i>',
	                           'prev_text'          => '<i class="fa fa-angle-right"></i>',
	                           'type'               => 'list',
				              );
				        ?>
				        <?php echo paginate_links($args); ?>            
					</div>
                        <?php wp_reset_query(); endif ?>
                    </div>
                </div> 
             </div>
         </div>
     </div>           
    <!-- PRODUCTS END --> 
<?php get_footer(); ?>