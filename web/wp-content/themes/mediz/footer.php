<?php
/**
 * The template for displaying the footer
 */
	
	$post_option = mediz_get_post_option(get_the_ID());
	if( empty($post_option['enable-footer']) || $post_option['enable-footer'] == 'default' ){
		$enable_footer = mediz_get_option('general', 'enable-footer', 'enable');
	}else{
		$enable_footer = $post_option['enable-footer'];
	}	
	if( empty($post_option['enable-copyright']) || $post_option['enable-copyright'] == 'default' ){
		$enable_copyright = mediz_get_option('general', 'enable-copyright', 'enable');
	}else{
		$enable_copyright = $post_option['enable-copyright'];
	}

	$fixed_footer = mediz_get_option('general', 'fixed-footer', 'disable');
	echo '</div>'; // mediz-page-wrapper

	if( $enable_footer == 'enable' || $enable_copyright == 'enable' ){

		if( $fixed_footer == 'enable' ){
			echo '</div>'; // mediz-body-wrapper

			echo '<footer class="mediz-fixed-footer" id="mediz-fixed-footer" >';
		}else{
			echo '<footer>';
		}

		if( $enable_footer == 'enable' ){

			$mediz_footer_layout = array(
				'footer-1'=>array('mediz-column-60'),
				'footer-2'=>array('mediz-column-15', 'mediz-column-15', 'mediz-column-15', 'mediz-column-15'),
				'footer-3'=>array('mediz-column-15', 'mediz-column-15', 'mediz-column-30',),
				'footer-4'=>array('mediz-column-20', 'mediz-column-20', 'mediz-column-20'),
				'footer-5'=>array('mediz-column-20', 'mediz-column-40'),
				'footer-6'=>array('mediz-column-40', 'mediz-column-20'),
			);
			$footer_style = mediz_get_option('general', 'footer-style');
			$footer_style = empty($footer_style)? 'footer-2': $footer_style;

			$count = 0;
			$has_widget = false;
			foreach( $mediz_footer_layout[$footer_style] as $layout ){ $count++;
				if( is_active_sidebar('footer-' . $count) ){ $has_widget = true; }
			}

			if( $has_widget ){ 	

				$footer_column_divider = mediz_get_option('general', 'enable-footer-column-divider', 'enable');
				$extra_class  = ($footer_column_divider == 'enable')? ' mediz-with-column-divider': '';

				echo '<div class="mediz-footer-wrapper ' . esc_attr($extra_class) . '" >';
				echo '<div class="mediz-footer-container mediz-container clearfix" >';
				
				$count = 0;
				foreach( $mediz_footer_layout[$footer_style] as $layout ){ $count++;
					echo '<div class="mediz-footer-column mediz-item-pdlr ' . esc_attr($layout) . '" >';
					if( is_active_sidebar('footer-' . $count) ){
						dynamic_sidebar('footer-' . $count); 
					}
					echo '</div>';
				}
				
				echo '</div>'; // mediz-footer-container
				echo '</div>'; // mediz-footer-wrapper 
			}
		} // enable footer

		if( $enable_copyright == 'enable' ){
			$copyright_style = mediz_get_option('general', 'copyright-style', 'center');
			
			if( $copyright_style == 'center' ){
				$copyright_text = mediz_get_option('general', 'copyright-text');

				if( !empty($copyright_text) ){
					echo '<div class="mediz-copyright-wrapper" >';
					echo '<div class="mediz-copyright-container mediz-container">';
					echo '<div class="mediz-copyright-text mediz-item-pdlr">';
					echo gdlr_core_escape_content(gdlr_core_text_filter($copyright_text));
					echo '</div>';
					echo '</div>';
					echo '</div>'; // mediz-copyright-wrapper
				}
			}else if( $copyright_style == 'left-right' ){
				$copyright_left = mediz_get_option('general', 'copyright-left');
				$copyright_right = mediz_get_option('general', 'copyright-right');

				if( !empty($copyright_left) || !empty($copyright_right) ){
					echo '<div class="mediz-copyright-wrapper" >';
					echo '<div class="mediz-copyright-container mediz-container clearfix">';
					if( !empty($copyright_left) ){
						echo '<div class="mediz-copyright-left mediz-item-pdlr">';
						echo gdlr_core_escape_content(gdlr_core_text_filter($copyright_left));
						echo '</div>';
					}

					if( !empty($copyright_right) ){
						echo '<div class="mediz-copyright-right mediz-item-pdlr">';
						echo gdlr_core_escape_content(gdlr_core_text_filter($copyright_right));
						echo '</div>';
					}
					echo '</div>';
					echo '</div>'; // mediz-copyright-wrapper
				}
			}
		}

		echo '</footer>';

		if( $fixed_footer == 'disable' ){
			echo '</div>'; // mediz-body-wrapper
		}
		echo '</div>'; // mediz-body-outer-wrapper

	// disable footer	
	}else{
		echo '</div>'; // mediz-body-wrapper
		echo '</div>'; // mediz-body-outer-wrapper
	}

	$header_style = mediz_get_option('general', 'header-style', 'plain');
	
	if( $header_style == 'side' || $header_style == 'side-toggle' ){
		echo '</div>'; // mediz-header-side-nav-content
	}

	$back_to_top = mediz_get_option('general', 'enable-back-to-top', 'disable');
	if( $back_to_top == 'enable' ){
		echo '<a href="#mediz-top-anchor" class="mediz-footer-back-to-top-button" id="mediz-footer-back-to-top-button"><i class="fa fa-angle-up" ></i></a>';
	}
?>

<?php wp_footer(); ?>

</body>
</html>