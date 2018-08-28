<?

namespace IMAGA\Theme\Shortcodes;

/**
 * Font Awesome Chevron Circle shortcodes
 */
add_shortcode( 'chevron', function($atts){
  return '<i class="ml-2 fa fa-chevron-circle-' . $atts['type'] . '"></i>';
});
add_shortcode( 'chevron-left', function($atts){
  return '<i class="ml-2 fa fa-chevron-circle-left"></i>';
});
add_shortcode( 'chevron-right', function($atts){
  return '<i class="ml-2 fa fa-chevron-circle-right"></i>';
});

/**
 * Font Awesome Checkmark shortcode
 */
add_shortcode( 'checkmark', function($atts){
  return '<i class="fa fa-check"></i>';
});

/**
 * Bootstrap Button shortcode
 */
add_shortcode( 'button', function($atts, $content = null){
  return '<a class="btn btn-' . $atts['color'] . ' ' . $atts['extra'] . '" href="' . $atts['url'] . '">' . do_shortcode($content) . '</a>';
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
  return '<li class="display-2">' . do_shortcode($content) . '</li>';
});
});
