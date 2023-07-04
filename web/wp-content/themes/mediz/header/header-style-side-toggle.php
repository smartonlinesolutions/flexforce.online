<?php
	/* a template for displaying the header area */
?>	
<header class="mediz-header-wrap mediz-header-style-side-toggle" >
	<?php
		$display_logo = mediz_get_option('general', 'header-side-toggle-display-logo', 'enable');
		if( $display_logo == 'enable' ){
			echo mediz_get_logo(array('padding' => false));
		}

		$navigation_class = '';
		if( mediz_get_option('general', 'enable-main-navigation-submenu-indicator', 'disable') == 'enable' ){
			$navigation_class = 'mediz-navigation-submenu-indicator ';
		}
	?>
	<div class="mediz-navigation clearfix <?php echo esc_attr($navigation_class); ?>" >
	<?php
		// print main menu
		if( has_nav_menu('main_menu') ){
			mediz_get_custom_menu(array(
				'container-class' => 'mediz-main-menu',
				'button-class' => 'mediz-side-menu-icon',
				'icon-class' => 'fa fa-bars',
				'id' => 'mediz-main-menu',
				'theme-location' => 'main_menu',
				'type' => mediz_get_option('general', 'header-side-toggle-menu-type', 'overlay')
			));
		}
	?>
	</div><!-- mediz-navigation -->
	<?php

		// menu right side
		$enable_search = (mediz_get_option('general', 'enable-main-navigation-search', 'enable') == 'enable')? true: false;
		$enable_cart = (mediz_get_option('general', 'enable-main-navigation-cart', 'enable') == 'enable' && class_exists('WooCommerce'))? true: false;
		if( $enable_search || $enable_cart ){ 
			echo '<div class="mediz-header-icon mediz-pos-bottom" >';

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

			echo '</div>'; // mediz-main-menu-right-wrap
		}

	?>
</header><!-- header -->