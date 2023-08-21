<?php
    
    function scripts() {
        wp_enqueue_script('google-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyAUAki-fcJ5ncnATvqGrybpLmXGxkmrJwI' , NULL, '1.0', true);
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_register_style('bootstrap-custom', get_template_directory_uri() . '/dist/bootstrap-custom.css');
        wp_enqueue_style('bootstrap-custom');
        
        wp_register_style('style', get_template_directory_uri() . '/dist/app.css');
        wp_enqueue_style('style');

        wp_enqueue_script('app', get_theme_file_uri('/dist/app.js'), [], '1.0', true);
    };

    add_action('wp_enqueue_scripts', 'scripts');

    function post_features() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
    
    
    add_action('after_setup_theme', 'post_features');

    function my_theme_archive_title( $title ) {
        if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>';
        } elseif ( is_post_type_archive() ) {
            $title = post_type_archive_title( '', false );
        } elseif ( is_tax() ) {
            $title = single_term_title( '', false );
        }
     
        return $title;
    }
    
    add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

    function university_map_key($api) {
        $api['key'] = 'AIzaSyAUAki-fcJ5ncnATvqGrybpLmXGxkmrJwI';
    
        return $api;
    }
    
    add_filter('acf/fields/google_map/api', 'university_map_key');
?>

