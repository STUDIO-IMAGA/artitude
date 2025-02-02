<?

namespace IMAGA\Theme\Setup;

use IMAGA\Theme\Assets;

// Define Google Fonts
define("GOOGLE_FONTS", "Archivo:400|Heebo:800,500,400,300|Overpass+Mono:300,600|Codystar:400");

/*
 * Theme setup
 */
function setup() {

  // Make theme available for translation
  load_theme_textdomain('imaga', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'imaga'),
    'secondary_navigation' => __('Secondary Navigation', 'imaga'),
    'tertiary_navigation' => __('Legal Navigation', 'imaga'),
    'quaternary_navigation' => __('Contact Navigation', 'imaga'),
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  //add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/dashboard.css'));

  // Add image sizes
  // Header Element
  add_image_size('header-image', 800, 600, true);

  // Gallery Element
  add_image_size('gallery-large', 800, 550, true);
  add_image_size('gallery-small', 420, 280, true);
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/*
 * Remove from admin menu: Posts, Comments
 */
function remove_admin_menus() {
  remove_menu_page('edit.php');
  remove_menu_page('edit-comments.php');
}
add_action('admin_menu', __NAMESPACE__ . '\\remove_admin_menus');

/*
* Remove from admin bar: Posts, Comments
*/
function admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
  $wp_admin_bar->remove_node('new-post');
}
add_action('wp_before_admin_bar_render', __NAMESPACE__ . '\\admin_bar_render');

/*
 * Remove from post and pages: Comments
 */
function remove_comment_support() {
  remove_post_type_support('post', 'comments');
  remove_post_type_support('page', 'comments');
}
add_action('init', __NAMESPACE__ . '\\remove_comment_support', 100);


function remove_draft_widget(){
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
add_action('wp_dashboard_setup', __NAMESPACE__ . '\\remove_draft_widget', 999);


/*
 * Theme assets
 */
function assets() {

  wp_register_style('imaga/css', Assets\asset_path('styles/main.css'));
  wp_enqueue_style('imaga/css');

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', Assets\asset_path('scripts/jquery.js'), null, null, true);

  wp_enqueue_script('popper/js', Assets\asset_path('scripts/popper.js'), ['jquery'], null, true);

  wp_enqueue_script('imaga/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

/*
 * Login assets
 */
function login_assets() {

  wp_register_style('imaga/login', Assets\asset_path('styles/login.css') );

  wp_enqueue_script('jquery', Assets\asset_path('scripts/jquery.js'), null, null, true);

  wp_enqueue_script('imaga/login', Assets\asset_path('scripts/login.js'), null, null, true);

  wp_enqueue_style('imaga/login');

}
add_action('login_enqueue_scripts', __NAMESPACE__ . '\\login_assets');

/*
 * ACF Google Maps API Key
 */
function add_acf_google_maps_key() {

  if( ! defined('GOOGLE_MAPS_API') ) return;

  acf_update_setting('google_api_key', GOOGLE_MAPS_API );

}
add_action('acf/init', __NAMESPACE__ . '\\add_acf_google_maps_key');

/*
 * Add Google Fonts
 */
function add_google_fonts() {

  // Defined in functions.php
  if( ! defined('GOOGLE_FONTS') ) return;

  wp_enqueue_style('imaga/google-fonts', 'https://fonts.googleapis.com/css?family=' . GOOGLE_FONTS );

}
add_action('wp_head', __NAMESPACE__ . '\\add_google_fonts' , 1);

/*
 * Remove 'page-template' from body class on pages with custom templates
 */
function prefix_remove_body_class($wp_classes) {

  if ( is_page_template() ):
    foreach ($wp_classes as $key => $value) {
      $wp_classes[$key] = str_replace('page-template-template-', '', $value);
    }
  endif;

  return $wp_classes;
}
add_filter('body_class', __NAMESPACE__ . '\\prefix_remove_body_class', 20, 2);

/*
 * Add custom styling for the dashboard interface
 */
function register_admin_styles(){

  wp_enqueue_style('imaga/admin-styles', Assets\asset_path('styles/admin.css') );

}
add_action('admin_enqueue_scripts', __NAMESPACE__ . '\\register_admin_styles');

/*
 * Disable auto-paragraphing for Contact Form 7
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/*
 * increase upload limit
 * Source: https://stackoverflow.com/questions/45161081/cannot-increase-maximum-upload-file-size-in-local-wordpress
 */
function increase_upload($bytes) {
    return 134217700;
}
add_filter('upload_size_limit', __NAMESPACE__ . '\\increase_upload');

/*
 * Disable REST/JSON API
 * Source: https://www.wpbeginner.com/wp-tutorials/how-to-disable-json-rest-api-in-wordpress/#comment-364346
 */
add_filter('rest_enabled', '_return_false');
add_filter('rest_jsonp_enabled', '_return_false');

/*
 * Disable XMLRPC
 * Source: https://www.wpbeginner.com/plugins/how-to-disable-xml-rpc-in-wordpress/
 */
add_filter('xmlrpc_enabled', '__return_false');

/*
 * Edit Roles
 */
function edit_roles(){

  $role_object = get_role('editor');

  if( !$role_object->has_cap('edit_theme_options') ){
    $role_object->add_cap('edit_theme_options');
  }
}
add_action('admin_init', __NAMESPACE__ . '\\edit_roles', 100);

/*
 * Change URL of the logo on login screen
 */
function login_url() {
  return home_url();
}
add_filter('login_headerurl', __NAMESPACE__ . '\\login_url');


/*
 * Change alt text of the logo on login screen
 */
function login_title() {
  return get_option('blogname');
}
add_filter('login_headertitle', __NAMESPACE__ . '\\login_title');

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style( 'dashicons' );
});
