<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <?php 
            while (have_posts()) :
                the_post();
            ?>
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
                    </div>
                </article>

               
                

            <?php
            // i also add a check to see if there is an open comment in admin for a post 
            // if one of the conditions are true, it runs the condition I have inside the statement 
            // i simply copy the 2016 theme comments.php file to save time writing php to handle comments
            if (comments_open() || get_comment_count()) {
                // i load my comment.php file 
                comments_template();
            }
            endwhile;
        ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
