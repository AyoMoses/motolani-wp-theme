<article>
    <!-- we get the title, then the date, the link to the post  -->
    <header>
        <h1><?php the_title(); ?></h1>
    </header>

    <!-- this is not necessary except you want to correct where the content will show and style it better just like <Outlet /> in reactjs -->
    <?php the_content(); ?>
</article>
