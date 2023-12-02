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
                        // I get the category of each post I do not want to display in my custom loop - this i get from the admin on hover on categories
                        $args = array(
                            // default of post_type is post and if you need it to be a page, you pass page
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category__in' => array(6, 5, 12, 13),
                            'category__out' => array(1),
                        );
                        
                        // I pass a new instance of the WP_Query class with my array of args
                        $postlist = new WP_Query($args);

                            if ($postlist -> have_posts()) :
                                while ($postlist -> have_posts()) : $postlist -> the_post();
                            ?>
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
                    <?php
                                endwhile;
                                
                                // i do this so this query i have does not affect the main wordpress query or if i create a new loop under this one
                                wp_reset_postdata();

                            else : ?>
                    <p>No Latest news availabe.</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>
    </div>
</div>

<?php get_footer(); ?>
