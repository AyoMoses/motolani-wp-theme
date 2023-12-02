<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <h1>Search results for: <?php echo get_search_query(); ?></h1>

            <?php
            // Display the search form
            get_search_form();
            
            // Start the loop for search results
            while (have_posts()) :
                the_post();
            ?>
                <div class="search-result">
                    <?php
                    // Include the template part for displaying search results
                    get_template_part('parts/content-search', 'search');
                    ?>
                </div>
            <?php
            endwhile;

            // Display pagination for search results
            the_posts_pagination(array(
                'class' => 'blog-detail-pagination'
            ));
            ?>
        </div>


    </div>
</div>

<?php get_footer(); ?>
