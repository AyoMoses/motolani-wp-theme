<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <<div class="container">
            <?php
            while (have_posts()) :
                the_post();
                get_template_part('parts/content-single', 'single');
            ?>
                <!-- Pagination for Next and Previous Posts on the Blog Detail Page -->
                <div class="tee-pagination">
                    <div class="pages next">
                        <?php next_post_link('&laquo; %link') ?>
                    </div>
                    <div class="pages prev">
                        <?php previous_post_link('%link &raquo;') ?>
                    </div>
                </div>

            <?php endwhile; ?>

            <!-- Check for open comments in admin for a post -->
            <?php
            if (comments_open() || get_comment_count()) :
                // Load the comments template
                comments_template();
            endif;
            ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>
