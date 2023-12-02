<?php get_header();

$latestPosts = array(
    'title' => 'Fancy reading from our latest Posts? Cheers',
    'number' => 4
);
?>



<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1>Page not found mate!</h1>
                        <p>The page you are trying to search does not exist!</p>

                        <h6>How about doing a quick search?</h6>
                        <?php get_search_form(); ?>

                        <?php the_widget( 'WP_Widget_Recent_Posts', $latestPosts ); ?>
                        
                        <?php  the_widget('WP_Widget_Pages', 'title=A bit of content for you&sortby=post_modified', 'before_title=<h3>&after_title=</h3>', array('title' => 'Here are Pages from the website')); ?>
                    </header>
                </div>
            </div>
        </main>
    </div>
</div>


<?php get_footer(); ?>
