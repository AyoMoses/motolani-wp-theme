<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <h1>Search results for: <?php echo get_search_query(); ?></h1>
            <?php
            
            // i do this as recommended by wordpress to enable user search again
            get_search_form();
            
            while (have_posts()) :
                the_post();
            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="meta-info">
                        <div><?php the_post_thumbnail('thumbnail'); ?></div>
                        <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <?php if('post' == get_post_type()): ?>
                            <div class="meta-info">
                                <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
                                <p>Categories: <?php the_category(', ') ?></p>
                                <p>Tags: <?php the_tags('', ', '); ?></p>
                                <span class="posted-on">Posted on: <?php the_time('F j, Y'); ?></span>
                            </div>
                        <?php endif; ?>

                    </header>
                    <div class="content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>

               
                

            <?php
         
            endwhile;
            the_posts_pagination(array(
                'class' => 'blog-detail-pagination'
            ));
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
