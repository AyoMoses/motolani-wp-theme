<!-- index.php — If no specific page templates are assigned or found, WordPress defaults back to using the theme’s index file to render pages. -->

<!-- we can call this the default template page it also controls the blog page. It has a list of all blog posts showing  -->

<?php get_header(); ?>

<!-- we set a customizer image for our theme and this changes images randomly  -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>Blog</h1>
            <div class="container">
                <div class="blog-items">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
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
                        <?php
                        endwhile;

                    else : ?>
                        <p>Nothing yet to be displayed.</p>
                    <?php endif; ?>
                </div>

                <!-- get the sidebar created inside sidebar.php  -->
                <?php get_sidebar(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>
