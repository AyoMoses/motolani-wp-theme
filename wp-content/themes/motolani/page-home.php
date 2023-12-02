<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>
            <section class="services">
                <h2>Services</h2>
                <div class="container">
                    <div class="services-item">
                        <!-- GET WIDGET CONTENTS DYNAMICALLY FROM THE WIDGETS IN ADMIN  -->
                        <?php if (is_active_sidebar('service-1')) {
                            dynamic_sidebar('service-1');
                        } ?>
                    </div>
                    <div class="services-item">
                        <?php if (is_active_sidebar('service-2')) {
                            dynamic_sidebar('service-2');
                        } ?>
                    </div>
                    <div class="services-item">
                        <?php if (is_active_sidebar('service-3')) {
                            dynamic_sidebar('service-3');
                        } ?>
                    </div>
                </div>
            </section>


            <!-- getting a custom latest news on my homepage or any catgeory  -->
            <section class="home-blog">
                <h2>Latets news</h2>
                <div class="container">
                    <?php
                    // Get the category IDs of the posts you want to exclude
                    $exclude_categories = array(1);

                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 4,
                        'category__in'   => array(6, 5, 12, 13),
                        'category__not_in' => $exclude_categories,
                    );

                    // Create a new instance of the WP_Query class with the specified arguments
                    $postlist = new WP_Query($args);

                    // Check if there are posts
                    if ($postlist->have_posts()) :
                        // Start the loop
                        while ($postlist->have_posts()) : $postlist->the_post();

                            // Include the template part for displaying latest news
                            get_template_part('parts/content-latest-news', 'latest-news');

                        endwhile;

                        // Reset post data to avoid interference with the main WordPress query
                        wp_reset_postdata();

                    else : ?>
                        <!-- Display a message if no posts are found -->
                        <p>No Latest news available.</p>
                    <?php endif; ?>
                </div>

            </section>
        </main>
    </div>
</div>

<?php get_footer(); ?>
