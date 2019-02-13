<?
/**
 * Theme Plugins
 */

add_action( 'after_setup_theme', function() {

    $plugins = array(
      array(
  			'name'               => 'Yoast SEO',
  			'slug'               => 'wordpress-seo',
        'required'           => true,
		  ),
      array(
  			'name'               => 'ACF Content Analysis for Yoast SEO',
  			'slug'               => 'acf-content-analysis-for-yoast-seo',
        'required'           => true,
		  ),
      array(
  			'name'               => 'Advanced Custom Fields: Star Rating',
  			'slug'               => 'acf-star-rating',
  			'source'             => 'https://github.com/kevdotbadger/acf-star-rating/archive/master.zip',
        'required'           => true,
		  ),
      array(
        'name'               => 'Fast Velocity Minify',
        'slug'               => 'fast-velocity-minify',
        'required'           => true,
      ),
    );

    $config = array(
        'id'           => 'imaga',
        'default_path' => get_template_directory() . '/lib/plugins',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => true,
    );

    tgmpa( $plugins, $config );
});
