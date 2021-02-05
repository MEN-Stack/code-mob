<?php 

function create_custom_posttype() {
 
    register_post_type( 'custom_post',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Custom_posts' ),
                'singular_name' => __( 'Custom_post' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'custom_posts'),
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-#####',
            'show_ui' => true
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_custom_posttype' );
