<!-- we ask if there is an active sidebar with the id of sidebar-general  -->
<!-- WE PASS THE SIDEBAR ID created inside our functions.php so it knows this is the sidebar we want i.e sidebar-general -->
<?php if (is_active_sidebar('sidebar-general')) : ?>

    <aside class="sidebar">
        <?php dynamic_sidebar('sidebar-general'); ?>
    </aside>

<?php endif; ?>
