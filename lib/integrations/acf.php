<?
/**
 * Add Theme Settings page
 */
if( function_exists('acf_add_options_page') ):

  acf_add_options_page(array(
    'page_title' 	=> 'Thema Instellingen',
    'menu_title'	=> 'Thema Instellingen',
    'menu_slug' 	=> 'theme-options',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));

endif;

/**
 * Replace Flex Layout title with content
 */
function acf_flexible_content_layout_title( $title, $field, $layout, $i ) {

  // some magic
  // see: https://stackoverflow.com/a/40607717
  $desc = strip_tags( get_sub_field( 'title' ) ??0?: get_sub_field( 'lead' ) ??0?: get_sub_field( 'author' ) ??0?: get_sub_field( 'text' ) );

	if ( !empty($desc) ) {

    return $title . " - " . $desc = (strlen($desc) > 50) ? mb_substr($desc, 0, 50).'...' : $desc;

	}
	return $title;
}
add_filter( 'acf/fields/flexible_content/layout_title', __NAMESPACE__ . '\\acf_flexible_content_layout_title', 10, 4 );
