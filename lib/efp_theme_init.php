<?php 
function efp_register_custom_menu(){

	add_theme_support('post-thumbnails');

	$label = array(

	        'name'                  => _x( 'sliders', 'Homepage slider', 'efp' ),

	        'singular_name'         => _x( 'sliders', 'Post type singular name', 'efp' ),

	        'menu_name'             => _x( 'sliders', 'Admin Menu text', 'efp' ),

	        'name_admin_bar'        => _x( 'sliders', 'Add New on Toolbar', 'efp' ),

	        'add_new'               => __( 'Add New slider', 'efp' ),

	        'add_new_item'          => __( 'Add New slider', 'efp' ),

	        'new_item'              => __( 'New slider', 'efp' ),

	        'edit_item'             => __( 'Edit slider', 'efp' ),

	        'view_item'             => __( 'View slider', 'efp' ),

	        'all_items'             => __( 'All slider', 'efp' ),

	        'search_items'          => __( 'Search slider', 'efp' ),

	        'parent_item_colon'     => __( 'Parent slider:', 'efp' ),

	        'not_found'             => __( 'No slider found.', 'efp' ),

	        'not_found_in_trash'    => __( 'No slider found in Trash.', 'efp' ),

	    );     

	    $arg = array(

	        'labels'             => $label,

	        'description'        => 'Homepage slider.',

	        'public'             => true,

	        'publicly_queryable' => true,

	        'show_ui'            => true,

	        'show_in_menu'       => true,

	        'query_var'          => true,

	        'capability_type'    => 'post',

	        'has_archive'        => true,

	        'hierarchical'       => false,

	        'menu_position'      => 5,

	        'menu_icon'			 => 'dashicons-slides',

	        'supports'           => array( 'title','editor', 'thumbnail' ),

	        'rewrite'            => array( 'slug' => 'slider' ),

	        'show_in_rest'       => true

	    );

      

    register_post_type( 'slider', $arg );


    $label = array(

            'name'                  => _x( 'Services', 'Services', 'efp' ),

            'singular_name'         => _x( 'Services', 'Post type singular name', 'efp' ),

            'menu_name'             => _x( 'Services', 'Admin Menu text', 'efp' ),

            'name_admin_bar'        => _x( 'Services', 'Add New on Toolbar', 'efp' ),

            'add_new'               => __( 'Add New Services', 'efp' ),

            'add_new_item'          => __( 'Add New Services', 'efp' ),

            'new_item'              => __( 'New Services', 'efp' ),

            'edit_item'             => __( 'Edit Services', 'efp' ),

            'view_item'             => __( 'View Services', 'efp' ),

            'all_items'             => __( 'All Services', 'efp' ),

            'search_items'          => __( 'Search Services', 'efp' ),

            'parent_item_colon'     => __( 'Parent Services:', 'efp' ),

            'not_found'             => __( 'No Services found.', 'efp' ),

            'not_found_in_trash'    => __( 'No Services found in Trash.', 'efp' ),

        );     

        $arg = array(

            'labels'             => $label,

            'description'        => 'Services',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 5,

            'menu_icon'          => 'dashicons-image-filter',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'services' ),

            'show_in_rest'       => true

        );

      

    register_post_type( 'services', $arg );


        $label = array(

            'name'                  => _x( 'products', 'products', 'efp' ),

            'singular_name'         => _x( 'products', 'Post type singular name', 'efp' ),

            'menu_name'             => _x( 'products', 'Admin Menu text', 'efp' ),

            'name_admin_bar'        => _x( 'products', 'Add New on Toolbar', 'efp' ),

            'add_new'               => __( 'Add New products', 'efp' ),

            'add_new_item'          => __( 'Add New products', 'efp' ),

            'new_item'              => __( 'New products', 'efp' ),

            'edit_item'             => __( 'Edit products', 'efp' ),

            'view_item'             => __( 'View products', 'efp' ),

            'all_items'             => __( 'All products', 'efp' ),

            'search_items'          => __( 'Search products', 'efp' ),

            'parent_item_colon'     => __( 'Parent products:', 'efp' ),

            'not_found'             => __( 'No products found.', 'efp' ),

            'not_found_in_trash'    => __( 'No products found in Trash.', 'efp' ),

        );     

        $arg = array(

            'labels'             => $label,

            'description'        => 'products',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 5,

            'menu_icon'          => 'dashicons-products',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'products' ),

            'show_in_rest'       => true

        );

      

    register_post_type( 'products', $arg );



        $label = array(

            'name'                  => _x( 'projects', 'projects', 'efp' ),

            'singular_name'         => _x( 'projects', 'Post type singular name', 'efp' ),

            'menu_name'             => _x( 'projects', 'Admin Menu text', 'efp' ),

            'name_admin_bar'        => _x( 'projects', 'Add New on Toolbar', 'efp' ),

            'add_new'               => __( 'Add New projects', 'efp' ),

            'add_new_item'          => __( 'Add New projects', 'efp' ),

            'new_item'              => __( 'New projects', 'efp' ),

            'edit_item'             => __( 'Edit projects', 'efp' ),

            'view_item'             => __( 'View projects', 'efp' ),

            'all_items'             => __( 'All projects', 'efp' ),

            'search_items'          => __( 'Search projects', 'efp' ),

            'parent_item_colon'     => __( 'Parent projects:', 'efp' ),

            'not_found'             => __( 'No projects found.', 'efp' ),

            'not_found_in_trash'    => __( 'No projects found in Trash.', 'efp' ),

        );     

        $arg = array(

            'labels'             => $label,

            'description'        => 'projects',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 5,

            'menu_icon'          => 'dashicons-grid-view',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'projects' ),

            'show_in_rest'       => true

        );

      

    register_post_type( 'projects', $arg );



    $label = array(

            'name'                  => _x( 'cleints', 'cleints', 'efp' ),

            'singular_name'         => _x( 'cleints', 'Post type singular name', 'efp' ),

            'menu_name'             => _x( 'cleints', 'Admin Menu text', 'efp' ),

            'name_admin_bar'        => _x( 'cleints', 'Add New on Toolbar', 'efp' ),

            'add_new'               => __( 'Add New cleints', 'efp' ),

            'add_new_item'          => __( 'Add New cleints', 'efp' ),

            'new_item'              => __( 'New cleints', 'efp' ),

            'edit_item'             => __( 'Edit cleints', 'efp' ),

            'view_item'             => __( 'View cleints', 'efp' ),

            'all_items'             => __( 'All cleints', 'efp' ),

            'search_items'          => __( 'Search cleints', 'efp' ),

            'parent_item_colon'     => __( 'Parent cleints:', 'efp' ),

            'not_found'             => __( 'No cleints found.', 'efp' ),

            'not_found_in_trash'    => __( 'No cleints found in Trash.', 'efp' ),

        );     

        $arg = array(

            'labels'             => $label,

            'description'        => 'cleints',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 5,

            'menu_icon'          => 'dashicons-groups',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'cleints' ),

            'show_in_rest'       => true

        );

      

    register_post_type( 'cleints', $arg );



    /*-----------------------------------------------------------------------------------------------*/
}
add_action( 'init', 'products_custom_tax', 0 );
function products_custom_tax() 
{
    $ser_taxonomies = array(
        array(

          'labels' => array(

            'name'                          => _x( 'Categories', 'taxonomy general name' ),
            'singular_name'                 => _x( 'Category', 'taxonomy singular name' ),
            'search_items'                  =>  __( 'Search categories','freezoner' ),
            'popular_items'                 => __( 'Popular Categories' ,'freezoner'),
            'all_items'                     => __( 'All categories' ,'freezoner'),
            'parent_item'                   => __('Parent'),
            'parent_item_colon'             => null,
            'edit_item'                     => __( 'Edit Category' ), 
            'update_item'                   => __( 'Update Category' ),
            'add_new_item'                  => __( 'Add new category' ),
            'new_item_name'                 => __( 'New Category' ),
            'separate_items_with_commas'    => __( 'Seperate categories with commas' ),
            'add_or_remove_items'           => __( 'Add or remove category' ),
            'choose_from_most_used'         => __( 'Choose from most used categories' ),
            'menu_name'                     => __( 'Categories' ),
          ),
          'tax_name'         => 'products_cat',
          'post_types'       =>  array('products'),
          'slug'             => 'products-category'          
        )
    );

  // Add new taxonomy, NOT hierarchical (like tags)
    foreach ($ser_taxonomies as $tax) {
      register_taxonomy($tax['tax_name'],$tax['post_types'],array(
        'hierarchical' => true,
        'labels' => $tax['labels'],
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => $tax['slug'] ),

      ));
    }
}




