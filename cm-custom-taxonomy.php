<?php
//hook into the init action and call create_project_type_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_nonhierarchical_taxonomy', 0 );
 
function create_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Custom Tax', 'taxonomy general name' ),
    'singular_name' => _x( 'Custom Tax', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Custom Taxes' ),
    'popular_items' => __( 'Popular Custom Taxes' ),
    'all_items' => __( 'All Custom Taxes' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Custom Tax' ), 
    'update_item' => __( 'Update Custom Tax' ),
    'add_new_item' => __( 'Add New Custom Tax' ),
    'new_item_name' => __( 'New Custom Tax Name' ),
    'separate_items_with_commas' => __( 'Separate custom taxes with commas' ),
    'add_or_remove_items' => __( 'Add or remove custom tax' ),
    'choose_from_most_used' => __( 'Choose from the most used custom tax' ),
    'menu_name' => __( 'Custom Tax' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('custom_tax','post_type',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'custom_tax' ),
  ));
}