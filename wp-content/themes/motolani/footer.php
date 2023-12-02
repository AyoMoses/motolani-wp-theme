<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <p>
                Copyright &copy; - All rights reserved.
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
