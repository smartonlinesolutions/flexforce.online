<?php
	/* a template for displaying the header area */

	// header container
	$header_width = mediz_get_option('general', 'header-width', 'boxed');
	
	if( $header_width == 'boxed' ){
		$header_container_class = ' mediz-container';
	}else if( $header_width == 'custom' ){
		$header_container_class = ' mediz-header-custom-container';
	}else{
		$header_container_class = ' mediz-header-full';
	}

	$header_style = mediz_get_option('general', 'header-boxed-style', 'menu-right');
	$navigation_offset = mediz_get_option('general', 'fixed-navigation-anchor-offset', '');

	$header_wrap_class  = ' mediz-style-' . $header_style;
	$header_wrap_class .= ' mediz-sticky-navigation mediz-style-slide';
?>	
<header class="mediz-header-wrap mediz-header-style-boxed <?php echo esc_attr($header_wrap_class); ?>" <?php
		if( !empty($navigation_offset) ){
			echo 'data-navigation-offset="' . esc_attr($navigation_offset) . '" ';
		}
	?> >
	<div class="mediz-header-container clearfix <?php echo esc_attr($header_container_class); ?>">
		<div class="mediz-header-container-inner clearfix">	

			<div class="mediz-header-background  mediz-item-mglr" ></div>
			<div class="mediz-header-container-item clearfix">
				<?php

					if( $header_style == 'splitted-menu' ){
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
					if( $header_style == 'center-menu' || $header_style == 'splitted-menu' ){
						$menu_right_class = ' mediz-item-mglr mediz-navigation-top mediz-navigation-right';
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

						if( has_nav_menu('right_menu') && $header_style == 'splitted-menu' ){
							echo '<div class="mediz-main-menu-left-wrap clearfix mediz-item-pdlr mediz-navigation-top mediz-navigation-left" >';
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

			</div><!-- mediz-header-container-inner -->
		</div><!-- mediz-header-container-item -->
	</div><!-- mediz-header-container -->
</header><!-- header -->