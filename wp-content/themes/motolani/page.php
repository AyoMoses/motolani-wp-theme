<!-- NOTE  -->
<!-- page.php — If a specialized template that includes the page’s ID is not found, WordPress looks for and uses the theme’s default page template. -->

<?php get_header(); ?>

<!-- we set a customizer image for our theme and this changes images randomly  -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />



<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="container">
                <div class="page-items">
                    <?php
                    //  we already have posts hence we do not need to check for posts and only loop 
                    while (have_posts()) : the_post();
                    
                    get_template_part('parts/content-page.php', 'page');

                    if (comments_open() || get_comment_count()) {
                        // i load my comment.php file 
                        comments_template();
                    }
                    endwhile;

                    ?>
                </div>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>
