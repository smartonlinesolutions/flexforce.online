<?php
	/* a template for displaying the top bar */

	if( mediz_get_option('general', 'enable-top-bar', 'enable') == 'enable' ){

		$top_bar_width = mediz_get_option('general', 'top-bar-width', 'boxed');
		$top_bar_container_class = '';

		if( $top_bar_width == 'boxed' ){
			$top_bar_container_class = 'mediz-container ';
		}else if( $top_bar_width == 'custom' ){
			$top_bar_container_class = 'mediz-top-bar-custom-container ';
		}else{
			$top_bar_container_class = 'mediz-top-bar-full ';
		}

		$top_bar_menu = mediz_get_option('general', 'top-bar-menu-position', 'none');

		echo '<div class="mediz-top-bar" >';
		echo '<div class="mediz-top-bar-background" ></div>';
		echo '<div class="mediz-top-bar-container ' . esc_attr($top_bar_container_class) . '" >';
		echo '<div class="mediz-top-bar-container-inner clearfix" >';

		$language_flag = mediz_get_wpml_flag();
		$left_text = mediz_get_option('general', 'top-bar-left-text', '');
		if( !empty($left_text) || !empty($language_flag) || 
			($top_bar_menu == 'left' && has_nav_menu('top_bar_menu')) ){

			echo '<div class="mediz-top-bar-left mediz-item-pdlr">';
			if( $top_bar_menu == 'left' ){
				mediz_get_top_bar_menu('left');
			}
			echo gdlr_core_escape_content($language_flag);
			echo gdlr_core_escape_content(gdlr_core_text_filter($left_text));
			echo '</div>';
		}

		$right_text = mediz_get_option('general', 'top-bar-right-text', '');
		$top_bar_social = mediz_get_option('general', 'enable-top-bar-social', 'enable');
		if( !empty($right_text) || $top_bar_social == 'enable' || 
			($top_bar_menu == 'right' && has_nav_menu('top_bar_menu')) ){
			echo '<div class="mediz-top-bar-right mediz-item-pdlr">';
			if( $top_bar_menu == 'right' ){
				mediz_get_top_bar_menu('right');
			}

			if( !empty($right_text) ){
				echo '<div class="mediz-top-bar-right-text">';
				echo gdlr_core_escape_content(gdlr_core_text_filter($right_text));
				echo '</div>';
			}

			if( $top_bar_social == 'enable' ){
				echo '<div class="mediz-top-bar-right-social" >';
				get_template_part('header/header', 'social');
				echo '</div>';	
			}
			echo '</div>';	
		}
		echo '</div>'; // mediz-top-bar-container-inner
		echo '</div>'; // mediz-top-bar-container
		echo '</div>'; // mediz-top-bar

	}  // top bar
?>