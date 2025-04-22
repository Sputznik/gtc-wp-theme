<?php

// CREATES META FIELD
add_filter( 'orbit_meta_box_vars', function( $meta_box ){

  $meta_box['post'] = array(
    array(
			'id'			=> 'gtc-post-metafield',
			'title'		=> 'Additional Information',
			'fields'	=> array(
        'subtitle'	=> array(
          'type' => 'text',
          'text' => 'Subtitle'
        ),
        'pdf_link'	=> array(
					'type' => 'text',
					'text' => 'PDF link'
				),
		'pdf_link_button_text'	=> array(
          'type' => 'text',
          'text' => 'PDF Link Button Text'
        ),
        'external_link'	=> array(
					'type' => 'text',
					'text' => 'External link'
		),
		'external_link_button_text'	=> array(
          'type' => 'text',
          'text' => 'External Link Button Text'
        ),
			)
		),
	);

	return $meta_box;

});
