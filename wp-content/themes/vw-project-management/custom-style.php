<?php

	$vw_project_management_custom_css= "";

	/*-------------------- Highlight Color -------------------*/

	$vw_project_management_first_color = get_theme_mod('vw_project_management_first_color');

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='#sidebar .wp-block-tag-cloud a:hover, .header-fixed.header-sticky .main-topbar, .page-template-custom-home-page .header-fixed.header-sticky .main-topbar, #footer, .custom-about-us a.custom_read_more, #footer .wp-block-tag-cloud a:hover, table.compare-list .add-to-cart td a:not(.unstyled_button), .main-navigation ul.sub-menu > li:hover, .main-navigation ul.children > li:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, #comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .single-product .woocommerce-notices-wrapper .woocommerce-message .button.wc-forward:hover, #sidebar .wp-block-search .wp-block-search__button:hover, #banner-sec .graph-img .banner-social-icon .custom-social-icons, #banner-sec .bar-box .progress-wrapper .progress-bar, .video-btn #openBtn i, .video-btn .popup .close-btn i, #project-section .project-sec-content .project-btn i, .main-header .top-buttons .topbar-btn i, #project-section .project-sec-content .project-btn a:hover, .main-header .top-buttons .topbar-btn a:hover, #project-section .service-box:hover .popular-content i, #project-section .owl-carousel .owl-nav button i:hover, .more-btn a , #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, .single-product .woocommerce-notices-wrapper .woocommerce-message .button.wc-forward, .single-product .yith-add-to-wishlist-button-block .yith-wcwl-add-to-wishlist-button, .post-nav-links span:hover, .post-nav-links a:hover, #comments input[type="submit"]:hover, .more-btn a:hover,#footer .tagcloud a:hover, .pro-button a:hover, #comments a.comment-reply-link:hover, #preloader, #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .copyright .custom-social-icons i:hover, .scrollup i, .bradcrumbs a, .post-categories li a, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, #sidebar .custom-social-icons a, #sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #sidebar h3:before,#sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before, #sidebar .tagcloud a:hover, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, nav.woocommerce-MyAccount-navigation ul li:hover, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart.wc-forward,a.added_to_cart.wc-forward, .wishlist-items-wrapper .product-add-to-cart a, .wishlist_table.mobile .product-add-to-cart a, a.added_to_cart.wc-forward:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart:hover, .woocommerce ul.products li.product .button:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, .woocommerce-cart .wc-block-grid__product-onsale,.woocommerce-cart .wc-block-grid .wc-block-grid__product-onsale, .wp-block-woocommerce-cart .wc-block-cart__submit-button,a.wc-block-components-checkout-return-to-cart-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover,a.wc-block-components-checkout-return-to-cart-button:hover, .wc-block-components-totals-coupon__button:hover, .search-form .search-submit, header.woocommerce-Address-title.title a, #tag-cloud-sec .tag-cloud-link{';
			$vw_project_management_custom_css .='background-color: '.esc_attr($vw_project_management_first_color).';';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='.woocommerce-pagination .page-numbers.current, .woocommerce-pagination a.page-numbers:hover, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, #sidebar ul li::before, .wp-block-woocommerce-cart .wc-block-components-product-badge, .wc-block-components-order-summary-item__quantity, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover{';
			$vw_project_management_custom_css .='background-color: '.esc_attr($vw_project_management_first_color).'!important;';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='a:hover, .sticky .post-main-box h2:before, .header-fixed.header-sticky .main-topbar .top-buttons .topbar-btn i, #project-section .project-sec-content .small-title, #project-section .project-sec-content .project-btn a:hover i, .main-header .top-buttons .topbar-btn a:hover i, #project-section .service-box:hover .service-heading a, #sidebar .widget_text p a, #sidebar .wp-block-heading a, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a, #sidebar ul li:hover, .woocommerce-error::before, .pagination a:hover, .pagination .current, .post-navigation span.meta-nav, .post-navigation span.meta-nav:hover, .yith-wcwl-wishlistaddedbrowse span.feedback, .yith-wcwl-wishlistexistsbrowse span.feedback, .wishlist_table .product-name a, .wishlist_table.mobile .product-name a, .woocommerce-message::before,.woocommerce-info::before{';
			$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_first_color).';';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='.header-fixed.header-sticky .main-navigation .current_page_item > a, .header-fixed.header-sticky .main-navigation .current-menu-item > a, #footer .tagcloud a:hover, .tags-bg a:hover, #footer .custom-social-icons a:hover{';
			$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_first_color).'!important;';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='#sidebar .wp-block-search .wp-block-search__button:hover, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .post-main-box, .grid-post-main-box, .bradcrumbs a, .post-categories li a, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span, #sidebar .widget, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a{';
			$vw_project_management_custom_css .='border-color: '.esc_attr($vw_project_management_first_color).';';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='#footer .custom-social-icons a:hover{';
			$vw_project_management_custom_css .='outline: 6px double '.esc_attr($vw_project_management_first_color).';';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='#sidebar .widget{';
			$vw_project_management_custom_css .='border-bottom-color: '.esc_attr($vw_project_management_first_color).';';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='#sidebar .widget, .woocommerce-error, .woocommerce-message,.woocommerce-info{';
			$vw_project_management_custom_css .='border-top-color: '.esc_attr($vw_project_management_first_color).';';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='#sidebar .widget{';
			$vw_project_management_custom_css .='border-right-color: '.esc_attr($vw_project_management_first_color).';';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='#sidebar .widget{';
			$vw_project_management_custom_css .='border-left-color: '.esc_attr($vw_project_management_first_color).';';
		$vw_project_management_custom_css .='}';
	}

	if($vw_project_management_first_color != false){
		$vw_project_management_custom_css .='@media screen and (max-width:1000px) {';
			$vw_project_management_custom_css .='.toggle-nav i, .sidenav .closebtn{';
				$vw_project_management_custom_css .='background-color: '.esc_attr($vw_project_management_first_color).';';
			$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='@media screen and (max-width:767px) {';
			$vw_project_management_custom_css .='.main-header.header-sticky.header-fixed .toggle-nav i{';
				$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_first_color).';';
			$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='@media screen and (min-width: 768px) and (max-width: 991px){';
			$vw_project_management_custom_css .='.main-header.header-sticky.header-fixed .toggle-nav i{';
				$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_first_color).';';
			$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='}';
	}

	// Banner
	$vw_project_management_hide_show_banner_section = get_theme_mod('vw_project_management_hide_show_banner_section', true);
    if($vw_project_management_hide_show_banner_section != true){
        $vw_project_management_custom_css .='.page-template-custom-home-page .main-header .main-topbar{';
            $vw_project_management_custom_css .='position: static;';
        $vw_project_management_custom_css .='}';
    }

	/*---------------------------Width Layout -------------------*/

	$vw_project_management_theme_lay = get_theme_mod( 'vw_project_management_width_option','Full Width');
    if($vw_project_management_theme_lay == 'Boxed'){
		$vw_project_management_custom_css .='body{';
			$vw_project_management_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='right: 100px;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='.row.outer-logo{';
			$vw_project_management_custom_css .='margin-left: 0px;';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_theme_lay == 'Wide Width'){
		$vw_project_management_custom_css .='body{';
			$vw_project_management_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='right: 30px;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='.row.outer-logo{';
			$vw_project_management_custom_css .='margin-left: 0px;';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_theme_lay == 'Full Width'){
		$vw_project_management_custom_css .='body{';
			$vw_project_management_custom_css .='max-width: 100%;';
		$vw_project_management_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_project_management_sticky_header_padding = get_theme_mod('vw_project_management_sticky_header_padding');
	if($vw_project_management_sticky_header_padding != false){
		$vw_project_management_custom_css .='.header-fixed{';
			$vw_project_management_custom_css .='padding: '.esc_attr($vw_project_management_sticky_header_padding).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_responsive_preloader_hide = get_theme_mod('vw_project_management_responsive_preloader_hide',false);
	if($vw_project_management_responsive_preloader_hide == true && get_theme_mod('vw_project_management_loader_enable',false) == false){
		$vw_project_management_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$vw_project_management_custom_css .='display:none !important;';
		$vw_project_management_custom_css .='} }';
	}

	if($vw_project_management_responsive_preloader_hide == false){
		$vw_project_management_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$vw_project_management_custom_css .='display:none !important;';
		$vw_project_management_custom_css .='} }';
	}

	$vw_project_management_resp_sidebar = get_theme_mod( 'vw_project_management_sidebar_hide_show',true);
    if($vw_project_management_resp_sidebar == true){
    	$vw_project_management_custom_css .='@media screen and (max-width:575px) {';
		$vw_project_management_custom_css .='#sidebar{';
			$vw_project_management_custom_css .='display:block;';
		$vw_project_management_custom_css .='} }';
	}else if($vw_project_management_resp_sidebar == false){
		$vw_project_management_custom_css .='@media screen and (max-width:575px) {';
		$vw_project_management_custom_css .='#sidebar{';
			$vw_project_management_custom_css .='display:none;';
		$vw_project_management_custom_css .='} }';
	}
	$vw_project_management_resp_scroll_top = get_theme_mod( 'vw_project_management_resp_scroll_top_hide_show',true);
	if($vw_project_management_resp_scroll_top == true && get_theme_mod( 'vw_project_management_hide_show_scroll',true) == false){
    	$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='visibility:hidden !important;';
		$vw_project_management_custom_css .='} ';
	}
    if($vw_project_management_resp_scroll_top == true){
    	$vw_project_management_custom_css .='@media screen and (max-width:575px) {';
		$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='visibility:visible !important;';
		$vw_project_management_custom_css .='} }';
	}else if($vw_project_management_resp_scroll_top == false){
		$vw_project_management_custom_css .='@media screen and (max-width:575px){';
		$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='visibility:hidden !important;';
		$vw_project_management_custom_css .='} }';
	}

	$vw_project_management_resp_stickyheader = get_theme_mod( 'vw_project_management_stickyheader_hide_show',false);
	if($vw_project_management_resp_stickyheader == true && get_theme_mod( 'vw_project_management_sticky_header',false) != true){
    	$vw_project_management_custom_css .='.header-fixed{';
			$vw_project_management_custom_css .='position:static;';
		$vw_project_management_custom_css .='} ';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_project_management_slider_content_padding_top_bottom = get_theme_mod('vw_project_management_slider_content_padding_top_bottom');
	$vw_project_management_slider_content_padding_left_right = get_theme_mod('vw_project_management_slider_content_padding_left_right');
	if($vw_project_management_slider_content_padding_top_bottom != false || $vw_project_management_slider_content_padding_left_right != false){
		$vw_project_management_custom_css .='#slider .carousel-caption{';
			$vw_project_management_custom_css .='top: '.esc_attr($vw_project_management_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_project_management_slider_content_padding_top_bottom).';left: '.esc_attr($vw_project_management_slider_content_padding_left_right).';right: '.esc_attr($vw_project_management_slider_content_padding_left_right).';';
		$vw_project_management_custom_css .='}';
	}
	
	/*-------------- Copyright Alignment ----------------*/

	$vw_project_management_resp_stickycopyright = get_theme_mod( 'vw_project_management_stickycopyright_hide_show',false);
	if($vw_project_management_resp_stickycopyright == true && get_theme_mod( 'vw_project_management_copyright_sticky',false) != true){
    	$vw_project_management_custom_css .='.copyright-sticky{';
			$vw_project_management_custom_css .='position:static;';
		$vw_project_management_custom_css .='} ';
	}

	$vw_project_management_footer_social_icons_font_size = get_theme_mod('vw_project_management_footer_social_icons_font_size','16');
	$vw_project_management_custom_css .='.copyright .widget i{';
		$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_footer_social_icons_font_size).'px;';
	$vw_project_management_custom_css .='}';

	$vw_project_management_align_footer_social_icon = get_theme_mod('vw_project_management_align_footer_social_icon');
	if($vw_project_management_align_footer_social_icon != false){
		$vw_project_management_custom_css .='.copyright .widget{';
			$vw_project_management_custom_css .='text-align: '.esc_attr($vw_project_management_align_footer_social_icon).';';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='
		@media screen and (max-width:720px) {
			.copyright .widget{';
			$vw_project_management_custom_css .='text-align: center;} }';
	}

	$vw_project_management_copyright_alingment = get_theme_mod('vw_project_management_copyright_alingment');
	if($vw_project_management_copyright_alingment != false){
		$vw_project_management_custom_css .='.copyright p{';
			$vw_project_management_custom_css .='text-align: '.esc_attr($vw_project_management_copyright_alingment).';';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='
		@media screen and (max-width:720px) {
			.copyright p{';
			$vw_project_management_custom_css .='text-align: center;} }';
	}

	$vw_project_management_footer_background_color = get_theme_mod('vw_project_management_footer_background_color');
	if($vw_project_management_footer_background_color != false){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='background-color: '.esc_attr($vw_project_management_footer_background_color).';';
		$vw_project_management_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$vw_project_management_preloader_bg_color = get_theme_mod('vw_project_management_preloader_bg_color');
	if($vw_project_management_preloader_bg_color != false){
		$vw_project_management_custom_css .='#preloader{';
			$vw_project_management_custom_css .='background-color: '.esc_attr($vw_project_management_preloader_bg_color).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_preloader_border_color = get_theme_mod('vw_project_management_preloader_border_color');
	if($vw_project_management_preloader_border_color != false){
		$vw_project_management_custom_css .='.loader-line{';
			$vw_project_management_custom_css .='border-color: '.esc_attr($vw_project_management_preloader_border_color).'!important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_preloader_bg_img = get_theme_mod('vw_project_management_preloader_bg_img');
	if($vw_project_management_preloader_bg_img != false){
		$vw_project_management_custom_css .='#preloader{';
			$vw_project_management_custom_css .='background: url('.esc_attr($vw_project_management_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$vw_project_management_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$vw_project_management_slider_image_overlay = get_theme_mod('vw_project_management_slider_image_overlay', true);
	if($vw_project_management_slider_image_overlay == false){
		$vw_project_management_custom_css .='#slider img{';
			$vw_project_management_custom_css .='opacity:1;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_slider_image_overlay_color = get_theme_mod('vw_project_management_slider_image_overlay_color', true);
	if($vw_project_management_slider_image_overlay_color != false){
		$vw_project_management_custom_css .='#slider{';
			$vw_project_management_custom_css .='background-color: '.esc_attr($vw_project_management_slider_image_overlay_color).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_copyright_background_color = get_theme_mod('vw_project_management_copyright_background_color');
	if($vw_project_management_copyright_background_color != false){
		$vw_project_management_custom_css .='#footer-2{';
			$vw_project_management_custom_css .='background-color: '.esc_attr($vw_project_management_copyright_background_color).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_footer_background_image = get_theme_mod('vw_project_management_footer_background_image');
	if($vw_project_management_footer_background_image != false){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='background: url('.esc_attr($vw_project_management_footer_background_image).')no-repeat;background-size:cover';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_theme_lay = get_theme_mod( 'vw_project_management_img_footer','scroll');
	if($vw_project_management_theme_lay == 'fixed'){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$vw_project_management_custom_css .='}';
	}elseif ($vw_project_management_theme_lay == 'scroll'){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_footer_img_position = get_theme_mod('vw_project_management_footer_img_position','center center');
	if($vw_project_management_footer_img_position != false){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='background-position: '.esc_attr($vw_project_management_footer_img_position).'!important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_footer_widgets_heading = get_theme_mod( 'vw_project_management_footer_widgets_heading','Left');
    if($vw_project_management_footer_widgets_heading == 'Left'){
		$vw_project_management_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$vw_project_management_custom_css .='text-align: left;';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_footer_widgets_heading == 'Center'){
		$vw_project_management_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_project_management_custom_css .='text-align: center;';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_footer_widgets_heading == 'Right'){
		$vw_project_management_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_project_management_custom_css .='text-align: right;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_footer_widgets_content = get_theme_mod( 'vw_project_management_footer_widgets_content','Left');
    if($vw_project_management_footer_widgets_content == 'Left'){
		$vw_project_management_custom_css .='#footer .widget{';
		$vw_project_management_custom_css .='text-align: left;';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_footer_widgets_content == 'Center'){
		$vw_project_management_custom_css .='#footer .widget{';
			$vw_project_management_custom_css .='text-align: center;';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_footer_widgets_content == 'Right'){
		$vw_project_management_custom_css .='#footer .widget{';
			$vw_project_management_custom_css .='text-align: right;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_copyright_font_size = get_theme_mod('vw_project_management_copyright_font_size');
	if($vw_project_management_copyright_font_size != false){
		$vw_project_management_custom_css .='#footer-2 a, #footer-2 p{';
			$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_copyright_font_size).';';
		$vw_project_management_custom_css .='}';
	}


	$vw_project_management_copyright_padding_top_bottom = get_theme_mod('vw_project_management_copyright_padding_top_bottom');
	if($vw_project_management_copyright_padding_top_bottom != false){
		$vw_project_management_custom_css .='#footer-2{';
			$vw_project_management_custom_css .='padding-top: '.esc_attr($vw_project_management_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_project_management_copyright_padding_top_bottom).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_footer_padding = get_theme_mod('vw_project_management_footer_padding');
	if($vw_project_management_footer_padding != false){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='padding: '.esc_attr($vw_project_management_footer_padding).' 0;';
		$vw_project_management_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$vw_project_management_scroll_to_top_font_size = get_theme_mod('vw_project_management_scroll_to_top_font_size');
	if($vw_project_management_scroll_to_top_font_size != false){
		$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_scroll_to_top_font_size).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_scroll_to_top_padding = get_theme_mod('vw_project_management_scroll_to_top_padding');
	$vw_project_management_scroll_to_top_padding = get_theme_mod('vw_project_management_scroll_to_top_padding');
	if($vw_project_management_scroll_to_top_padding != false){
		$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='padding-top: '.esc_attr($vw_project_management_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_project_management_scroll_to_top_padding).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_scroll_to_top_width = get_theme_mod('vw_project_management_scroll_to_top_width');
	if($vw_project_management_scroll_to_top_width != false){
		$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='width: '.esc_attr($vw_project_management_scroll_to_top_width).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_scroll_to_top_height = get_theme_mod('vw_project_management_scroll_to_top_height');
	if($vw_project_management_scroll_to_top_height != false){
		$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='height: '.esc_attr($vw_project_management_scroll_to_top_height).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_scroll_to_top_border_radius = get_theme_mod('vw_project_management_scroll_to_top_border_radius');
	if($vw_project_management_scroll_to_top_border_radius != false){
		$vw_project_management_custom_css .='.scrollup i{';
			$vw_project_management_custom_css .='border-radius: '.esc_attr($vw_project_management_scroll_to_top_border_radius).'px;';
		$vw_project_management_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$vw_project_management_logo_padding = get_theme_mod('vw_project_management_logo_padding');
	if($vw_project_management_logo_padding != false){
		$vw_project_management_custom_css .='.logo{';
			$vw_project_management_custom_css .='padding: '.esc_attr($vw_project_management_logo_padding).' !important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_logo_margin = get_theme_mod('vw_project_management_logo_margin');
	if($vw_project_management_logo_margin != false){
		$vw_project_management_custom_css .='.logo{';
			$vw_project_management_custom_css .='margin: '.esc_attr($vw_project_management_logo_margin).';';
		$vw_project_management_custom_css .='}';
	}

	// Site title Font Size
	$vw_project_management_site_title_font_size = get_theme_mod('vw_project_management_site_title_font_size');
	if($vw_project_management_site_title_font_size != false){
		$vw_project_management_custom_css .='.logo p.site-title, .logo h1{';
			$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_site_title_font_size).';';
		$vw_project_management_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_project_management_site_tagline_font_size = get_theme_mod('vw_project_management_site_tagline_font_size');
	if($vw_project_management_site_tagline_font_size != false){
		$vw_project_management_custom_css .='.logo p.site-description{';
			$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_site_tagline_font_size).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_site_title_color = get_theme_mod('vw_project_management_site_title_color');
	if($vw_project_management_site_title_color != false){
		$vw_project_management_custom_css .='p.site-title a, .logo h1 a{';
			$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_site_title_color).'!important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_site_tagline_color = get_theme_mod('vw_project_management_site_tagline_color');
	if($vw_project_management_site_tagline_color != false){
		$vw_project_management_custom_css .='.logo p.site-description{';
			$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_site_tagline_color).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_logo_width = get_theme_mod('vw_project_management_logo_width');
	if($vw_project_management_logo_width != false){
		$vw_project_management_custom_css .='.logo img{';
			$vw_project_management_custom_css .='width: '.esc_attr($vw_project_management_logo_width).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_logo_height = get_theme_mod('vw_project_management_logo_height');
	if($vw_project_management_logo_height != false){
		$vw_project_management_custom_css .='.logo img{';
			$vw_project_management_custom_css .='height: '.esc_attr($vw_project_management_logo_height).';object-fit:cover;';
		$vw_project_management_custom_css .='}';
	}

	// Header Background Color
	$vw_project_management_header_background_color = get_theme_mod('vw_project_management_header_background_color');
	if($vw_project_management_header_background_color != false){
		$vw_project_management_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$vw_project_management_custom_css .='background-color: '.esc_attr($vw_project_management_header_background_color).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_header_img_position = get_theme_mod('vw_project_management_header_img_position','center top');
	if($vw_project_management_header_img_position != false){
		$vw_project_management_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$vw_project_management_custom_css .='background-position: '.esc_attr($vw_project_management_header_img_position).'!important;';
		$vw_project_management_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_project_management_theme_lay = get_theme_mod( 'vw_project_management_blog_layout_option','Left');
    if($vw_project_management_theme_lay == 'Default'){
		$vw_project_management_custom_css .='.post-main-box{';
			$vw_project_management_custom_css .='';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_theme_lay == 'Center'){
		$vw_project_management_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$vw_project_management_custom_css .='text-align:center;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='.post-info{';
			$vw_project_management_custom_css .='margin-top:10px;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='.post-info hr{';
			$vw_project_management_custom_css .='margin:15px auto;';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_theme_lay == 'Left'){
		$vw_project_management_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_project_management_custom_css .='text-align:Left;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='.post-info hr{';
			$vw_project_management_custom_css .='margin-bottom:10px;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='.post-main-box h2{';
			$vw_project_management_custom_css .='margin-top:10px;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='.service-text .more-btn{';
			$vw_project_management_custom_css .='display:inline-block;';
		$vw_project_management_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vw_project_management_blog_page_posts_settings = get_theme_mod( 'vw_project_management_blog_page_posts_settings','Into Blocks');
    if($vw_project_management_blog_page_posts_settings == 'Without Blocks'){
		$vw_project_management_custom_css .='.post-main-box{';
			$vw_project_management_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_project_management_custom_css .='}';
	}

	// featured image dimention
	$vw_project_management_blog_post_featured_image_dimension = get_theme_mod('vw_project_management_blog_post_featured_image_dimension', 'default');
	$vw_project_management_blog_post_featured_image_custom_width = get_theme_mod('vw_project_management_blog_post_featured_image_custom_width',250);
	$vw_project_management_blog_post_featured_image_custom_height = get_theme_mod('vw_project_management_blog_post_featured_image_custom_height',250);
	if($vw_project_management_blog_post_featured_image_dimension == 'custom'){
		$vw_project_management_custom_css .='.post-main-box img{';
			$vw_project_management_custom_css .='width: '.esc_attr($vw_project_management_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($vw_project_management_blog_post_featured_image_custom_height).';';
		$vw_project_management_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$vw_project_management_featured_image_border_radius = get_theme_mod('vw_project_management_featured_image_border_radius', 0);
	if($vw_project_management_featured_image_border_radius != false){
		$vw_project_management_custom_css .='.box-image img, .feature-box img{';
			$vw_project_management_custom_css .='border-radius: '.esc_attr($vw_project_management_featured_image_border_radius).'px;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_featured_image_box_shadow = get_theme_mod('vw_project_management_featured_image_box_shadow',0);
	if($vw_project_management_featured_image_box_shadow != false){
		$vw_project_management_custom_css .='.box-image img, #content-vw img{';
			$vw_project_management_custom_css .='box-shadow: '.esc_attr($vw_project_management_featured_image_box_shadow).'px '.esc_attr($vw_project_management_featured_image_box_shadow).'px '.esc_attr($vw_project_management_featured_image_box_shadow).'px #cccccc;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_singlepost_image_box_shadow = get_theme_mod('vw_project_management_singlepost_image_box_shadow',0);
	if($vw_project_management_singlepost_image_box_shadow != false){
		$vw_project_management_custom_css .='.feature-box img{';
			$vw_project_management_custom_css .='box-shadow: '.esc_attr($vw_project_management_singlepost_image_box_shadow).'px '.esc_attr($vw_project_management_singlepost_image_box_shadow).'px '.esc_attr($vw_project_management_singlepost_image_box_shadow).'px #cccccc;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_related_image_box_shadow = get_theme_mod('vw_project_management_related_image_box_shadow',0);
	if($vw_project_management_related_image_box_shadow != false){
		$vw_project_management_custom_css .='.related-post .box-image img{';
			$vw_project_management_custom_css .='box-shadow: '.esc_attr($vw_project_management_related_image_box_shadow).'px '.esc_attr($vw_project_management_related_image_box_shadow).'px '.esc_attr($vw_project_management_related_image_box_shadow).'px #cccccc;';
		$vw_project_management_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_project_management_button_letter_spacing = get_theme_mod('vw_project_management_button_letter_spacing');
	$vw_project_management_custom_css .='.post-main-box .more-btn{';
		$vw_project_management_custom_css .='letter-spacing: '.esc_attr($vw_project_management_button_letter_spacing).';';
	$vw_project_management_custom_css .='}';

	$vw_project_management_button_border_radius = get_theme_mod('vw_project_management_button_border_radius');
	if($vw_project_management_button_border_radius != false){
		$vw_project_management_custom_css .='.post-main-box .more-btn a{';
			$vw_project_management_custom_css .='border-radius: '.esc_attr($vw_project_management_button_border_radius).'px !important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_button_top_bottom_padding = get_theme_mod('vw_project_management_button_top_bottom_padding');
	$vw_project_management_button_left_right_padding = get_theme_mod('vw_project_management_button_left_right_padding');
	if($vw_project_management_button_top_bottom_padding != false || $vw_project_management_button_left_right_padding != false){
		$vw_project_management_custom_css .='.post-main-box .more-btn{';
			$vw_project_management_custom_css .='padding-top: '.esc_attr($vw_project_management_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($vw_project_management_button_top_bottom_padding).'!important;padding-left: '.esc_attr($vw_project_management_button_left_right_padding).'!important;padding-right: '.esc_attr($vw_project_management_button_left_right_padding).'!important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_button_font_size = get_theme_mod('vw_project_management_button_font_size',14);
	$vw_project_management_custom_css .='.post-main-box .more-btn a{';
		$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_button_font_size).';';
	$vw_project_management_custom_css .='}';

	$vw_project_management_theme_lay = get_theme_mod( 'vw_project_management_button_text_transform','Capitalize');
	if($vw_project_management_theme_lay == 'Capitalize'){
		$vw_project_management_custom_css .='.post-main-box .more-btn a{';
			$vw_project_management_custom_css .='text-transform:Capitalize;';
		$vw_project_management_custom_css .='}';
	}
	if($vw_project_management_theme_lay == 'Lowercase'){
		$vw_project_management_custom_css .='.post-main-box .more-btn a{';
			$vw_project_management_custom_css .='text-transform:Lowercase;';
		$vw_project_management_custom_css .='}';
	}
	if($vw_project_management_theme_lay == 'Uppercase'){
		$vw_project_management_custom_css .='.post-main-box .more-btn a{';
			$vw_project_management_custom_css .='text-transform:Uppercase;';
		$vw_project_management_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$vw_project_management_single_blog_comment_button_text = get_theme_mod('vw_project_management_single_blog_comment_button_text', 'Post Comment');
	if($vw_project_management_single_blog_comment_button_text == ''){
		$vw_project_management_custom_css .='#comments p.form-submit {';
			$vw_project_management_custom_css .='display: none;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_comment_width = get_theme_mod('vw_project_management_single_blog_comment_width');
	if($vw_project_management_comment_width != false){
		$vw_project_management_custom_css .='#comments textarea{';
			$vw_project_management_custom_css .='width: '.esc_attr($vw_project_management_comment_width).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_single_blog_post_navigation_show_hide = get_theme_mod('vw_project_management_single_blog_post_navigation_show_hide',true);
	if($vw_project_management_single_blog_post_navigation_show_hide != true){
		$vw_project_management_custom_css .='.post-navigation{';
			$vw_project_management_custom_css .='display: none;';
		$vw_project_management_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$vw_project_management_display_grid_posts_settings = get_theme_mod( 'vw_project_management_display_grid_posts_settings','Into Blocks');
    if($vw_project_management_display_grid_posts_settings == 'Without Blocks'){
		$vw_project_management_custom_css .='.grid-post-main-box{';
			$vw_project_management_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_grid_featured_image_border_radius = get_theme_mod('vw_project_management_grid_featured_image_border_radius', 0);
	if($vw_project_management_grid_featured_image_border_radius != false){
		$vw_project_management_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$vw_project_management_custom_css .='border-radius: '.esc_attr($vw_project_management_grid_featured_image_border_radius).'px;';
		$vw_project_management_custom_css .='}';
	}
	/*----------------Woocommerce Products Settings ------------------*/

	$vw_project_management_related_product_show_hide = get_theme_mod('vw_project_management_related_product_show_hide',true);
	if($vw_project_management_related_product_show_hide != true){
		$vw_project_management_custom_css .='.related.products{';
			$vw_project_management_custom_css .='display: none;';
		$vw_project_management_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_project_management_products_padding_top_bottom = get_theme_mod('vw_project_management_products_padding_top_bottom');
	if($vw_project_management_products_padding_top_bottom != false){
		$vw_project_management_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_project_management_custom_css .='padding-top: '.esc_attr($vw_project_management_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_project_management_products_padding_top_bottom).'!important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_products_padding_left_right = get_theme_mod('vw_project_management_products_padding_left_right');
	if($vw_project_management_products_padding_left_right != false){
		$vw_project_management_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_project_management_custom_css .='padding-left: '.esc_attr($vw_project_management_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_project_management_products_padding_left_right).'!important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_products_box_shadow = get_theme_mod('vw_project_management_products_box_shadow');
	if($vw_project_management_products_box_shadow != false){
		$vw_project_management_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_project_management_custom_css .='box-shadow: '.esc_attr($vw_project_management_products_box_shadow).'px '.esc_attr($vw_project_management_products_box_shadow).'px '.esc_attr($vw_project_management_products_box_shadow).'px #ddd;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_products_border_radius = get_theme_mod('vw_project_management_products_border_radius');
	if($vw_project_management_products_border_radius != false){
		$vw_project_management_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_project_management_custom_css .='border-radius: '.esc_attr($vw_project_management_products_border_radius).'px;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_products_btn_padding_top_bottom = get_theme_mod('vw_project_management_products_btn_padding_top_bottom');
	if($vw_project_management_products_btn_padding_top_bottom != false){
		$vw_project_management_custom_css .='.woocommerce a.button{';
			$vw_project_management_custom_css .='padding-top: '.esc_attr($vw_project_management_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_project_management_products_btn_padding_top_bottom).' !important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_products_btn_padding_left_right = get_theme_mod('vw_project_management_products_btn_padding_left_right');
	if($vw_project_management_products_btn_padding_left_right != false){
		$vw_project_management_custom_css .='.woocommerce a.button{';
			$vw_project_management_custom_css .='padding-left: '.esc_attr($vw_project_management_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_project_management_products_btn_padding_left_right).' !important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_products_button_border_radius = get_theme_mod('vw_project_management_products_button_border_radius', 0);
	if($vw_project_management_products_button_border_radius != false){
		$vw_project_management_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$vw_project_management_custom_css .='border-radius: '.esc_attr($vw_project_management_products_button_border_radius).'px !important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_woocommerce_sale_position = get_theme_mod( 'vw_project_management_woocommerce_sale_position','right');
    if($vw_project_management_woocommerce_sale_position == 'left'){
		$vw_project_management_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_project_management_custom_css .='left: 14px !important; right: auto !important;';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_woocommerce_sale_position == 'right'){
		$vw_project_management_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_project_management_custom_css .='left: auto!important; right: 14px !important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_woocommerce_sale_font_size = get_theme_mod('vw_project_management_woocommerce_sale_font_size');
	if($vw_project_management_woocommerce_sale_font_size != false){
		$vw_project_management_custom_css .='.woocommerce span.onsale{';
			$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_woocommerce_sale_font_size).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_woocommerce_sale_padding_top_bottom = get_theme_mod('vw_project_management_woocommerce_sale_padding_top_bottom');
	if($vw_project_management_woocommerce_sale_padding_top_bottom != false){
		$vw_project_management_custom_css .='.woocommerce span.onsale{';
			$vw_project_management_custom_css .='padding-top: '.esc_attr($vw_project_management_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_project_management_woocommerce_sale_padding_top_bottom).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_woocommerce_sale_padding_left_right = get_theme_mod('vw_project_management_woocommerce_sale_padding_left_right');
	if($vw_project_management_woocommerce_sale_padding_left_right != false){
		$vw_project_management_custom_css .='.woocommerce span.onsale{';
			$vw_project_management_custom_css .='padding-left: '.esc_attr($vw_project_management_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($vw_project_management_woocommerce_sale_padding_left_right).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_woocommerce_sale_border_radius = get_theme_mod('vw_project_management_woocommerce_sale_border_radius', 0);
	if($vw_project_management_woocommerce_sale_border_radius != false){
		$vw_project_management_custom_css .='.woocommerce span.onsale{';
			$vw_project_management_custom_css .='border-radius: '.esc_attr($vw_project_management_woocommerce_sale_border_radius).'px;';
		$vw_project_management_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_project_management_sticky_header_padding = get_theme_mod('vw_project_management_sticky_header_padding');
	if($vw_project_management_sticky_header_padding != false){
		$vw_project_management_custom_css .='.header-fixed{';
			$vw_project_management_custom_css .='padding: '.esc_attr($vw_project_management_sticky_header_padding).';';
		$vw_project_management_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_project_management_social_icon_font_size = get_theme_mod('vw_project_management_social_icon_font_size');
	if($vw_project_management_social_icon_font_size != false){
		$vw_project_management_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_social_icon_font_size).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_social_icon_padding = get_theme_mod('vw_project_management_social_icon_padding');
	if($vw_project_management_social_icon_padding != false){
		$vw_project_management_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_project_management_custom_css .='padding: '.esc_attr($vw_project_management_social_icon_padding).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_social_icon_width = get_theme_mod('vw_project_management_social_icon_width');
	if($vw_project_management_social_icon_width != false){
		$vw_project_management_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_project_management_custom_css .='width: '.esc_attr($vw_project_management_social_icon_width).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_social_icon_height = get_theme_mod('vw_project_management_social_icon_height');
	if($vw_project_management_social_icon_height != false){
		$vw_project_management_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_project_management_custom_css .='height: '.esc_attr($vw_project_management_social_icon_height).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_social_icon_border_radius = get_theme_mod('vw_project_management_social_icon_border_radius');
	if($vw_project_management_social_icon_border_radius != false){
		$vw_project_management_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_project_management_custom_css .='border-radius: '.esc_attr($vw_project_management_social_icon_border_radius).'px;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_project_management_resp_menu_toggle_btn_bg_color');
	if($vw_project_management_resp_menu_toggle_btn_bg_color != false){
		$vw_project_management_custom_css .='.toggle-nav i,#mySidenav .closebtn{';
			$vw_project_management_custom_css .='background: '.esc_attr($vw_project_management_resp_menu_toggle_btn_bg_color).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_grid_featured_image_box_shadow = get_theme_mod('vw_project_management_grid_featured_image_box_shadow',0);
	if($vw_project_management_grid_featured_image_box_shadow != false){
		$vw_project_management_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$vw_project_management_custom_css .='box-shadow: '.esc_attr($vw_project_management_grid_featured_image_box_shadow).'px '.esc_attr($vw_project_management_grid_featured_image_box_shadow).'px '.esc_attr($vw_project_management_grid_featured_image_box_shadow).'px #cccccc;';
		$vw_project_management_custom_css .='}';
	}


	/*-------------- Menus Setings ----------------*/

	$vw_project_management_navigation_menu_font_size = get_theme_mod('vw_project_management_navigation_menu_font_size');
	if($vw_project_management_navigation_menu_font_size != false){
		$vw_project_management_custom_css .='.main-navigation ul a{';
			$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_navigation_menu_font_size).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_navigation_menu_font_weight = get_theme_mod('vw_project_management_navigation_menu_font_weight','600');
	if($vw_project_management_navigation_menu_font_weight != false){
		$vw_project_management_custom_css .='.main-navigation ul a{';
			$vw_project_management_custom_css .='font-weight: '.esc_attr($vw_project_management_navigation_menu_font_weight).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_header_menus_hover_color = get_theme_mod('vw_project_management_header_menus_hover_color');
	if($vw_project_management_header_menus_hover_color != false){
		$vw_project_management_custom_css .='.main-navigation ul a:hover{';
			$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_header_menus_hover_color).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_header_submenus_color = get_theme_mod('vw_project_management_header_submenus_color');
	if($vw_project_management_header_submenus_color != false){
		$vw_project_management_custom_css .='.main-navigation ul ul a{';
			$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_header_submenus_color).';';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_header_submenus_hover_color = get_theme_mod('vw_project_management_header_submenus_hover_color');
	if($vw_project_management_header_submenus_hover_color != false){
		$vw_project_management_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_header_submenus_hover_color).'!important;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_menus_item = get_theme_mod( 'vw_project_management_menus_item_style','None');
    if($vw_project_management_menus_item == 'None'){
		$vw_project_management_custom_css .='.main-navigation ul a{';
			$vw_project_management_custom_css .='';
		$vw_project_management_custom_css .='}';
	}else if($vw_project_management_menus_item == 'Zoom In'){
		$vw_project_management_custom_css .='.main-navigation ul a:hover{';
			$vw_project_management_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$vw_project_management_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$vw_project_management_theme_lay = get_theme_mod( 'vw_project_management_footer_template','vw_project_management-footer-one');
    if($vw_project_management_theme_lay == 'vw_project_management-footer-one'){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='';
		$vw_project_management_custom_css .='}';

	}else if($vw_project_management_theme_lay == 'vw_project_management-footer-two'){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_project_management_custom_css .='color:#000;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='#footer ul li::before{';
			$vw_project_management_custom_css .='background:#000;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_project_management_custom_css .='border: 1px solid #000;';
		$vw_project_management_custom_css .='}';

	}else if($vw_project_management_theme_lay == 'vw_project_management-footer-three'){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='background: #232524;';
		$vw_project_management_custom_css .='}';
	}
	else if($vw_project_management_theme_lay == 'vw_project_management-footer-four'){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='background: #FE6726;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_project_management_custom_css .='color:#fff;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='#footer ul li::before{';
			$vw_project_management_custom_css .='background:#fff;';
		$vw_project_management_custom_css .='}';
		$vw_project_management_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_project_management_custom_css .='border: 1px solid #fff;';
		$vw_project_management_custom_css .='}';
	}
	else if($vw_project_management_theme_lay == 'vw_project_management-footer-five'){
		$vw_project_management_custom_css .='#footer{';
			$vw_project_management_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$vw_project_management_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$vw_project_management_button_footer_heading_letter_spacing = get_theme_mod('vw_project_management_button_footer_heading_letter_spacing',1);
	$vw_project_management_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vw_project_management_custom_css .='letter-spacing: '.esc_attr($vw_project_management_button_footer_heading_letter_spacing).'px;';
	$vw_project_management_custom_css .='}';

	$vw_project_management_button_footer_font_size = get_theme_mod('vw_project_management_button_footer_font_size','30');
	$vw_project_management_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vw_project_management_custom_css .='font-size: '.esc_attr($vw_project_management_button_footer_font_size).'px;';
	$vw_project_management_custom_css .='}';

	$vw_project_management_theme_lay = get_theme_mod( 'vw_project_management_button_footer_text_transform','Capitalize');
	if($vw_project_management_theme_lay == 'Capitalize'){
		$vw_project_management_custom_css .='#footer h3{';
			$vw_project_management_custom_css .='text-transform:Capitalize;';
		$vw_project_management_custom_css .='}';
	}
	if($vw_project_management_theme_lay == 'Lowercase'){
		$vw_project_management_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_project_management_custom_css .='text-transform:Lowercase;';
		$vw_project_management_custom_css .='}';
	}
	if($vw_project_management_theme_lay == 'Uppercase'){
		$vw_project_management_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_project_management_custom_css .='text-transform:Uppercase;';
		$vw_project_management_custom_css .='}';
	}

	$vw_project_management_footer_heading_weight = get_theme_mod('vw_project_management_footer_heading_weight','500');
	if($vw_project_management_footer_heading_weight != false){
		$vw_project_management_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_project_management_custom_css .='font-weight: '.esc_attr($vw_project_management_footer_heading_weight).';';
		$vw_project_management_custom_css .='}';
	}
	
	$vw_project_management_slider_first_color = get_theme_mod('vw_project_management_slider_first_color');

	$vw_project_management_slider_second_color = get_theme_mod('vw_project_management_slider_second_color');

	if($vw_project_management_slider_first_color != false || $vw_project_management_slider_second_color != false){
		$vw_project_management_custom_css .='.box{
		background: linear-gradient(to top, '.esc_attr($vw_project_management_slider_first_color).', '.esc_attr($vw_project_management_slider_second_color).');
		}';
	}

	$vw_project_management_services_icon_color = get_theme_mod('vw_project_management_services_icon_color');
	if($vw_project_management_services_icon_color != false){
		$vw_project_management_custom_css .='#about-sec i{';
			$vw_project_management_custom_css .='color: '.esc_attr($vw_project_management_services_icon_color).';';
		$vw_project_management_custom_css .='}';
	}