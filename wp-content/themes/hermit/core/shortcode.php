<?php
add_action( 'vc_before_init', 'webnuts_bild' );
function webnuts_bild() {
    vc_map( array(
        "name" => __( "Title 1"),
        "description" => __("Display title with icon and text"),
        "base" => "title_icon",
        "icon" => "",
        'admin_enqueue_css' => array(get_template_directory_uri().'/css/hermit.css' ),
        "class" => "hermit-title-icon",
        "category" => __( "Hermitasia"),
        "params" => array(
            array(
                "type" => "attach_image",
                "holder" => "img",
                "class" => "",
                "heading" => __( "Icon" ),
                "param_name" => "image_id",
                "value" => __( "" ),
                "description" => __( "The icon" )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __( "Title " ),
                "param_name" => "title",
                "value" => __( "" ),
                "description" => __( "The title" )
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => __( "Title color" ),
                "param_name" => "title_color",
                "value" => __( "#FFF" ),
                "description" => __( "The title color" )
            ),

        )
    ) );

    vc_map( array(
        "name" => __( "Horizontal scroller"),
        "description" => __("Display image content horizontal scroller"),
        "base" => "horizontal_scroller",
        "icon" => "",
        'front_enqueue_js' => array(get_template_directory_uri().'/plugins/custom-scroller/jquery.mCustomScrollbar.concat.min.js' ),
        'front_enqueue_css' => array(get_template_directory_uri().'/plugins/custom-scroller/jquery.mCustomScrollbar.min.css' ),
        "class" => "",
        "category" => __( "Hermitasia"),
        "params" => array(
            array(
                "type" => "attach_image",
                "holder" => "img",
                "class" => "",
                "heading" => __( "Image" ),
                "param_name" => "image_id",
                "value" => __( "" ),
                "description" => __( "The image" )
            ),
             array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __( "Title " ),
                "param_name" => "title",
                "value" => __( "" ),
                "description" => __( "The title" )
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => __( "Title color" ),
                "param_name" => "title_color",
                "value" => __( "#FFF" ),
                "description" => __( "The title color" )
            ),

        )
    ) );

}
add_shortcode( 'title_icon', 'bild_func_title_icon' );
function bild_func_title_icon( $atts ) {
    extract( shortcode_atts( array(
        'title' => '',
        'image_id' => '',
        'title_color' => '#FFF'
    ), $atts ) );
    $arrImages = wp_get_attachment_image_src($image_id, false, false);
    $img = "<img src ='".$arrImages[0]."'/>";
    $title = "<h3 style='color: {$title_color}'>{$title}</h3>";
    return "<div style='border-color:{$title_color}' class='hermit-title-icon text-xs-center'>".$img.$title."</div>";
}




add_shortcode( 'horizontal_scroller', 'bild_func_horizontal_scroller' );
function bild_func_horizontal_scroller( $atts ) {
    extract( shortcode_atts( array(
        'title' => '',
        'title_color' => '#FFF',
        'image_id' => '',
        'max_height' => '',
    ), $atts ) );

    $arrImages = wp_get_attachment_image_src($image_id, false, false);
    $img = "<img src ='".$arrImages[0]."'/>";
    $title = "<h3 style='color: {$title_color}'>{$title}</h3>";
    return "<div id='horizontal-scroller'>".$title."<div class='scroller-wrapper'><div class='mCustomScrollbar'><p>".$img."<p></div></div></div>";
}

