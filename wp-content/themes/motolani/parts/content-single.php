<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="meta-info">
        <div><?php the_post_thumbnail('large'); ?></div>
        <h1><?php the_title(); ?></h1>
        
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
            <p>Categories: <?php the_category(', ') ?></p>
            <p>Tags: <?php the_tags('', ', '); ?></p>
            <span class="posted-on"><?php the_time('F j, Y'); ?></span>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>

        <!-- this i have to test the page break inside content if any is used -->
        <?php wp_link_pages(); ?>
    </div>
</article>
