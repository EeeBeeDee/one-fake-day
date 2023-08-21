 <?php 
    function post_types() {
        // Venue post type
        register_post_type('venue', array(
            'supports' => array(
                'title', 'editor', 'thumbnail', 'excerpt'
            ),
            'rewrite' => array(
                'slug' => 'venues'
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Venues',
                'add_new_item' => 'Add New Venue',
                'edit_item' => 'Edit Venue',
                'all_items' => 'All Venues',
                'singular_name' => 'Venue',
            ),
            'menu_icon' => 'dashicons-location-alt'
        ));

    }
    
    add_action('init', 'post_types')
?>

