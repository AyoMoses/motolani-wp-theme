<?php
/* 
Template Name: General template (with side bar)
*/
?>


<?php get_header(); ?>

<!-- we set a customizer image for our theme and this changes images randomly  -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="general-template">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <!-- we get the title of the page, then the content of the page  -->

                                <h1><?php the_title(); ?></h1>

                                <?php the_content(); ?>
                            </article>
                        <?php
                        endwhile;

                    else : ?>
                        <p>Nothing yet to be displayed.</p>
                    <?php endif; ?>
                </div>

                <?php get_sidebar('general'); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>
