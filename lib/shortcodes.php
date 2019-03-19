<?

namespace IMAGA\Theme\Shortcodes;

use IMAGA\Theme\Assets;

/**
 * Font Awesome Chevron shortcodes
 */
add_shortcode( 'chevron-up', function($atts){
  return '<i class="fa fa-chevron-up"></i>';
});
add_shortcode( 'chevron-down', function($atts){
  return '<i class="fa fa-chevron-down"></i>';
});
add_shortcode( 'chevron-left', function($atts){
  return '<i class="fa fa-chevron-left"></i>';
});
add_shortcode( 'chevron-right', function($atts){
  return '<i class="fa fa-chevron-right"></i>';
});

/**
 * Font Awesome Checkmark shortcode
 */
add_shortcode( 'checkmark', function($atts){
  return '<i class="fa fa-check"></i>';
});

/**
 * Font Awesome Cross shortcode
 */
add_shortcode( 'times', function($atts){
  return '<i class="fa fa-times"></i>';
});

/**
 * Font Awesome External link shortcode
 */
add_shortcode( 'external-link', function($atts){
  return '<i class="fa fa-external-link"></i>';
});

/**
 * Bootstrap Button shortcode
 */
add_shortcode( 'button', function($atts, $content = null){

  $color = $atts['color'] ??0?: 'black' ;

  return '<a class="btn btn-' . $color . ' ' . $atts['extra'] . '" href="' . $atts['url'] . '">' . do_shortcode($content) . '</a>';
});

/**
 * Bootstrap List shortcode
 */
add_shortcode( 'list-unstyled', function($atts, $content = null){
  return '<ul class="list-unstyled">' . do_shortcode($content) . '</ul>';
});

/**
 * Bootstrap List-item shortcode
 */
add_shortcode( 'list-item', function($atts, $content = null){
  return '<li>' . do_shortcode($content) . '</li>';
});

/**
 * Replace Gallery shortcode
 */
function custom_gallery_shortcode( $attr ) {
	$post = get_post();

	static $instance = 0;
	$instance++;

	if ( ! empty( $attr['ids'] ) ) {
		if ( empty( $attr['orderby'] ) ) {
			$attr['orderby'] = 'post__in';
		}
		$attr['include'] = $attr['ids'];
	}else{
    return '<div class="alert alert-danger" role="alert">Selecteer afbeeldingen voor deze gallerij.</div>';
  }


	$atts  = shortcode_atts(
		array(
			'order'      => 'ASC',
			'orderby'    => 'menu_order ID',
			'id'         => $post ? $post->ID : 0,
			'size'       => 'thumbnail',
			'include'    => '',
		),
		$attr,
		'gallery'
	);

	$id = intval( $atts['id'] );

  $_attachments = get_posts(
    array(
      'include'        => $atts['include'],
      'post_status'    => 'inherit',
      'post_type'      => 'attachment',
      'post_mime_type' => 'image',
      'order'          => $atts['order'],
      'orderby'        => $atts['orderby'],
    )
  );

  $attachments = array();

  foreach ( $_attachments as $key => $val ) {
    $attachments[ $val->ID ] = $_attachments[ $key ];
  }

	if ( empty( $attachments ) ) {
		return '';
	}

  $output = '<div class="element-inline content-gallery">';
    $output .= '<div class="gallery-container">';

    	$output .= "<div id='gallery-{$instance}' class='gallery-inline slick-slider'>";

    	foreach ( $attachments as $id => $attachment ) {

    		$image_meta = wp_get_attachment_metadata( $id );

        $image = wp_get_attachment_image_src( $id, $atts['size'], false);

        $output .= '<img src="'.$image[0].'" title="'.$image_meta['image_meta']['title'].'"/>';

    	}

    	$output .= "</div>";

      $output .= "<div class='gallery-nav' data-aos='fade-down'>";
        $output .= "<span class='gallery-prev'></span>";
        $output .= "<span class='gallery-paging'></span>";
        $output .= "<span class='gallery-next'></span>";
      $output .= "</div>";

    $output .= "</div>";
  $output .= "</div>";

	return $output;
}

remove_shortcode( 'gallery' );

add_shortcode( 'gallery', __NAMESPACE__ . '\\custom_gallery_shortcode' );

/**
 * Collage wrapper
 */
add_shortcode( 'collage', function($atts, $content = null){

  $content = strip_tags($content);

  return '<div class="element-inline content-collage">' . do_shortcode($content) . '</div>';
});

/**
 * Collage image
 */
add_shortcode( 'collage-item', function($atts){

  $image_meta = wp_get_attachment_metadata( $atts['id'] );

  $image = wp_get_attachment_image_src( $atts['id'], 'large', false);

  $output = '<div class="collage-item">';
    $output .= '<a href="'.$atts['link'].'">';

      $output .= '<img class="img-fluid" src="'.$image[0].'" title="'.$image_meta['image_meta']['title'].'"/>';
      $output .= '<div class="title"><div><span>'.$atts['title'].'</span></div></div>';

    $output .= '</a>';
  $output .= '</div>';

  return $output;
});
