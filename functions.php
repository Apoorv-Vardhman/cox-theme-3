<?php

function cox_theme_assets() {
    /**
     * wp_enqueue_style( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, string $media = 'all' )
     * https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     * */

    $version = wp_get_theme()->get('version');

    /*css*/
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '3.7.0' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.3' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.2.1' );
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '2.2.1' );
    wp_enqueue_style( 'metismenu', get_template_directory_uri() . '/assets/css/metismenu.css', array(), '2.7.2' );
    //wp_enqueue_style( 'icons', get_template_directory_uri() . '/assets/css/icons.css', array(), '5.8.1' );
    wp_register_style( 'font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4' );
    wp_enqueue_style('font_awesome');
    wp_enqueue_style( 'main_style', get_template_directory_uri() . '/assets/css/style.css', array(), $version );
    /*
     * https://developer.wordpress.org/reference/functions/wp_enqueue_script/
     * wp_enqueue_script( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
     * */
    /*JS*/
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '3.6.0', 1);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), '3.7.1', 1);
    wp_enqueue_script('jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array('jquery'), '1.3', 1);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '2.10.2', 1);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '5.1.3', 1);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '3.0.5', 1);
    wp_enqueue_script('imageload', get_template_directory_uri() . '/assets/js/imageload.min.js', array('jquery'), '4.1.4', 1);
    wp_enqueue_script('scrollUp', get_template_directory_uri() . '/assets/js/scrollUp.min.js', array('jquery'), '2.4.1', 1);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.2.1', 1);
    wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), '1.1.0', 1);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '1.0', 1);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.1.3', 1);
    wp_enqueue_script('metismenu', get_template_directory_uri() . '/assets/js/metismenu.js', array('jquery'), '2.7.2', 1);
    wp_enqueue_script('active', get_template_directory_uri() . '/assets/js/active.js', array('jquery'), $version, 1);

}

add_action( 'wp_enqueue_scripts', 'cox_theme_assets' );


/*
 * register wordpress title hooks
 * https://developer.wordpress.org/reference/functions/add_theme_support/
 * */
function cox_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_post_type_support('page','excerpt');
    add_theme_support('custom-header');
}
add_action( 'after_setup_theme', 'cox_theme_support' );


/*
 * register site menus
 * https://developer.wordpress.org/reference/functions/register_nav_menus/
 * */
function cox_menus(){
    $locations = array(
        'primary-menu'=>'Desktop Menu',
        'mobile-menu'=>'Mobile Menu',
        'quick-links'=>'Footer Quick Links',
        'resources'=>'Footer Resources'
    );
    register_nav_menus($locations);
}
add_action('init','cox_menus');

require get_template_directory() . '/inc/required-plugin.php';

function check_plugin_state(){
    $plugin_messages = array();
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    /*
     * classic editor
     * */
    if(!is_plugin_active( 'classic-editor/classic-editor.php' ))	{
        $plugin_messages[] = 'This theme requires you to install the Classic Editor plugin, <a href="https://wordpress.org/plugins/classic-editor/">download it from here</a>.';
    }
    /*if(!is_plugin_active( 'advanced-custom-fields/acf.php' ))	{
        $plugin_messages[] = 'This theme requires you to install the Advance Custom Field, <a href="https://wordpress.org/plugins/advanced-custom-fields/">download it from here</a>.';
    }*/

    if(count($plugin_messages) > 0)	{
        echo '<div id="message" class="error">';
        foreach($plugin_messages as $message) {
            echo '<p><strong>'.$message.'</strong></p>';
        }
        echo '</div>';
    }
}
add_action('admin_init', 'check_plugin_state');


require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/custom-fields.php';
require get_template_directory() . '/inc/theme-options.php';


/*add_action('after_switch_theme', 'theme_activation_function');
function theme_activation_function(){
    global $wpdb;
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    $table_name = $wpdb->prefix . "cox-setting";  //get the database table prefix to create my new table

    $sql = "CREATE TABLE $table_name (
      id int(10) unsigned NOT NULL AUTO_INCREMENT,
      name varchar(255) NOT NULL,
      value varchar(255) NOT NULL,
      UNIQUE (name)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

    dbDelta( $sql );
}*/