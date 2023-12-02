<article>
    <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>">
            <div class="see-post"><?php the_post_thumbnail('large'); ?></div>
        </a>    
    <?php endif; ?>

    <!-- we get the title, then the date, the link to the post  -->
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>



        <div class="latest-news">
            <p>
               
                <span>by <?php the_author_posts_link(); ?> </span>

                <?php if(has_category()): ?>
                    <span>Categories: <?php the_category(', ') ?></span>
                <?php endif; ?>
                
                <?php if(has_tag()): ?>
                    <span>Tags: <?php the_tags('', ', '); ?></span>
                <?php endif; ?>
               
            </p>

            <p><span><?php echo get_the_date(); ?></span></p>
        </div>

        <!-- i get the excerpt of the post  -->
        <?php the_excerpt(); ?>
</article>
