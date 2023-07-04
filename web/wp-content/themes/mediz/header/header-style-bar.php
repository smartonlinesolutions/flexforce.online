<?php
	/* a template for displaying the header area */

	// header container
	$body_layout = mediz_get_option('general', 'layout', 'full');
	$body_margin = mediz_get_option('general', 'body-margin', '0px');
	$header_width = mediz_get_option('general', 'header-width', 'boxed');
	$header_style = mediz_get_option('general', 'header-bar-navigation-align', 'center');
	$header_background_style = mediz_get_option('general', 'header-background-style', 'solid');

	$header_wrap_class = '';
	if( $header_style == 'center-logo' ){
		$header_wrap_class .= ' mediz-style-center';
	}else{
		$header_wrap_class .= ' mediz-style-left';
	}

	$header_container_class = '';
	if( $header_width == 'boxed' ){
		$header_container_class .= ' mediz-container';
	}else if( $header_width == 'custom' ){
		$header_container_class .= ' mediz-header-custom-container';
	}else{
		$header_container_class .= ' mediz-header-full';
	}

	$navigation_wrap_class  = ' mediz-style-' . $header_background_style;
	$navigation_wrap_class .= ' mediz-sticky-navigation mediz-sticky-navigation-height';
	if( $header_style == 'center' || $header_style == 'center-logo' ){
		$navigation_wrap_class .= ' mediz-style-center';
	}else{
		$navigation_wrap_class .= ' mediz-style-left';
	}
	if( $body_layout == 'boxed' || $body_margin != '0px' ){
		$navigation_wrap_class .= ' mediz-style-slide';
	}else{
		$navigation_wrap_class .= '  mediz-style-fixed';
	}
	if( $header_background_style == 'transparent' ){
		$navigation_wrap_class .= ' mediz-without-placeholder';
	}

?>	
<header class="mediz-header-wrap mediz-header-style-bar mediz-header-background <?php echo esc_attr($header_wrap_class); ?>" >
	<div class="mediz-header-container clearfix <?php echo esc_attr($header_container_class); ?>">
		<div class="mediz-header-container-inner">
		<?php
			echo mediz_get_logo();

			$logo_right_text = '';
			for( $i=1; $i<=3; $i++ ){
				$icon = mediz_get_option('general', 'logo-right-box' . $i . '-icon', '');
				$title = mediz_get_option('general', 'logo-right-box' . $i . '-title', '');
				$caption = mediz_get_option('general', 'logo-right-box' . $i . '-caption', '');

				if( !empty($icon) || !empty($title) || !empty($caption) ){
					$logo_right_text .= '<div class="mediz-logo-right-text-wrap" >';
					$logo_right_text .= '<i class="mediz-logo-right-text-icon ' . esc_attr($icon) . '" ></i>';
					$logo_right_text .= '<div class="mediz-logo-right-text-content-wrap" >';
					if( !empty($title) ){
						$logo_right_text .= '<div class="mediz-logo-right-text-title" >' . gdlr_core_text_filter($title) . '</div>';
					}
					if( !empty($caption) ){
						$logo_right_text .= '<div class="mediz-logo-right-text-caption" >' . gdlr_core_text_filter($caption) . '</div>';
					}
					$logo_right_text .= '</div>';
					$logo_right_text .= '</div>';
				}
			}
			if( !empty($logo_right_text) ){
				echo '<div class="mediz-logo-right-text mediz-item-pdlr clearfix" >' . gdlr_core_text_filter($logo_right_text) . '</div>';
			}
		?>
		</div>
	</div>
