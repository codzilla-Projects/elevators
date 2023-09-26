<?php 
function efp_get_slider($no){
    $args = array(
        'post_type'       => 'slider',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function efp_get_services($no){
    $args = array(
        'post_type'       => 'services',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function efp_get_projects($no){
    $args = array(
        'post_type'       => 'projects',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function efp_get_products($no){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'       => 'products',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function efp_get_products_with_tax($no,$term_id){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'       => 'products',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'products_cat',
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        ),
    );
    return $posts = new WP_Query( $args );    
}

function efp_get_cleints($no){
    $args = array(
        'post_type'       => 'cleints',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function efp_get_products_terms($no){
  return  
  get_terms(array(
    'taxonomy'   => 'products_cat',
    'hide_empty' => false, 
    'orderby'    => 'ID',
    'order'      => 'ASC',
    'hide_empty' => false,
    'number'     => $no,));
}