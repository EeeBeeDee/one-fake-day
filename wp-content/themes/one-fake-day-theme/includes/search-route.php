<?php 

add_action('rest_api_init', 'registerSearch');

function registerSearch() {
    register_rest_route('university/v1', 'search', array(
        'methods' => 'GET', // WP_REST_SERVER::READABLE
        'callback' => 'searchResults',
    ));
};

function searchResults() {
    return 'new route w000';
};