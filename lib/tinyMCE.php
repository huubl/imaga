<?php
/**
 * Custom TinyMCE fields
 */
namespace IMAGA\Theme\TinyMCE;

use IMAGA\Theme\Assets;


add_action( 'init', __NAMESPACE__ . '\\tiny_mce_new_buttons' );

function tiny_mce_new_buttons() {
  add_filter( 'mce_external_plugins', __NAMESPACE__ . '\\myplugin_register_tinymce_javascript' );
  add_filter( 'mce_buttons', __NAMESPACE__ . '\\myplugin_register_buttons' );
}


// add new buttons
function myplugin_register_buttons( $buttons ) {
  $newBtns = array(
    'myblockquotebtn'
  );
  $buttons = array_merge( $buttons, $newBtns );
  return $buttons;
}


// Load the TinyMCE plugin : editor_plugin.js (wp2.5)

function myplugin_register_tinymce_javascript( $plugin_array ) {
   $plugin_array['myplugin'] = Assets\asset_path('scripts/tinymce.js');
   return $plugin_array;
}


function my_mce_buttons_2( $buttons ) {
	/**
	 * Add in a core button that's disabled by default
	 */
	$buttons[] = 'superscript';
	$buttons[] = 'subscript';
	$buttons[] = 'myblockquotebtn';

	return $buttons;
}
add_filter( 'mce_buttons', __NAMESPACE__ . '\\my_mce_buttons_2' );
