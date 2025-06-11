<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Marquee Section -->
    <div class="marquee-container">
        <marquee onmouseover="this.stop();" onmouseout="this.start();">ওয়েবসাইটের গঠন কার্যক্রম এখনো চলমান। তাই অভিজ্ঞদের যেকোনো পরামর্শ <a href="mailto:mehedihasanmridul2025@gmail.com?subject=ওয়েবসাইট পরামর্শ">এই লিংকে</a> পাঠানোর জন্য বিশেষভাবে আহ্বান করা হলো। ধন্যবাদ।</marquee>
    </div>
    
    <!-- Time Bar -->
    <div class="time-bar">
        <span id="current-date"></span>
        <span id="current-time"></span>
        <span id="islamic-date"></span>
    </div>
    
    <!-- Header & Navigation -->
    <header>
        <nav>
            <div class="logo">
               <i class='fas fa-cloud-download-alt'></i>
                <span><?php bloginfo('name'); ?></span>
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav-links',
                'fallback_cb' => false
            ));
            ?>
            <button class="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

    <!-- Welcome Notification -->
    <div class="welcome-notification">
        <button class="close-btn"><i class="fas fa-times"></i></button>
        <p>আপনাকে স্বাগতম! আমার ব্যক্তিগত ওয়েবসাইটে।</p>
    </div>