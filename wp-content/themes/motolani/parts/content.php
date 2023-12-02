<article>
    <!-- we get the title, then the date, the link to the post  -->
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    

    <!-- display the image of the post. You can also add how large you want your images: thumb or thumbnail(smallest 
    size), medium, large, or full (full width image can be useful for hero section of the blog detail page)  -->

    <!-- passing arguments can be necessary if we need to not use css to define our post page  -->

    <!-- you can also input the image size you want instead of wp default sizes i.e 200x200 inside an array() -->
    <a href="<?php the_permalink(); ?>">
        <div class="see-post"><?php the_post_thumbnail(array(230, 230)); ?></div>               
    </a>
    

    <div class="meta-info">
        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
        <p>Categories: <?php the_category(', ') ?></p>
        <p>Tags: <?php the_tags('', ', '); ?></p>
    </div>

    <?php the_excerpt(); ?>
</article>
