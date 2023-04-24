<?php
// Contact Form shortcode
function cox_contact_form( $atts, $content = null ) {

    //[contact_form]

    //get the attributes
    $atts = shortcode_atts(
        array(),
        $atts,
        'contact_form'
    );

    //return HTML
    ob_start();
    include 'shortcode-html/contact-us.php';
    return ob_get_clean();

}
add_shortcode( 'contact_form', 'cox_contact_form' );