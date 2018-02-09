<?php
/**
 * Advanced Custom Fields
 */
namespace Roots\Sage\Fields;

$layouts = [
	'lib/fields/cards.php',
];
foreach ( $layouts as $layout ) {
	if ( ! $filepath = locate_template( $layout ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'sage' ), $layout ), E_USER_ERROR );
	}
	require_once $filepath;
}
unset( $layout, $filepath );

add_action('acf/init', function(){

  if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array(
    	'key' => 'group_layouts',
    	'title' => 'Layouts',
    	'fields' => array(
    		array(
    			'key' => 'field_layouts',
    			'label' => 'Layouts',
    			'name' => 'layouts',
    			'type' => 'flexible_content',
    			'instructions' => '',
    			'layouts' => array(


            //TODO: Een array functie maken zodat je met iets van $array('cards','columns') dit kan automatiseren.
            // Samen voegen met $layouts[].
            /*====== Cards ======*/
            'layout_cards' => array(
              'key' => 'layout_cards',
              'name' => 'cards',
              'label' => __('Cards'),
              'display' => 'block',
              'sub_fields' => array(
                array(
                  'key' => 'field_cards',
                  'label' => 'Clone Cards',
                  'name' => 'clone_cards',
                  'type' => 'clone',
                  'clone' => array(
                    0 => 'group_cards',
                  ),
                  'display' => 'seamless',
                  'layout' => 'block',
                ),
              ),
            ),

          ),
    			'button_label' => __('Voeg layout toe'),
    		),
    	),
    	'location' => array(
    		array(
    			array(
    				'param' => 'post_type',
    				'operator' => '==',
    				'value' => 'page',
    			),
    		),
    	),
    	'menu_order' => 0,
    	'position' => 'normal',
    	'style' => 'seamless',
    	'label_placement' => 'top',
    	'instruction_placement' => 'label',
    	'active' => 1,
    ));
  endif;
});
