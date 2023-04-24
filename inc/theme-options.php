<?php

function cox_theme_create_page() {
    require_once( get_template_directory() . '/inc/admin/cox-admin.php' );
}



function cox_add_admin_page() {
    add_menu_page( 'Cox Theme Options', 'Cox Theme', 'manage_options', 'cox_theme', 'cox_theme_create_page', 'dashicons-buddicons-buddypress-logo', 110 );
    add_submenu_page( 'cox_theme', 'Cox Contact Form', 'Contact Form', 'manage_options', 'cox_theme_contact', 'cox_contact_form_page' );
}

add_action( 'admin_menu', 'cox_add_admin_page' );

//Activate custom settings
function cox_custom_settings()
{
    //Contact Form Options
    register_setting( 'cox-contact-options', 'activate_contact' );
    add_settings_section( 'cox-contact-section', 'Contact Form', 'cox_contact_section', 'cox_theme_contact');
    add_settings_field( 'activate-form', 'Activate Contact Form', 'cox_activate_contact', 'cox_theme_contact', 'cox-contact-section' );

}

add_action( 'admin_init', 'cox_custom_settings' );

function cox_contact_section() {
    echo 'Activate and Deactivate the Built-in Contact Form';
}

function cox_contact_form_page() {
    require_once( get_template_directory() . '/inc/admin/cox-contact-form.php' );
}








function cox_activate_contact() {
    $options = get_option( 'activate_contact' );
    $checked = ( @$options == 1 ? 'checked' : '' );
    echo '<label><input type="checkbox" id="activate_contact" name="activate_contact" value="1" '.$checked.' /></label>';
}


