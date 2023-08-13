<?php
    
    function scripts() {
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_register_style('bootstrap-custom', get_template_directory_uri() . '/dist/bootstrap-custom.css');
        wp_enqueue_style('bootstrap-custom');
        
        wp_register_style('style', get_template_directory_uri() . '/dist/app.css');
        wp_enqueue_style('style');

        wp_enqueue_script('app', get_theme_file_uri('/dist/app.js'), [], '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'scripts')
?>