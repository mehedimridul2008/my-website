<?php
function mhmridul_theme_setup() {
    // মেনু রেজিস্টার করুন
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mhmridul'),
        'footer' => __('Footer Menu', 'mhmridul')
    ));
    
    // থিম সাপোর্ট যোগ করুন
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'mhmridul_theme_setup');

// স্টাইলস এবং স্ক্রিপ্টস এনকিউ
function mhmridul_scripts() {
    // থিম স্টাইল
    wp_enqueue_style('mhmridul-style', get_stylesheet_uri());
    
    // ফন্ট অ্যাওয়েসম
    wp_enqueue_style('hind-siliguri', 'https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap');
    
    // ফন্ট অ্যাওয়েসম আইকন
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // কাস্টম জাভাস্ক্রিপ্ট
    wp_enqueue_script('mhmridul-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true);
    
    // ভিজিটর কাউন্টার আপডেট
    $visitor_count = get_option('mhmridul_visitor_count', 0);
    $visitor_count++;
    update_option('mhmridul_visitor_count', $visitor_count);
    
    // ভিজিটর কাউন্টার ডাটা লোকালাইজেশন
    wp_localize_script('mhmridul-script', 'mhmridulData', array(
        'visitorCount' => $visitor_count
    ));
}
add_action('wp_enqueue_scripts', 'mhmridul_scripts');

// টাইমলাইন কন্টেন্ট টাইপ রেজিস্টার
function mhmridul_register_timeline_post_type() {
    register_post_type('timeline',
        array(
            'labels'      => array(
                'name'          => __('Timeline Items', 'mhmridul'),
                'singular_name' => __('Timeline Item', 'mhmridul'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail'),
            'menu_icon'   => 'dashicons-backup',
        )
    );
}
add_action('init', 'mhmridul_register_timeline_post_type');