<?php
function efp_admin_scripts_styles($hook) {
	wp_enqueue_style( 'efp-main', efp_URL . 'assets/admin/css/main-style.css');
    //var_dump($hook);
	$efp_pages = ['toplevel_page_content-area','efp-options_page_home-page-content','efp-options_page_about-page-content','post.php'];
	if( in_array($hook, $efp_pages) ) {
        wp_enqueue_style( 'efp-bootsrtap', efp_URL . 'assets/admin/css/bootstrap.rtl.min.css');
		wp_enqueue_style( 'efp-style', efp_URL . 'assets/admin/css/style.css');
		wp_enqueue_style( 'efp-style-sub', efp_URL . 'assets/admin/css/style-sub.css');
        wp_enqueue_script( 'efp-popper', efp_URL .'assets/admin/js/popper.min.js', array() ,false, true );
        wp_enqueue_script( 'efp-bootsrtap',efp_URL .'assets/admin/js/bootstrap.bundle.min.js', array() ,false, true );
		wp_enqueue_script( 'efp-script', efp_URL .'assets/admin/js/script.js', array() ,false, true );
		if(function_exists( 'wp_enqueue_media' )){
			wp_enqueue_media();
		}else{
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}
}
 
add_action('admin_enqueue_scripts', 'efp_admin_scripts_styles');


function efp_scripts_styles() {


    wp_enqueue_style( 'efp-bootstrap-rtl-css', efp_URL . 'assets/css/bootstrap-rtl.min.css' );

    wp_enqueue_style( 'efp-bootstrap-select-css', efp_URL . 'assets/css/bootstrap-select.min.css' );

    wp_enqueue_style('efp-font-awesome-css', efp_URL . 'assets/css/fontawesome/css/font-awesome.min.css');

    wp_enqueue_style( 'efp-owl-carousel-css', efp_URL . 'assets/css/owl.carousel.min.css' ); 

    

    wp_enqueue_style( 'efp-magnific-popup-css', efp_URL . 'assets/css/magnific-popup.min.css' );

    wp_enqueue_style( 'efp-jquery-fancybox-css', efp_URL . 'assets/css/jquery.fancybox.min.css' );

    wp_enqueue_style( 'efp-loader-css', efp_URL . 'assets/css/loader.min.css">' );

    wp_enqueue_style( 'efp-flaticon-css', efp_URL . 'assets/css/flaticon.min.css' );

    wp_enqueue_style( 'efp-bootstrap-slider-css', efp_URL . 'assets/css/bootstrap-slider.min.css' );

    wp_enqueue_style( 'efp-style-css', efp_URL . 'assets/css/style.css' );

    wp_enqueue_style( 'efp-style-rtl-css', efp_URL . 'assets/css/rtl.css' );

    wp_enqueue_style( 'efp-settings-css', efp_URL . 'assets/plugins/revolution/revolution/css/settings.css' );

    wp_enqueue_style( 'efp-navigation-css', efp_URL . 'assets/plugins/revolution/revolution/css/navigation.css' );

    wp_enqueue_style( 'efp-revolution-addon-beforeafter-css', efp_URL . 'assets/plugins/revolution-addons/beforeafter/css/revolution.addon.beforeafter.css' );
    


    wp_enqueue_script( 'efp-jquery-js',  efp_URL . 'assets/js/jquery-3.6.0.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-popper-js', efp_URL . 'assets/js/popper.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-bootsrtap-js',  efp_URL . 'assets/js/bootstrap.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-select-js',  efp_URL . 'assets/js/bootstrap-select.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-fancybox-js',  efp_URL . 'assets/js/jquery.fancybox.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-magnific-js',  efp_URL . 'assets/js/magnific-popup.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-waypoints-js',  efp_URL . 'assets/js/waypoints.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-counterup-js',  efp_URL . 'assets/js/counterup.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-waypoints-sticky-js',  efp_URL . 'assets/js/waypoints-sticky.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-isotope-js',  efp_URL . 'assets/js/isotope.pkgd.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-carousel-js',  efp_URL . 'assets/js/owl.carousel.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-owl-filter-js',  efp_URL . 'assets/js/jquery.owl-filter.js' , array() ,false, true );
    wp_enqueue_script( 'efp-touchspin-js',  efp_URL . 'assets/js/jquery.bootstrap-touchspin.js' , array() ,false, true );

    wp_enqueue_script( 'efp-custom-js',  efp_URL . 'assets/js/custom.js' , array() ,false, true );
    wp_enqueue_script( 'efp-bgscroll-js',  efp_URL . 'assets/js/jquery.bgscroll.js' , array() ,false, true );
    wp_enqueue_script( 'efp-sticky-sidebar-js',  efp_URL . 'assets/js/theia-sticky-sidebar.js' , array() ,false, true );
    wp_enqueue_script( 'efp-bootstrap-slider-js',  efp_URL . 'assets/js/bootstrap-slider.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-themepunch-tools-js',  efp_URL . 'assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-revolution-js',  efp_URL . 'assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-revolution-plugin-js',  efp_URL . 'assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js' , array() ,false, true );
    wp_enqueue_script( 'efp-beforeafter-js',  efp_URL . 'assets/plugins/revolution-addons/beforeafter/js/revolution.addon.beforeafter.min.js' , array() ,false, true );
    wp_enqueue_script( 'efp-rev-script-3-js',  efp_URL . 'assets/js/rev-script-3.js' , array() ,false, true );

}
add_action( 'wp_enqueue_scripts', 'efp_scripts_styles' );

