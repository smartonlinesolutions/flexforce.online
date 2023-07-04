<?php
	// mobile menu template
	echo '<div class="mediz-mobile-header-wrap" >';

	// top bar
	$top_bar = mediz_get_option('general', 'enable-top-bar-on-mobile', 'disable');
	if( $top_bar == 'enable' ){
		get_template_part('header/header', 'top-bar');
	}

	// header
	$logo_position = mediz_get_option('general', 'mobile-logo-position', 'logo-left');
	$sticky_mobile_nav = mediz_get_option('general', 'enable-mobile-navigation-sticky', 'enable');
	echo '<div class="mediz-mobile-header mediz-header-background mediz-style-slide ';
	if($sticky_mobile_nav == 'enable'){
		echo 'mediz-sticky-mobile-navigation ';
	}
	echo '" id="mediz-mobile-header" >';
	echo '<div class="mediz-mobile-header-container mediz-container clearfix" >';
	echo mediz_get_logo(array(
		'mobile' => true,
		'wrapper-class' => ($logo_position == 'logo-center'? 'mediz-mobile-logo-center': '')
	));

	echo '<div class="mediz-mobile-menu-right" >';

	// search icon
	$enable_search = (mediz_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
	if( $enable_search ){
		echo '<div class="mediz-main-menu-search" id="mediz-mobile-top-search" >';
		echo '<i class="fa fa-search" ></i>';
		echo '</div>';
		mediz_get_top_search();
	}

	// cart icon
	$enable_cart = (mediz_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
	if( $enable_cart ){
		echo '<div class="mediz-main-menu-cart" id="mediz-mobile-menu-cart" >';
		echo '<i class="fa fa-shopping-cart" data-mediz-lb="top-bar" ></i>';
		mediz_get_woocommerce_bar();
		echo '</div>';
	}

	if( $logo_position == 'logo-center' ){
		echo '</div>';
		echo '<div class="mediz-mobile-menu-left" >';
	}

	// mobile menu
	if( has_nav_menu('mobile_menu') ){
		mediz_get_custom_menu(array(
			'type' => mediz_get_option('general', 'right-menu-type', 'right'),
			'container-class' => 'mediz-mobile-menu',
			'button-class' => 'mediz-mobile-menu-button',
			'icon-class' => 'fa fa-bars',
			'id' => 'mediz-mobile-menu',
			'theme-location' => 'mobile_menu'
		));
	}
	echo '</div>'; // mediz-mobile-menu-right/left
	echo '</div>'; // mediz-mobile-header-container
	echo '</div>'; // mediz-mobile-header

	echo '</div>'; // mediz-mobile-header-wrap