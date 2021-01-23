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


add_action('carbon_fields_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields() {
  include_once __DIR__ . '/theme-helpers/custom-fields/webinars.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/base.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/reviews.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/post.php';

  include_once __DIR__ . '/theme-helpers/custom-fields/widgets/excel.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/widgets/formula.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/widgets/link.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/widgets/quote.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/widgets/subscribe.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/widgets/subscribe-mail.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/widgets/webinar.php';
  include_once __DIR__ . '/theme-helpers/custom-fields/widgets/webinar-inread.php';
}

add_action( 'after_setup_theme', 'crb_load', 1000);
function crb_load() {
  require_once( 'vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();
}



require_once __DIR__ . '/theme-helpers/cpt.php';
add_action ( 'init', 'true_register_post_type_init' );



$icons = (object) [
  'calend' => '<svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.calend-1,.calend-3,.calend-4{fill:none;stroke:currentcolor;}.calend-1,.calend-4{stroke-linecap:round;stroke-linejoin:round;}.calend-1{stroke-width:2px;}.calend-2{fill:currentcolor;}.calend-3{stroke-miterlimit:10;}</style></defs><title/><rect class="calend-1" height="20" width="20" x="6" y="6"/><rect class="calend-2" height="4" width="20" x="6" y="6"/><line class="calend-3" x1="6" x2="26" y1="11.5" y2="11.5"/><polyline class="calend-4" points="14.5 15.5 16 15.5 16 21"/><line class="calend-4" x1="14" x2="18" y1="21.5" y2="21.5"/></svg>',
  'eye' => '<svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.eye-1{fill:currentcolor;}</style></defs><title/><path class="eye-1" d="M16,25.47c-7.53,0-13.41-8.54-13.66-8.91L2,16l.38-.56C2.59,15.07,8.47,6.53,16,6.53s13.41,8.54,13.66,8.91L30,16l-.38.56C29.41,16.93,23.53,25.47,16,25.47ZM4.41,16C5.8,17.82,10.55,23.47,16,23.47S26.2,17.83,27.59,16C26.2,14.18,21.45,8.53,16,8.53S5.8,14.17,4.41,16Z"/><path class="eye-1" d="M16,11a4.14,4.14,0,0,0-.48,0,.34.34,0,0,0-.31.33.34.34,0,0,0,.1.24h0a2.59,2.59,0,0,1,.74,1.8A2.63,2.63,0,0,1,13.42,16a2.58,2.58,0,0,1-1.78-.72h0a.35.35,0,0,0-.6.18A4.13,4.13,0,0,0,11,16a5,5,0,1,0,5-5Z"/></svg>',
  'time' => '<svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.time-1,.time-2,.time-3{fill:none;stroke:currentcolor;stroke-linecap:round;stroke-linejoin:round;}.time-1{stroke-width:2px;}.time-2{stroke-width:3px;}</style></defs><title/><circle class="time-1" cx="16" cy="16" r="11"/><line class="time-2" x1="16" x2="22.42" y1="16" y2="16"/><line class="time-3" x1="12.42" x2="16" y1="9.5" y2="16"/></svg>',

  'fb' => '<svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentcolor" d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>',
  'ig' => '<svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentcolor" d="m12.004 5.838c-3.403 0-6.158 2.758-6.158 6.158 0 3.403 2.758 6.158 6.158 6.158 3.403 0 6.158-2.758 6.158-6.158 0-3.403-2.758-6.158-6.158-6.158zm0 10.155c-2.209 0-3.997-1.789-3.997-3.997s1.789-3.997 3.997-3.997 3.997 1.789 3.997 3.997c.001 2.208-1.788 3.997-3.997 3.997z"/><path fill="currentcolor" d="m16.948.076c-2.208-.103-7.677-.098-9.887 0-1.942.091-3.655.56-5.036 1.941-2.308 2.308-2.013 5.418-2.013 9.979 0 4.668-.26 7.706 2.013 9.979 2.317 2.316 5.472 2.013 9.979 2.013 4.624 0 6.22.003 7.855-.63 2.223-.863 3.901-2.85 4.065-6.419.104-2.209.098-7.677 0-9.887-.198-4.213-2.459-6.768-6.976-6.976zm3.495 20.372c-1.513 1.513-3.612 1.378-8.468 1.378-5 0-7.005.074-8.468-1.393-1.685-1.677-1.38-4.37-1.38-8.453 0-5.525-.567-9.504 4.978-9.788 1.274-.045 1.649-.06 4.856-.06l.045.03c5.329 0 9.51-.558 9.761 4.986.057 1.265.07 1.645.07 4.847-.001 4.942.093 6.959-1.394 8.453z"/><circle fill="currentcolor" cx="18.406" cy="5.595" r="1.439"/></svg>',
  'yt' => '<svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentcolor" d="m23.469 5.929.03.196c-.29-1.029-1.073-1.823-2.068-2.112l-.021-.005c-1.871-.508-9.4-.508-9.4-.508s-7.51-.01-9.4.508c-1.014.294-1.798 1.088-2.083 2.096l-.005.021c-.699 3.651-.704 8.038.031 11.947l-.031-.198c.29 1.029 1.073 1.823 2.068 2.112l.021.005c1.869.509 9.4.509 9.4.509s7.509 0 9.4-.509c1.015-.294 1.799-1.088 2.084-2.096l.005-.021c.318-1.698.5-3.652.5-5.648 0-.073 0-.147-.001-.221.001-.068.001-.149.001-.23 0-1.997-.182-3.951-.531-5.846zm-13.861 9.722v-7.293l6.266 3.652z"/></svg>',
  'vk' => '<svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentcolor" d="m19.915 13.028c-.388-.49-.277-.708 0-1.146.005-.005 3.208-4.431 3.538-5.932l.002-.001c.164-.547 0-.949-.793-.949h-2.624c-.668 0-.976.345-1.141.731 0 0-1.336 3.198-3.226 5.271-.61.599-.892.791-1.225.791-.164 0-.419-.192-.419-.739v-5.105c0-.656-.187-.949-.74-.949h-4.126c-.419 0-.668.306-.668.591 0 .622.945.765 1.043 2.515v3.797c0 .832-.151.985-.486.985-.892 0-3.057-3.211-4.34-6.886-.259-.713-.512-1.001-1.185-1.001h-2.625c-.749 0-.9.345-.9.731 0 .682.892 4.073 4.148 8.553 2.17 3.058 5.226 4.715 8.006 4.715 1.671 0 1.875-.368 1.875-1.001 0-2.922-.151-3.198.686-3.198.388 0 1.056.192 2.616 1.667 1.783 1.749 2.076 2.532 3.074 2.532h2.624c.748 0 1.127-.368.909-1.094-.499-1.527-3.871-4.668-4.023-4.878z"/></svg>',
  'tg' => '<svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="currentcolor" d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>'
];




function get_webinars_arr()
{
  $list = ['-' => ''];
  $args = [
    'post_type' => 'webinars',
    'numberposts' => '-1'
  ];
  $all_posts = get_posts($args);
  foreach ($all_posts as $webinar) {
    $list[$webinar->ID] = $webinar->post_title;
  }
  return $list;
};