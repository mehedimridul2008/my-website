<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <h1>মো. মেহেদী হাসান মৃদুল</h1>
        <p>আমার জন্ম মুন্সিগঞ্জ জেলায় ২০০৮ সালে। আমি এখন ময়মনসিংহে থাকি। আমরা ২ভাই ১ বোন। আমার মূল স্বপ্ন আলোকিত মানুষ হয়ে দেশ ও দেশের জনগণের সেবা করা। সবাই আমার জন্য দোয়া করবেন।</p>
    </div>
    <a href="#timeline" class="scroll-down">
        <i class="fas fa-chevron-down"></i>
    </a>
</section>

<!-- Timeline Section -->
<section class="timeline-section" id="timeline">
    <div class="section-title">
        <h2>আমার জীবনবৃত্তান্ত</h2>
    </div>
    <div class="timeline">
        <?php
        $timeline_items = new WP_Query(array(
            'post_type' => 'timeline',
            'posts_per_page' => -1,
            'orderby' => 'meta_value',
            'meta_key' => 'timeline_year',
            'order' => 'ASC'
        ));

        if ($timeline_items->have_posts()) :
            $count = 0;
            while ($timeline_items->have_posts()) : $timeline_items->the_post();
                $count++;
                $year = get_post_meta(get_the_ID(), 'timeline_year', true);
        ?>
                <div class="timeline-item <?php echo $count % 2 == 0 ? 'even' : 'odd'; ?>">
                    <div class="timeline-content">
                        <?php if ($year) : ?>
                            <span class="timeline-date"><?php echo esc_html($year); ?></span>
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section" id="gallery">
    <div class="section-title">
        <h2>Gallery</h2>
    </div>
    <i class='fas fa-tools'></i>
    <p>গ্যালারি অংশটি নির্মাণাধীন আছে। খুব শীঘ্রই কাজ সম্পন্ন হবে ইনশাআল্লাহ্‌।</p>
</section>

<!-- Contact Section -->
<section class="contact-section" id="contact">
    <div class="section-title">
        <h2 style="color: white;">যোগাযোগ</h2>
    </div>
    <div class="contact-container">
        <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i> কুড়িগ্রাম সদর, কুড়িগ্রাম, রংপুর, বাংলাদেশ -৫৬০০</p>
            <p><i class="fas fa-envelope"></i> mehedihasanmridul2025@gmail.com</p>
            <p><i class="fas fa-phone"></i> +8801912172708</p>
            
            <div class="social-links">
                <a href="https://web.facebook.com/mehedihasanmridulOfficial" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                <a href="https://t.me/mehedihasanmridul" target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram"></i></a>
                <a href="https://wa.me/8801912172708" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/mehedihasanmridulofficial" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            </div>
            
            <div class="visitor-counter">
                <i class="fas fa-users"></i> ভিজিটর সংখ্যা: <span id="visitor-count"><?php echo get_option('mhmridul_visitor_count', 0); ?></span>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>