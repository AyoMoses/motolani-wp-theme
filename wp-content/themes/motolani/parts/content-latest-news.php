<article>
    <a href="<?php the_permalink(); ?>">
        <div class="see-post"><?php the_post_thumbnail('large'); ?></div>
    </a>

    <!-- we get the title, then the date, the link to the post  -->
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>



        <div class="latest-news">
            <p>
                <span>by <?php the_author_posts_link(); ?> </span>
                <span>Categories: <?php the_category(', ') ?></span>
                <span>Tags: <?php the_tags('', ', '); ?></span>
            </p>

            <p><span><?php echo get_the_date(); ?></span></p>
        </div>

        <!-- i get the excerpt of the post  -->
        <?php the_excerpt(); ?>
</article>
