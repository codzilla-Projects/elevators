<?php 
	/**
	** Template Name: Projects Template
	**/
	get_header(); 
	get_template_part('page_title'); 
?>
<!-- PROJECTS START -->
    <div class="section-full p-tb80 bg-gray inner-page-padding ">
        <div class="container">
            <div class="section-content">
                <!-- TITLE START -->
                <div class="section-head">
                    <div class="sx-separator-outer separator-center">
                        <div class="sx-separator bg-moving bg-repeat-x" >
                            <h3><?= get_option('projects_title'); ?></h3>
                            <div class="heading-line"></div>
                        </div>
                    </div>
                </div>                   
                <!-- TITLE END -->                                 
                <div class="work-carousel-outer">
                    <div class="row">
                        <!-- COLUMNS 1 -->
                        <?php
                            $no = -1;
                            $projects = efp_get_projects($no);
                            if($projects->have_posts()) : 
                            while($projects->have_posts()) : $projects->the_post(); 
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="project-mas hover-shadow mb-4">
                                <div class="image-effect-one">
                                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                                    <div class="figcaption">
                                        <a  class="mfp-link" data-fancybox="projects" data-caption="Caption Images 1" href="<?php the_post_thumbnail_url(); ?>">
                                            <i class="fa fa-arrows-alt"></i>
                                        </a>  
                                    </div>
                                </div> 
                                <div class="project-info p-a20 bg-gray">
                                    <h4 class="sx-tilte m-t0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p>
                                        <?php the_content(); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>"><i class="link-plus bg-primary"></i></a>
                                </div>
                            </div>                                                       
                        </div>
                        <?php endwhile; wp_reset_query(); endif ?>
                    </div>
                </div> 
             </div>
         </div>
     </div>           
    <!-- PROJECTS END --> 
<?php get_footer(); ?>