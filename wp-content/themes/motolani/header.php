<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motolani</title>
    <!-- this makes sure all scripts and tags work in our project  -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        <!-- call the logo here after adding the support for it  -->
                        <?php 
                            if (has_custom_logo()) {
                                the_custom_logo();
                            } else {
                                // we break php here 
                                ?> 
                                    <a href="<?php echo home_url( '/' ); ?>">
                                        <!-- display the name of the website  -->
                                        <span><?php bloginfo('name') ?></span>

                                    </a>
                                <?php
                            }
                        

                        ?>
                    </div>

                    <!-- i get my search form for the my website  -->
                    <div class="searchbox">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </section>

            <!-- Playing with conditionals on one of the created pages. I have a logic to not show menu on that page  -->
            <?php if(! is_page('landing-page')): ?>
                <section class="menu-area">
                    <div class="container">
                        <nav class="main-menu">
                            <button class="check-button">
                                <div class="menu-icon">
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </div>
                            </button>

                            <?php wp_nav_menu(array('theme_location' => 'tee_main_menu', 'depth' => 2)); ?>
                        </nav>
                    </div>
                </section>
            <?php endif; ?>
        </header>
