<?php
/*
	Widget Name: GTC Explainers Content
	Description: Explainers post content.
	Author: Stephen Anil, Sputznik
	Author URI:	https://sputznik.com
	Widget URI:
	Video URI:
*/
class GTC_Explainers_Content extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'gtc-explainers-content',
			// The name of the widget for display purposes.
			__('GTC Explainers Content', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Explainers post content.'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'produced_by' => array(
					'type' => 'tinymce',
					'label' => __( 'Produced by', 'siteorigin-widgets' ),
					'default' => '',
					'rows' => 10,
					'default_editor' => 'tinymce'
				),
				'written_by' => array(
					'type' => 'tinymce',
					'label' => __( 'Written by', 'siteorigin-widgets' ),
					'default' => '',
					'rows' => 10,
					'default_editor' => 'tinymce'
				),
				'republished_by' => array(
					'type' => 'tinymce',
					'label' => __( 'Republished by', 'siteorigin-widgets' ),
					'default' => '',
					'rows' => 10,
					'default_editor' => 'tinymce'
				),
				'logos' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Logos' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
					'fields' => array(
						'site_url' => array(
							'type' 			=> 'text',
							'label' 		=> __( 'Site URL', 'siteorigin-widgets' ),
							'default' 	=> '',
						),
						'site_logo' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Site Logo', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
					)
				),

			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/gtc-explainers-content"
		);
	}

	function get_template_name($instance) {
		return 'template';
	}
	function get_template_dir($instance) {
		return 'templates';
	}
  function get_style_name($instance) {
      return '';
  }
}
siteorigin_widget_register('gtc-explainers-content', __FILE__, 'GTC_Explainers_Content');
