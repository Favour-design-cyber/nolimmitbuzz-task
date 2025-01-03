<?php
function cp_portfolio_shortcode($atts) {
    $output = '';
    $terms = get_terms(['taxonomy' => 'portfolio_category', 'hide_empty' => false]);

    foreach ($terms as $term) {
        $output .= '<h2>' . esc_html($term->name) . '</h2>';
        $posts = new WP_Query([
            'post_type' => 'portfolio',
            'tax_query' => [
                [
                    'taxonomy' => 'portfolio_category',
                    'terms' => $term->term_id,
                ],
            ],
        ]);

        while ($posts->have_posts()) : $posts->the_post();
            $output .= '<div class="portfolio-item">';
            $output .= '<h3>' . get_the_title() . '</h3>';
            $output .= get_the_post_thumbnail(null, 'medium');
            $output .= '<p>' . get_the_excerpt() . '</p>';
            $output .= '</div>';
        endwhile;
        wp_reset_postdata();
    }
    return $output;
}
add_shortcode('portfolio', 'cp_portfolio_shortcode');


// enddd......favour