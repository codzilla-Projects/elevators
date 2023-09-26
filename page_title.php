        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url('<?php $page_image = get_the_post_thumbnail_url(); if(empty($page_image)){ echo efp_URL ."assets/images/banner/6.jpg" ;} else{ echo $page_image;}?>');">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="sx-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-tb0"> 
                                    <?php
                                        global $page, $paged, $post;
                                        if (is_tax()) {
                                            $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                                            $term_title = $term->name;
                                            echo "$term_title ";
                                        } 
                                        elseif ( is_404() ) 
                                        { 
                                          echo __('الصفحة غير موجودة ','efp');
                                        }
                                        else 
                                        {
                                            wp_title( '', true, 'right' );
                                        }
                                    ?>
                                            
                                </h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="sx-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php bloginfo('url'); ?>">الصفحة الرئيسية</a></li>
                                    <li>
                                        <?php
                                            global $page, $paged, $post;
                                            if (is_tax()) {
                                                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                                                $term_title = $term->name;
                                                echo "$term_title ";
                                            } 
                                            elseif ( is_404() ) 
                                            { 
                                              echo __('الصفحة غير موجودة ','efp');
                                            }
                                            else 
                                            {
                                                wp_title( '', true, 'right' );
                                            }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->