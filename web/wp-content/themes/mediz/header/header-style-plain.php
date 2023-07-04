<?php
	/* a template for displaying the header area */

	// header container
	$body_layout = mediz_get_option('general', 'layout', 'full');
	$body_margin = mediz_get_option('general', 'body-margin', '0px');
	$header_width = mediz_get_option('general', 'header-width', 'boxed');
	$header_background_style = mediz_get_option('general', 'header-background-style', 'solid');
	
	if( $header_width == 'boxed' ){
		$header_container_class = ' mediz-container';
	}else if( $header_width == 'custom' ){
		$header_container_class = ' mediz-header-custom-container';
	}else{
		$header_container_class = ' mediz-header-full';
	}

	$header_style = mediz_get_option('general', 'header-plain-style', 'menu-right');
	$navigation_offset = mediz_get_option('general', 'fixed-navigation-anchor-offset', '');

	$header_wrap_class  = ' mediz-style-' . $header_style;
	$header_wrap_class .= ' mediz-sticky-navigation';
	if( $header_style == 'center-logo' || $body_layout == 'boxed' || 
		$body_margin != '0px' || $header_background_style == 'transparent' ){
		
		$header_wrap_class .= ' mediz-style-slide';
	}else{
		$header_wrap_class .= ' mediz-style-fixed';
	}
?>	
<header class="mediz-header-wrap mediz-header-style-plain <?php echo esc_attr($header_wrap_class); ?>" <?php
		if( !empty($navigation_offset) ){
			echo 'data-navigation-offset="' . esc_attr($navigation_offset) . '" ';
		}
	?> >
	<div class="mediz-header-background" ></div>
	<div class="mediz-header-container <?php echo esc_attr($header_container_class); ?>">
			
		<div class="mediz-header-container-inner clearfix">
			<?php

				if( $header_style == 'splitted-menu' && has_nav_menu('main_menu') ){
					add_filter('mediz_center_menu_item', 'mediz_get_logo');
				}else{
					echo mediz_get_logo();
				}

				$navigation_class = '';
				if( mediz_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
					$navigation_class = 'mediz-navigation-submenu-indicator ';
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

				if( $header_style == 'splitted-menu' ){
					remove_filter('mediz_center_menu_item', 'mediz_get_logo');
				}
				
				// menu right side
				$menu_right_class = '';
				if( in_array($header_style, array('center-menu', 'center-logo', 'splitted-menu')) ){
					$menu_right_class = ' mediz-item-mglr mediz-navigation-top';
				}

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
						echo '<div class="mediz-main-menu-cart" id="mediz-menu-cart" >';
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
					if( has_nav_menu('right_menu') && $header_style != 'splitted-menu' ){
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

					if( has_nav_menu('right_menu') && $header_style == 'splitted-menu'  ){
						echo '<div class="mediz-main-menu-left-wrap clearfix mediz-item-pdlr mediz-navigation-top" >';
						mediz_get_custom_menu(array(
							'container-class' => 'mediz-main-menu-right',
							'button-class' => 'mediz-right-menu-button mediz-top-menu-button',
							'icon-class' => 'fa fa-bars',
							'id' => 'mediz-right-menu',
							'theme-location' => 'right_menu',
							'type' => mediz_get_option('general', 'right-menu-type', 'right')
						));
						echo '</div>';
					}
				}
			?>
			</div><!-- mediz-navigation -->

		</div><!-- mediz-header-inner -->
	</div><!-- mediz-header-container -->
</header><!-- header -->