<?php

add_action('admin_init', 'sandbox_initialize_theme_options');

function sandbox_initialize_theme_options() {

    // First, we register a section. This is necessary since all future options must belong to one.  

    add_settings_section(
            'general_settings_section', // ID used to identify this section and with which to register options  
            'Themes Options', // Title to be displayed on the administration page  
            'sandbox_general_options_callback', // Callback used to render the description of the section  
            'general'                           // Page on which to add this section of options  
    );



    add_settings_field(
            'facebook', // ID used to identify the field throughout the theme  
            'Facebook', // The label to the left of the option interface element  
            'sandbox_facebook_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Facebook social.'
            )
    );

    add_settings_field(
            'twister', // ID used to identify the field throughout the theme  
            'Twister', // The label to the left of the option interface element  
            'sandbox_twister_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Twister social.'
            )
    );

    add_settings_field(
            'in', // ID used to identify the field throughout the theme  
            'In', // The label to the left of the option interface element  
            'sandbox_in_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'In social.'
            )
    );

    add_settings_field(
            'youtube', // ID used to identify the field throughout the theme  
            'Youtube', // The label to the left of the option interface element  
            'sandbox_youtube_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Youtube social.'
            )
    );

    add_settings_field(
            'hotline', // ID used to identify the field throughout the theme  
            'Hotline', // The label to the left of the option interface element  
            'sandbox_hotline_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Hotline.'
            )
    );



    add_settings_field(
            'phone', // ID used to identify the field throughout the theme  
            'Phone', // The label to the left of the option interface element  
            'sandbox_phone_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Home Phone - Fax.'
            )
    );

    add_settings_field(
            'fax', // ID used to identify the field throughout the theme  
            'Fax', // The label to the left of the option interface element  
            'sandbox_fax_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Fax.'
            )
    );

    add_settings_field(
            'mail', // ID used to identify the field throughout the theme  
            'Mail', // The label to the left of the option interface element  
            'sandbox_mail_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Email.'
            )
    );



    add_settings_field(
            'address', // ID used to identify the field throughout the theme  
            'Address', // The label to the left of the option interface element  
            'sandbox_address_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Address.'
            )
    );

    add_settings_field(
            'facebook_page', // ID used to identify the field throughout the theme  
            'Facebook Page Code', // The label to the left of the option interface element  
            'facebook_page_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  
                'Facebook Page Code.'
            )
    );

    
     
    add_settings_field(
            'skype', // ID used to identify the field throughout the theme  
            'Skype', // The label to the left of the option interface element  
            'sandbox_skype_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Skype Contact.'
            )
    );
     
    add_settings_field(
            'gmap', // ID used to identify the field throughout the theme  
            'gmap', // The label to the left of the option interface element  
            'sandbox_gmap_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Google map Shop.'
            )
    );
    add_settings_field(
            'abouthermit', // ID used to identify the field throughout the theme  
            'About Hermit', // The label to the left of the option interface element  
            'sandbox_abouthermit_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'About Hermit.'
            )
    );
    add_settings_field(
            'aboutcam2', // ID used to identify the field throughout the theme  
            'About CAM2', // The label to the left of the option interface element  
            'sandbox_aboutcam2_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'About CAM2.'
            )
    );
    add_settings_field(
            'headingproducthome', // ID used to identify the field throughout the theme  
            'Title description home', // The label to the left of the option interface element  
            'sandbox_headingproducthome_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Title description home'
            )
    );

    add_settings_field(
            'productsinglebanner', // ID used to identify the field throughout the theme  
            'Product detail banner', // The label to the left of the option interface element  
            'sandbox_productsinglebanner_callback', // The name of the function responsible for rendering the option interface  
            'general', // The page on which this option will be displayed  
            'general_settings_section', // The name of the section to which this field belongs  
            array(// The array of arguments to pass to the callback. In this case, just a description.  

        'Product detail top banner'
            )
    );



    register_setting(
            'general', 'facebook'
    );

    register_setting(
            'general', 'twister'
    );

    register_setting(
            'general', 'in'
    );

    register_setting(
            'general', 'youtube'
    );

    register_setting(
            'general', 'hotline'
    );

    register_setting(
            'general', 'address'
    );

    register_setting(
            'general', 'phone'
    );

    register_setting(
            'general', 'fax'
    );

    register_setting(
            'general', 'mail'
    );

    register_setting(
            'general', 'facebook_page'
    );

   

    register_setting(
            'general', 'yahoo'
    );

    register_setting(
            'general', 'skype'
    );

    register_setting(
            'general', 'gmap'
    );
     register_setting(
            'general', 'abouthermit'
    );
      register_setting(
            'general', 'aboutcam2'
    );
       register_setting(
            'general', 'headingproducthome'
    );

        register_setting(
            'general', 'productsinglebanner'
    );
}

