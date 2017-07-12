<?php

/**
 * Initialize the custom Theme Options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.3.0
 */
function custom_theme_options() {

	/* OptionTree is not loaded yet */
	if ( !function_exists( 'ot_settings_id' ) )
		return false;

	/**
	 * Get a copy of the saved settings array. 
	 */
	$saved_settings = get_option( ot_settings_id(), array() );

	/**
	 * Custom settings array that will eventually be 
	 * passes to the OptionTree Settings API Class.
	 */
	// Set up array to hold x CTA button details
	$cta_array = array();
	for ( $x = 1; $x < 5; $x++ ) {
		$cta_array[] = array(
			'id' => "homepage_cta" . $x . "_tab",
			'label' => __( 'Action ' . $x, 'victims-commissioner' ),
			'type' => 'tab',
			'section' => 'homepage_actions'
		);
		$cta_array[] = array(
			'id' => "homepage_cta" . $x . "_icon",
			'label' => __( 'Icon', 'victims-commissioner' ),
			'type' => 'text',
			'section' => 'homepage_actions'
		);
		$cta_array[] = array(
			'id' => "homepage_cta" . $x . "_text",
			'label' => __( 'Text', 'victims-commissioner' ),
			'type' => 'text',
			'section' => 'homepage_actions'
		);
		$cta_array[] = array(
			'id' => "homepage_cta" . $x . "_target",
			'label' => __( 'Target', 'victims-commissioner' ),
			'type' => 'page-select',
			'section' => 'homepage_actions'
		);
	}
	// Set up array to hold x external link details
	/*
	$link_array = array();
	for ( $x = 1; $x < 6; $x++ ) {
		$link_array[] = array(
			'id' => "homepage_link" . $x . "_tab",
			'label' => __( 'External link ' . $x, 'victims-commissioner' ),
			'type' => 'tab',
			'section' => 'homepage_links'
		);
		$link_array[] = array(
			'id' => "homepage_link" . $x . "_text",
			'label' => __( 'Text', 'victims-commissioner' ),
			'type' => 'text',
			'section' => 'homepage_links'
		);
		$link_array[] = array(
			'id' => "homepage_link" . $x . "_url",
			'label' => __( 'URL', 'victims-commissioner' ),
			'type' => 'text',
			'section' => 'homepage_links'
		);
	} */
	// Main settings array
	$custom_settings = array(
		'sections' => array(
			array(
				'id' => 'homepage',
				'title' => 'Homepage'
			),
			array(
				'id' => 'homepage_actions',
				'title' => 'Homepage Actions'
			),
			/*
			array(
				'id' => 'homepage_links',
				'title' => 'Homepage Links'
			)
			*/
		),
		'settings' => array_merge(
				array(
			array(
				'id' => 'homepage_image_tab',
				'label' => __( 'Images', 'victims-commissioner' ),
				'type' => 'tab',
				'section' => 'homepage'
			),
			array(
				'id' => 'homepage-lead-image',
				'label' => 'Lead image',
				'desc' => 'The image featured at the top of the homepage',
				'type' => 'upload',
				'section' => 'homepage'
			),
			array(
				'id' => 'homepage-lead-video',
				'label' => 'Lead video',
				'desc' => 'The video featured at the top of the homepage',
				'type' => 'textarea-simple',
				'section' => 'homepage'
			),
			array(
				'id' => 'homepage-second-image',
				'label' => 'Second image',
				'desc' => 'The second image on the homepage',
				'type' => 'upload',
				'section' => 'homepage'
			),
			array(
				'id' => 'homepage-third-image',
				'label' => 'Third image',
				'desc' => 'The third image on the homepage',
				'type' => 'upload',
				'section' => 'homepage'
			),
			array(
				'id' => 'homepage_text_tab',
				'label' => __( 'Text', 'victims-commissioner' ),
				'type' => 'tab',
				'section' => 'homepage'
			),
			array(
				'id' => 'homepage-intro',
				'label' => 'Introduction',
				'type' => 'textarea',
				'section' => 'homepage'
			),
			array(
				'id' => 'homepage-about',
				'label' => 'About Baroness Newlove',
				'type' => 'textarea',
				'section' => 'homepage'
			)
				), array_values( $cta_array )/*, array_values( $link_array )*/
		)
	);

	/* allow settings to be filtered before saving */
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

	/* settings are not the same update the DB */
	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}

	/* Lets OptionTree know the UI Builder is being overridden */
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;
}
