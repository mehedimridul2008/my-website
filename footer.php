    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>মো. মেহেদী হাসান মৃদুল</p>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'footer-links',
                'fallback_cb' => false
            ));
            ?>
            <p class="copyright">© <span id="current-year"></span> মো. মেহেদী হাসান মৃদুল কর্তৃক সকল স্বত্ব সংরক্ষিত।</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <?php wp_footer(); ?>
</body>
</html>