<?

namespace IMAGA\Theme\Navigation;

use IMAGA\Theme\Navigation\Bootstrap_Walker;
use IMAGA\Theme\Navigation\Start_Depth;

use WP_Term;

function toggler( $target = 'primary_navigation' ){

  $html = '<button id="toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#' . $target . '" aria-controls="' . $target . '" aria-expanded="false" aria-label="' . __('Toggle navigation','imaga') . '">';
  $html .= '<div class="animated-toggler"><span></span><span></span><span></span><span></span></div>';
  $html .= '<div class="text">Menu</div>';
  $html .= '</button>';

  return $html;
}

function navigation( $theme_location = "primary_navigation", $container_id = "primary_navigation", $start_depth = 0, $depth = 2, $menu_class = "ml-auto nav navbar-nav", $container_class = "collapse navbar-collapse navbar-toggle" ){
  return wp_nav_menu(
    array(
      'theme_location'    => $theme_location,
      'start_depth'       => $start_depth,
      'depth'             => $depth,
      'container'         => 'div',
      'container_class'   => $container_class,
      'container_id'      => $container_id,
      'menu_class'        => $menu_class,
    )
  );
}

function navigation_inline( $theme_location = "theme_location", $menu_id = "menu_id", $menu_class = "menu_class"){
  return wp_nav_menu(
    array(
      'theme_location'    => $theme_location,
      'container'         => FALSE,
      'container_class'   => FALSE,
      'container_id'      => FALSE,
      'menu_class'        => 'nav-inline '.$menu_class,
      'menu_id'           => $menu_id,
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
    )
	);
}

function navigation_list( $theme_location = "theme_location", $menu_id = "menu_id", $menu_class = "menu_class"){
  return wp_nav_menu(
    array(
      'theme_location'    => $theme_location,
      'container'         => FALSE,
      'container_class'   => FALSE,
      'container_id'      => FALSE,
      'menu_class'        => 'nav flex-column '.$menu_class,
      'menu_id'           => $menu_id,
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new Bootstrap_Walker\WP_Bootstrap_Navwalker()
    )
	);
}
