<?php
include_once 'BranttBase.php';
//responsive-embeds
add_action('after_setup_theme', ['BranttBase','afterSetupTheme']);
add_filter('allowed_block_types_all', ['BranttBase','allowedBlockTypes'], 10, 2);
add_action('wp_enqueue_scripts', ['BranttBase','wpEnqueueScripts']);
add_action('wp_head', ['BranttBase','addFont']);