add_action('init','efp_register_custom_menu');

/* create my custom menu pages */

function efp_register_custom_menu_pages() {

    add_menu_page(

        'website options',

        'efp Options',

        'manage_options',

        'content-area',

        'main_content_area_callback',

        efp_URL.'assets/images/favicon.ico',

        2

    ); 
        add_submenu_page(

        'content-area',

        'Home Options',

        'Home Page Options',

        'manage_options',

        'home-page-content',

        'home_page_area_callback'

    );
    add_submenu_page(

        'content-area',

        'About Options',

        'About Page Options',

        'manage_options',

        'about-page-content',

        'about_page_area_callback'

    );      
}

add_action( 'admin_menu', 'efp_register_custom_menu_pages' );

require_once ( efp_ROOT . 'efp_options/efp_options.php');
require_once ( efp_ROOT . 'efp_options/homepage_options.php');
require_once ( efp_ROOT . 'efp_options/about_options.php');



add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        body{
            background:#c5c5d8!important; 
        }
        #login h1 a, .login h1 a {
            background-image: url(<?= get_option('efp_logo_img'); ?>);
            width: 100%;
            height: 100px;
            background-size: contain;
            margin: 0 auto;
        }
        .login form{
            background: rgba(3, 3, 4, .9)!important;
            border-radius: .5rem;
        }
        .login label{
            font-weight: 600!important;
            color: #fff!important;
        }
        .wp-core-ui p .button {
            background: rgba(3, 3, 4, .9)!important;
            border-color: rgba(3, 3, 4, .9)!important;
        }
        .wp-core-ui p .button:hover{
            background-color: #005b52 !important;
            border-color: #005b52 !important;
            color: #fff;
        }
        #reg_passmail{color:#fff;}
    </style>
<?php }