</header><!-- header -->
<div class="mediz-navigation-bar-wrap <?php echo esc_attr($navigation_wrap_class); ?>" >
	<div class="mediz-navigation-background" ></div>
	<div class="mediz-navigation-container clearfix <?php echo esc_attr($header_container_class); ?>">
		<?php
			$navigation_class = '';
			if( mediz_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
				$navigation_class .= 'mediz-navigation-submenu-indicator ';
			}
		?>
		<div class="mediz-navigation mediz-item-pdlr clearfix <?php echo esc_attr($navigation_class); ?>" >
		<?php
			// print main menu
			if( has_nav_menu('main_menu') ){
				echo '<div class="mediz-main-menu" id="mediz-main-menu" >';
				wp_nav_menu(array(
					'theme_location'=>'main_menu', 
					'container'=> '', 
					'menu_class'=> 'sf-menu',
					'walker' => new mediz_menu_walker()
				));
				
				mediz_get_navigation_slide_bar();
				
				echo '</div>';
			}

			// menu right side
			$menu_right_class = '';
			if( $header_style == 'center' || $header_style == 'center-logo' ){
				$menu_right_class = ' mediz-item-mglr mediz-navigation-top';
			}

			// menu right side
			$enable_search = (mediz_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
			$enable_cart = (mediz_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
			$enable_right_button = (mediz_get_option('general', 'enable-main-navigation-right-button', 'disable') == 'enable')? true: false;
			if( has_nav_menu('right_menu') || $enable_search || $enable_cart || $enable_right_button ){
				echo '<div class="mediz-main-menu-right-wrap clearfix ' . esc_attr($menu_right_class) . '" >';

				// search icon
				if( $enable_search ){
					$search_icon = mediz_get_option('general', 'main-navigation-search-icon', 'fa fa-search');
					echo '<div class="mediz-main-menu-search" id="mediz-top-search" >';
					echo '<i class="' . esc_attr($search_icon) . '" ></i>';
					echo '</div>';
					mediz_get_top_search();
				}

				// cart icon
				if( $enable_cart ){
					$cart_icon = mediz_get_option('general', 'main-navigation-cart-icon', 'fa fa-shopping-cart');
					echo '<div class="mediz-main-menu-cart" id="mediz-main-menu-cart" >';
					echo '<i class="' . esc_attr($cart_icon) . '" data-mediz-lb="top-bar" ></i>';
					mediz_get_woocommerce_bar();
					echo '</div>';
				}

				// menu right button
				if( $enable_right_button ){
					$button_class = 'mediz-style-' . mediz_get_option('general', 'main-navigation-right-button-style', 'default');
					$button_link = mediz_get_option('general', 'main-navigation-right-button-link', '');
					$button_link_target = mediz_get_option('general', 'main-navigation-right-button-link-target', '_self');
					if( !empty($button_link) ){
						echo '<a class="mediz-main-menu-right-button mediz-button-1 ' . esc_attr($button_class) . '" href="' . esc_url($button_link) . '" target="' . esc_attr($button_link_target) . '" >';
						echo mediz_get_option('general', 'main-navigation-right-button-text', '');
						echo '</a>';
					}
				
					$button_class = 'mediz-style-' . mediz_get_option('general', 'main-navigation-right-button-style-2', 'default');
					$button_link = mediz_get_option('general', 'main-navigation-right-button-link-2', '');
					$button_link_target = mediz_get_option('general', 'main-navigation-right-button-link-target-2', '_self');
					if( !empty($button_link) ){
						echo '<a class="mediz-main-menu-right-button mediz-button-2 ' . esc_attr($button_class) . '" href="' . esc_url($button_link) . '" target="' . esc_attr($button_link_target) . '" >';
						echo mediz_get_option('general', 'main-navigation-right-button-text-2', '');
						echo '</a>';
					}
				}

				// print right menu
				if( has_nav_menu('right_menu') ){
					mediz_get_custom_menu(array(
						'container-class' => 'mediz-main-menu-right',
						'button-class' => 'mediz-right-menu-button mediz-top-menu-button',
						'icon-class' => 'fa fa-bars',
						'id' => 'mediz-right-menu',
						'theme-location' => 'right_menu',
						'type' => mediz_get_option('general', 'right-menu-type', 'right')
					));
				}

				echo '</div>'; // mediz-main-menu-right-wrap
			}
		?>
		</div><!-- mediz-navigation -->

	</div><!-- mediz-header-container -->
</div><!-- mediz-navigation-bar-wrap -->