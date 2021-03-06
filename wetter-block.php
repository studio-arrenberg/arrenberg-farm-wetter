<?php

add_action('init', 'acf_init_arrenberg_weather_block');
function acf_init_arrenberg_weather_block() {
	
	// wetter block
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'arrenberg-wetter',
			'title'				=> __('Arrenberg Wetter'),
			'description'		=> __('Das Wetter am Arrenberg'),
			'render_callback'	=> 'wetter_block_render_callback',
			'category'			=> 'common', //  quartiersplattform
			'icon'				=> 'cloud',
			'keywords'			=> array( 'wetter', 'arrenberg', 'farm' ),
		));
	}
}


function wetter_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( __DIR__ . "/classes/arrenberg_wetter-helper.php" ) ) {
		include( __DIR__ . "/classes/arrenberg_wetter-helper.php" );
	}

}


?>