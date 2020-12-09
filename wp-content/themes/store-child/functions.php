<?php

// Register Custom Post Type
function register_custom_types() {

    register_post_type('news', [
        'label'                 => __( 'News', 'store-child' ),
        'description'           => __( 'news description', 'store-child' ),
        'labels' => [
                'name'                  => _x( 'News', 'Post Type General Name', 'store-child' ),
                'singular_name'         => _x( 'New', 'Post Type Singular Name', 'store-child' ),
                'menu_name'             => __( 'News', 'store-child' ),
                'name_admin_bar'        => __( 'News', 'store-child' ),
                'archives'              => __( 'Item Archives', 'store-child' ),
                'attributes'            => __( 'Item Attributes', 'store-child' ),
                'parent_item_colon'     => __( 'Parent Item:', 'store-child' ),
                'all_items'             => __( 'All Items', 'store-child' ),
                'add_new_item'          => __( 'Add New Item', 'store-child' ),
                'add_new'               => __( 'Add New', 'store-child' ),
                'new_item'              => __( 'New Item', 'store-child' ),
                'edit_item'             => __( 'Edit Item', 'store-child' ),
                'update_item'           => __( 'Update Item', 'store-child' ),
                'view_item'             => __( 'View Item', 'store-child' ),
                'view_items'            => __( 'View Items', 'store-child' ),
                'search_items'          => __( 'Search Item', 'store-child' ),
                'not_found'             => __( 'Not found', 'store-child' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'store-child' ),
                'featured_image'        => __( 'Featured Image', 'store-child' ),
                'set_featured_image'    => __( 'Set featured image', 'store-child' ),
                'remove_featured_image' => __( 'Remove featured image', 'store-child' ),
                'use_featured_image'    => __( 'Use as featured image', 'store-child' ),
                'insert_into_item'      => __( 'Insert into item', 'store-child' ),
                'uploaded_to_this_item' => __( 'Uploaded to this item', 'store-child' ),
                'items_list'            => __( 'Items list', 'store-child' ),
                'items_list_navigation' => __( 'Items list navigation', 'store-child' ),
                'filter_items_list'     => __( 'Filter items list', 'store-child' ),
            ],
             

               'supports'              => [ 'title', 'editor', 'custom-fields' ],
               'hierarchical'          => false,
               'public'                => true,
               'show_ui'               => true,
               'show_in_menu'          => true,
               'menu_position'         => 5,
               'show_in_admin_bar'     => true,
               'show_in_nav_menus'     => true,
               'can_export'            => true,
               'has_archive'           => true,
               'exclude_from_search'   => false,
               'publicly_queryable'    => true,
               'capability_type'       => 'page',
           ]);

  
    register_post_type( 'articles', [
        'label'                 => __( 'article', 'store-child' ),
        'description'           => __( 'Article Description', 'store-child' ),
          'labels'                => [
            'name'                  => _x( 'articles', 'Post Type General Name', 'store-child' ),
            'singular_name'         => _x( 'article', 'Post Type Singular Name', 'store-child' ),
            'menu_name'             => __( 'Articles', 'store-child' ),
            'name_admin_bar'        => __( 'Articles', 'store-child' ),
            'archives'              => __( 'Item Archives', 'store-child' ),
            'attributes'            => __( 'Item Attributes', 'store-child' ),
            'parent_item_colon'     => __( 'Parent Item:', 'store-child' ),
            'all_items'             => __( 'All Items', 'store-child' ),
            'add_new_item'          => __( 'Add New Item', 'store-child' ),
            'add_new'               => __( 'Add New', 'store-child' ),
            'new_item'              => __( 'New Item', 'store-child' ),
            'edit_item'             => __( 'Edit Item', 'store-child' ),
            'update_item'           => __( 'Update Item', 'store-child' ),
            'view_item'             => __( 'View Item', 'store-child' ),
            'view_items'            => __( 'View Items', 'store-child' ),
            'search_items'          => __( 'Search Item', 'store-child' ),
            'not_found'             => __( 'Not found', 'store-child' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'store-child' ),
            'featured_image'        => __( 'Featured Image', 'store-child' ),
            'set_featured_image'    => __( 'Set featured image', 'store-child' ),
            'remove_featured_image' => __( 'Remove featured image', 'store-child' ),
            'use_featured_image'    => __( 'Use as featured image', 'store-child' ),
            'insert_into_item'      => __( 'Insert into item', 'store-child' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'store-child' ),
            'items_list'            => __( 'Items list', 'store-child' ),
            'items_list_navigation' => __( 'Items list navigation', 'store-child' ),
            'filter_items_list'     => __( 'Filter items list', 'store-child' ),
          ],
           'supports'              => [ 'title', 'editor', 'page-attributes' ],
            'taxonomies'            => [ 'category', 'post_tag' ],
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'          => 'page',
    ] );


}

add_action( 'init', 'register_custom_types', 0 );
flush_rewrite_rules( false );



add_filter( 'rwmb_meta_boxes', 'custom_meta_boxes' );

function custom_meta_boxes( $meta_boxes ) {
  
    $meta_boxes[] = [
        'title'      => esc_html__( 'Articulo uno', 'store-child' ),
        'id'         => 'art1',
        'post_types' => ['news'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type' => 'wysiwyg',
                'id'   => 'art1-text',
                'name' => esc_html__( 'Articulo uno', 'store-child' ),
            ],
        ],
    ];


    return $meta_boxes;
}


$value = rwmb_meta( $field );
echo $value;


// Incluir Bootstrap CSS JS y dependencia popper
function  enqueue_multiple()  {
    wp_enqueue_style( 'bootstrap_css', 
                    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', 
                    array(), 
                    '4.1.3'
                    ); 
    wp_enqueue_script( 'popper_js', 
                    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', 
                    array(), 
                    '1.14.3', 
                    true); 
    wp_enqueue_script( 'bootstrap_js', 
                    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', 
                    array('jquery','popper_js'), 
                    '4.1.3', 
                    true); 



    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/resources/fontawesome/css/all.min.css' );

     wp_enqueue_script( 'mascotto', get_template_directory_uri() . '/resources/js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'enqueue_multiple');













