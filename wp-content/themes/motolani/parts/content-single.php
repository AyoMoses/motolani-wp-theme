<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="meta-info">
        <div><?php the_post_thumbnail('large'); ?></div>
        <h1><?php the_title(); ?></h1>
        
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
            
            <?php if(has_category()): ?>
                <span>Categories: <?php the_category(', ') ?></span>
            <?php endif; ?>
                
            <?php if(has_tag()): ?>
                <span>Tags: <?php the_tags('', ', '); ?></span>
            <?php endif; ?>

            <span class="posted-on"><?php the_time('F j, Y'); ?></span>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>

        <!-- this i have to test the page break inside content if any is used -->
        <?php wp_link_pages(); ?>
    </div>
</article>
