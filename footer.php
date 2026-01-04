<?php
/**
 * Footer template
 */
?>
    <footer id="site-footer" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'fallback_cb' => false,
                ]);
                ?>
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Alle rettigheder forbeholdt.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
