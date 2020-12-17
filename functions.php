<?php

define('STATIC_FILES_BUILD_VERSION', '1.1');

//deregister unnessosary scripts
function my_dequeue_scripts() {
  wp_dequeue_script( 'jquery-ui-core' );
  wp_dequeue_script( 'jquery-ui-sortable' );
}


//remove smthng
add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head','adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_shortlink_wp_head');


// remove hAtom micromarkup
function remove_hentry( $classes ) {
  $classes = array_diff($classes, array('hentry'));
  return $classes;
}
add_filter( 'post_class', 'remove_hentry' );


 // remove Emojii
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

// start
function theme_styles()
{
  wp_enqueue_style('fontello', get_template_directory_uri() . '/assets/css/fontello.css',[], STATIC_FILES_BUILD_VERSION);
  wp_enqueue_style('master-style', get_template_directory_uri() . '/assets/css/main.css',[], STATIC_FILES_BUILD_VERSION);
}
function theme_scripts()
{
  wp_enqueue_script('remodal', get_template_directory_uri() . '/assets/js/remodal.js',['jquery'], STATIC_FILES_BUILD_VERSION, true);
  wp_enqueue_script('master-script', get_template_directory_uri() . '/assets/js/main.js',['remodal'], STATIC_FILES_BUILD_VERSION, true);
}
add_action('wp_print_styles', 'theme_styles');
add_action('wp_print_styles', 'theme_scripts');


// menus
add_action(
  'after_setup_theme',
  function () {
    register_nav_menus(
      [
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
      ]
    );
  }
);

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
  require_once( 'vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields() {
  include_once __DIR__ . '/theme-helpers/custom-fields/base.php';
}

require_once __DIR__ . '/theme-helpers/cpt.php';
add_action ( 'init', 'true_register_post_type_init' );



$icons = (object) [
  'calend' => '<svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.calend-1,.calend-3,.calend-4{fill:none;stroke:currentcolor;}.calend-1,.calend-4{stroke-linecap:round;stroke-linejoin:round;}.calend-1{stroke-width:2px;}.calend-2{fill:currentcolor;}.calend-3{stroke-miterlimit:10;}</style></defs><title/><rect class="calend-1" height="20" width="20" x="6" y="6"/><rect class="calend-2" height="4" width="20" x="6" y="6"/><line class="calend-3" x1="6" x2="26" y1="11.5" y2="11.5"/><polyline class="calend-4" points="14.5 15.5 16 15.5 16 21"/><line class="calend-4" x1="14" x2="18" y1="21.5" y2="21.5"/></svg>',
  'eye' => '<svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.eye-1{fill:currentcolor;}</style></defs><title/><path class="eye-1" d="M16,25.47c-7.53,0-13.41-8.54-13.66-8.91L2,16l.38-.56C2.59,15.07,8.47,6.53,16,6.53s13.41,8.54,13.66,8.91L30,16l-.38.56C29.41,16.93,23.53,25.47,16,25.47ZM4.41,16C5.8,17.82,10.55,23.47,16,23.47S26.2,17.83,27.59,16C26.2,14.18,21.45,8.53,16,8.53S5.8,14.17,4.41,16Z"/><path class="eye-1" d="M16,11a4.14,4.14,0,0,0-.48,0,.34.34,0,0,0-.31.33.34.34,0,0,0,.1.24h0a2.59,2.59,0,0,1,.74,1.8A2.63,2.63,0,0,1,13.42,16a2.58,2.58,0,0,1-1.78-.72h0a.35.35,0,0,0-.6.18A4.13,4.13,0,0,0,11,16a5,5,0,1,0,5-5Z"/></svg>',
  'time' => '<svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.time-1,.time-2,.time-3{fill:none;stroke:currentcolor;stroke-linecap:round;stroke-linejoin:round;}.time-1{stroke-width:2px;}.time-2{stroke-width:3px;}</style></defs><title/><circle class="time-1" cx="16" cy="16" r="11"/><line class="time-2" x1="16" x2="22.42" y1="16" y2="16"/><line class="time-3" x1="12.42" x2="16" y1="9.5" y2="16"/></svg>'
];