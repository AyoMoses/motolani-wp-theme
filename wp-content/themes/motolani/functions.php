<?php

function tee_load_scripts() {
    // wp_enqueue_style is used to add styles. It takes a handle which is a unqiue name
    // get_stylesheet_uri() goes to the style.css file created at the root of the project
    // an array() if the stylesheet depends on any other file
    // version of the stylesheet '1.0'
    // all media types i.e screen, print etc but we say all

    // the version can be 1.0 but this leaves an issue of cache and our styles not being updated. What we do is add the 'filemtime(get_template_directory() . '/style.css')'to point to the root file and this tricks the browser to reload everytime the file changes

    // this gets the current unix timestamp and replaces the version number with that. It also concatenates it with the style.css. This is only useful in local development mode
    wp_enqueue_style( 'tee_style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

    // copy the link inside the http out of the google font if you are linking a font directly online.
    // Setting the stylesheet version to 'null' in font case means you can only work with only one style sheet
    wp_enqueue_style( 'tee_google-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );

    // enqueueing our script

    // get_template_directory_uri() gets the template directory ( folder ) and the . adds the url with the file location

    // true at the end is important as this lets us know if to put it at the top or bottom i.e head tag or closing body tag

    // true means to add it at the bottom of the page. Its false by default which means at the top i.e jquery

    // if you need to use a dependency, you can add 'jquery' inside the array for example
    wp_enqueue_script( 'tee_script', get_template_directory_uri() . '/js/dropdown.js', array(), '3.0', true );
}

/* NOTE: notice the 's' at the end of wp_enqueue_scripts this is different from the singular form. Get all scripts with the wp_enqueue_scripts hook  */
// add_action adds the wp_enqueue_scripts hook and we run the function created on the hook
add_action( 'wp_enqueue_scripts', 'tee_load_scripts' );

function tee_config() {

    // this registers the menu for us and makes it available in the wordpress admin side to select under appearance
    // tee_nav_menu is what is called slug as this will be added to the wp_nav_menu()
    register_nav_menus(

        array(
            'tee_main_menu' => 'Main Menu',
            'tee_footer_menu' => 'Footer Menu'
        )
    );

    // adding a custom header to our theme and passing it arguments ( options )
    // you can pass the array as the second argument to add_theme_support directly or just create a variable to pass the array to. Depends on what you want
    $args = array(
        'height' => '225',
        'width' => 1920,
    );
    // custom-header is a type of customisation that will be made available under customisation in the apperance
    add_theme_support( 'custom-header', $args );

    // add support to be able to upload featured images in our theme useful for banners and ACF use cases
    add_theme_support( 'post-thumbnails' );

    // support to use custom logo and also pass width and height and a flexible logo as true to allow for bigger images. The sizes will give the user a hint of what is appropriate
    add_theme_support( 'custom-logo', array(
        'width' => 210,
        'height' => 100,
        'flex-width' => true,
        'flex-height' => true,
    ) );

    add_theme_support( 'title-tag' );

    // RSS feeds
    add_theme_support( 'automatic-feed-links' );

    // html5 
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    add_theme_support( 'title-tag' );
}
// this add_action takes the 'after_setup_theme' hook to load everything in our config once the theme is ready to mount. the 0 give it highest proprity
add_action( 'after_setup_theme', 'tee_config', 0 );

// add the 'widgets_init' hook and the tee_sidebars function
add_action( 'widgets_init', 'tee_sidebars' );

function tee_sidebars() {
    register_sidebar(
        array(
            'name' => 'Blog sidebar',
            'id' => 'sidebar-blog',
            'description' => 'This is the blog sidebar. You can add your widgets here',
            'before_widget' => '<div class="widget-wrapper">',
            'class' => 'my-test-class',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => 'Page sidebar',
            'id' => 'sidebar-general',
            'description' => 'This is the Page sidebar. You can add your widgets here',
            'before_widget' => '<div class="widget-wrapper">',
            'class' => 'my-test-class',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => 'Service 1',
            'id' => 'service-1',
            'description' => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'class' => 'my-test-class',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Service 2',
            'id' => 'service-2',
            'description' => 'Second Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'class' => 'my-test-class',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Service 3',
            'id' => 'service-3',
            'description' => 'Third Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'class' => 'my-test-class',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}

// if on older devices, run the do_action hook and fire the wp_body_open
if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}
