<?php
/**
 * VW Project Management   Theme Customizer
 *
 * @package VW Project Management  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_project_management_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_project_management_custom_controls' );

function vw_project_management_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'vw_project_management_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'vw_project_management_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'vw_project_management_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'vw-project-management' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'vw_project_management_menu_section' , array(
    	'title' => __( 'Menus Settings', 'vw-project-management' ),
		'panel' => 'vw_project_management_panel_id'
	) );

	$wp_customize->add_setting('vw_project_management_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_navigation_menu_font_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','vw-project-management'),
        'section' => 'vw_project_management_menu_section',
        'choices' => array(
        	'100' => __('100','vw-project-management'),
            '200' => __('200','vw-project-management'),
            '300' => __('300','vw-project-management'),
            '400' => __('400','vw-project-management'),
            '500' => __('500','vw-project-management'),
            '600' => __('600','vw-project-management'),
            '700' => __('700','vw-project-management'),
            '800' => __('800','vw-project-management'),
            '900' => __('900','vw-project-management'),
        ),
	) );

	$wp_customize->add_setting('vw_project_management_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_menus_item_style',array(
        'type' => 'select',
        'section' => 'vw_project_management_menu_section',
		'label' => __('Menu Item Hover Style','vw-project-management'),
		'choices' => array(
            'None' => __('None','vw-project-management'),
            'Zoom In' => __('Zoom In','vw-project-management'),
        ),
	) );

	$wp_customize->add_setting('vw_project_management_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_project_management_header_menus_color', array(
		'label'    => __('Menus Color', 'vw-project-management'),
		'section'  => 'vw_project_management_menu_section',
	)));

	$wp_customize->add_setting('vw_project_management_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_project_management_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'vw-project-management'),
		'section'  => 'vw_project_management_menu_section',
	)));

	$wp_customize->add_setting('vw_project_management_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_project_management_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'vw-project-management'),
		'section'  => 'vw_project_management_menu_section',
	)));

	$wp_customize->add_setting('vw_project_management_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_project_management_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'vw-project-management'),
		'section'  => 'vw_project_management_menu_section',
	)));

	// Header
	$wp_customize->add_section( 'vw_project_management_top_bar' , array(
    'title' => esc_html__( 'Header', 'vw-project-management' ),
		'panel' => 'vw_project_management_panel_id'
	) );

	$wp_customize->add_setting( 'vw_project_management_search_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_search_hide_show',array(
    'label' => esc_html__( 'Show / Hide Search','vw-project-management' ),
    'section' => 'vw_project_management_top_bar'
  )));

	$wp_customize->add_setting('vw_project_management_search_open_icon',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser($wp_customize,'vw_project_management_search_open_icon',array(
		'label'	=> __('Search Open Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_top_bar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('vw_project_management_search_close_icon',array(
		'default'	=> 'fa fa-window-close',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser($wp_customize,'vw_project_management_search_close_icon',array(
		'label'	=> __('Search Close Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_top_bar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('vw_project_management_topbar_button_label',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_topbar_button_label',array(
		'label' => esc_html__( 'Add Button Text', 'vw-project-management' ),
		'section' => 'vw_project_management_top_bar',
		'setting' => 'vw_project_management_topbar_button_label',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( 'Get Start', 'vw-project-management' ),
    ),
	));

	$wp_customize->add_setting('vw_project_management_header_btn_icon',array(
		'default' => 'fa-solid fa-arrow-right',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser($wp_customize,'vw_project_management_header_btn_icon',array(
		'label' => __('Add Button Icon','vw-project-management'),
		'transport' => 'refresh',
		'section' => 'vw_project_management_top_bar',
		'setting' => 'vw_project_management_header_btn_icon',
		'type'    => 'icon'
	)));

	$wp_customize->add_setting('vw_project_management_topbar_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('vw_project_management_topbar_button_url',array(
		'label'	=> esc_html__( 'Add Button URL', 'vw-project-management' ), 
		'section'	=> 'vw_project_management_top_bar',
		'setting'	=> 'vw_project_management_topbar_button_url',
		'type'	=> 'url',
	));

	//Sticky Header
	$wp_customize->add_setting( 'vw_project_management_sticky_header',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_sticky_header',array(
    'label' => esc_html__( 'Sticky Header','vw-project-management' ),
    'section' => 'vw_project_management_top_bar'
  )));

  $wp_customize->add_setting('vw_project_management_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-project-management' ),
    ),
		'section'=> 'vw_project_management_top_bar',
		'type'=> 'text'
	));

	//Banner
	$wp_customize->add_section( 'vw_project_management_banner_section' , array(
	  'title'      => __( 'Banner Settings', 'vw-project-management' ),
		'panel' => 'vw_project_management_panel_id',
	) );

	$wp_customize->add_setting( 'vw_project_management_hide_show_banner_section',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_hide_show_banner_section',array(
		'label' => esc_html__( 'Show / Hide Banner Section','vw-project-management' ),
		'section' => 'vw_project_management_banner_section'
	)));

	$wp_customize->add_setting('vw_project_management_banner_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vw_project_management_banner_bg_img',array(
	   'label' => __('Add Background Image','vw-project-management'),
	   'section' => 'vw_project_management_banner_section',
	   'description' => __('Image Size (1200 × 800px).','vw-project-management'),
	)));

 	$wp_customize->add_setting('vw_project_management_banner_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_banner_title',array(
		'label'	=> __('Banner Title','vw-project-management'),
		'section'	=> 'vw_project_management_banner_section',
		'input_attrs' => array(
        'placeholder' => __( 'Easy Way To Manage Your Project', 'vw-project-management' ),
    	),
		'type'	=> 'text'
	));

 	$wp_customize->add_setting('vw_project_management_banner_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_banner_text',array(
		'label'	=> __('Banner Text','vw-project-management'),
		'section'	=> 'vw_project_management_banner_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_done_progress_month',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_done_progress_month',array(
		'label' => esc_html__( 'Done Progress (Month)', 'vw-project-management' ),
		'section' => 'vw_project_management_banner_section',
		'setting' => 'vw_project_management_done_progress_month',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( '50', 'vw-project-management' ),
    ),
	));

	$wp_customize->add_setting('vw_project_management_review_progress_month',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_review_progress_month',array(
		'label' => esc_html__( 'Review Progress (Month)', 'vw-project-management' ),
		'section' => 'vw_project_management_banner_section',
		'setting' => 'vw_project_management_review_progress_month',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( '50', 'vw-project-management' ),
    ),
	));

	$wp_customize->add_setting('vw_project_management_doing_progress_month',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_doing_progress_month',array(
		'label' => esc_html__( 'Doing Progress (Month)', 'vw-project-management' ),
		'section' => 'vw_project_management_banner_section',
		'setting' => 'vw_project_management_doing_progress_month',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( '50', 'vw-project-management' ),
    ),
	));

	$wp_customize->add_setting('vw_project_management_done_progress_year',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_done_progress_year',array(
		'label' => esc_html__( 'Done Progress (Year)', 'vw-project-management' ),
		'section' => 'vw_project_management_banner_section',
		'setting' => 'vw_project_management_done_progress_year',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( '50', 'vw-project-management' ),
    ),
	));

	$wp_customize->add_setting('vw_project_management_review_progress_year',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_review_progress_year',array(
		'label' => esc_html__( 'Review Progress (Year)', 'vw-project-management' ),
		'section' => 'vw_project_management_banner_section',
		'setting' => 'vw_project_management_review_progress_year',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( '50', 'vw-project-management' ),
    ),
	));

	$wp_customize->add_setting('vw_project_management_doing_progress_year',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_doing_progress_year',array(
		'label' => esc_html__( 'Doing Progress (Year)', 'vw-project-management' ),
		'section' => 'vw_project_management_banner_section',
		'setting' => 'vw_project_management_doing_progress_year',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( '50', 'vw-project-management' ),
    ),
	));

	$wp_customize->add_setting('vw_project_management_video_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vw_project_management_video_bg_img',array(
	   'label' => __('Add Video Background Image','vw-project-management'),
	   'section' => 'vw_project_management_banner_section',
	   'description' => __('Image Size (260px × 130px).','vw-project-management'),
	)));

	$wp_customize->add_setting('vw_project_management_video_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('vw_project_management_video_button_url',array(
		'label'	=> __('Add Video Button URL','vw-project-management'),
		'description' => __('Add embed link','vw-project-management'),
		'section'	=> 'vw_project_management_banner_section',
		'setting'	=> 'vw_project_management_video_button_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('vw_project_management_video_button_icon',array(
    'default' => 'fas fa-play',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser($wp_customize,'vw_project_management_video_button_icon',array(
    'label' => __('Add Video Button Icon','vw-project-management'),
    'transport' => 'refresh',
    'section' => 'vw_project_management_banner_section',
    'setting' => 'vw_project_management_video_button_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting('vw_project_management_banner_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vw_project_management_banner_img',array(
	  'label' => __('Add Middle Image','vw-project-management'),
	  'section' => 'vw_project_management_banner_section',
	  'description' => __('Image Size (500px × 315px).','vw-project-management'),
	)));

	$wp_customize->add_setting('vw_project_management_banner_graph_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vw_project_management_banner_graph_img',array(
	  'label' => __('Add Image','vw-project-management'),
	  'section' => 'vw_project_management_banner_section',
	  'description' => __('Image Size (300px × 135px).','vw-project-management'),
	)));

	$wp_customize->add_setting('vw_project_management_social_icons',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_social_icons',array(
		'label' =>  __('Steps to setup social icons','vw-project-management'),
		'description' => __('<p>1. Go to Dashboard >> Appearance >> Widgets</p>
			<p>2. Add Vw Social Icon Widget in Social Widget area.</p>
			<p>3. Add social icons url and save.</p>','vw-project-management'),
		'section'=> 'vw_project_management_banner_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_social_icon_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_social_icon_btn',array(
		'description' => "<a target='_blank' href='". admin_url('widgets.php') ." '>Setup Banner Social Icons</a>",
		'section'=> 'vw_project_management_banner_section',
		'type'=> 'hidden'
	));

	// Project Section 
	$wp_customize->add_section('vw_project_management_project_section', array(
    'title' => __('Project Section', 'vw-project-management'),
    'panel' => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting( 'vw_project_management_project_section_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_project_section_hide_show',array(
    'label' => esc_html__( 'Show / Hide Project Section','vw-project-management' ),
    'section' => 'vw_project_management_project_section'
	)));

	$wp_customize->add_setting('vw_project_management_project_section_small_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_project_section_small_title',array(
		'type' => 'text',
		'label' => __('Project Small Title','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( 'Our Services', 'vw-project-management' ),
    ),
		'section' => 'vw_project_management_project_section'
	));

	$wp_customize->add_setting('vw_project_management_project_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_project_section_title',array(
		'type' => 'text',
		'label' => __('Project Title','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( 'Project Management Services', 'vw-project-management' ),
    ),
		'section' => 'vw_project_management_project_section'
	));

	$wp_customize->add_setting('vw_project_management_project_section_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_project_section_text',array(
		'type' => 'text',
		'label' => __('Project text','vw-project-management'),
		'section' => 'vw_project_management_project_section'
	));

	$wp_customize->add_setting('vw_project_management_project_button_label',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_project_button_label',array(
		'label' => esc_html__( 'Add Button Text', 'vw-project-management' ),
		'section' => 'vw_project_management_project_section',
		'setting' => 'vw_project_management_project_button_label',
		'type' => 'text',
		'input_attrs' => array(
			'placeholder' => __( 'Explore More', 'vw-project-management' ),
		),
	));
	
	$wp_customize->add_setting('vw_project_management_project_button_url',array(
	  'default'       => '',
	  'sanitize_callback'     => 'esc_url_raw',
	));
	$wp_customize->add_control('vw_project_management_project_button_url',array(
	  'label' => esc_html__( 'Add Button URL', 'vw-project-management' ), 
	  'section'       => 'vw_project_management_project_section',
	  'setting'       => 'vw_project_management_project_button_url',
	  'type'  => 'url',
	));

	$wp_customize->add_setting('vw_project_management_project_btn_icon',array(
		'default' => 'fa-solid fa-arrow-right',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser($wp_customize,'vw_project_management_project_btn_icon',array(
		'label' => __('Add Button Icon','vw-project-management'),
		'transport' => 'refresh',
		'section' => 'vw_project_management_project_section',
		'setting' => 'vw_project_management_project_btn_icon',
		'type'    => 'icon'
	)));

	$wp_customize->add_setting('vw_project_management_claases_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'vw_project_management_sanitize_choices',
	));
	$wp_customize->add_control('vw_project_management_claases_number',array(
		'label'	=> __('Number of post to show','vw-project-management'),
		'description' => __('Add number and refresh tab','vw-project-management'),
		'section'	=> 'vw_project_management_project_section',
		'type'		=> 'select',
		'choices' => array(
    	'1' => __('1','vw-project-management'),
      '2' => __('2','vw-project-management'),
      '3' => __('3','vw-project-management'),
    )
	));
	$vw_project_management_featured_post = get_theme_mod('vw_project_management_claases_number');

	$vw_project_management_args = array('numberposts' => -1);
	$vw_project_management_post_list = get_posts($vw_project_management_args);
	$vw_project_management_i = 0;
	$vw_project_management_pst[]='Select';
	foreach($vw_project_management_post_list as $vw_project_management_post){
		$vw_project_management_pst[$vw_project_management_post->ID] = $vw_project_management_post->post_title;
	}

	for ( $vw_project_management_i = 1; $vw_project_management_i <= $vw_project_management_featured_post; $vw_project_management_i++ ) {
		$wp_customize->add_setting('vw_project_management_services_category'.$vw_project_management_i,array(
			'sanitize_callback' => 'vw_project_management_sanitize_choices',
		));
		$wp_customize->add_control('vw_project_management_services_category'.$vw_project_management_i,array(
			'type'    => 'select',
			'choices' => $vw_project_management_pst,
			'label' => __('Select Post','vw-project-management'),
			'section' => 'vw_project_management_project_section',
		));

		$wp_customize->add_setting('vw_project_management_project_card_icon'.$vw_project_management_i,array(
			'default' => 'fa-solid fa-comments',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser($wp_customize,'vw_project_management_project_card_icon'.$vw_project_management_i,array(
			'label' => __('Add Button Icon','vw-project-management'),
			'transport' => 'refresh',
			'section' => 'vw_project_management_project_section',
			'setting' => 'vw_project_management_project_card_icon'.$vw_project_management_i,
			'type'    => 'icon'
		)));
	}

	//About Us Section
	$wp_customize->add_section('vw_project_management_about_us', array(
		'title'       => __('About Us Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_about_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_about_us_text',array(
		'description' => __('<p>1. More options for about us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for about us section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_about_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_about_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_about_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_about_us',
		'type'=> 'hidden'
	));

	//counter Section
	$wp_customize->add_section('vw_project_management_counter', array(
		'title'       => __('Counter Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_counter_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_counter_text',array(
		'description' => __('<p>1. More options for counter section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for counter section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_counter',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_counter_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_counter_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_counter',
		'type'=> 'hidden'
	));

	//project Section
	$wp_customize->add_section('vw_project_management_project2', array(
		'title'       => __('Project Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_project2_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_project2_text',array(
		'description' => __('<p>1. More options for project section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for project section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_project2',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_project2_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_project2_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_project2',
		'type'=> 'hidden'
	));

	//why-choose Section
	$wp_customize->add_section('vw_project_management_why_choose', array(
		'title'       => __('Why Choose Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_why_choose_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_why_choose_text',array(
		'description' => __('<p>1. More options for why choose section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for why choose section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_why_choose',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_why_choose_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_why_choose_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_why_choose',
		'type'=> 'hidden'
	));

	//How Work Section
	$wp_customize->add_section('vw_project_management_how_work', array(
		'title'       => __('How Work Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_how_work_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_how_work_text',array(
		'description' => __('<p>1. More options for how work section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for how work section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_how_work',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_how_work_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_how_work_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_how_work',
		'type'=> 'hidden'
	));

	//testimonial Section
	$wp_customize->add_section('vw_project_management_testimonial', array(
		'title'       => __('Testimonial Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_testimonial_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_testimonial_text',array(
		'description' => __('<p>1. More options for testimonial section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for testimonial section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_testimonial',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_testimonial_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_testimonial_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_testimonial',
		'type'=> 'hidden'
	));

	//plans Section
	$wp_customize->add_section('vw_project_management_plans', array(
		'title'       => __('Plans Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_plans_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_plans_text',array(
		'description' => __('<p>1. More options for plans section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for plans section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_plans',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_plans_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_plans_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_plans',
		'type'=> 'hidden'
	));

	//get_quote Section
	$wp_customize->add_section('vw_project_management_get_quote', array(
		'title'       => __('Get Quote Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_get_quote_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_get_quote_text',array(
		'description' => __('<p>1. More options for get quote section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for get quote section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_get_quote',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_get_quote_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_get_quote_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_get_quote',
		'type'=> 'hidden'
	));

	//staff Section
	$wp_customize->add_section('vw_project_management_staff', array(
		'title'       => __('Staff Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_staff_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_staff_text',array(
		'description' => __('<p>1. More options for staff section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for staff section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_staff',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_staff_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_staff_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_staff',
		'type'=> 'hidden'
	));

	//blog news Section
	$wp_customize->add_section('vw_project_management_blog_news', array(
		'title'       => __('Blog News Section', 'vw-project-management'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-project-management'),
		'priority'    => null,
		'panel'       => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting('vw_project_management_blog_news_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_blog_news_text',array(
		'description' => __('<p>1. More options for blog news section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for blog news section.</p>','vw-project-management'),
		'section'=> 'vw_project_management_blog_news',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_project_management_blog_news_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_blog_news_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(VW_PROJECT_MANAGEMENT_BUY_NOW).">More Info</a>",
		'section'=> 'vw_project_management_blog_news',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('vw_project_management_footer',array(
		'title'	=> esc_html__('Footer Settings','vw-project-management'),
		'panel' => 'vw_project_management_panel_id',
	));

	$wp_customize->add_setting( 'vw_project_management_footer_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_footer_hide_show',array(
	    'label' => esc_html__( 'Show / Hide Footer','vw-project-management' ),
	    'section' => 'vw_project_management_footer'
	)));

 	// font size
	$wp_customize->add_setting('vw_project_management_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','vw-project-management'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'vw_project_management_footer',
	));

	$wp_customize->add_setting('vw_project_management_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','vw-project-management'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'vw_project_management_footer',
	));

	// text trasform
	$wp_customize->add_setting('vw_project_management_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','vw-project-management'),
		'choices' => array(
			'Uppercase' => __('Uppercase','vw-project-management'),
			'Capitalize' => __('Capitalize','vw-project-management'),
			'Lowercase' => __('Lowercase','vw-project-management'),
		),
		'section'=> 'vw_project_management_footer',
	));

	$wp_customize->add_setting('vw_project_management_footer_heading_weight',array(
    'default' => '500',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_footer_heading_weight',array(
    'type' => 'select',
    'label' => __('Heading Font Weight','vw-project-management'),
    'section' => 'vw_project_management_footer',
    'choices' => array(
    	'100' => __('100','vw-project-management'),
        '200' => __('200','vw-project-management'),
        '300' => __('300','vw-project-management'),
        '400' => __('400','vw-project-management'),
        '500' => __('500','vw-project-management'),
        '600' => __('600','vw-project-management'),
        '700' => __('700','vw-project-management'),
        '800' => __('800','vw-project-management'),
        '900' => __('900','vw-project-management'),
    ),
	) );

	$wp_customize->add_setting('vw_project_management_footer_template',array(
		'default'	=> esc_html('vw_project_management-footer-one'),
		'sanitize_callback'	=> 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_footer_template',array(
		'label'	=> esc_html__('Footer style','vw-project-management'),
		'section'	=> 'vw_project_management_footer',
		'setting'	=> 'vw_project_management_footer_template',
		'type' => 'select',
		'choices' => array(
			'vw_project_management-footer-one' => esc_html__('Style 1', 'vw-project-management'),
			'vw_project_management-footer-two' => esc_html__('Style 2', 'vw-project-management'),
			'vw_project_management-footer-three' => esc_html__('Style 3', 'vw-project-management'),
			'vw_project_management-footer-four' => esc_html__('Style 4', 'vw-project-management'),
			'vw_project_management-footer-five' => esc_html__('Style 5', 'vw-project-management'),
		)
	));

	$wp_customize->add_setting('vw_project_management_footer_background_color', array(
		'default'           => '#FE6726',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_project_management_footer_background_color', array(
		'label'    => __('Footer Background Color', 'vw-project-management'),
		'section'  => 'vw_project_management_footer',
	)));

	$wp_customize->add_setting('vw_project_management_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vw_project_management_footer_background_image',array(
        'label' => __('Footer Background Image','vw-project-management'),
        'section' => 'vw_project_management_footer'
	)));

	$wp_customize->add_setting('vw_project_management_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','vw-project-management'),
		'section' => 'vw_project_management_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'vw-project-management' ),
			'center top'   => esc_html__( 'Top', 'vw-project-management' ),
			'right top'   => esc_html__( 'Top Right', 'vw-project-management' ),
			'left center'   => esc_html__( 'Left', 'vw-project-management' ),
			'center center'   => esc_html__( 'Center', 'vw-project-management' ),
			'right center'   => esc_html__( 'Right', 'vw-project-management' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'vw-project-management' ),
			'center bottom'   => esc_html__( 'Bottom', 'vw-project-management' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'vw-project-management' ),
		),
	));

  // Footer
  $wp_customize->add_setting('vw_project_management_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
  ));
  $wp_customize->add_control('vw_project_management_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','vw-project-management'),
    'choices' => array(
      'fixed' => __('fixed','vw-project-management'),
      'scroll' => __('scroll','vw-project-management'),
    ),
    'section'=> 'vw_project_management_footer',
  ));

  // footer padding
  $wp_customize->add_setting('vw_project_management_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_project_management_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','vw-project-management'),
    'description' => __('Enter a value in pixels. Example:20px','vw-project-management'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-project-management' ),
    ),
    'section'=> 'vw_project_management_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('vw_project_management_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
  ));
  $wp_customize->add_control('vw_project_management_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','vw-project-management'),
    'section' => 'vw_project_management_footer',
    'choices' => array(
      'Left' => __('Left','vw-project-management'),
      'Center' => __('Center','vw-project-management'),
      'Right' => __('Right','vw-project-management')
    ),
  ) );

  $wp_customize->add_setting('vw_project_management_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
  ));
  $wp_customize->add_control('vw_project_management_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','vw-project-management'),
    'section' => 'vw_project_management_footer',
    'choices' => array(
      'Left' => __('Left','vw-project-management'),
      'Center' => __('Center','vw-project-management'),
      'Right' => __('Right','vw-project-management')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_project_management_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'vw_project_management_Customize_partial_vw_project_management_footer_text',
	));

	$wp_customize->add_setting('vw_project_management_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_footer_text',array(
		'label'	=> esc_html__('Copyright Text','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2025, .....', 'vw-project-management' ),
      ),
		'section'=> 'vw_project_management_footer',
		'type'=> 'text'
	));

	// footer social icon
	$wp_customize->add_setting( 'vw_project_management_footer_icon',array(
		'default' => false,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  	) );
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_footer_icon',array(
		'label' => esc_html__( 'Show / Hide Footer Social Icon','vw-project-management' ),
		'section' => 'vw_project_management_footer'
  	)));

	$wp_customize->add_setting( 'vw_project_management_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','vw-project-management' ),
		'section' => 'vw_project_management_footer'
	)));

	$wp_customize->add_setting('vw_project_management_copyright_alingment',array(
	    'default' => 'center',
	    'sanitize_callback' => 'vw_project_management_sanitize_choices'
		));
		$wp_customize->add_control(new VW_Project_Management_Image_Radio_Control($wp_customize, 'vw_project_management_copyright_alingment', array(
	    'type' => 'select',
	    'label' => esc_html__('Copyright Alignment','vw-project-management'),
	    'section' => 'vw_project_management_footer',
	    'settings' => 'vw_project_management_copyright_alingment',
	    'choices' => array(
	        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
	        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
	        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
	))));

	$wp_customize->add_setting('vw_project_management_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_project_management_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'vw-project-management'),
		'section'  => 'vw_project_management_footer',
	)));

	$wp_customize->add_setting('vw_project_management_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_copyright_font_size',array(
		'label' => __('Copyright Font Size','vw-project-management'),
		'description' => __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'vw-project-management' ),
	    ),
		'section'=> 'vw_project_management_footer',
		'type'=> 'text'
	));

  $wp_customize->add_setting( 'vw_project_management_hide_show_scroll',array(
  	'default' => 1,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_hide_show_scroll',array(
  	'label' => esc_html__( 'Show / Hide Scroll to Top','vw-project-management' ),
  	'section' => 'vw_project_management_footer'
  )));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_project_management_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'vw_project_management_Customize_partial_vw_project_management_scroll_to_top_icon',
	));

  $wp_customize->add_setting('vw_project_management_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Project_Management_Image_Radio_Control($wp_customize, 'vw_project_management_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','vw-project-management'),
    'section' => 'vw_project_management_footer',
    'settings' => 'vw_project_management_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

	$wp_customize->add_setting('vw_project_management_scroll_top_icon',array(
		'default' => 'fas fa-long-arrow-alt-up',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser($wp_customize,'vw_project_management_scroll_top_icon',array(
		'label' => __('Add Scroll to Top Icon','vw-project-management'),
		'transport' => 'refresh',
		'section' => 'vw_project_management_footer',
		'setting' => 'vw_project_management_scroll_top_icon',
		'type'    => 'icon'
	)));

  $wp_customize->add_setting('vw_project_management_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_project_management_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','vw-project-management'),
    'description' => __('Enter a value in pixels. Example:20px','vw-project-management'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-project-management' ),
    ),
    'section'=> 'vw_project_management_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('vw_project_management_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_project_management_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','vw-project-management'),
    'description' => __('Enter a value in pixels. Example:20px','vw-project-management'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-project-management' ),
    ),
    'section'=> 'vw_project_management_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('vw_project_management_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_project_management_scroll_to_top_width',array(
    'label' => __('Icon Width','vw-project-management'),
    'description' => __('Enter a value in pixels Example:20px','vw-project-management'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-project-management' ),
  ),
	  'section'=> 'vw_project_management_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('vw_project_management_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_project_management_scroll_to_top_height',array(
    'label' => __('Icon Height','vw-project-management'),
    'description' => __('Enter a value in pixels. Example:20px','vw-project-management'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-project-management' ),
    ),
    'section'=> 'vw_project_management_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'vw_project_management_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'vw_project_management_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','vw-project-management' ),
    'section'     => 'vw_project_management_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

  	$wp_customize->add_setting('vw_project_management_align_footer_social_icon',array(
        'default' => 'center',
        'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_align_footer_social_icon',array(
        'type' => 'select',
        'label' => __('Social Icon Alignment ','vw-project-management'),
        'section' => 'vw_project_management_footer',
        'choices' => array(
            'left' => __('Left','vw-project-management'),
            'right' => __('Right','vw-project-management'),
            'center' => __('Center','vw-project-management'),
        ),
	) );

	$wp_customize->add_setting( 'vw_project_management_copyright_sticky',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_project_management_switch_sanitization'
    ) );
    $wp_customize->add_control( new vw_project_management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_copyright_sticky',array(
      'label' => esc_html__( 'Show / Hide Sticky Copyright','vw-project-management' ),
      'section' => 'vw_project_management_footer'
    )));

   $wp_customize->add_setting('vw_project_management_footer_social_icons_font_size',array(
       'default'=> 16,
       'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_project_management_footer_social_icons_font_size',array(
    'label' => __('Social Icon Font Size','vw-project-management'),
    	'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'vw_project_management_footer',
	 ));

 	//Blog Post
	$wp_customize->add_panel( 'vw_project_management_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'vw-project-management' ),
		'panel' => 'vw_project_management_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'vw_project_management_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'vw-project-management' ),
		'panel' => 'vw_project_management_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_project_management_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'vw_project_management_Customize_partial_vw_project_management_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('vw_project_management_blog_layout_option',array(
    'default' => 'Left',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
  ));
  $wp_customize->add_control(new VW_Project_Management_Image_Radio_Control($wp_customize, 'vw_project_management_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','vw-project-management'),
    'section' => 'vw_project_management_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('vw_project_management_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','vw-project-management'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','vw-project-management'),
    'section' => 'vw_project_management_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','vw-project-management'),
        'Right Sidebar' => esc_html__('Right Sidebar','vw-project-management'),
        'One Column' => esc_html__('One Column','vw-project-management'),
        'Three Columns' => esc_html__('Three Columns','vw-project-management'),
        'Four Columns' => esc_html__('Four Columns','vw-project-management'),
        'Grid Layout' => esc_html__('Grid Layout','vw-project-management')
    ),
	) );

	$wp_customize->add_setting('vw_project_management_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_post_settings',
		'setting'	=> 'vw_project_management_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'vw_project_management_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','vw-project-management' ),
    'section' => 'vw_project_management_post_settings'
  )));

	$wp_customize->add_setting('vw_project_management_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_post_settings',
		'setting'	=> 'vw_project_management_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_project_management_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','vw-project-management' ),
		'section' => 'vw_project_management_post_settings'
  )));

  $wp_customize->add_setting('vw_project_management_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_post_settings',
		'setting'	=> 'vw_project_management_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_project_management_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','vw-project-management' ),
		'section' => 'vw_project_management_post_settings'
  )));

  $wp_customize->add_setting('vw_project_management_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_post_settings',
		'setting'	=> 'vw_project_management_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_project_management_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','vw-project-management' ),
		'section' => 'vw_project_management_post_settings'
  )));

  $wp_customize->add_setting( 'vw_project_management_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','vw-project-management' ),
		'section' => 'vw_project_management_post_settings'
  )));

  $wp_customize->add_setting( 'vw_project_management_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','vw-project-management' ),
		'section'     => 'vw_project_management_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'vw_project_management_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','vw-project-management' ),
		'section'     => 'vw_project_management_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('vw_project_management_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','vw-project-management'),
		'section'	=> 'vw_project_management_post_settings',
		'choices' => array(
		'default' => __('Default','vw-project-management'),
		'custom' => __('Custom Image Size','vw-project-management'),
      ),
	));

	$wp_customize->add_setting('vw_project_management_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('vw_project_management_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'vw-project-management' ),),
		'section'=> 'vw_project_management_post_settings',
		'type'=> 'text',
		'active_callback' => 'vw_project_management_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('vw_project_management_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'vw-project-management' ),),
		'section'=> 'vw_project_management_post_settings',
		'type'=> 'text',
		'active_callback' => 'vw_project_management_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'vw_project_management_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_project_management_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','vw-project-management' ),
		'section'     => 'vw_project_management_post_settings',
		'type'        => 'range',
		'settings'    => 'vw_project_management_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('vw_project_management_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','vw-project-management'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','vw-project-management'),
		'section'=> 'vw_project_management_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('vw_project_management_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','vw-project-management'),
    'section' => 'vw_project_management_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','vw-project-management'),
        'Excerpt' => esc_html__('Excerpt','vw-project-management'),
        'No Content' => esc_html__('No Content','vw-project-management')
        ),
	) );

  $wp_customize->add_setting('vw_project_management_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','vw-project-management'),
    'section' => 'vw_project_management_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','vw-project-management'),
        'Without Blocks' => __('Without Blocks','vw-project-management')
        ),
	) );

	$wp_customize->add_setting( 'vw_project_management_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','vw-project-management' ),
		'section' => 'vw_project_management_post_settings'
  )));

	$wp_customize->add_setting('vw_project_management_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'vw_project_management_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'vw_project_management_sanitize_choices'
  ));
  $wp_customize->add_control( 'vw_project_management_blog_pagination_type', array(
    'section' => 'vw_project_management_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'vw-project-management' ),
    'choices'		=> array(
      'blog-page-numbers'  => __( 'Numeric', 'vw-project-management' ),
      'next-prev' => __( 'Older Posts/Newer Posts', 'vw-project-management' ),
  )));

  // Button Settings
	$wp_customize->add_section( 'vw_project_management_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'vw-project-management' ),
		'panel' => 'vw_project_management_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_project_management_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'vw_project_management_Customize_partial_vw_project_management_button_text',
	));

  $wp_customize->add_setting('vw_project_management_button_text',array(
		'default'=> esc_html__('Read More','vw-project-management'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_button_text',array(
		'label'	=> esc_html__('Add Button Text','vw-project-management'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('vw_project_management_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_button_font_size',array(
		'label'	=> __('Button Font Size','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'vw-project-management' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'vw_project_management_button_settings',
	));


	$wp_customize->add_setting( 'vw_project_management_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_project_management_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','vw-project-management' ),
		'section'     => 'vw_project_management_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('vw_project_management_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-project-management' ),
    ),
		'section'=> 'vw_project_management_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-project-management' ),
    ),
		'section'=> 'vw_project_management_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'vw-project-management' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'vw_project_management_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('vw_project_management_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','vw-project-management'),
		'choices' => array(
      'Uppercase' => __('Uppercase','vw-project-management'),
      'Capitalize' => __('Capitalize','vw-project-management'),
      'Lowercase' => __('Lowercase','vw-project-management'),
    ),
		'section'=> 'vw_project_management_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'vw_project_management_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'vw-project-management' ),
		'panel' => 'vw_project_management_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_project_management_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'vw_project_management_Customize_partial_vw_project_management_related_post_title',
	));

  $wp_customize->add_setting( 'vw_project_management_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_related_post',array(
		'label' => esc_html__( 'Related Post','vw-project-management' ),
		'section' => 'vw_project_management_related_posts_settings'
  )));

  $wp_customize->add_setting('vw_project_management_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('vw_project_management_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'vw_project_management_sanitize_number_absint'
	));
	$wp_customize->add_control('vw_project_management_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'vw_project_management_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','vw-project-management' ),
		'section'     => 'vw_project_management_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'vw_project_management_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'vw_project_management_related_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_related_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','vw-project-management' ),
		'section' => 'vw_project_management_related_posts_settings'
  )));

  $wp_customize->add_setting('vw_project_management_related_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_related_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','vw-project-management'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','vw-project-management'),
		'section'=> 'vw_project_management_related_posts_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting( 'vw_project_management_related_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_related_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','vw-project-management' ),
    'section' => 'vw_project_management_related_posts_settings'
  )));

  $wp_customize->add_setting('vw_project_management_related_postdate_icon',array(
    'default' => 'fas fa-calendar-alt',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_related_postdate_icon',array(
    'label' => __('Add Post Date Icon','vw-project-management'),
    'transport' => 'refresh',
    'section' => 'vw_project_management_related_posts_settings',
    'setting' => 'vw_project_management_related_postdate_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'vw_project_management_related_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_related_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','vw-project-management' ),
		'section' => 'vw_project_management_related_posts_settings'
  )));

  $wp_customize->add_setting('vw_project_management_related_author_icon',array(
    'default' => 'fas fa-user',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_related_author_icon',array(
    'label' => __('Add Author Icon','vw-project-management'),
    'transport' => 'refresh',
    'section' => 'vw_project_management_related_posts_settings',
    'setting' => 'vw_project_management_related_author_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'vw_project_management_related_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_related_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','vw-project-management' ),
		'section' => 'vw_project_management_related_posts_settings'
  )));

  $wp_customize->add_setting('vw_project_management_related_comments_icon',array(
    'default' => 'fa fa-comments',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_related_comments_icon',array(
    'label' => __('Add Comments Icon','vw-project-management'),
    'transport' => 'refresh',
    'section' => 'vw_project_management_related_posts_settings',
    'setting' => 'vw_project_management_related_comments_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'vw_project_management_related_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_related_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','vw-project-management' ),
		'section' => 'vw_project_management_related_posts_settings'
  )));

  $wp_customize->add_setting('vw_project_management_related_time_icon',array(
    'default' => 'fas fa-clock',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_related_time_icon',array(
    'label' => __('Add Time Icon','vw-project-management'),
    'transport' => 'refresh',
    'section' => 'vw_project_management_related_posts_settings',
    'setting' => 'vw_project_management_related_time_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting( 'vw_project_management_related_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_related_image_box_shadow', array(
		'label'       => esc_html__( 'Related post Image Box Shadow','vw-project-management' ),
		'section'     => 'vw_project_management_related_posts_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  $wp_customize->add_setting('vw_project_management_related_button_text',array(
		'default'=> esc_html__('Read More','vw-project-management'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_related_button_text',array(
		'label'	=> esc_html__('Add Button Text','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_related_posts_settings',
		'type'=> 'text'
	));

	// Single Posts Settings
	$wp_customize->add_section( 'vw_project_management_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'vw-project-management' ),
		'panel' => 'vw_project_management_blog_post_parent_panel',
	));

	$wp_customize->add_setting('vw_project_management_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_single_blog_settings',
		'setting'	=> 'vw_project_management_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_project_management_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
	) );
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','vw-project-management' ),
		'section' => 'vw_project_management_single_blog_settings'
	)));

	$wp_customize->add_setting('vw_project_management_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_single_author_icon',array(
		'label'	=> __('Add Author Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_single_blog_settings',
		'setting'	=> 'vw_project_management_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_project_management_single_author',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
	) );
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_single_author',array(
    'label' => esc_html__( 'Show / Hide Author','vw-project-management' ),
    'section' => 'vw_project_management_single_blog_settings'
	)));

 	$wp_customize->add_setting('vw_project_management_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_single_blog_settings',
		'setting'	=> 'vw_project_management_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'vw_project_management_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
	) );
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','vw-project-management' ),
    'section' => 'vw_project_management_single_blog_settings'
	)));

	$wp_customize->add_setting('vw_project_management_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
  $wp_customize,'vw_project_management_single_time_icon',array(
		'label'	=> __('Add Time Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_single_blog_settings',
		'setting'	=> 'vw_project_management_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'vw_project_management_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
	) );
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','vw-project-management' ),
    'section' => 'vw_project_management_single_blog_settings'
	)));

	$wp_customize->add_setting( 'vw_project_management_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','vw-project-management' ),
		'section' => 'vw_project_management_single_blog_settings'
  )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'vw_project_management_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  	) );
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','vw-project-management' ),
		'section' => 'vw_project_management_single_blog_settings'
  	)));

  	$wp_customize->add_setting( 'vw_project_management_singlepost_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_singlepost_image_box_shadow', array(
		'label'       => esc_html__( 'Single post Image Box Shadow','vw-project-management' ),
		'section'     => 'vw_project_management_single_blog_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('vw_project_management_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','vw-project-management'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','vw-project-management'),
		'section'=> 'vw_project_management_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'vw_project_management_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','vw-project-management' ),
	  'section' => 'vw_project_management_single_blog_settings'
	)));

	//navigation text
	$wp_customize->add_setting('vw_project_management_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'vw-project-management' ),
      ),
		'section'=> 'vw_project_management_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_project_management_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'vw-project-management' ),
    	),
		'section'=> 'vw_project_management_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_project_management_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','vw-project-management'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','vw-project-management'),
		'description'	=> __('Enter a value in %. Example:50%','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'vw_project_management_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'vw-project-management' ),
		'panel' => 'vw_project_management_blog_post_parent_panel',
	));

	$wp_customize->add_setting('vw_project_management_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_project_management_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_grid_layout_settings',
		'setting'	=> 'vw_project_management_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'vw_project_management_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','vw-project-management' ),
    'section' => 'vw_project_management_grid_layout_settings'
  )));

	$wp_customize->add_setting('vw_project_management_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_project_management_grid_author_icon',array(
		'label'	=> __('Add Author Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_grid_layout_settings',
		'setting'	=> 'vw_project_management_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_project_management_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','vw-project-management' ),
		'section' => 'vw_project_management_grid_layout_settings'
  )));

  $wp_customize->add_setting('vw_project_management_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_project_management_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_grid_layout_settings',
		'setting'	=> 'vw_project_management_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_project_management_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','vw-project-management' ),
		'section' => 'vw_project_management_grid_layout_settings'
  )));

  $wp_customize->add_setting('vw_project_management_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_project_management_grid_time_icon',array(
		'label'	=> __('Add Time Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_grid_layout_settings',
		'setting'	=> 'vw_project_management_grid_time_icon',
		'type'		=> 'icon'
	)));

  	$wp_customize->add_setting( 'vw_project_management_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  	) );
  	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','vw-project-management' ),
		'section' => 'vw_project_management_grid_layout_settings'
  	)));

  	$wp_customize->add_setting( 'vw_project_management_grid_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
  	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_grid_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','vw-project-management' ),
		'section' => 'vw_project_management_grid_layout_settings'
  	)));

 	$wp_customize->add_setting('vw_project_management_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','vw-project-management'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','vw-project-management'),
		'section'=> 'vw_project_management_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('vw_project_management_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','vw-project-management'),
    'section' => 'vw_project_management_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','vw-project-management'),
      'Without Blocks' => __('Without Blocks','vw-project-management')
      ),
	) );

	$wp_customize->add_setting('vw_project_management_grid_button_text',array(
		'default'=> esc_html__('Read More','vw-project-management'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','vw-project-management'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','vw-project-management'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('vw_project_management_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','vw-project-management'),
    'section' => 'vw_project_management_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','vw-project-management'),
      'Excerpt' => esc_html__('Excerpt','vw-project-management'),
      'No Content' => esc_html__('No Content','vw-project-management')
    ),
	) );

  $wp_customize->add_setting( 'vw_project_management_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','vw-project-management' ),
		'section'     => 'vw_project_management_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'vw_project_management_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','vw-project-management' ),
		'section'     => 'vw_project_management_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'vw_project_management_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'vw-project-management' ),
		'panel' => 'vw_project_management_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'vw_project_management_left_right', array(
  	'title' => esc_html__('General Settings', 'vw-project-management'),
		'panel' => 'vw_project_management_other_parent_panel'
	) );

	$wp_customize->add_setting('vw_project_management_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Project_Management_Image_Radio_Control($wp_customize, 'vw_project_management_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','vw-project-management'),
    'description' => esc_html__('Here you can change the width layout of Website.','vw-project-management'),
    'section' => 'vw_project_management_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('vw_project_management_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','vw-project-management'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','vw-project-management'),
    'section' => 'vw_project_management_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','vw-project-management'),
        'Right_Sidebar' => esc_html__('Right Sidebar','vw-project-management'),
        'One_Column' => esc_html__('One Column','vw-project-management')
    ),
	) );
	
    // Pre-Loader
	$wp_customize->add_setting( 'vw_project_management_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_loader_enable',array(
    'label' => esc_html__( 'Pre-Loader','vw-project-management' ),
    'section' => 'vw_project_management_left_right'
  )));

	$wp_customize->add_setting('vw_project_management_preloader_bg_color', array(
		'default'           => '#FE6726',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_project_management_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'vw-project-management'),
		'section'  => 'vw_project_management_left_right',
	)));

	$wp_customize->add_setting('vw_project_management_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_project_management_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'vw-project-management'),
		'section'  => 'vw_project_management_left_right',
	)));

	$wp_customize->add_setting('vw_project_management_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vw_project_management_preloader_bg_img',array(
    'label' => __('Preloader Background Image','vw-project-management'),
    'section' => 'vw_project_management_left_right'
	)));

    //404 Page Setting
	$wp_customize->add_section('vw_project_management_404_page',array(
		'title'	=> __('404 Page Settings','vw-project-management'),
		'panel' => 'vw_project_management_other_parent_panel',
	));

	$wp_customize->add_setting('vw_project_management_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_project_management_404_page_title',array(
		'label'	=> __('Add Title','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_project_management_404_page_content',array(
		'label'	=> __('Add Text','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_404_page_button_text',array(
		'label'	=> __('Add Button Text','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('vw_project_management_no_results_page',array(
		'title'	=> __('No Results Page Settings','vw-project-management'),
		'panel' => 'vw_project_management_other_parent_panel',
	));

	$wp_customize->add_setting('vw_project_management_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_project_management_no_results_page_title',array(
		'label'	=> __('Add Title','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_project_management_no_results_page_content',array(
		'label'	=> __('Add Text','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('vw_project_management_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','vw-project-management'),
		'panel' => 'vw_project_management_other_parent_panel',
	));

	$wp_customize->add_setting('vw_project_management_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_social_icon_padding',array(
		'label'	=> __('Icon Padding','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_social_icon_width',array(
		'label'	=> __('Icon Width','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_social_icon_height',array(
		'label'	=> __('Icon Height','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('vw_project_management_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','vw-project-management'),
		'panel' => 'vw_project_management_other_parent_panel',
	));

  $wp_customize->add_setting( 'vw_project_management_responsive_preloader_hide',array(
      'default' => false,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_responsive_preloader_hide',array(
      'label' => esc_html__( 'Show / Hide Preloader','vw-project-management' ),
      'section' => 'vw_project_management_responsive_media'
  )));


  $wp_customize->add_setting( 'vw_project_management_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_sidebar_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Sidebar','vw-project-management' ),
    	'section' => 'vw_project_management_responsive_media'
  )));

  $wp_customize->add_setting( 'vw_project_management_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
	));
	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','vw-project-management' ),
    	'section' => 'vw_project_management_responsive_media'
	)));

  $wp_customize->add_setting('vw_project_management_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_project_management_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_responsive_media',
		'setting'	=> 'vw_project_management_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('vw_project_management_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Project_Management_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_project_management_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','vw-project-management'),
		'transport' => 'refresh',
		'section'	=> 'vw_project_management_responsive_media',
		'setting'	=> 'vw_project_management_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('vw_project_management_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#FE6726',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_project_management_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'vw-project-management'),
		'section'  => 'vw_project_management_responsive_media',
	)));

  //Woocommerce settings
	$wp_customize->add_section('vw_project_management_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'vw-project-management'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'vw_project_management_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'vw_project_management_customize_partial_vw_project_management_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'vw_project_management_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','vw-project-management' ),
		'section' => 'vw_project_management_woocommerce_section'
  )));

   $wp_customize->add_setting('vw_project_management_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','vw-project-management'),
    'section' => 'vw_project_management_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','vw-project-management'),
        'Right Sidebar' => __('Right Sidebar','vw-project-management'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'vw_project_management_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'vw_project_management_customize_partial_vw_project_management_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'vw_project_management_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_project_management_switch_sanitization'
   ) );
 	$wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','vw-project-management' ),
		'section' => 'vw_project_management_woocommerce_section'
  )));

   $wp_customize->add_setting('vw_project_management_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','vw-project-management'),
    'section' => 'vw_project_management_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','vw-project-management'),
        'Right Sidebar' => __('Right Sidebar','vw-project-management'),
    ),
	) );

	//Products per page
    $wp_customize->add_setting('vw_project_management_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'vw_project_management_sanitize_float'
	));
	$wp_customize->add_control('vw_project_management_products_per_page',array(
		'label'	=> __('Products Per Page','vw-project-management'),
		'description' => __('Display on shop page','vw-project-management'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'vw_project_management_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('vw_project_management_products_per_row',array(
		'default'=> '4',
		'sanitize_callback'	=> 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_products_per_row',array(
		'label'	=> __('Products Per Row','vw-project-management'),
		'description' => __('Display on shop page','vw-project-management'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'vw_project_management_woocommerce_section',
		'type'=> 'select',
		));

	//Products padding
	$wp_customize->add_setting('vw_project_management_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'vw_project_management_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','vw-project-management' ),
		'section'     => 'vw_project_management_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'vw_project_management_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','vw-project-management' ),
		'section'     => 'vw_project_management_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'vw_project_management_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','vw-project-management' ),
		'section'     => 'vw_project_management_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('vw_project_management_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('vw_project_management_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'vw_project_management_sanitize_choices'
	));
	$wp_customize->add_control('vw_project_management_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','vw-project-management'),
    'section' => 'vw_project_management_woocommerce_section',
    'choices' => array(
        'left' => __('Left','vw-project-management'),
        'right' => __('Right','vw-project-management'),
    ),
	) );

	$wp_customize->add_setting('vw_project_management_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_project_management_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_project_management_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','vw-project-management'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-project-management'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-project-management' ),
        ),
		'section'=> 'vw_project_management_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'vw_project_management_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_project_management_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_project_management_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','vw-project-management' ),
		'section'     => 'vw_project_management_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'vw_project_management_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_project_management_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Project_Management_Toggle_Switch_Custom_Control( $wp_customize, 'vw_project_management_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','vw-project-management' ),
    'section' => 'vw_project_management_woocommerce_section'
  )));

}

add_action( 'customize_register', 'vw_project_management_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Project_Management_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Project_Management_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new VW_Project_Management_Customize_Section_Pro( $manager,'vw_project_management_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'VW PROJECT MANAGEMENT PRO', 'vw-project-management' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'vw-project-management' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/project-management-wordpress-theme'),
		)));
		$manager->add_section(new VW_Project_Management_Customize_Section_Pro($manager,'vw_project_management_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'vw-project-management' ),
			'pro_text' => esc_html__( 'DOCS', 'vw-project-management' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-vw-project-management/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-project-management-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-project-management-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Project_Management_Customize::get_instance();