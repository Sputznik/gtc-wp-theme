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
        'external_link'	=> array(
					'type' => 'text',
					'text' => 'External link'
				)
			)
		)
	);

	return $meta_box;

});
