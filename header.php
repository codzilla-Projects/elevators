<!DOCTYPE html>
<html>
<head>
	<!-- META -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Codezilla - https://codzilla.net/">
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?=get_option('efp_favicon'); ?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?=get_option('efp_favicon'); ?>" />
	<title>
		<?php
            global $page, $paged, $post;
            if (is_tax()) {
                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                $term_title = $term->name;
                echo "$term_title |";
            } 
            elseif ( is_404() ) 
            { 
              echo __('الصفحة غير موجودة ','efp');
            }
            else 
            {
                wp_title( '|', true, 'right' );
            }
        ?>
        <?php bloginfo('name'); ?>
	</title>
	<?php wp_head(); ?>
</head>
<body>

<div class="page-wraper">     
    <!-- HEADER START -->
    <header class="site-header nav-wide nav-transparent mobile-sider-drawer-menu">
        <div class="top-bar bg-light-blue">
            <div class="container">
                <div class="d-flex justify-content-between ">
                    <ul class="list-unstyled e-p-bx text-white">
                        <li><span>البريد الاليكترونى :  </span><?=get_option('efp_email'); ?></li>
                        <li><span>الموبايل :  </span><?=get_option('efp_phone'); ?></li>
                    </ul>                            
                    <ul class="list-unstyled social-bx text-white d-flex flex-wrap align-content-center">
                            <?php $facebook = get_option('efp_fb');  
                                if(!empty($facebook)) :
                            ?>
                            <li><a href="<?=$facebook;?>"><i class="fa fa-facebook"></i></a></li>
                            <?php endif; ?>
                            <?php $twitter = get_option('efp_twitter');  
                                if(!empty($twitter)) :
                            ?>
                            <li><a href="<?=$twitter;?>"><i class="fa fa-twitter"></i></a></li>
                            <?php endif; ?>
                            <?php $insta = get_option('efp_insta');  
                                if(!empty($insta)) :
                            ?>
                            <li><a href="<?=$insta;?>"><i class="fa fa-instagram"></i></a></li>
                            <?php endif; ?>
                            <?php $youtube = get_option('efp_youtube');  
                                if(!empty($youtube)) :
                            ?>
                            <li><a href="<?=$youtube;?>"><i class="fa fa-youtube-play"></i></a></li>
                            <?php endif; ?> 
                            <?php $whatsapp = get_option('efp_whatsapp');  
                                if(!empty($whatsapp)) :
                            ?>
                            <li><a href="<?=$whatsapp;?>"><i class="fa fa-whatsapp"></i></a></li>
                            <?php endif; ?> 
                    </ul>
                </div>
            </div>
        </div>             
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar">
                <div class="container clearfix">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="index.html">
                                <img src="<?=get_option('efp_logo_img'); ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>
                    
                        <!-- EXTRA NAV -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <div class="contact-slide-show"><a href="javascript:;" class="get-in-touch-btn from-top">ابقى على تواصل  </a></div>
                            </div>                                                                   
                        </div>
                        <!-- EXTRA Nav -->
                                                
                        <!-- MAIN NAVIGATION -->
                        <div class="header-nav nav-dark navbar-collapse collapse justify-content-center collapse">
                            <?php efp_menu(); ?>
                        </div>
                                                
                          <!-- CONTACT -->                            
                        <div class="contact-slide-hide" style="background-image:url(<?= efp_URL ?>assets/images/background/bg-map.png)">
                            <div class="contact-nav">
                                <a href="javascript:void(0)" class="contact_close">&times;</a>
                            <div class="contact-nav-form">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
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
                                    <div class="col-xl-6 col-lg-6 col-md-12 ">
                                        <div class="contact-nav-field shadow-lg p-a30 bg-white" style="background-image:url('<?= efp_URL ?>assets/images/background/bg-map.png')">
                                           <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?>
                                        </div>
                                    </div>  
                                </div>                                                  
                            </div>
                        </div> 
                    </div>                                
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->