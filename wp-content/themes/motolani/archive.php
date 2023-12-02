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
                            // Check if the template part file exists
                            if (locate_template('parts/content-archive.php')) {
                                get_template_part('parts/content-archive', 'archive');
                                // my second parameter checks for a file name called archive and renders it - content-archive
                            } else {
                                // If the template part doesn't exist, display a message
                                echo '<p>Template part "content-archive.php" not found.</p>';
                            }
                        endwhile;
                        ?>

                        <!-- Example of previous and next pagination -->
                        <div class="tee-pagination">
                            <div class="pages new">
                                <?php previous_posts_link("<< Previous posts") ?>
                            </div>
                            <div class="pages old">
                                <?php next_posts_link("Older posts >>") ?>
                            </div>
                        </div>

                        <?php
                    else :
                        // No posts found
                        ?>
                        <p>Nothing yet to be displayed.</p>
                    <?php
                    endif;
                    ?>
                </div>


                <!-- get the sidebar created inside sidebar.php  -->
                <?php get_sidebar(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>
