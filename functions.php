<?php
# Carica lo stile personalizzato per questo tema
function childtheme_parent_styles()
{
    wp_enqueue_style('child-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'childtheme_parent_styles', 11);

function register_widget_areas()
{

    register_sidebar(array(
        'name' => 'Footer area one',
        'id' => 'footer_area_one',
        'description' => 'This widget area description',
        'before_widget' => '<section class="footer-area footer-area-one">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Footer area two',
        'id' => 'footer_area_two',
        'description' => 'This widget area description',
        'before_widget' => '<section class="footer-area footer-area-two">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Footer area three',
        'id' => 'footer_area_three',
        'description' => 'This widget area description',
        'before_widget' => '<section class="footer-area footer-area-three">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Footer area four',
        'id' => 'footer_area_four',
        'description' => 'This widget area description',
        'before_widget' => '<section class="footer-area footer-area-four">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

}

add_action('widgets_init', 'register_widget_areas');