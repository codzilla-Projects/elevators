<?php  
define('efp_ROOT', get_stylesheet_directory().'/');
define('efp_URL', get_stylesheet_directory_uri() .'/');
define('efp_ADMIN', admin_url());
define('efp_BlogUrl', get_bloginfo('url'));

require_once( efp_ROOT . '/lib/efp_enqueue_scripts.php' );

require_once( efp_ROOT . '/lib/efp_theme_init.php' );

require_once( efp_ROOT . '/lib/efp_functions.php');

require_once( efp_ROOT . '/lib/efp_meta_fields.php');

        register_nav_menus();



function efp_menu() {

wp_nav_menu( array(

    'menu'              => 'Main Menu',

    'container'         => '',

    'theme_location'    => 'navigation-menu',

    'menu_class'        => 'nav navbar-nav',

    'depth'             => 3
    )

 );

}

function efp_mime_types( $mimes ) {



    $mimes['svg']  = 'image/svg+xml';

    $mimes['svgz'] = 'image/svg+xml';

 

    return $mimes;

}

add_filter( 'upload_mimes', 'efp_mime_types' );


/*Remove Title TO Anchor Tag Menu*/
function my_menu_notitle( $menu ){
  return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

/*Add Footer Widget*/
function efp_widgets_init() {

  register_sidebar( array(
    'name'          => 'First Sidebar Column',
    'id'            => 'first_sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
  ));
}
add_action( 'widgets_init', 'efp_widgets_init' );


add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );

function wti_remove_autop_for_image( $content )
{
     global $post;

     // Check for single page and image post type and remove
     if ( is_single() && $post->post_type == 'image' )
          remove_filter('the_content', 'wpautop');

     return $content;
}
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// Add this to your functions.php file

function polylang_flags_shortcode() {
    ob_start();
    pll_the_languages(array('show_flags'=>1,'show_names'=>1));
    $flags = ob_get_clean();
    return '<ul class="polylang-flags list-inline lang fright">' . $flags . '</ul>';
}
add_shortcode('POLYLANG', 'polylang_flags_shortcode');


/*Security*/
/*
    The website exposes the XML sitemap which allows for the enumeration of all content on the website. This may reveal sensitive information if misconfigured
*/
add_filter( 'wp_sitemaps_enabled', '__return_false' );


/*
The code in number 2 solve this issue and there this another specific code to that issue below :
*/

add_filter( 'wp_sitemaps_add_provider', function ($provider, $name) {
return ( $name == 'users' ) ? false : $provider;
}, 10, 2);

/*
    You can get user information by querying the entering /wp-json/wp/v2/users/.
*/

add_filter( 'rest_authentication_errors', function( $result ) {
  if ( ! empty( $result ) ) {
    return $result;
  }
  if ( ! is_user_logged_in() ) {
    return new WP_Error( 'rest_no_route', 'No route was found matching the URL and request method.', array( 'status' => 404 ) );
  }
  if ( ! current_user_can( 'administrator' ) ) {
    return new WP_Error( 'rest_no_route', 'No route was found matching the URL and request method.', array( 'status' => 404 ) );
  }
  return $result;
});

function gb_comment_form_tweaks ($fields) {
    //add placeholders and remove labels
    $fields['author'] = '<input id="author" class="form-control" name="author" value="" placeholder="الاسم " required="required" type="text">';

    $fields['email'] = '
        <input id="email" class="form-control" name="email" type="email" value="esmsbhy@gmail.com" placeholder="Email*" aria-describedby="email-notes" required="required" style="display:none">
    ';   

    //unset comment so we can recreate it at the bottom
    unset($fields['comment']);

    $fields['comment'] = '<textarea id="comment" class="form-control" rows="3" name="comment"  placeholder="رأيك " required="required"></textarea>';

    //remove website
    unset($fields['url']);
    return $fields;
}

add_filter('comment_form_fields', 'gb_comment_form_tweaks');

function wpsites_change_comment_form_submit_label($arg) {
$arg['label_submit'] = 'إرسال ';
return $arg;
}
add_filter('comment_form_defaults', 'wpsites_change_comment_form_submit_label');

function sh_clean($string){
	return trim(stripslashes(htmlspecialchars($string)));
}
