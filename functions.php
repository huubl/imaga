<?
$files = [
  'lib/setup.php',                        // Theme setup
  'lib/updater.php',                      // Theme Updater
  'lib/integrations/wpsvg.php',           // WPSVG
  'lib/integrations/version-info.php',    // Version Info
  'lib/shortcodes.php',                   // Theme shortcodes
  'lib/navigation.php',                   // Navigation Functions
  'lib/navigation/bootstrap_walker.php',  // Navigation Bootstrap Walker
  'lib/navigation/start_depth.php',       // Navigation Start Depth
  'lib/tgmpa.php',                        // TGM Plugin Activation
  'lib/plugins.php',                      // Required plugins
  'lib/assets.php',                       // Scripts and stylesheets
  'lib/extras.php',                       // Custom functions
  'lib/titles.php',                       // Page titles
  'lib/wrapper.php',                      // Theme wrapper class
  'lib/customizer.php',                   // Theme customizer
  'lib/posttypes/brands.php',             // Custom Post Type Brands
  'lib/posttypes/employees.php',          // Custom Post Type Employees
  'lib/posttypes/reviews.php',            // Custom Post Type Reviews
  'lib/posttypes/work.php',               // Custom Post Type Cases/Work
  'lib/posttypes/products.php',           // Custom Post Type Products
  'lib/taxonomies/employees-skills.php',  // Custom Taxonomy Skills
  'lib/taxonomies/work-categories.php',   // Custom Taxonomy Categories
];

foreach ($files as $file):
  if (!$filepath = locate_template($file)):
    trigger_error(sprintf(__('Error locating %s for inclusion', 'imaga'), $file), E_USER_ERROR);
  endif;
  require_once $filepath;
endforeach;
unset($file, $filepath);


// Init updater
$puc = Puc_v4_Factory::buildUpdateChecker( 'https://github.com/STUDIO-IMAGA/imaga', __FILE__, 'imaga' );

$puc->getVcsApi()->enableReleaseAssets();

// Define Google Fonts
define("GOOGLE_FONTS", "Open Sans");

// Define Google Maps API key
// https://developers.google.com/maps/documentation/javascript/get-api-key
define("GOOGLE_MAPS_API", "AIzaSyB5QTXactMQKDZThuga9XwRtr5r1TC3fTs");

// Activate ACF 5 beta
define('ACF_EARLY_ACCESS', '5');
