<?php
/**
 * @package VW Project Management 
 * Setup the WordPress core custom header feature.
 *
 * @uses vw_project_management_header_style()
*/
function vw_project_management_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'vw_project_management_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 300,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'vw_project_management_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'vw_project_management_custom_header_setup' );

if ( ! function_exists( 'vw_project_management_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see vw_project_management_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'vw_project_management_header_style' );

function vw_project_management_header_style() {
	$vw_project_management_header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/header-img.png';
	$vw_project_management_custom_css = "
        .box-image .single-page-img{
			background-image: url('" . esc_url($vw_project_management_header_image) . "');
			background-repeat: no-repeat;
	        background-position: center center;
	        background-size: cover !important;
	        height: 300px;
		}";
	   	wp_add_inline_style( 'vw-project-management-basic-style', $vw_project_management_custom_css );
}
endif;