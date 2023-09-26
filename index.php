<?php get_header(); ?>
<!-- CONTENT START -->
<div class="page-content">
    <?php if (get_option('slider_hidden') != '1')  :?>
    <!-- SLIDER START -->
    <div id="rev_slider_three_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery" style="background:#aaaaaa;padding:0px;" dir="ltr">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_three" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
                <?php
                       
                        $no =3;
                        $sliders = efp_get_slider($no);
                        if($sliders->have_posts()) : 
                        while($sliders->have_posts()) : $sliders->the_post() ; 
                            $id = get_the_ID();
                        $slider_url  = get_post_meta(get_the_ID(),'efp_slider_link_url',true);
                        $slider_text = get_post_meta(get_the_ID(),'efp_slider_link_text',true);
                    ?>
               <li data-index="rs-<?=$id;?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="<?php the_post_thumbnail_url(); ?>"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php the_post_thumbnail_url(); ?>" data-bgcolor='#f8f8f8'  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    
                    <!-- LAYER 1  right image overlay dark-->
                    <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup" 
                    id="slide-<?=$id;?>-layer-1" 
                    data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-fontweight="['100','100','400','400']"
                    data-width="['full','full','full','full']"
                    data-height="['full','full','full','full']"
                    data-whitespace="nowrap"
         
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
        
                    style="z-index: 6;background-color:rgba(0,0,0,0.3);"> 
                    </div>
                        
                    <!-- LAYER 4  Bold Title-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-<?=$id;?>-layer-4" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-150','-150','-150','-150']" 
                        data-fontsize="['64','64','60','40']"
                        data-lineheight="['74','74','70','50']"
                        data-width="['700','700','700','98%']"
                        data-height="none"
                        data-whitespace="normal"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;",
                        "mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,0]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 10; text-transform:uppercase; letter-spacing:0px; white-space: normal;font-weight: 800; color:#fff; font-family: 'Cairo', sans-serif;"><?php the_title(); ?>
                            
                    </div>
                                                        
                    <!-- LAYER 5  Paragraph-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-<?=$id;?>-layer-5" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-40']" 
                        data-fontsize="['20','20','20','16']"
                        data-lineheight="['30','30','30','26']"
                        data-width="['600','600','600','380']"
                        data-height="none"
                        data-whitespace="normal"
             
                        data-type="text" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;",
                        "mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":3500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"
    
                            style="z-index: 10; white-space: normal; color:#fff; font-family: 'Cairo', sans-serif;">
                            <?php the_content(); ?>
                    </div>

                    <!-- LAYER 6  Read More-->
                    <?php if(!empty($slider_url || $slider_text)) : ?>
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-<?=$id;?>-layer-6" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"  
                        data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 
    
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;",
                        "mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":4000,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index:9; line-height:30px;"><a href="<?= $slider_url; ?>" class="site-button btn-half"><span><?= $slider_text; ?></span></a>
                    </div>  
                        <?php endif; ?>
                </li>
                <?php endwhile; wp_reset_query(); endif ?>   

            </ul>
            <div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15);"></div>

            </div>
    </div>       
    <!-- SLIDER END -->
    <?php endif; ?>
    <?php if (get_option('about_hidden') != '1')  :?>
    <!-- ABOUT COMPANY START -->
    <div class="section-full mobile-page-padding p-t80 p-b80 bg-light-blue">
        <div class="container">
            <!-- TITLE START -->
                <div class="section-head">
                    <div class="sx-separator-outer separator-center">
                        <div class="sx-separator bg-moving bg-repeat-x">
                            <h3><?= get_option('about_title'); ?></h3>
                            <div class="heading-line"></div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">            
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="about-home-2 bg-white">
                                <h3 class="m-t0 sx-tilte"><?= get_option('about_small_title'); ?></h3>
                                <p>
                                    <?= get_option('about_content'); ?>
                                </p>
                                <div class="text-left">
                                   <div class="extra-cell">
                                        <div class="contact-slide-show"><a href="<?= get_option('about_link_url'); ?>" class="get-in-touch-btn from-top"><?= get_option('about_link_text'); ?></a></div>
                                    </div>    
                                </div>                                                    
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 ">
                            <div class="home-2-about bg-bottom-left bg-no-repeat bg-cover" style="background-image:url(<?= get_option('about_img'); ?>);">
                                <div class="background">
                                    <div class="ball-container">
                                      <div class="ball motion-blur"></div>
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
    <?php if (get_option('services_hidden') != '1')  :?>
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
        </div>             
         <div class="owl-carousel service-slider owl-btn-vertical-center"> 
            <?php
                $number = 1;
                $no = -1; 
                $services = efp_get_services($no);
                if($services->have_posts()) : 
                while($services->have_posts()) : $services->the_post(); 
            ?>
            <div class="item">              
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
    <!-- OUR SERVICES END -->
    <?php endif; ?>
    <?php if (get_option('projects_hidden') != '1')  :?>
    <!-- PROJECTS START -->
    <div class="section-full p-tb80 bg-gray inner-page-padding ">
        <div class="container-fluid">
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
                    <div class="owl-carousel mfp-gallery project-carousel project-carousel3 owl-btn-vertical-center p-lr80">
                        <!-- COLUMNS 1 -->
                        <?php
                            $no = -1;
                            $projects = efp_get_projects($no);
                            if($projects->have_posts()) : 
                            while($projects->have_posts()) : $projects->the_post(); 
                        ?>
                        <div class="item">
                            <div class="project-mas hover-shadow m-a30">
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
   <?php endif; ?>
   <?php if (get_option('products_hidden') != '1')  :?>
    <!-- PRODUCTS START --> 
    <div class="section-full p-t80 inner-page-padding">
        <div class="container-fluid">
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
                    <div class="owl-carousel mfp-gallery project-carousel project-carousel4 owl-btn-vertical-center">
                        <!-- COLUMNS 1 -->
                        <?php
                            $no = -1;
                            $products = efp_get_products($no);
                            if($products->have_posts()) : 
                            while($products->have_posts()) : $products->the_post(); 
                        ?>
                        <div class="item">
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
                        <?php endwhile; wp_reset_query(); endif ?>
                    </div>
                </div> 
             </div>
         </div>
     </div>           
    <!-- PRODUCTS END --> 
    <?php endif; ?>
    <?php if (get_option('testimonials_hidden') != '1')  :?>
    <!-- TESTIMONIAL START -->
    <div class="section-full mobile-page-padding bg-repeat p-t80">
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
    </div>   
    <!-- TESTIMONIAL  END -->                 
    <?php endif; ?> 
    <div class="w-100 justify-content-center text-center">  
        <button type="button" class="site-button-secondry btn-half p-l100 p-r100 p-t15 p-b15" data-toggle="modal" data-target="#exampleModal">
            <span>
                اترك رايك 
            </span>
        </button> 
    </div>       
    <?php if (get_option('contact_hidden') != '1')  :?>
    <!-- CONTACT FORM START -->
    <div class="section-full p-tb80 mobile-page-padding bg-center bg-no-repeat bg-fixed">
        <div class="section-content">
            <div class="container get-in-touch-form">
                <!-- TITLE START -->
                <div class="section-head">
                    <div class="sx-separator-outer separator-center">
                        <div class="sx-separator bg-moving bg-repeat-x">
                            <h3><?= get_option('contact_title'); ?></h3>
                            <div class="heading-line"></div>
                        </div>
                    </div>
                </div>                   
                <!-- TITLE END -->                         
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 contact-nav p-t0">
                                    
                        <div class=" contact-nav-info">
             
                            <div class="sx-icon-box-wraper left p-b30">
                                <div class="icon-xs inline-icon m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                <div class="icon-content">
                                    <h6 class="m-t0">رقم الهاتف</h6>
                                    <p><?= get_option('efp_phone'); ?></p>
                                </div>
                            </div>
                            
                            <div class="sx-icon-box-wraper left p-b30">
                                <div class="icon-xs inline-icon m-b20 scale-in-center"><i class="fa fa-envelope"></i></div>
                                <div class="icon-content">
                                    <h6 class="m-t0">عنوان بريد الكتروني</h6>
                                    <p><?= get_option('efp_email'); ?></p>
                                </div>
                            </div>
                            
                            <div class="sx-icon-box-wraper left p-b30">
                                <div class="icon-xs inline-icon m-b20 scale-in-center"><i class="fa fa-map-marker"></i></div>
                                <div class="icon-content">
                                    <h6 class="m-t0">معلومات العنوان</h6>
                                    <p><?= get_option('efp_location'); ?></p>
                                </div>
                            </div>
                            
                            <div class="full-social-bg">
                                <ul>
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
                      
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="contact-home1-left contact-home1-left-v2 shadow-lg bg-white p-a30" style="background-image:url(<?= efp_URL ?>assets/images/background/bg-map.png)">
                            <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>  
    </div> 
    <?php endif; ?> 
    
    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog reviews contact-home1-left contact-home1-left-v2 shadow-lg bg-white p-a30" role="document" style="background-image:url(<?= efp_URL ?>assets/images/background/bg-map.png)">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">شاركنا برايك </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php 
                comment_form(array('title_reply' => '', 'comment_notes_before' => '')); // Get wp-comments.php template
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="line-inner">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div> 
    <!-- CONTACT FORM  END -->                                 
</div>
<!-- CONTENT END -->
<?php get_footer(); ?>