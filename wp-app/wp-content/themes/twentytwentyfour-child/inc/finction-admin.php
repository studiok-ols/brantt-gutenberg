<?php
add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
    wp_enqueue_style( 'admin_css', get_stylesheet_directory_uri() . '/css/admin-style.css', false, THEME_VERSION );
}


//if(1==1){
//    echo "<pre style='background-color:#eee; padding:1em; margin-left: 200px;'>\n";
//    print_r("<span style='color:#c00;'>" . __FILE__ . " | " . __LINE__ . "</span>\n");
//    print_r(get_stylesheet_directory_uri());
//    echo "</pre>";
//}
