<!-- index.php — If no specific page templates are assigned or found, WordPress defaults back to using the theme’s index file to render pages. -->

<!-- we can call this the default template page it also controls the blog page. It has a list of all blog posts showing  -->

<?php get_header(); ?>

<!-- we set a customizer image for our theme and this changes images randomly  -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <!-- I get my archive title and description  -->
            <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
        
            
            <div class="container">
                <div class="archive-items">
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
                                

                                <div class="meta-info">
                                    <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
                                    <p>Categories: <?php the_category(', ') ?></p>
                                    <p>Tags: <?php the_tags('', ', '); ?></p>
                                </div>

                                <?php the_excerpt(); ?>
                            </article>
                        <?php
                        endwhile;
                        ?>

                        <!-- i create my example of previous and next pagination  -->
                        <div class="tee-pagination">
                            <div class="pages new">
                                <?php previous_posts_link("<< Previous posts") ?>
                            </div>
                            <div class="pages old">
                                <?php next_posts_link("Older posts >>") ?>
                            </div>
                        </div>

                        <?php 

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