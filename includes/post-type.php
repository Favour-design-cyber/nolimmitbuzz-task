<?php
function cp_register_portfolio_post_type() {
    $args = [
        'labels' => [
            'name' => 'Portfolios',
            'singular_name' => 'Portfolio',
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'portfolio'],
    ];
    register_post_type('portfolio', $args);
}
add_action('init', 'cp_register_portfolio_post_type');


// end....,,,,favor