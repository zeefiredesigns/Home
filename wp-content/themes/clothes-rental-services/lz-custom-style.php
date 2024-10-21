<?php 

	$luzuk_clothes_rental_services_custom_style = '';

	// Logo Size
	$luzuk_clothes_rental_services_logo_top_padding = get_theme_mod('luzuk_clothes_rental_services_logo_top_padding');
	$luzuk_clothes_rental_services_logo_bottom_padding = get_theme_mod('luzuk_clothes_rental_services_logo_bottom_padding');
	$luzuk_clothes_rental_services_logo_left_padding = get_theme_mod('luzuk_clothes_rental_services_logo_left_padding');
	$luzuk_clothes_rental_services_logo_right_padding = get_theme_mod('luzuk_clothes_rental_services_logo_right_padding');

	if( $luzuk_clothes_rental_services_logo_top_padding != '' || $luzuk_clothes_rental_services_logo_bottom_padding != '' || $luzuk_clothes_rental_services_logo_left_padding != '' || $luzuk_clothes_rental_services_logo_right_padding != ''){
		$luzuk_clothes_rental_services_custom_style .=' .logo {';
			$luzuk_clothes_rental_services_custom_style .=' padding-top: '.esc_attr($luzuk_clothes_rental_services_logo_top_padding).'px; padding-bottom: '.esc_attr($luzuk_clothes_rental_services_logo_bottom_padding).'px; padding-left: '.esc_attr($luzuk_clothes_rental_services_logo_left_padding).'px; padding-right: '.esc_attr($luzuk_clothes_rental_services_logo_right_padding).'px;';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_logo_size = get_theme_mod('luzuk_clothes_rental_services_logo_size');
	if( $luzuk_clothes_rental_services_logo_size != '') {
		if($luzuk_clothes_rental_services_logo_size == 100) {
			$luzuk_clothes_rental_services_custom_style .=' .custom-logo-link img {';
				$luzuk_clothes_rental_services_custom_style .=' width: 350px;';
			$luzuk_clothes_rental_services_custom_style .=' }';
		} else if($luzuk_clothes_rental_services_logo_size >= 10 && $luzuk_clothes_rental_services_logo_size < 100) {
			$luzuk_clothes_rental_services_custom_style .=' .custom-logo-link img {';
				$luzuk_clothes_rental_services_custom_style .=' width: '.esc_attr($luzuk_clothes_rental_services_logo_size).'%;';
			$luzuk_clothes_rental_services_custom_style .=' }';
		}
	}

	// Header Image
	$header_image_url = luzuk_clothes_rental_services_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$luzuk_clothes_rental_services_custom_style .=' #inner-pages-header {';
			$luzuk_clothes_rental_services_custom_style .=' background-image: url('. esc_url( $header_image_url ).') !important; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$luzuk_clothes_rental_services_custom_style .=' }';

		$luzuk_clothes_rental_services_custom_style .='  #header .top-head {';
			$luzuk_clothes_rental_services_custom_style .=' background: none ';
		$luzuk_clothes_rental_services_custom_style .=' }';
	} else {
		$luzuk_clothes_rental_services_custom_style .=' #inner-pages-header {';
			$luzuk_clothes_rental_services_custom_style .=' background: radial-gradient(circle at center, rgba(0,0,0,0) 0%, #000000 100%); ';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_hide_show = get_theme_mod('luzuk_clothes_rental_services_slider_hide_show',false);
	if( $luzuk_clothes_rental_services_slider_hide_show == true){
		$luzuk_clothes_rental_services_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$luzuk_clothes_rental_services_custom_style .=' display:none;';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}


	$luzuk_clothes_rental_services_headermenubg_col = get_theme_mod('luzuk_clothes_rental_services_headermenubg_col');
	if ( $luzuk_clothes_rental_services_headermenubg_col != '') {
		$luzuk_clothes_rental_services_custom_style .=' #header .m-head {';
			$luzuk_clothes_rental_services_custom_style .=' background:'.esc_attr($luzuk_clothes_rental_services_headermenubg_col).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_menu_color = get_theme_mod('luzuk_clothes_rental_services_menu_color');
	if ( $luzuk_clothes_rental_services_menu_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' .primary-menu a, .primary-menu li .icon{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_menu_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_menuhover_color = get_theme_mod('luzuk_clothes_rental_services_menuhover_color');
	if ( $luzuk_clothes_rental_services_menuhover_color != '') {
		$luzuk_clothes_rental_services_custom_style .='.primary-menu li:hover .icon, .primary-menu li a:hover{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_menuhover_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_submenu_color = get_theme_mod('luzuk_clothes_rental_services_submenu_color');
	if ( $luzuk_clothes_rental_services_submenu_color != '') {
		$luzuk_clothes_rental_services_custom_style .='.primary-menu ul a{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_submenu_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_submenubg_color = get_theme_mod('luzuk_clothes_rental_services_submenubg_color');
	if ( $luzuk_clothes_rental_services_submenubg_color != '') {
		$luzuk_clothes_rental_services_custom_style .='.primary-menu ul{';
			$luzuk_clothes_rental_services_custom_style .=' background:'.esc_attr($luzuk_clothes_rental_services_submenubg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_socialicon_color = get_theme_mod('luzuk_clothes_rental_services_socialicon_color');
	if ( $luzuk_clothes_rental_services_socialicon_color != '') {
		$luzuk_clothes_rental_services_custom_style .='#header .s-media a i{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_socialicon_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_socialiconhrv_color = get_theme_mod('luzuk_clothes_rental_services_socialiconhrv_color');
	if ( $luzuk_clothes_rental_services_socialiconhrv_color != '') {
		$luzuk_clothes_rental_services_custom_style .='#header .s-media a:hover i{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_socialiconhrv_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}
	
	$luzuk_clothes_rental_services_headersearchbg_color = get_theme_mod('luzuk_clothes_rental_services_headersearchbg_color');
	if ( $luzuk_clothes_rental_services_headersearchbg_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' .search-form .search-field {';
			$luzuk_clothes_rental_services_custom_style .=' background:'.esc_attr($luzuk_clothes_rental_services_headersearchbg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';

	}

	$luzuk_clothes_rental_services_headersearchicon_color = get_theme_mod('luzuk_clothes_rental_services_headersearchicon_color');
	if ( $luzuk_clothes_rental_services_headersearchicon_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' .search-form:after{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_headersearchicon_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}
	

	$luzuk_clothes_rental_services_searchtext_color = get_theme_mod('luzuk_clothes_rental_services_searchtext_color');
	if ( $luzuk_clothes_rental_services_searchtext_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' .search-form .search-field, .search-form .search-field::placeholder{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_searchtext_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

		

	//site title tagline
	$luzuk_clothes_rental_services_site_title_color = get_theme_mod('luzuk_clothes_rental_services_site_title_color');
	if ( $luzuk_clothes_rental_services_site_title_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' h1.site-title a, p.site-title a{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_site_title_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_site_tagline_color = get_theme_mod('luzuk_clothes_rental_services_site_tagline_color');
	if ( $luzuk_clothes_rental_services_site_tagline_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' p.site-description{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_site_tagline_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	//layout width
	$luzuk_clothes_rental_services_boxfull_width = get_theme_mod('luzuk_clothes_rental_services_boxfull_width');
	if ($luzuk_clothes_rental_services_boxfull_width !== '') {
		switch ($luzuk_clothes_rental_services_boxfull_width) {
			case 'container':
				$luzuk_clothes_rental_services_custom_style .= ' body, #header, .bottom-header {
					max-width: 1140px;
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
					}';
				break;
			case 'container-fluid':
				$luzuk_clothes_rental_services_custom_style .= ' body, #header, .bottom-header { 
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
					}';
				break;
			case 'none':
				// No specific width specified, so no additional style needed.
				break;
			default:
				// Handle unexpected values.
				break;
		}
	}

	//Menu animation
	$luzuk_clothes_rental_services_dropdown_anim = get_theme_mod('luzuk_clothes_rental_services_dropdown_anim');

	if ( $luzuk_clothes_rental_services_dropdown_anim != '') {
		$luzuk_clothes_rental_services_custom_style .=' .primary-menu ul{';
			$luzuk_clothes_rental_services_custom_style .=' animation:'.esc_attr($luzuk_clothes_rental_services_dropdown_anim).' 1s ease;';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	//slider colors

	$luzuk_clothes_rental_services_slider_bg_color = get_theme_mod('luzuk_clothes_rental_services_slider_bg_color');
	if ( $luzuk_clothes_rental_services_slider_bg_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider{';
			$luzuk_clothes_rental_services_custom_style .=' background:'.esc_attr($luzuk_clothes_rental_services_slider_bg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_bgwave_color = get_theme_mod('luzuk_clothes_rental_services_slider_bgwave_color');
	if ( $luzuk_clothes_rental_services_slider_bgwave_color != '') {
		$luzuk_clothes_rental_services_custom_style .='#slider .slider-wave1 svg path, #slider .slider-wave2 svg path{';
			$luzuk_clothes_rental_services_custom_style .=' fill:'.esc_attr($luzuk_clothes_rental_services_slider_bgwave_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_heading_color = get_theme_mod('luzuk_clothes_rental_services_slider_heading_color');
	if ( $luzuk_clothes_rental_services_slider_heading_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider .content h3 {';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_slider_heading_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_title_color = get_theme_mod('luzuk_clothes_rental_services_slider_title_color');
	if ( $luzuk_clothes_rental_services_slider_title_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider h2 {';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_slider_title_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}


	$luzuk_clothes_rental_services_slider_description_color = get_theme_mod('luzuk_clothes_rental_services_slider_description_color');
	if ( $luzuk_clothes_rental_services_slider_description_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider p{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_slider_description_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_btntext_color = get_theme_mod('luzuk_clothes_rental_services_slider_btntext_color');
	if ( $luzuk_clothes_rental_services_slider_btntext_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider .sbtn1{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_slider_btntext_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_btnbg_color = get_theme_mod('luzuk_clothes_rental_services_slider_btnbg_color');
	if ( $luzuk_clothes_rental_services_slider_btnbg_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider .sbtn1{';
			$luzuk_clothes_rental_services_custom_style .=' background:'.esc_attr($luzuk_clothes_rental_services_slider_btnbg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_btntexthrv_color = get_theme_mod('luzuk_clothes_rental_services_slider_btntexthrv_color');
	if ( $luzuk_clothes_rental_services_slider_btntexthrv_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider .sbtn1:hover{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_slider_btntexthrv_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_btnbghrv_color = get_theme_mod('luzuk_clothes_rental_services_slider_btnbghrv_color');
	if ( $luzuk_clothes_rental_services_slider_btnbghrv_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider .sbtn1:hover{';
			$luzuk_clothes_rental_services_custom_style .=' background:'.esc_attr($luzuk_clothes_rental_services_slider_btnbghrv_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}


	$luzuk_clothes_rental_services_slider_pagination_color = get_theme_mod('luzuk_clothes_rental_services_slider_pagination_color');
	if ( $luzuk_clothes_rental_services_slider_pagination_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider .carousel-indicators li{';
			$luzuk_clothes_rental_services_custom_style .=' background-color:'.esc_attr($luzuk_clothes_rental_services_slider_pagination_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_offternumber_color = get_theme_mod('luzuk_clothes_rental_services_slider_offternumber_color');
	if ( $luzuk_clothes_rental_services_slider_offternumber_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider .slider-dscprice b, #slider .slider-dscprice span{';
			$luzuk_clothes_rental_services_custom_style .=' color:'.esc_attr($luzuk_clothes_rental_services_slider_offternumber_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	
	$luzuk_clothes_rental_services_slider_offternumber_color = get_theme_mod('luzuk_clothes_rental_services_slider_offternumber_color');
	if ( $luzuk_clothes_rental_services_slider_offternumber_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider .slider-dscsvgtxt{';
			$luzuk_clothes_rental_services_custom_style .=' fill:'.esc_attr($luzuk_clothes_rental_services_slider_offternumber_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_slider_offetbg_color = get_theme_mod('luzuk_clothes_rental_services_slider_offetbg_color');
	if ( $luzuk_clothes_rental_services_slider_offetbg_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #slider .slider-dscprice{';
			$luzuk_clothes_rental_services_custom_style .=' background:'.esc_attr($luzuk_clothes_rental_services_slider_offetbg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}



	//about us color

	$luzuk_clothes_rental_services_aboutusimg1heading_color = get_theme_mod('luzuk_clothes_rental_services_aboutusimg1heading_color');
	if ( $luzuk_clothes_rental_services_aboutusimg1heading_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .imgbx1 h2 {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutusimg1heading_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutusimg2heading_color = get_theme_mod('luzuk_clothes_rental_services_aboutusimg2heading_color');
	if ( $luzuk_clothes_rental_services_aboutusimg2heading_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .imgbx2 h2 {';
			$luzuk_clothes_rental_services_custom_style .=' background: linear-gradient(to right top, '.esc_attr($luzuk_clothes_rental_services_aboutusimg2heading_color).', '.esc_attr($luzuk_clothes_rental_services_aboutusimg2heading_color).', #fff, #fff, '.esc_attr($luzuk_clothes_rental_services_aboutusimg2heading_color).');';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutusimg2heading_color = get_theme_mod('luzuk_clothes_rental_services_aboutusimg2heading_color');
	if ( $luzuk_clothes_rental_services_aboutusimg2heading_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .imgbx2 h2 {';
			$luzuk_clothes_rental_services_custom_style .=' -webkit-text-stroke: 2px '.esc_attr($luzuk_clothes_rental_services_aboutusimg2heading_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutussocialicon_color = get_theme_mod('luzuk_clothes_rental_services_aboutussocialicon_color');
	if ( $luzuk_clothes_rental_services_aboutussocialicon_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .icon i {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutussocialicon_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutustitle_color = get_theme_mod('luzuk_clothes_rental_services_aboutustitle_color');
	if ( $luzuk_clothes_rental_services_aboutustitle_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .r-abt h2 {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutustitle_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutusdescription_color = get_theme_mod('luzuk_clothes_rental_services_aboutusdescription_color');
	if ( $luzuk_clothes_rental_services_aboutusdescription_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .r-abt p {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutusdescription_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutuslists_color = get_theme_mod('luzuk_clothes_rental_services_aboutuslists_color');
	if ( $luzuk_clothes_rental_services_aboutuslists_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .r-abt .fdsa p {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutuslists_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutuslistsicon_color = get_theme_mod('luzuk_clothes_rental_services_aboutuslistsicon_color');
	if ( $luzuk_clothes_rental_services_aboutuslistsicon_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .fdsa li:before {';
			$luzuk_clothes_rental_services_custom_style .=' background: '.esc_attr($luzuk_clothes_rental_services_aboutuslistsicon_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutusboxicon_color = get_theme_mod('luzuk_clothes_rental_services_aboutusboxicon_color');
	if ( $luzuk_clothes_rental_services_aboutusboxicon_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .boxhead i {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutusboxicon_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutusboxtitle_color = get_theme_mod('luzuk_clothes_rental_services_aboutusboxtitle_color');
	if ( $luzuk_clothes_rental_services_aboutusboxtitle_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .r-abt .boxhead h2 {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutusboxtitle_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutusboxdescription_color = get_theme_mod('luzuk_clothes_rental_services_aboutusboxdescription_color');
	if ( $luzuk_clothes_rental_services_aboutusboxdescription_color != '') {
		$luzuk_clothes_rental_services_custom_style .='#aboutus-section .r-abt .boxhead p {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutusboxdescription_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}
	
	$luzuk_clothes_rental_services_aboutusbtntext_color = get_theme_mod('luzuk_clothes_rental_services_aboutusbtntext_color');
	if ( $luzuk_clothes_rental_services_aboutusbtntext_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .read-btn a {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutusbtntext_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutusbtnbg_color = get_theme_mod('luzuk_clothes_rental_services_aboutusbtnbg_color');
	if ( $luzuk_clothes_rental_services_aboutusbtnbg_color != '') {
		$luzuk_clothes_rental_services_custom_style .='#aboutus-section .read-btn a {';
			$luzuk_clothes_rental_services_custom_style .=' background-color: '.esc_attr($luzuk_clothes_rental_services_aboutusbtnbg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutusbtntexthrv_color = get_theme_mod('luzuk_clothes_rental_services_aboutusbtntexthrv_color');
	if ( $luzuk_clothes_rental_services_aboutusbtntexthrv_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .read-btn a:hover {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_aboutusbtntexthrv_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_aboutusbtnbghrv_color = get_theme_mod('luzuk_clothes_rental_services_aboutusbtnbghrv_color');
	if ( $luzuk_clothes_rental_services_aboutusbtnbghrv_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #aboutus-section .read-btn a:hover {';
			$luzuk_clothes_rental_services_custom_style .=' background: '.esc_attr($luzuk_clothes_rental_services_aboutusbtnbghrv_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}


	//new arrival colors
	$luzuk_clothes_rental_services_newarrivalheading_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalheading_color');
	if ( $luzuk_clothes_rental_services_newarrivalheading_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .newarrival-head h2 {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_newarrivalheading_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalheadingbrd_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalheadingbrd_color');
	if ( $luzuk_clothes_rental_services_newarrivalheadingbrd_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .newarrival-head h2:before {';
			$luzuk_clothes_rental_services_custom_style .=' border-color: '.esc_attr($luzuk_clothes_rental_services_newarrivalheadingbrd_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalsubheading_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalsubheading_color');
	if ( $luzuk_clothes_rental_services_newarrivalsubheading_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .newarrival-head h3 {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_newarrivalsubheading_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalproducttitle_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalproducttitle_color');
	if ( $luzuk_clothes_rental_services_newarrivalproducttitle_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .pcontent h3{';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_newarrivalproducttitle_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalproducttitlehrv_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalproducttitlehrv_color');
	if ( $luzuk_clothes_rental_services_newarrivalproducttitlehrv_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .newarrivalus-single:hover .pcontent h3 {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_newarrivalproducttitlehrv_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalproductprice_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalproductprice_color');
	if ( $luzuk_clothes_rental_services_newarrivalproductprice_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .price ins, #newarrival-section .Pr_bx{';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_newarrivalproductprice_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalproductbtntext_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalproductbtntext_color');
	if ( $luzuk_clothes_rental_services_newarrivalproductbtntext_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .cart-contents {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_newarrivalproductbtntext_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalproductbtnbg_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalproductbtnbg_color');
	if ( $luzuk_clothes_rental_services_newarrivalproductbtnbg_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .cart-contents {';
			$luzuk_clothes_rental_services_custom_style .=' background: '.esc_attr($luzuk_clothes_rental_services_newarrivalproductbtnbg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalproductbtntexthrv_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalproductbtntexthrv_color');
	if ( $luzuk_clothes_rental_services_newarrivalproductbtntexthrv_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .cart-contents:hover {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_newarrivalproductbtntexthrv_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalviewmorebtntext_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalviewmorebtntext_color');
	if ( $luzuk_clothes_rental_services_newarrivalviewmorebtntext_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .btn a {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_newarrivalviewmorebtntext_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_newarrivalviewmorebtnbg_color = get_theme_mod('luzuk_clothes_rental_services_newarrivalviewmorebtnbg_color');
	if ( $luzuk_clothes_rental_services_newarrivalviewmorebtnbg_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #newarrival-section .btn a {';
			$luzuk_clothes_rental_services_custom_style .=' background: '.esc_attr($luzuk_clothes_rental_services_newarrivalviewmorebtnbg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}


	//footer colors
	$luzuk_clothes_rental_services_footertext_color = get_theme_mod('luzuk_clothes_rental_services_footertext_color');
	if ( $luzuk_clothes_rental_services_footertext_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #colophon h1, #colophon h2, #colophon h3, #colophon h4, #colophon h5,
		 #colophon h6,#colophon,#colophon p,.site-footer a, .site-footer p, #colophon caption, .site-footer .widget_rss .rss-date,
		  .site-footer .widget_rss li cite {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_footertext_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}	

	$luzuk_clothes_rental_services_footerbg_color = get_theme_mod('luzuk_clothes_rental_services_footerbg_color');
	if ( $luzuk_clothes_rental_services_footerbg_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' .footer-overlay {';
			$luzuk_clothes_rental_services_custom_style .=' background: '.esc_attr($luzuk_clothes_rental_services_footerbg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}


	$luzuk_clothes_rental_services_footercopyright_color = get_theme_mod('luzuk_clothes_rental_services_footercopyright_color');
	if ( $luzuk_clothes_rental_services_footercopyright_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' #colophon .site-info p {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_footercopyright_color).' !important;';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_footerscrolltotoptext_color = get_theme_mod('luzuk_clothes_rental_services_footerscrolltotoptext_color');
	if ( $luzuk_clothes_rental_services_footerscrolltotoptext_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' .back-to-top {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_footerscrolltotoptext_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_footerscrolltotopbg_color = get_theme_mod('luzuk_clothes_rental_services_footerscrolltotopbg_color');
	if ( $luzuk_clothes_rental_services_footerscrolltotopbg_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' .back-to-top {';
			$luzuk_clothes_rental_services_custom_style .=' background: '.esc_attr($luzuk_clothes_rental_services_footerscrolltotopbg_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_footerscrolltotoptexthover_color = get_theme_mod('luzuk_clothes_rental_services_footerscrolltotoptexthover_color');
	if ( $luzuk_clothes_rental_services_footerscrolltotoptexthover_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' .back-to-top:hover .back-to-top-text {';
			$luzuk_clothes_rental_services_custom_style .=' color: '.esc_attr($luzuk_clothes_rental_services_footerscrolltotoptexthover_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}

	$luzuk_clothes_rental_services_footerscrolltotophover_color = get_theme_mod('luzuk_clothes_rental_services_footerscrolltotophover_color');
	if ( $luzuk_clothes_rental_services_footerscrolltotophover_color != '') {
		$luzuk_clothes_rental_services_custom_style .=' .back-to-top:hover::after {';
			$luzuk_clothes_rental_services_custom_style .=' background: '.esc_attr($luzuk_clothes_rental_services_footerscrolltotophover_color).';';
		$luzuk_clothes_rental_services_custom_style .=' }';
	}