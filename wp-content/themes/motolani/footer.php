<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <p>
                <!-- i added a theme modification for user to change copyright and get retreived from the database and dretrieved here -->
                <!-- the mod name and the default value to show when not added  -->
                <?php echo get_theme_mod('set_copyright', 'Copyright X - All right reserved'); ?>
            </p>
        </div>
        <nav class="footer-menu">
            <?php wp_nav_menu(array('theme_location' => 'tee_footer_menu', 'depth' => 1)); ?>
        </nav>
    </div>
</footer>
</div>

<!-- without this, all scripts at our footer will not work -->
<?php wp_footer(); ?>
</body>

</html>
