<?php
get_header();
?>
    <!-- Blog Posts Section part1 -->


<div class="main-content">
    <h2>Welcome</h2>
    
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e('No posts found', 'nolimitbuzz'); ?></p>
    <?php endif; ?>
</div>

    <!-- Blog Posts Section part2-->

<div class="main-content">
    <h2>Read Our second post</h2>
    
    
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="read-more">continue reading our second blog post</a>
            </article>
</div>

 <!-- Blog Posts Section part3-->

 <div class="main-content">
    <h2>Read Our third post</h2>
    
    
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="read-more">continue reading our third blog post</a>
            </article>
</div>
 <!-- Blog Posts Section part4-->

 <div class="main-content">
    <h2>Read Our fourth post</h2>
    
    
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="read-more">continue reading our fourth blog post</a>
            </article>
</div>

<?php


get_footer();
?>
