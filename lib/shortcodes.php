<?

namespace IMAGA\Theme\Shortcodes;

/**
 * Font Awesome Chevron Circle shortcode
 */
add_shortcode( 'chevron', function($atts){
  return '<i class="ml-2 fa fa-chevron-circle-' . $atts['type'] . '"></i>';
});

/**
 * Bootstrap Button shortcode
 */
add_shortcode( 'button', function($atts){
  return '<a class="btn btn-' . $atts['color'] . '" href="' . $atts['url'] . '">' . $atts['title'] . '</a>';
});
