<?php
/**
 * jedu Theme Customizer
 *
 * @package jedu
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer. 
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function j_education_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'j_education_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'j_education_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'j_education_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function j_education_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function j_education_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function j_education_customize_preview_js() {
	wp_enqueue_script( 'j-education-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'j_education_customize_preview_js' );
