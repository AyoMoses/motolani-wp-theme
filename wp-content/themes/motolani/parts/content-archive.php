<article>
    <!-- we get the title, then the date, the link to the post  -->
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    

    <div class="meta-info">
        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
        <?php if(has_category()): ?>
            <span>Categories: <?php the_category(', ') ?></span>
        <?php endif; ?>
                
        <?php if(has_tag()): ?>
            <span>Tags: <?php the_tags('', ', '); ?></span>
        <?php endif; ?>
    </div>

    <?php the_excerpt(); ?>
</article>