function sandbox_general_options_callback() {

    echo '<p>Setting more.</p>';
}

// end sandbox_general_options_callback  

function sandbox_name_callback($args) {

    $html = '<input type="text" value="' . get_option('name') . '" size="50" id="name" name="name"/>';

    echo $html;
}

function sandbox_facebook_callback($args) {



    // Note the ID and the name attribute of the element match that of the ID in the call to add_settings_field  

    $html = '<input type="text" id="facebook" name="facebook" size="50" value="' . get_option('facebook') . '"/>';



    // Here, we will take the first argument of the array and add it to a label next to the checkbox  
    //$html .= '<label for="show_header"> '  . $args[0] . '</label>';   



    echo $html;
}

function sandbox_twister_callback($args) {

    $html = '<input type="text" value="' . get_option('twister') . '" size="50" id="twister" name="twister"/>';

    echo $html;
}

function sandbox_in_callback($args) {

    $html = '<input type="text" value="' . get_option('in') . '" size="50" id="in" name="in"/>';

    echo $html;
}

function sandbox_youtube_callback($args) {

    $html = '<input type="text" value="' . get_option('youtube') . '" size="50" id="youtube" name="youtube"/>';

    echo $html;
}

function sandbox_hotline_callback($args) {

    $html = '<input type="text" value="' . get_option('hotline') . '" size="50" id="hotline" name="hotline"/>';

    echo $html;
}

function sandbox_phone_callback($args) {

    $html = '<textarea cols="50" rows="5" id="phone" name="phone">' . get_option('phone') . '</textarea>';

    echo $html;
}

function sandbox_headingproducthome_callback($args) {

    $html = '<textarea cols="50" rows="5" id="headingproducthome" name="headingproducthome">' . get_option('headingproducthome') . '</textarea>';

    echo $html;
}

function sandbox_abouthermit_callback($args) {

    $html = '<textarea cols="50" rows="5" id="abouthermit" name="abouthermit">' . get_option('abouthermit') . '</textarea>';

    echo $html;
}

function sandbox_aboutcam2_callback($args) {

    $html = '<textarea cols="50" rows="5" id="aboutcam2" name="aboutcam2">' . get_option('aboutcam2') . '</textarea>';

    echo $html;
}







function sandbox_fax_callback($args) {

    $html = '<input type="text" value="' . get_option('fax') . '" size="50" id="fax" name="fax"/>';

    echo $html;
}

function sandbox_mail_callback($args) {

    $html = '<input type="text" value="' . get_option('mail') . '" size="50" id="mail" name="mail"/>';

    echo $html;
}

function sandbox_address_callback($args) {

    $html = '<input type="text" value="' . get_option('address') . '" size="50" id="address" name="address"/>';

    echo $html;
}

function facebook_page_callback($args) {

    $html = '<textarea cols="50" rows="10" id="facebook_page" name="facebook_page"/>' . get_option('facebook_page') . '</textarea>';

    echo $html;
}


function sandbox_yahoo_callback($args) {

    $html = '<input type="text" value="' . get_option('yahoo') . '" size="50" id="yahoo" name="yahoo"/>';

    echo $html;
}

function sandbox_skype_callback($args) {

    $html = '<input type="text" value="' . get_option('skype') . '" size="50" id="skype" name="skype"/>';

    echo $html;
}

function sandbox_gmap_callback($args) {

    $html = '<textarea cols="70" rows="10" id="gmap" name="gmap">' . get_option('gmap') . '</textarea>';

    echo $html;
}

function sandbox_productsinglebanner_callback($args) {

    $html = '<textarea cols="70" rows="5" id="productsinglebanner" name="productsinglebanner">' . get_option('productsinglebanner') . '</textarea>';

    echo $html;
}



// end sandbox_toggle_header_callback
