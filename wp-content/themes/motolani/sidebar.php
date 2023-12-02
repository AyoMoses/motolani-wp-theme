<!-- we ask if there is an active sidebar with the id of sidebar-blog  -->
<!-- WE PASS THE SIDEBAR ID created inside our functions.php so it knows this is the sidebar we want i.e sidebar-blog -->
<?php if (is_active_sidebar('sidebar-blog')) : ?>

    <aside class="sidebar">
        <?php dynamic_sidebar('sidebar-blog'); ?>
    </aside>

<?php endif; ?>
