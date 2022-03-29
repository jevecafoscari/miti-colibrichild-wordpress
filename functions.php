<?php
# Carica lo stile personalizzato per questo tema
function childtheme_parent_styles()
{
    wp_enqueue_style('child-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'childtheme_parent_styles', 11);
