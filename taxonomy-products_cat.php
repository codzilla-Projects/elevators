<?php 
	get_header(); 
	get_template_part('page_title'); 
?>
<!-- WHAT WE DO START -->
<div dir="rtl" class="section-full  mobile-page-padding bg-white  p-t80 bg-repeat overflow-hide" style="background-image:url(<?= efp_URL ?>assets/images/background/cross-line2.png)">
	
	<div class="container">               
        <div class="section-content">
            <div class="row number-block-three-outer justify-content-center">
                <?php 
					$terms = get_terms( array(
					    'taxonomy'     => 'products_cat',
					    'hide_empty'   => false,
					) );
					
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):?>
				<?php 
					foreach ( $terms as $term ) :
					$number    = $term->count;
				?>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b30">
                    <div class="number-block-three slide-ani-top">
                    	<a href="<?= esc_url( get_term_link( $term ) ); ?>">
	                        <div class="figcaption bg-light-blue  p-a30">
	                            <h4 class="m-tb0"><?=  $term->name ; ?></h4>
	                            <div dir="rtl" class="figcaption-number animate-top-content">
	                                <span dir="rtl">
	                                	<?php if ($number < 10) {echo "0";} ?><?= $number;?>
	                                </span>
	                            </div>                                                                     
	                        </div>
	                    </a>
                    </div>                     	
                </div> 
                <?php endforeach; endif; ?> 
            </div>
        </div>
    </div>
 </div>   
<!-- WHAT WE DO END -->  
    <!-- PRODUCTS START --> 
    <div class="section-full p-t80 inner-page-padding">
        <div class="container">
            <div class="section-content">
                <!-- TITLE START -->
                <div class="section-head">
                    <div class="sx-separator-outer separator-center">
                        <div class="sx-separator bg-moving bg-repeat-x" >
                            <h3><?= single_cat_title(); ?></h3>
                            <div class="heading-line"></div>
                        </div>
                    </div>
                </div>                   
                <!-- TITLE END -->                                 
                <div class="work-carousel-outer">
                    <div class="row">
                        <!-- COLUMNS 1 -->
                        <?php 
							$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
							$products = efp_get_products_with_tax(3,$term->term_id);
							if($products->have_posts()) : 
							while($products->have_posts()) : $products->the_post(); 
						?>
                        <div class="col-xl-4">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="sx-info  p-t20 text-white">
                                    <h4 class="sx-tilte m-t0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>      
                                </div>
                                <a class="mfp-link" data-fancybox="products" data-caption="Caption Images 1"href="<?php the_post_thumbnail_url(); ?>">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>                                           
                           </div>
                        </div>
                        <?php endwhile;?>
                    </div>
                    <div class="efp-panigations-block">
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
					<?php wp_reset_query(); endif; ?>
                </div> 
            </div>
        </div>
    </div>           
    <!-- PRODUCTS END --> 
  <?php get_footer(); ?>