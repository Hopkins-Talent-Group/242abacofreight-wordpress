<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'hello-elementor-child',
        get_stylesheet_uri(),
        ['hello-elementor-theme-style'],
        '1.0.0'
    );
});
