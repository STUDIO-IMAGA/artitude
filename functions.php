<?
$files = [
  'lib/setup.php',                        // Theme setup

  'lib/integrations/wpsvg.php',           // WPSVG
  'lib/integrations/version-info.php',    // Version Info
  'lib/integrations/tgmpa.php',           // TGM Plugin Activation
  'lib/integrations/acf.php',             // Advanced Custom Fields

  'lib/nags.php',                         // Disable nags
  'lib/shortcodes.php',                   // Theme shortcodes
  'lib/navigation.php',                   // Navigation Functions
  'lib/navigation/bootstrap_walker.php',  // Navigation Bootstrap Walker
  'lib/navigation/start_depth.php',       // Navigation Start Depth
  'lib/plugins.php',                      // Required plugins
  'lib/assets.php',                       // Scripts and stylesheets
  'lib/extras.php',                       // Custom functions
  'lib/titles.php',                       // Page titles
  'lib/wrapper.php',                      // Theme wrapper class
  'lib/customizer.php',                   // Theme customizer

  // 'lib/posttypes/projecten.php',
];

foreach ($files as $file):

  if (!$filepath = locate_template($file)):

    trigger_error(sprintf(__('Error locating %s for inclusion', 'imaga'), $file), E_USER_ERROR);

  endif;

  require_once $filepath;

endforeach;

unset($file, $filepath);
