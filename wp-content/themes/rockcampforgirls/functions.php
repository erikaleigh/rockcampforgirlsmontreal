<?php
function responsive_child_widgets_init() {
 
        
 
        register_sidebar(array(
            'name' => __('Home Widget Double 1', 'responsive'),
            'description' => __('Area Thirteen - sidebar-home-widgets-double.php', 'responsive'),
            'id' => 'home-widgets-double-1',
            'before_title' => '<div id="widget-title-two"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s">',
            'after_widget' => '</div>'
        ));
 
        register_sidebar(array(
            'name' => __('Home Widget Double 2', 'responsive'),
            'description' => __('Area Fourteen - sidebar-home-widgets-double.php', 'responsive'),
            'id' => 'home-widgets-double-2',
            'before_title' => '<div id="widget-title-three"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s">',
            'after_widget' => '</div>'
        ));
}
add_action( 'widgets_init', 'responsive_child_widgets_init' );


// adds shortcode functionality to widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');


/// custom store menu
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
    register_nav_menu( 'es-store-menu', __( 'Store Menu' ) );
}
?>