<?php 
/*********************************

Add Link Meta Box To Slider

**********************************/

function efp_add_slider_data_meta() {

    add_meta_box( "slider_extra_data", "Additional Data" , "efp_slider_data_callback", array('slider'), "normal" );
}


add_action( 'add_meta_boxes', 'efp_add_slider_data_meta' );


/* Display the post meta box. */

function efp_slider_data_callback( $object, $box ) { 
    $efp_slider_link_text = esc_attr( get_post_meta( $object->ID, 'efp_slider_link_text', true ) );
    $efp_slider_link_url = esc_attr( get_post_meta( $object->ID, 'efp_slider_link_url', true ) );

?>

<div id="titlediv">
    <div dir="rtl" class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="efp_slider_link_text"><?php _e('نص الرابط: ','efp'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="efp_slider_link_text" size="30" id="title" spellcheck="true" autocomplete="off" value="<?php echo $efp_slider_link_text; ?>"><br>
                </div>
            </div>
        </div>
    </div>
    <div dir="rtl" class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="efp_slider_link_url"><?php _e('عنوان الرابط: ','efp'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="efp_slider_link_url" size="30" id="title" spellcheck="true" autocomplete="off" value="<?php echo $efp_slider_link_url; ?>"><br>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

}

add_action( 'save_post', 'efp_save_custom_meta', 10, 2 );


function efp_save_custom_meta($post_id){

    if( isset($_POST['efp_slider_link_text']) ){

        update_post_meta($post_id, 'efp_slider_link_text', $_POST['efp_slider_link_text']);

    }

    else

        delete_post_meta($post_id,'efp_slider_link_text');


    if( isset($_POST['efp_slider_link_url']) ){

        update_post_meta($post_id, 'efp_slider_link_url', $_POST['efp_slider_link_url']);

    }

    else

        delete_post_meta($post_id,'efp_slider_link_url');

}