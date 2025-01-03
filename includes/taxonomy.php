<?php
function cp_register_portfolio_category_taxonomy() {
    $args = [
        'labels' => [
            'name' => 'Portfolio Categories',
            'singular_name' => 'Portfolio Category',
        ],
        'public' => true,
        'hierarchical' => true,
    ];
    register_taxonomy('portfolio_category', 'portfolio', $args);
}
add_action('init', 'cp_register_portfolio_category_taxonomy');

// end....favour