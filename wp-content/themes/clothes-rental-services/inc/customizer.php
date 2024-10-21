<?php
/**
 * Clothes Rental Services: Customizer
 *
 * @subpackage Clothes Rental Services
 * @since 1.0
 */

use WPTRT\Customize\Section\Luzuk_Clothes_Rental_Services_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Luzuk_Clothes_Rental_Services_Button::class );

	$manager->add_section(
		new Luzuk_Clothes_Rental_Services_Button( $manager, 'luzuk_clothes_rental_services_pro', [
			'title' => __( 'Clothes Rental Services Pro', 'clothes-rental-services' ),
			'priority' => 0,
			'button_text' => __( 'Go Pro', 'clothes-rental-services' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/clothes-rental-services-wp-theme/', 'clothes-rental-services')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'clothes-rental-services-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'clothes-rental-services-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function luzuk_clothes_rental_services_customize_register( $wp_customize ) {

	$wp_customize->add_setting('luzuk_clothes_rental_services_logo_size',array(
		'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_float'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_logo_size',array(
		'type' => 'range',
		'label' => __('Logo Size','clothes-rental-services'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_logo_padding',array(
		'label' => __('Logo Margin','clothes-rental-services'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_float'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','clothes-rental-services'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_float'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','clothes-rental-services'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_float'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','clothes-rental-services'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_float'
 	));
 	$wp_customize->add_control('luzuk_clothes_rental_services_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','clothes-rental-services'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('luzuk_clothes_rental_services_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_checkbox'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','clothes-rental-services'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_site_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_site_title_color', array(
		'label' => 'Title Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('luzuk_clothes_rental_services_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_checkbox'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','clothes-rental-services'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_site_tagline_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_site_tagline_color', array(
		'label' => 'Tagline Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'luzuk_clothes_rental_services_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'clothes-rental-services' ),
		'description' => __( 'Description of what this panel does.', 'clothes-rental-services' ),
	) );

	$wp_customize->add_section( 'luzuk_clothes_rental_services_theme_options_section', array(
    	'title'      => __( 'General Settings', 'clothes-rental-services' ),
		'priority'   => 30,
		'panel' => 'luzuk_clothes_rental_services_panel_id'
	) );

	$wp_customize->add_setting('luzuk_clothes_rental_services_theme_options',array(
		'default' => 'One Column',
		'sanitize_callback' => 'luzuk_clothes_rental_services_sanitize_choices'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','clothes-rental-services'),
		'section' => 'luzuk_clothes_rental_services_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','clothes-rental-services'),
		   'Right Sidebar' => __('Right Sidebar','clothes-rental-services'),
		   'One Column' => __('One Column','clothes-rental-services'),
		   'Grid Layout' => __('Grid Layout','clothes-rental-services')
		),
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'luzuk_clothes_rental_services_sanitize_choices'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','clothes-rental-services'),
        'section' => 'luzuk_clothes_rental_services_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','clothes-rental-services'),
            'Right Sidebar' => __('Right Sidebar','clothes-rental-services'),
            'One Column' => __('One Column','clothes-rental-services')
        ),
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'luzuk_clothes_rental_services_sanitize_choices'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','clothes-rental-services'),
        'section' => 'luzuk_clothes_rental_services_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','clothes-rental-services'),
            'Right Sidebar' => __('Right Sidebar','clothes-rental-services'),
            'One Column' => __('One Column','clothes-rental-services')
        ),
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_archive_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'luzuk_clothes_rental_services_sanitize_choices'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','clothes-rental-services'),
        'section' => 'luzuk_clothes_rental_services_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','clothes-rental-services'),
            'Right Sidebar' => __('Right Sidebar','clothes-rental-services'),
            'One Column' => __('One Column','clothes-rental-services'),
            'Grid Layout' => __('Grid Layout','clothes-rental-services')
        ),
	));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_boxfull_width', array(
		'default'           => '',
		'sanitize_callback' => 'luzuk_clothes_rental_services_sanitize_choices'
	));
	
	$wp_customize->add_control( 'luzuk_clothes_rental_services_boxfull_width', array(
		'label'    => __( 'Section Width', 'clothes-rental-services' ),
		'section'  => 'luzuk_clothes_rental_services_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'container'  => __('Box Width', 'clothes-rental-services'),
			'container-fluid' => __('Full Width', 'clothes-rental-services'),
			'none' => __('None', 'clothes-rental-services')
		),
	));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_dropdown_anim', array(
		'default'           => 'None',
		'sanitize_callback' => 'luzuk_clothes_rental_services_sanitize_choices'
	));
	$wp_customize->add_control( 'luzuk_clothes_rental_services_dropdown_anim', array(
		'label'    => __( 'Menu Dropdown Animations', 'clothes-rental-services' ),
		'section'  => 'luzuk_clothes_rental_services_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInUp'  => __('bounceInUp', 'clothes-rental-services'),
			'fadeInUp' => __('fadeInUp', 'clothes-rental-services'),
			'zoomIn'    => __('zoomIn', 'clothes-rental-services'),
			'None'    => __('None', 'clothes-rental-services')
		),
	));

	//Header
	$wp_customize->add_section( 'luzuk_clothes_rental_services_header' , array(
    	'title'    => __( 'Header Settings', 'clothes-rental-services' ),
		'priority' => null,
		'panel' => 'luzuk_clothes_rental_services_panel_id'
	) );


	$wp_customize->add_setting('luzuk_clothes_rental_header_twittericonlink',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_header_twittericonlink',array(
	   	'type' => 'text',
	   	'label' => __('Twitter Icon Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_header',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_header_instagramiconlink',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_header_instagramiconlink',array(
	   	'type' => 'text',
	   	'label' => __('Instagram Icon Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_header',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_header_facebookiconlink',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_header_facebookiconlink',array(
	   	'type' => 'text',
	   	'label' => __('Facebook Icon Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_header',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_header_pinteresticonlink',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_header_pinteresticonlink',array(
	   	'type' => 'text',
	   	'label' => __('Pinterest Icon Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_header',
	));
	
	$wp_customize->add_setting( 'luzuk_clothes_rental_services_headermenubg_col', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_headermenubg_col', array(
		'label' => 'Menu BG Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_menu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_menu_color', array(
		'label' => 'Menu Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_menuhover_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_menuhover_color', array(
		'label' => 'Menu Hover Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));


	$wp_customize->add_setting( 'luzuk_clothes_rental_services_submenu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_submenu_color', array(
		'label' => 'Submenu Text Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_submenubg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_submenubg_color', array(
		'label' => 'Submenu BG Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_socialicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_socialicon_color', array(
		'label' => 'Social Icon Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_socialiconhrv_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_socialiconhrv_color', array(
		'label' => 'Social Icon Hover Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_headersearchbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_headersearchbg_color', array(
		'label' => 'Search BG Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_headersearchicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_headersearchicon_color', array(
		'label' => 'Search Icon Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_searchtext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_searchtext_color', array(
		'label' => 'Search Text Color',
		'section' => 'luzuk_clothes_rental_services_header',
	)));


	//home page slider
	$wp_customize->add_section( 'luzuk_clothes_rental_services_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'clothes-rental-services' ),
		'description'=> __('<b>Note :</b> Please Add Image in 750*700 Ratio.','clothes-rental-services'),
		'priority' => null,
		'panel' => 'luzuk_clothes_rental_services_panel_id'
	) );

	$wp_customize->add_setting('luzuk_clothes_rental_services_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_checkbox'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_slider_section',
	));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_effect', array(
		'default'           => '',
		'sanitize_callback' => 'luzuk_clothes_rental_services_sanitize_choices'
	));
	$wp_customize->add_control( 'luzuk_clothes_rental_services_slider_effect', array(
		'label'    => __( 'Onload Transactions Effects', 'clothes-rental-services' ),
		'section'  => 'luzuk_clothes_rental_services_slider_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInLeft'  => __('bounceInLeft', 'clothes-rental-services'),
			'bounceInRight' => __('bounceInRight', 'clothes-rental-services'),
			'bounceInUp'    => __('bounceInUp', 'clothes-rental-services'),
			'bounceInDown'    => __('bounceInDown', 'clothes-rental-services'),
			'zoomIn'  => __('zoomIn', 'clothes-rental-services'),
			'zoomOut' => __('zoomOut', 'clothes-rental-services'),
			'fadeInDown'    => __('fadeInDown', 'clothes-rental-services'),
			'fadeInUp'    => __('fadeInUp', 'clothes-rental-services'),
			'fadeInLeft'  => __('fadeInLeft', 'clothes-rental-services'),
			'fadeInRight' => __('fadeInRight', 'clothes-rental-services'),
			'flip-up'    => __('flip-up', 'clothes-rental-services'),
			'none'    => __('none', 'clothes-rental-services')
		),
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'luzuk_clothes_rental_services_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'luzuk_clothes_rental_services_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'clothes-rental-services' ),
			'section' => 'luzuk_clothes_rental_services_slider_section',
			'type' => 'dropdown-pages'
		));
	}


	$wp_customize->add_setting('luzuk_clothes_rental_services_slider_excerpt_length',array(
		'default' => '15',
		'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_float'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Description Excerpt Length','clothes-rental-services'),
		'section' => 'luzuk_clothes_rental_services_slider_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_sliderheading',array(
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_sliderheading',array(
	   	'type' => 'text',
	   	'label' => __('Heading','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_slider_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_sliderbtntext',array(
    	'default' => 'SHOP NOW!',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_sliderbtntext',array(
	   	'type' => 'text',
	   	'label' => __('Button Text','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_slider_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_sliderbtnlink',array(
    	'default' => '#',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('luzuk_clothes_rental_services_sliderbtnlink',array(
	   	'type' => 'url',
	   	'label' => __('Button Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_slider_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_slider_offernumber',array(
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_slider_offernumber',array(
	   	'type' => 'text',
	   	'label' => __('Offer Number','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_slider_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_slider_offerroundtext',array(
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_slider_offerroundtext',array(
	   	'type' => 'text',
	   	'label' => __('Offer Round text','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_slider_section',
	));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_bg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_bg_color', array(
		'label' => 'BG Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_bgwave_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_bgwave_color', array(
		'label' => 'Wave BG Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_heading_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_heading_color', array(
		'label' => 'Heading Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_title_color', array(
		'label' => 'Title Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));
	

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_description_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_description_color', array(
		'label' => 'Description Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_btntext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_btntext_color', array(
		'label' => 'Button Text Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_btnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_btnbg_color', array(
		'label' => 'Button BG Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_btntexthrv_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_btntexthrv_color', array(
		'label' => 'Button Hover Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_btnbghrv_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_btnbghrv_color', array(
		'label' => 'Button BG Hover Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_pagination_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_pagination_color', array(
		'label' => 'Pagination Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_offternumber_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_offternumber_color', array(
		'label' => 'Offer Text Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_slider_offetbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_slider_offetbg_color', array(
		'label' => 'Offer BG Color',
		'section' => 'luzuk_clothes_rental_services_slider_section',
	)));


	//Aboutus Section
	$wp_customize->add_section('luzuk_clothes_rental_services_aboutus_section',array(
		'title'	=> __('Aboutus Settings','clothes-rental-services'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','clothes-rental-services'),
		'panel' => 'luzuk_clothes_rental_services_panel_id',
	));

	$wp_customize->add_setting(
    	'luzuk_clothes_rental_services_aboutus_leftimage1',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'luzuk_clothes_rental_services_aboutus_leftimage1',
	        array(
			    'label'   		=> __('Left Image 1','clothes-rental-services'),
				'description'   		=> __('Image size 322*491','clothes-rental-services'),
	            'section' => 'luzuk_clothes_rental_services_aboutus_section',
	            'settings' => 'luzuk_clothes_rental_services_aboutus_leftimage1',
	        )
	    )
	);

	$wp_customize->add_setting(
    	'luzuk_clothes_rental_services_aboutus_leftimage2',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'luzuk_clothes_rental_services_aboutus_leftimage2',
	        array(
			    'label'   		=> __('Left Image 2','clothes-rental-services'),
				'description'   		=> __('Image size 286*438','clothes-rental-services'),
	            'section' => 'luzuk_clothes_rental_services_aboutus_section',
	            'settings' => 'luzuk_clothes_rental_services_aboutus_leftimage2',
	        )
	    )
	);
	
	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusimg1heading',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusimg1heading',array(
	   	'type' => 'text',
	   	'label' => __('Image 1 Heading','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusimg2heading',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusimg2heading',array(
	   	'type' => 'text',
	   	'label' => __('Image 2 Heading','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusimg2twittericonlink',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusimg2twittericonlink',array(
	   	'type' => 'text',
	   	'label' => __('Twitter Icon Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusimg2instaiconlink',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusimg2instaiconlink',array(
	   	'type' => 'text',
	   	'label' => __('Instagram Icon Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusimg2fbiconlink',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusimg2fbiconlink',array(
	   	'type' => 'text',
	   	'label' => __('Facebook Icon Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutustitle',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutustitle',array(
	   	'type' => 'text',
	   	'label' => __('Title','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusdescription1',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusdescription1',array(
	   	'type' => 'text',
	   	'label' => __('Description','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));


	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutuslist1',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutuslist1',array(
	   	'type' => 'text',
	   	'label' => __('List 1 Text','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutuslist2',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutuslist2',array(
	   	'type' => 'text',
	   	'label' => __('List 2 Text','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutuslist3',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutuslist3',array(
	   	'type' => 'text',
	   	'label' => __('List 3 Text','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutuslist4',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutuslist4',array(
	   	'type' => 'text',
	   	'label' => __('List 4 Text','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusbox1icon',array(
    	'default' => 'fas fa-truck',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusbox1icon',array(
	   	'type' => 'text',
	   	'label' => __('Box 1 Icon','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusbox1heading',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusbox1heading',array(
	   	'type' => 'text',
	   	'label' => __('Box 1 Heading','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusbox1description',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusbox1description',array(
	   	'type' => 'text',
	   	'label' => __('Box 1 Description','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusbox2icon',array(
    	'default' => 'fas fa-truck',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusbox2icon',array(
	   	'type' => 'text',
	   	'label' => __('Box 2 Icon','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusbox2heading',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusbox2heading',array(
	   	'type' => 'text',
	   	'label' => __('Box 2 Heading','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutusbox2description',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutusbox2description',array(
	   	'type' => 'text',
	   	'label' => __('Box 2 Description','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));


	$wp_customize->add_setting('luzuk_clothes_rental_services_aboutus_btnlink',array(
    	'default' => '#',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_aboutus_btnlink',array(
	   	'type' => 'text',
	   	'label' => __('Button Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_aboutus_section',
	));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusimg1heading_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusimg1heading_color', array(
		'label' => 'Image 1 Heading Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusimg2heading_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusimg2heading_color', array(
		'label' => 'Image 2 Heading Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutussocialicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutussocialicon_color', array(
		'label' => 'Social Icons Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutustitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutustitle_color', array(
		'label' => 'Title Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusdescription_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusdescription_color', array(
		'label' => 'Description Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutuslists_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutuslists_color', array(
		'label' => 'Lists Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutuslistsicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutuslistsicon_color', array(
		'label' => 'Lists Icon Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusboxicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusboxicon_color', array(
		'label' => 'Box Icon Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusboxtitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusboxtitle_color', array(
		'label' => 'Box Title Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusboxdescription_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusboxdescription_color', array(
		'label' => 'Box Description Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));
	

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusbtntext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusbtntext_color', array(
		'label' => 'Button Text Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusbtnbg_color', array(
		'label' => 'Button BG Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusbtntexthrv_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusbtntexthrv_color', array(
		'label' => 'Button Text Hover Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));
	
	$wp_customize->add_setting( 'luzuk_clothes_rental_services_aboutusbtnbghrv_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_aboutusbtnbghrv_color', array(
		'label' => 'Button BG Hover Color',
		'section' => 'luzuk_clothes_rental_services_aboutus_section',
	)));


	//newarrival Section
	$wp_customize->add_section('luzuk_clothes_rental_services_newarrival_section',array(
		'title'	=> __('New Arrival Settings','clothes-rental-services'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','clothes-rental-services'),
		'panel' => 'luzuk_clothes_rental_services_panel_id',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_newarrival_heading',array(
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_newarrival_heading',array(
	   	'type' => 'text',
	   	'label' => __('Heading','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_newarrival_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_newarrival_subheading',array(
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_newarrival_subheading',array(
	   	'type' => 'text',
	   	'label' => __('Sub Heading','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_newarrival_section',
	));

	$wp_customize->add_setting('luzuk_clothes_rental_services_newarrival_viewmorebtnlink',array(
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('luzuk_clothes_rental_services_newarrival_viewmorebtnlink',array(
	   	'type' => 'text',
	   	'label' => __('View More Button Link','clothes-rental-services'),
	   	'section' => 'luzuk_clothes_rental_services_newarrival_section',
	));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalheading_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalheading_color', array(
		'label' => 'Heading Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalheadingbrd_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalheadingbrd_color', array(
		'label' => 'Heading Border Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalsubheading_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalsubheading_color', array(
		'label' => 'Sub Heading Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalproducttitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalproducttitle_color', array(
		'label' => 'Product Title Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalproducttitlehrv_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalproducttitlehrv_color', array(
		'label' => 'Product Title Hover Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalproductprice_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalproductprice_color', array(
		'label' => 'Product Price Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalproductbtntext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalproductbtntext_color', array(
		'label' => 'Product Button Text Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalproductbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalproductbtnbg_color', array(
		'label' => 'Product Button BG Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalproductbtntexthrv_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalproductbtntexthrv_color', array(
		'label' => 'Product Button Text Hover Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalviewmorebtntext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalviewmorebtntext_color', array(
		'label' => 'View More Button Text Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_newarrivalviewmorebtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_newarrivalviewmorebtnbg_color', array(
		'label' => 'View More Button BG Color',
		'section' => 'luzuk_clothes_rental_services_newarrival_section',
	)));


	//Footer
    $wp_customize->add_section( 'luzuk_clothes_rental_services_footer', array(
    	'title'  => __( 'Footer Settings', 'clothes-rental-services' ),
		'priority' => null,
		'panel' => 'luzuk_clothes_rental_services_panel_id'
	) );

	$wp_customize->add_setting('luzuk_clothes_rental_services_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'luzuk_clothes_rental_services_sanitize_checkbox'
    ));
    $wp_customize->add_control('luzuk_clothes_rental_services_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','clothes-rental-services'),
       'section' => 'luzuk_clothes_rental_services_footer'
    ));

    $wp_customize->add_setting('luzuk_clothes_rental_services_footer_copy',array(
		'default' => 'Clothes Rental Services WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('luzuk_clothes_rental_services_footer_copy',array(
		'label'	=> __('Copyright Text','clothes-rental-services'),
		'section' => 'luzuk_clothes_rental_services_footer',
		'setting' => 'luzuk_clothes_rental_services_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_footertext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_footertext_color', array(
		'label' => 'Text Color',
		'section' => 'luzuk_clothes_rental_services_footer',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_footerbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_footerbg_color', array(
		'label' => 'BG Color',
		'section' => 'luzuk_clothes_rental_services_footer',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_footercopyright_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_footercopyright_color', array(
		'label' => 'Copyright Color',
		'section' => 'luzuk_clothes_rental_services_footer',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_footerscrolltotoptext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_footerscrolltotoptext_color', array(
		'label' => 'Scroll To Top Text Color',
		'section' => 'luzuk_clothes_rental_services_footer',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_footerscrolltotopbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_footerscrolltotopbg_color', array(
		'label' => 'Scroll To Top BG Color',
		'section' => 'luzuk_clothes_rental_services_footer',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_footerscrolltotoptexthover_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_footerscrolltotoptexthover_color', array(
		'label' => 'Scroll To Top Text Hover Color',
		'section' => 'luzuk_clothes_rental_services_footer',
	)));

	$wp_customize->add_setting( 'luzuk_clothes_rental_services_footerscrolltotophover_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'luzuk_clothes_rental_services_footerscrolltotophover_color', array(
		'label' => 'Scroll To Top Hover Color',
		'section' => 'luzuk_clothes_rental_services_footer',
	)));




	

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'luzuk_clothes_rental_services_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'luzuk_clothes_rental_services_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'luzuk_clothes_rental_services_customize_register' );

function luzuk_clothes_rental_services_customize_partial_blogname() {
	bloginfo( 'name' );
}

function luzuk_clothes_rental_services_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if (class_exists('WP_Customize_Control')) {

   	class Luzuk_Clothes_Rental_Services_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="clothes-rental-services-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="clothes-rental-services-icon-list clearfix">
	                <?php
	                $luzuk_clothes_rental_services_font_awesome_icon_array = luzuk_clothes_rental_services_font_awesome_icon_array();
	                foreach ($luzuk_clothes_rental_services_font_awesome_icon_array as $luzuk_clothes_rental_services_font_awesome_icon) {
	                   $icon_class = $this->value() == $luzuk_clothes_rental_services_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($luzuk_clothes_rental_services_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function luzuk_clothes_rental_services_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'luzuk_clothes_rental_services_customizer_script' );