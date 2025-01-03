<!-- This is the single post template showing the title, content, featured image, and author information. -->

<?php get_header(); ?>

<div class="container">
    <main id="main-content">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on"><?php echo get_the_date(); ?></span>
                        <span class="byline"> by <?php the_author(); ?></span>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">
                    <?php
                    $author_id = get_the_author_meta('ID');
                    $author_bio = get_the_author_meta('description');
                    ?>
                    <div class="author-info">
                        <h3><?php echo get_the_author(); ?></h3>
                        <?php echo get_avatar($author_id, 100); ?>
                        <?php if ($author_bio) : ?>
                            <p><?php echo $author_bio; ?></p>
                        <?php endif; ?>
                    </div>
                </footer>
            </article>
        <?php endwhile; ?>
    </main>
</div>

<?php get_footer(); ?>

<!-- The End.. favour -->
