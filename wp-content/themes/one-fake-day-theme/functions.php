<?php
    
    function scripts() {
        wp_register_style('style', get_template_directory_uri() . '/dist/app.css');
        wp_enqueue_style('style');

        wp_register_style('bootstrap-custom', get_template_directory_uri() . '/dist/bootstrap-custom.css');
        wp_enqueue_style('bootstrap-custom');
    }

    add_action('wp_enqueue_scripts', 'scripts')
?>