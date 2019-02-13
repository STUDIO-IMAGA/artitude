<?

namespace IMAGA\Theme\Taxonomies\POSTTYPE\TAXONOMIE;

/*
 * NAME Taxonomy for POSTTYPE
 */
function create_taxonomy_name() {

  $labels = array(
    'name'                       => _x( 'NAME', 'NAME General Name', 'imaga' ),
    'singular_name'              => _x( 'NAME', 'NAME Singular Name', 'imaga' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );

  // Registering the taxonomy
  register_taxonomy( 'name', array( 'posttype' ), $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_taxonomy_name' );
