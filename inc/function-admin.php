<?php
function custom_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <div class="custom-form"> 
        <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search your keyword..." />
        <button type="submit"><i class="fas fa-search"></i></button> 
      </div>
      </form>';

    return $form;
}
add_filter( 'get_search_form', 'custom_search_form', 40 );

function my_register_sidebars()
{
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            /*'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',*/
        )
    );
}
add_action( 'widgets_init', 'my_register_sidebars' );
