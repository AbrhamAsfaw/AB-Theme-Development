<?php
/**
 * ABwp Theme Customizer
 *
 * @package ABwp
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ABwp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	// Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'ABwp'),
      'description' => sprintf(__('Options for showcase','ABwp')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/assets/images/3.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'ABwp'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));


    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'ABwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'ABwp'),
      'section' => 'showcase',
      'priority'  => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'ABwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'ABwp'),
      'section' => 'showcase',
      'priority'  => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://test.com', 'ABwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'ABwp'),
      'section' => 'showcase',
      'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'ABwp'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'ABwp'),
      'section' => 'showcase',
      'priority'  => 5
    ));
    
    $wp_customize->add_setting('abwp_nav_color', array(
      'default' => '#0062CCD9',
      'transport'  => 'refresh',
    ));
    $wp_customize->add_section('abwp_standard_colors', array(
      'title' => __('Standard Colors', 'ABwp'),
      'priority' => 30,
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'abwp_nav_color_control', array(

      'label' => __('Header and Footer Background Color', 'ABwp'),
      'section' => 'abwp_standard_colors',
      'settings' => 'abwp_nav_color',

    ) ));

    $wp_customize->add_setting('abwp_link_color', array(
      'default' => '#25274d',
      'transport'  => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'abwp_link_color_control', array(

      'label' => __('Link Color', 'ABwp'),
      'section' => 'abwp_standard_colors',
      'settings' => 'abwp_link_color',

    ) ));

    $wp_customize->add_setting('abwp_btn_color', array(
      'default' => '#ecf0f1',
      'transport'  => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'abwp_btn_color_control', array(

      'label' => __('Button Hover Color', 'ABwp'),
      'section' => 'abwp_standard_colors',
      'settings' => 'abwp_btn_color',

    ) ));

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ABwp_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ABwp_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'ABwp_customize_register' );



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ABwp_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ABwp_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ABwp_customize_preview_js() {
	wp_enqueue_script( 'ABwp-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ABwp_customize_preview_js' );
