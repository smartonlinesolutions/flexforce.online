<?php
	/*	
	*	Goodlayers Option
	*	---------------------------------------------------------------------
	*	This file store an array of theme options
	*	---------------------------------------------------------------------
	*/	

	// add custom css for theme option
	add_filter('gdlr_core_theme_option_top_file_write', 'mediz_gdlr_core_theme_option_top_file_write', 10, 2);
	if( !function_exists('mediz_gdlr_core_theme_option_top_file_write') ){
		function mediz_gdlr_core_theme_option_top_file_write( $css, $option_slug ){
			if( $option_slug != 'goodlayers_main_menu' ) return;

			ob_start();
?>
.mediz-body h1, .mediz-body h2, .mediz-body h3, .mediz-body h4, .mediz-body h5, .mediz-body h6{ margin-top: 0px; margin-bottom: 20px; line-height: 1.2; font-weight: 700; }
#poststuff .gdlr-core-page-builder-body h2{ padding: 0px; margin-bottom: 20px; line-height: 1.2; font-weight: 700; }
#poststuff .gdlr-core-page-builder-body h1{ padding: 0px; font-weight: 700; }

.gdlr-core-flexslider.gdlr-core-bullet-style-cylinder .flex-control-nav li a{ width: 27px; height: 7px; }
.gdlr-core-newsletter-item.gdlr-core-style-rectangle .gdlr-core-newsletter-email input[type="email"]{ line-height: 17px; padding: 30px 20px; height: 65px; }
.gdlr-core-newsletter-item.gdlr-core-style-rectangle .gdlr-core-newsletter-submit input[type="submit"]{ height: 65px; font-size: 13px; }

.gdlr-core-blockquote-item.gdlr-core-left-align .gdlr-core-blockquote-item-quote{ float: none; }
.gdlr-core-blockquote-item.gdlr-core-right-align .gdlr-core-blockquote-item-quote{ float: none; }
.gdlr-core-blockquote-item .gdlr-core-blockquote-item-author:before{ display: none; }
.gdlr-core-blockquote-item .gdlr-core-blockquote-item-author-position { display: block; margin-top: 5px; }
.gdlr-core-blockquote-item .gdlr-core-blockquote-item-author-position:before{ display: none; }
.gdlr-core-blockquote-item .gdlr-core-blockquote-item-author-name:after{ border-bottom-width: 3px; border-bottom-style: solid; content: " "; display: inline-block; width: 30px; margin-left: 15px; margin-bottom: 0.25em; }

.gdlr-core-newsletter-item.gdlr-core-style-curve .gdlr-core-newsletter-email{ padding-right: 0px; }
.gdlr-core-newsletter-item.gdlr-core-style-curve .gdlr-core-newsletter-email input[type="email"]{ border-radius: 3px 0px 0px 3px; -moz-border-radius: 3px 0px 0px 3px; -webkit-border-radius: 3px 0px 0px 3px; }
.gdlr-core-newsletter-item.gdlr-core-style-curve .gdlr-core-newsletter-submit input[type="submit"]{ border-radius: 0px 3px 3px 0px; -moz-border-radius: 0px 3px 3px 0px; -webkit-border-radius: 0px 3px 3px 0px; }

.gdlr-core-blog-widget{ padding-top: 0px; border: 0px; margin-bottom: 25px; }
.gdlr-core-blog-widget .gdlr-core-blog-title,
.gdlr-core-blog-widget.gdlr-core-style-small .gdlr-core-blog-title{ font-weight: 600; }
.gdlr-core-item-list-wrap.gdlr-core-featured .gdlr-core-blog-widget  .gdlr-core-blog-thumbnail{ margin-bottom: 0px;
	border-radius: 3px 3px 0px 0px !important; -webkit-border-radius: 3px 3px 0px 0px !important; -moz-border-radius: 3px 3px 0px 0px !important; }
.gdlr-core-item-list-wrap.gdlr-core-featured .gdlr-core-blog-widget .gdlr-core-blog-widget-content{ padding: 28px; background: #f3f3f3; 
	border-radius: 0px 0px 3px 3px !important; -webkit-border-radius: 0px 0px 3px 3px !important; -moz-border-radius: 0px 0px 3px 3px !important; }

.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap{ cursor: pointer; border-right-width: 1px; border-right-style: solid; position: relative; padding: 40px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap:last-child{ border-right: 0px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap.gdlr-core-active .gdlr-core-tab-feature3-title-overlay{ opacity: 1; }

.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap .gdlr-core-tab-feature3-title-content{ position: relative; overflow: hidden; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap .gdlr-core-tab-feature3-title-sign{ position: relative; float: left; width: 0px; margin-right: 0px;
	border-width: 2px 0px; border-style: solid; margin-top: 0.6em; 
	border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; 
	transition: width 150ms; -moz-transition: width 150ms; -o-transition: width 150ms; -webkit-transition: width 150ms; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap.gdlr-core-active .gdlr-core-tab-feature3-title-sign{ margin-right: 12px; width: 21px; }

.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title{ font-size: 19px; margin-bottom: 7px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-caption{ font-size: 14px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-overlay{ opacity: 0; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-wrap{ position: relative; display: none; background-size: cover; background-position: center; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-wrap.gdlr-core-active{ display: block; }
.gdlr-core-tab-feature3-item .gdlr-core-container{ position: relative; padding-bottom: 90px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-left{ float: left; max-width: 26%; margin-right: 85px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-left-title{ font-size: 36px; margin-bottom: 41px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-left-title-divider{width: 40px;border-width: 2px 0px;border-style: solid;display: inline-block;border-radius: 2px;margin-left: 20px;}
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-left-image{ border-radius: 3px; overflow: hidden; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-right{ font-size: 23px; overflow: hidden; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-top{ height: 450px; min-height: 90px; position: relative; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-video-lb{ text-align: center; font-size: 24px; display: block; width: 90px; line-height: 90px;
	position: absolute; left: 50%; top: 50%; margin-top: -45px; margin-left: -45px;
    border-radius: 50%; -moz-border-radius: 50%; -webkit-border-radius: 50%; 
	box-shadow: 0px 0px 30px rgba(0,0,0,0.25); -webkit-box-shadow: 0px 0px 30px rgba(0,0,0,0.25); -moz-box-shadow: 0px 0px 30px rgba(0,0,0,0.25); }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-video-lb i{ padding-left: 10px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-top-overlay{ position: absolute; top: 0px; right: 0px; bottom: 200px; left: 0px; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-top-overlay2{ position: absolute; top: 0px; right: 0px; left: 0px; height: 95px;
	background: url('<?php echo get_template_directory_uri(); ?>/images/featured-tab-shadow.png') top repeat-x; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-bottom-overlay{ position: absolute; height: 200px; right: 0px; bottom: 0px; left: 0px; }

.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap{ background: #ffffff; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap .gdlr-core-tab-feature3-title-sign,
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap .gdlr-core-tab-feature3-title{ color: #505050; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap .gdlr-core-tab-feature3-caption{ color: #9d9d9d; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap.gdlr-core-active .gdlr-core-tab-feature3-title-sign,
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap.gdlr-core-active .gdlr-core-tab-feature3-title{ color: #ffffff; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap.gdlr-core-active .gdlr-core-tab-feature3-caption{ color: #9ebeff; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-overlay{ opacity: 0; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px;
	background: 		linear-gradient(to right, #14429c, #2e6ac4);
    -moz-background: 	linear-gradient(to right, #14429c, #2e6ac4);
    -o-background: 		linear-gradient(to right, #14429c, #2e6ac4);
    -webkit-background: linear-gradient(to right, #14429c, #2e6ac4); 
	transition: opacity 150ms; -moz-transition: opacity 150ms; -o-transition: opacity 150ms; -webkit-transition: opacity 150ms; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-top-overlay{ 
	background: 		linear-gradient(rgba(23, 68, 158, 0), rgba(23, 68, 158, 1));
    -moz-background: 	linear-gradient(rgba(23, 68, 158, 0), rgba(23, 68, 158, 1));
    -o-background: 		linear-gradient(rgba(23, 68, 158, 0), rgba(23, 68, 158, 1));
    -webkit-background: linear-gradient(rgba(23, 68, 158, 0), rgba(23, 68, 158, 1)); }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-bottom-overlay{ background: #17449e; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-left-title{ color: #fff; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-left-title-divider{ border-color: #a8c5ff; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-right{ color: #fff; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-video-lb{ background: #fff; }
.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-video-lb i{ color: #17449e; }

.gdlr-core-personnel-style-grid .gdlr-core-personnel-list-divider{ width: auto; }
.gdlr-core-personnel-style-grid .gdlr-core-personnel-list-content-wrap{ padding-top: 32px; }
.gdlr-core-personnel-style-grid .gdlr-core-personnel-list-divider{ padding-top: 20px; }

/* custom css */
.gdlr-core-counter-item .gdlr-core-counter-item-number{ margin-bottom: 13px; }
.gdlr-core-input-wrap.gdlr-core-large input:not([type="button"]):not([type="submit"]):not([type="file"]), .gdlr-core-input-wrap.gdlr-core-large select{ padding: 18px 22px 20px; }
.gdlr-core-input-wrap.gdlr-core-large textarea{ height: 150px; }
.gdlr-core-widget-box-shortcode .gdlr-core-widget-box-shortcode-title{ font-size: 18px; }
.gdlr-core-widget-box-shortcode{ font-size: 16px; }
.gdlr-core-accordion-style-background-title-icon.gdlr-core-icon-pos-left .gdlr-core-accordion-item-title:before{ margin-top: -2px; }
.gdlr-core-accordion-style-background-title-icon .gdlr-core-accordion-item-title:before{ font-size: 22px; }
.gdlr-core-social-network-item .gdlr-core-social-network-icon{ margin-left: 16px; }
.gdlr-core-blog-info-wrapper .gdlr-core-head{ margin-right: 11px; }
.gdlr-core-recent-post-widget-wrap.gdlr-core-style-1 .gdlr-core-recent-post-widget-title{ margin-bottom: 1px; margin-top: -3px; }
.gdlr-core-recent-post-widget-wrap.gdlr-core-style-1 .gdlr-core-recent-post-widget{ margin-bottom: 25px; }
.gdlr-core-blog-info-wrapper .gdlr-core-blog-info{ font-size: 11.5px; letter-spacing: 1px; }
.gdlr-core-recent-comment-widget .gdlr-core-recent-comment-widget-item{ margin-bottom: 38px; }
.gdlr-core-blog-content a.gdlr-core-excerpt-read-more.gdlr-core-button.gdlr-core-rectangle{ padding: 13px 30px 14px 30px; font-size: 12px; }
.gdlr-core-blog-full .gdlr-core-excerpt-read-more{ margin-top: 29px; }
ul.gdlr-core-custom-menu-widget.gdlr-core-menu-style-list2 li a:before{ font-size: 21px; }
ul.gdlr-core-custom-menu-widget.gdlr-core-menu-style-list2 li a{ font-weight: 500; padding: 13px 0px; font-size: 15px; }
.gdlr-core-accordion-style-icon.gdlr-core-with-divider .gdlr-core-accordion-item-tab{ margin-bottom: 19px; }
.gdlr-core-accordion-style-icon .gdlr-core-accordion-item-title{ margin-bottom: 24px; }
.gdlr-core-newsletter-item.gdlr-core-style-rectangle .gdlr-core-newsletter-submit input[type="submit"]{ height: 57px; border-radius: 0px 3px 3px 0px; }
.gdlr-core-newsletter-item.gdlr-core-style-rectangle .gdlr-core-newsletter-email input[type="email"]{ padding: 17px 20px; height: 57px; border-radius: 3px 0px 0px 3px; }
.gdlr-core-column-service-item .gdlr-core-column-service-read-more i{  margin-left: 12px; }
.gdlr-core-blog-widget.gdlr-core-style-large .gdlr-core-blog-title { margin-bottom: 5px; }
.gdlr-core-testimonial-item .gdlr-core-testimonial-author-image{ width: 70px; }
.gdlr-core-personnel-thumbnail-hover-excerpt{ font-size: 15px; }
.gdlr-core-newsletter-item.gdlr-core-style-rectangle .gdlr-core-newsletter-form{ max-width: 580px; }
.gdlr-core-center-align.gdlr-core-title-item .gdlr-core-title-item-title i{ margin-right: 15px; }

@media only screen and (max-width: 767px){
	.gdlr-core-item-list-wrap.gdlr-core-featured .gdlr-core-blog-widget{ margin-bottom: 40px; }
	.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-title-wrap{ border: 0px; padding: 20px 30px; }
	.gdlr-core-tab-feature3-item .gdlr-core-tab-feature3-content-left{ float: none; margin-right: 0px; max-width: 100%; margin-bottom: 30px; }
	.gdlr-core-tab-feature3-item .gdlr-core-container{ padding-bottom: 40px; }
}

.jBox-wrapper.jBox-Modal { z-index: 18000 !important; }
<?php
			$css .= ob_get_contents();
			ob_end_clean(); 

			return $css;
		}
	}
	add_filter('gdlr_core_theme_option_bottom_file_write', 'mediz_gdlr_core_theme_option_bottom_file_write', 10, 2);
	if( !function_exists('mediz_gdlr_core_theme_option_bottom_file_write') ){
		function mediz_gdlr_core_theme_option_bottom_file_write( $css, $option_slug ){
			if( $option_slug != 'goodlayers_main_menu' ) return;

			$general = get_option('mediz_general');

			if( !empty($general['enable-fixed-navigation-slide-bar']) && $general['enable-fixed-navigation-slide-bar'] == 'disable' ){
				$css .= '.mediz-fixed-navigation .mediz-navigation .mediz-navigation-slide-bar{ display: none !important; }';
			}

			if( !empty($general['item-padding']) ){
				$margin = 2 * intval(str_replace('px', '', $general['item-padding']));
				if( !empty($margin) && is_numeric($margin) ){
					$css .= '.mediz-item-mgb, .gdlr-core-item-mgb{ margin-bottom: ' . $margin . 'px; }';

					$margin -= 1;
					$css .= '.mediz-body .gdlr-core-testimonial-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport, '; 
					$css .= '.mediz-body .gdlr-core-personnel-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport, '; 
					$css .= '.mediz-body .gdlr-core-hover-box-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport,'; 
					$css .= '.mediz-body .gdlr-core-portfolio-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport, '; 
					$css .= '.mediz-body .gdlr-core-product-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport, '; 
					$css .= '.mediz-body .gdlr-core-blog-item .gdlr-core-flexslider.gdlr-core-with-outer-frame-element .flex-viewport{ '; 
					$css .= 'padding-top: ' . $margin . 'px; margin-top: -' . $margin . 'px; padding-right: ' . $margin . 'px; margin-right: -' . $margin . 'px; ';
					$css .= 'padding-left: ' . $margin . 'px; margin-left: -' . $margin . 'px; padding-bottom: ' . $margin . 'px; margin-bottom: -' . $margin . 'px; ';
					$css .= '}';
				}
			}

			if( !empty($general['mobile-logo-position']) && $general['mobile-logo-position'] == 'logo-right' ){
				$css .= '.mediz-mobile-header .mediz-logo-inner{ margin-right: 0px; margin-left: 80px; float: right; }';	
				$css .= '.mediz-mobile-header .mediz-mobile-menu-right{ left: 30px; right: auto; }';	
				$css .= '.mediz-mobile-header .mediz-main-menu-search{ float: right; margin-left: 0px; margin-right: 25px; }';	
				$css .= '.mediz-mobile-header .mediz-mobile-menu{ float: right; margin-left: 0px; margin-right: 30px; }';	
				$css .= '.mediz-mobile-header .mediz-main-menu-cart{ float: right; margin-left: 0px; margin-right: 20px; padding-left: 0px; padding-right: 5px; }';	
				$css .= '.mediz-mobile-header .mediz-top-cart-content-wrap{ left: 0px; }';
			}

			return $css;
		}
	}

	$mediz_admin_option->add_element(array(
	
		// general head section
		'title' => esc_html__('General', 'mediz'),
		'slug' => 'mediz_general',
		'icon' => get_template_directory_uri() . '/include/options/images/general.png',
		'options' => array(
		
			'layout' => array(
				'title' => esc_html__('Layout', 'mediz'),
				'options' => array(
					
					'layout' => array(
						'title' => esc_html__('Layout', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'full' => esc_html__('Full', 'mediz'),
							'boxed' => esc_html__('Boxed', 'mediz'),
						)
					),
					'boxed-layout-top-margin' => array(
						'title' => esc_html__('Box Layout Top/Bottom Margin', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '150',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => 'body.mediz-boxed .mediz-body-wrapper{ margin-top: #gdlr#; margin-bottom: #gdlr#; }',
						'condition' => array( 'layout' => 'boxed' ) 
					),
					'body-margin' => array(
						'title' => esc_html__('Body Margin ( Frame Spaces )', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => '.mediz-body-wrapper.mediz-with-frame, body.mediz-full .mediz-fixed-footer{ margin: #gdlr#; }',
						'condition' => array( 'layout' => 'full' ),
						'description' => esc_html__('This value will be automatically omitted for side header style.', 'mediz'),
					),
					'background-type' => array(
						'title' => esc_html__('Background Type', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'color' => esc_html__('Color', 'mediz'),
							'image' => esc_html__('Image', 'mediz'),
							'pattern' => esc_html__('Pattern', 'mediz'),
						),
						'condition' => array( 'layout' => 'boxed' )
					),
					'background-image' => array(
						'title' => esc_html__('Background Image', 'mediz'),
						'type' => 'upload',
						'data-type' => 'file', 
						'selector' => '.mediz-body-background{ background-image: url(#gdlr#); }',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'image' )
					),
					'background-image-opacity' => array(
						'title' => esc_html__('Background Image Opacity', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '100',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'image' ),
						'selector' => '.mediz-body-background{ opacity: #gdlr#; }'
					),
					'background-pattern' => array(
						'title' => esc_html__('Background Type', 'mediz'),
						'type' => 'radioimage',
						'data-type' => 'text',
						'options' => 'pattern', 
						'selector' => '.mediz-background-pattern .mediz-body-outer-wrapper{ background-image: url(' . GDLR_CORE_URL . '/include/images/pattern/#gdlr#.png); }',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'pattern' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'enable-boxed-border' => array(
						'title' => esc_html__('Enable Boxed Border', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable',
						'condition' => array( 'layout' => 'boxed', 'background-type' => 'pattern' ),
					),
					'item-padding' => array(
						'title' => esc_html__('Item Left/Right Spaces', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '40',
						'data-type' => 'pixel',
						'default' => '15px',
						'description' => 'Space between each page items',
						'selector' => '.mediz-item-pdlr, .gdlr-core-item-pdlr{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.mediz-item-rvpdlr, .gdlr-core-item-rvpdlr{ margin-left: -#gdlr#; margin-right: -#gdlr#; }' .
							'.gdlr-core-metro-rvpdlr{ margin-top: -#gdlr#; margin-right: -#gdlr#; margin-bottom: -#gdlr#; margin-left: -#gdlr#; }' .
							'.mediz-item-mglr, .gdlr-core-item-mglr, .mediz-navigation .sf-menu > .mediz-mega-menu .sf-mega,' . 
							'.sf-menu.mediz-top-bar-menu > .mediz-mega-menu .sf-mega{ margin-left: #gdlr#; margin-right: #gdlr#; }' .
							'.gdlr-core-pbf-wrapper-container-inner{ width: calc(100% - #gdlr# - #gdlr#); }'
					
					),
					'container-width' => array(
						'title' => esc_html__('Container Width', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '1180px',
						'selector' => '.mediz-container, .gdlr-core-container, body.mediz-boxed .mediz-body-wrapper, ' . 
							'body.mediz-boxed .mediz-fixed-footer .mediz-footer-wrapper, body.mediz-boxed .mediz-fixed-footer .mediz-copyright-wrapper{ max-width: #gdlr#; }' 
					),
					'container-padding' => array(
						'title' => esc_html__('Container Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.mediz-body-front .gdlr-core-container, .mediz-body-front .mediz-container{ padding-left: #gdlr#; padding-right: #gdlr#; }'  . 
							'.mediz-body-front .mediz-container .mediz-container, .mediz-body-front .mediz-container .gdlr-core-container, '.
							'.mediz-body-front .gdlr-core-container .gdlr-core-container{ padding-left: 0px; padding-right: 0px; }'
					),
					'sidebar-title-divider' => array(
						'title' => esc_html__('Sidebar Title Divider', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'sidebar-width' => array(
						'title' => esc_html__('Sidebar Width', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'30' => '50%', '20' => '33.33%', '15' => '25%', '12' => '20%', '10' => '16.67%'
						),
						'default' => 20,
					),
					'both-sidebar-width' => array(
						'title' => esc_html__('Both Sidebar Width', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'30' => '50%', '20' => '33.33%', '15' => '25%', '12' => '20%', '10' => '16.67%'
						),
						'default' => 15,
					),
					
				) // header-options
			), // header-nav	
			
			'top-bar' => array(
				'title' => esc_html__('Top Bar', 'mediz'),
				'options' => array(

					'enable-top-bar' => array(
						'title' => esc_html__('Enable Top Bar', 'mediz'),
						'type' => 'checkbox',
					),
					'enable-top-bar-on-mobile' => array(
						'title' => esc_html__('Enable Top Bar On Mobile', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'top-bar-width' => array(
						'title' => esc_html__('Top Bar Width', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'boxed' => esc_html__('Boxed ( Within Container )', 'mediz'),
							'full' => esc_html__('Full', 'mediz'),
							'custom' => esc_html__('Custom', 'mediz'),
						),
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-width-pixel' => array(
						'title' => esc_html__('Top Bar Width Pixel', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'default' => '1140px',
						'condition' => array( 'enable-top-bar' => 'enable', 'top-bar-width' => 'custom' ),
						'selector' => '.mediz-top-bar-container.mediz-top-bar-custom-container{ max-width: #gdlr#; }'
					),
					'top-bar-full-side-padding' => array(
						'title' => esc_html__('Top Bar Full ( Left/Right ) Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.mediz-top-bar-container.mediz-top-bar-full{ padding-right: #gdlr#; padding-left: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable', 'top-bar-width' => 'full' )
					),
					'top-bar-menu-position' => array(
						'title' => esc_html__('Top Bar Menu Position', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'none' => esc_html__('None', 'mediz'),
							'left' => esc_html__('Left', 'mediz'),
							'right' => esc_html__('Right', 'mediz'),
						),
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-left-text' => array(
						'title' => esc_html__('Top Bar Left Text', 'mediz'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-right-text' => array(
						'title' => esc_html__('Top Bar Right Text', 'mediz'),
						'type' => 'textarea',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-top-padding' => array(
						'title' => esc_html__('Top Bar Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
 						'default' => '10px',
						'selector' => '.mediz-top-bar{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-bottom-padding' => array(
						'title' => esc_html__('Top Bar Bottom Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '10px',
						'selector' => '.mediz-top-bar{ padding-bottom: #gdlr#; }' .
							'.mediz-top-bar .mediz-top-bar-menu > li > a{ padding-bottom: #gdlr#; }' .  
							'.sf-menu.mediz-top-bar-menu > .mediz-mega-menu .sf-mega, .sf-menu.mediz-top-bar-menu > .mediz-normal-menu ul{ margin-top: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-text-size' => array(
						'title' => esc_html__('Top Bar Text Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.mediz-top-bar{ font-size: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-bottom-border' => array(
						'title' => esc_html__('Top Bar Bottom Border', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '10',
						'default' => '0',
						'selector' => '.mediz-top-bar{ border-bottom-width: #gdlr#; }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-shadow-size' => array(
						'title' => esc_html__('Top Bar Shadow Size', 'mediz'),
						'type' => 'text',
						'data-input-type' => 'pixel',
						'condition' => array( 'enable-top-bar' => 'enable' )
					),
					'top-bar-shadow-color' => array(
						'title' => esc_html__('Top Bar Shadow Color', 'mediz'),
						'type' => 'colorpicker',
						'data-type' => 'rgba',
						'default' => '#000',
						'selector-extra' => true,
						'selector' => '.mediz-top-bar{ ' . 
							'box-shadow: 0px 0px <top-bar-shadow-size>t rgba(#gdlra#, 0.1); ' . 
							'-webkit-box-shadow: 0px 0px <top-bar-shadow-size>t rgba(#gdlra#, 0.1); ' . 
							'-moz-box-shadow: 0px 0px <top-bar-shadow-size>t rgba(#gdlra#, 0.1); }',
						'condition' => array( 'enable-top-bar' => 'enable' )
					)

				)
			), // top bar

			'top-bar-social' => array(
				'title' => esc_html__('Top Bar Social', 'mediz'),
				'options' => array(
					'enable-top-bar-social' => array(
						'title' => esc_html__('Enable Top Bar Social', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'top-bar-social-delicious' => array(
						'title' => esc_html__('Top Bar Social Delicious Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-email' => array(
						'title' => esc_html__('Top Bar Social Email Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-deviantart' => array(
						'title' => esc_html__('Top Bar Social Deviantart Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-digg' => array(
						'title' => esc_html__('Top Bar Social Digg Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-facebook' => array(
						'title' => esc_html__('Top Bar Social Facebook Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-flickr' => array(
						'title' => esc_html__('Top Bar Social Flickr Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-google-plus' => array(
						'title' => esc_html__('Top Bar Social Google Plus Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-lastfm' => array(
						'title' => esc_html__('Top Bar Social Lastfm Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-linkedin' => array(
						'title' => esc_html__('Top Bar Social Linkedin Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-pinterest' => array(
						'title' => esc_html__('Top Bar Social Pinterest Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-rss' => array(
						'title' => esc_html__('Top Bar Social RSS Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-skype' => array(
						'title' => esc_html__('Top Bar Social Skype Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-stumbleupon' => array(
						'title' => esc_html__('Top Bar Social Stumbleupon Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-tumblr' => array(
						'title' => esc_html__('Top Bar Social Tumblr Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-twitter' => array(
						'title' => esc_html__('Top Bar Social Twitter Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-vimeo' => array(
						'title' => esc_html__('Top Bar Social Vimeo Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-youtube' => array(
						'title' => esc_html__('Top Bar Social Youtube Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-instagram' => array(
						'title' => esc_html__('Top Bar Social Instagram Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),
					'top-bar-social-snapchat' => array(
						'title' => esc_html__('Top Bar Social Snapchat Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-top-bar-social' => 'enable' )
					),

				)
			),			

			'header' => array(
				'title' => esc_html__('Header', 'mediz'),
				'options' => array(

					'header-style' => array(
						'title' => esc_html__('Header Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'plain' => esc_html__('Plain', 'mediz'),
							'bar' => esc_html__('Bar', 'mediz'),
							'boxed' => esc_html__('Boxed', 'mediz'),
							'side' => esc_html__('Side Menu', 'mediz'),
							'side-toggle' => esc_html__('Side Menu Toggle', 'mediz'),
						),
						'default' => 'plain',
					),
					'header-plain-style' => array(
						'title' => esc_html__('Header Plain Style', 'mediz'),
						'type' => 'radioimage',
						'options' => array(
							'menu-right' => get_template_directory_uri() . '/images/header/plain-menu-right.jpg',
							'center-logo' => get_template_directory_uri() . '/images/header/plain-center-logo.jpg',
							'center-menu' => get_template_directory_uri() . '/images/header/plain-center-menu.jpg',
							'splitted-menu' => get_template_directory_uri() . '/images/header/plain-splitted-menu.jpg',
						),
						'default' => 'menu-right',
						'condition' => array( 'header-style' => 'plain' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-plain-bottom-border' => array(
						'title' => esc_html__('Plain Header Bottom Border', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '10',
						'default' => '0',
						'selector' => '.mediz-header-style-plain{ border-bottom-width: #gdlr#; }',
						'condition' => array( 'header-style' => array('plain') )
					),
					'header-bar-navigation-align' => array(
						'title' => esc_html__('Header Bar Style', 'mediz'),
						'type' => 'radioimage',
						'options' => array(
							'left' => get_template_directory_uri() . '/images/header/bar-left.jpg',
							'center' => get_template_directory_uri() . '/images/header/bar-center.jpg',
							'center-logo' => get_template_directory_uri() . '/images/header/bar-center-logo.jpg',
						),
						'default' => 'center',
						'condition' => array( 'header-style' => 'bar' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-background-style' => array(
						'title' => esc_html__('Header/Navigation Background Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'solid' => esc_html__('Solid', 'mediz'),
							'transparent' => esc_html__('Transparent', 'mediz'),
						),
						'default' => 'solid',
						'condition' => array( 'header-style' => array('plain', 'bar') )
					),
					'top-bar-background-opacity' => array(
						'title' => esc_html__('Top Bar Background Opacity', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'plain', 'header-background-style' => 'transparent' ),
						'selector' => '.mediz-header-background-transparent .mediz-top-bar-background{ opacity: #gdlr#; }'
					),
					'header-background-opacity' => array(
						'title' => esc_html__('Header Background Opacity', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'plain', 'header-background-style' => 'transparent' ),
						'selector' => '.mediz-header-background-transparent .mediz-header-background{ opacity: #gdlr#; }'
					),
					'navigation-background-opacity' => array(
						'title' => esc_html__('Navigation Background Opacity', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '50',
						'condition' => array( 'header-style' => 'bar', 'header-background-style' => 'transparent' ),
						'selector' => '.mediz-navigation-bar-wrap.mediz-style-transparent .mediz-navigation-background{ opacity: #gdlr#; }'
					),
					'header-boxed-style' => array(
						'title' => esc_html__('Header Boxed Style', 'mediz'),
						'type' => 'radioimage',
						'options' => array(
							'menu-right' => get_template_directory_uri() . '/images/header/boxed-menu-right.jpg',
							'center-menu' => get_template_directory_uri() . '/images/header/boxed-center-menu.jpg',
							'splitted-menu' => get_template_directory_uri() . '/images/header/boxed-splitted-menu.jpg',
						),
						'default' => 'menu-right',
						'condition' => array( 'header-style' => 'boxed' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'boxed-top-bar-background-opacity' => array(
						'title' => esc_html__('Top Bar Background Opacity', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '0',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.mediz-header-boxed-wrap .mediz-top-bar-background{ opacity: #gdlr#; }'
					),
					'boxed-top-bar-background-extend' => array(
						'title' => esc_html__('Top Bar Background Extend ( Bottom )', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0px',
						'data-max' => '200px',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.mediz-header-boxed-wrap .mediz-top-bar-background{ margin-bottom: -#gdlr#; }'
					),
					'boxed-header-top-margin' => array(
						'title' => esc_html__('Header Top Margin', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0px',
						'data-max' => '200px',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.mediz-header-style-boxed{ margin-top: #gdlr#; }'
					),
					'header-side-style' => array(
						'title' => esc_html__('Header Side Style', 'mediz'),
						'type' => 'radioimage',
						'options' => array(
							'top-left' => get_template_directory_uri() . '/images/header/side-top-left.jpg',
							'middle-left' => get_template_directory_uri() . '/images/header/side-middle-left.jpg',
							'middle-left-2' => get_template_directory_uri() . '/images/header/side-middle-left-2.jpg',
							'top-right' => get_template_directory_uri() . '/images/header/side-top-right.jpg',
							'middle-right' => get_template_directory_uri() . '/images/header/side-middle-right.jpg',
							'middle-right-2' => get_template_directory_uri() . '/images/header/side-middle-right-2.jpg',
						),
						'default' => 'top-left',
						'condition' => array( 'header-style' => 'side' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-side-align' => array(
						'title' => esc_html__('Header Side Text Align', 'mediz'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left',
						'condition' => array( 'header-style' => 'side' )
					),
					'header-side-toggle-style' => array(
						'title' => esc_html__('Header Side Toggle Style', 'mediz'),
						'type' => 'radioimage',
						'options' => array(
							'left' => get_template_directory_uri() . '/images/header/side-toggle-left.jpg',
							'right' => get_template_directory_uri() . '/images/header/side-toggle-right.jpg',
						),
						'default' => 'left',
						'condition' => array( 'header-style' => 'side-toggle' ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'header-side-toggle-menu-type' => array(
						'title' => esc_html__('Header Side Toggle Menu Type', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left Slide Menu', 'mediz'),
							'right' => esc_html__('Right Slide Menu', 'mediz'),
							'overlay' => esc_html__('Overlay Menu', 'mediz'),
						),
						'default' => 'overlay',
						'condition' => array( 'header-style' => 'side-toggle' )
					),
					'header-side-toggle-display-logo' => array(
						'title' => esc_html__('Display Logo', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'header-style' => 'side-toggle' )
					),
					'header-width' => array(
						'title' => esc_html__('Header Width', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'boxed' => esc_html__('Boxed ( Within Container )', 'mediz'),
							'full' => esc_html__('Full', 'mediz'),
							'custom' => esc_html__('Custom', 'mediz'),
						),
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'))
					),
					'header-width-pixel' => array(
						'title' => esc_html__('Header Width Pixel', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'default' => '1140px',
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'), 'header-width' => 'custom'),
						'selector' => '.mediz-header-container.mediz-header-custom-container{ max-width: #gdlr#; }'
					),
					'header-full-side-padding' => array(
						'title' => esc_html__('Header Full ( Left/Right ) Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.mediz-header-container.mediz-header-full{ padding-right: #gdlr#; padding-left: #gdlr#; }',
						'condition' => array('header-style'=> array('plain', 'bar', 'boxed'), 'header-width'=>'full')
					),
					'boxed-header-frame-radius' => array(
						'title' => esc_html__('Header Frame Radius', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '3px',
						'condition' => array( 'header-style' => 'boxed' ),
						'selector' => '.mediz-header-boxed-wrap .mediz-header-background{ border-radius: #gdlr#; -moz-border-radius: #gdlr#; -webkit-border-radius: #gdlr#; }'
					),
					'boxed-header-content-padding' => array(
						'title' => esc_html__('Header Content ( Left/Right ) Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '100',
						'data-type' => 'pixel',
						'default' => '30px',
						'selector' => '.mediz-header-style-boxed .mediz-header-container-item{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.mediz-navigation-right{ right: #gdlr#; } .mediz-navigation-left{ left: #gdlr#; }',
						'condition' => array( 'header-style' => 'boxed' )
					),
					'navigation-text-top-margin' => array(
						'title' => esc_html__('Navigation Text Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '0px',
						'condition' => array( 'header-style' => 'plain', 'header-plain-style' => 'splitted-menu' ),
						'selector' => '.mediz-header-style-plain.mediz-style-splitted-menu .mediz-navigation .sf-menu > li > a{ padding-top: #gdlr#; } ' .
							'.mediz-header-style-plain.mediz-style-splitted-menu .mediz-main-menu-left-wrap,' .
							'.mediz-header-style-plain.mediz-style-splitted-menu .mediz-main-menu-right-wrap{ padding-top: #gdlr#; }'
					),
					'navigation-text-top-margin-boxed' => array(
						'title' => esc_html__('Navigation Text Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '0px',
						'condition' => array( 'header-style' => 'boxed', 'header-boxed-style' => 'splitted-menu' ),
						'selector' => '.mediz-header-style-boxed.mediz-style-splitted-menu .mediz-navigation .sf-menu > li > a{ padding-top: #gdlr#; } ' .
							'.mediz-header-style-boxed.mediz-style-splitted-menu .mediz-main-menu-left-wrap,' .
							'.mediz-header-style-boxed.mediz-style-splitted-menu .mediz-main-menu-right-wrap{ padding-top: #gdlr#; }'
					),
					'navigation-text-side-spacing' => array(
						'title' => esc_html__('Navigation Text Side ( Left / Right ) Spaces', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '30',
						'data-type' => 'pixel',
						'default' => '13px',
						'selector' => '.mediz-navigation .sf-menu > li{ padding-left: #gdlr#; padding-right: #gdlr#; }',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed') )
					),
					'navigation-left-offset' => array(
						'title' => esc_html__('Navigation Left Offset Spaces', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '0',
						'selector' => '.mediz-navigation .mediz-main-menu{ margin-left: #gdlr#; }'
					),
					'navigation-slide-bar' => array(
						'title' => esc_html__('Navigation Slide Bar', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'disable' => esc_html__('Disable', 'mediz'),
							'enable' => esc_html__('Bar With Triangle Style', 'mediz'),
							'style-2' => esc_html__('Bar Style', 'mediz'),
							'style-dot' => esc_html__('Dot Style', 'mediz')
						),
						'default' => 'enable',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed') )
					),
					'navigation-slide-bar-width' => array(
						'title' => esc_html__('Navigation Slide Bar Width', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'condition' => array( 'navigation-slide-bar' => 'style-2' )
					),
					'navigation-slide-bar-height' => array(
						'title' => esc_html__('Navigation Slide Bar Height', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.mediz-navigation .mediz-navigation-slide-bar-style-2{ border-bottom-width: #gdlr#; }',
						'condition' => array( 'navigation-slide-bar' => 'style-2' )
					),
					'navigation-slide-bar-top-margin' => array(
						'title' => esc_html__('Navigation Slide Bar Top Margin', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '',
						'selector' => '.mediz-navigation .mediz-navigation-slide-bar{ margin-top: #gdlr#; }',
						'condition' => array( 'header-style' => array('plain', 'bar', 'boxed'), 'navigation-slide-bar' => array('enable', 'style-2', 'style-dot') )
					),
					'side-header-width-pixel' => array(
						'title' => esc_html__('Header Width Pixel', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '600',
						'default' => '340px',
						'condition' => array('header-style' => array('side', 'side-toggle')),
						'selector' => '.mediz-header-side-nav{ width: #gdlr#; }' . 
							'.mediz-header-side-content.mediz-style-left{ margin-left: #gdlr#; }' .
							'.mediz-header-side-content.mediz-style-right{ margin-right: #gdlr#; }'
					),
					'side-header-side-padding' => array(
						'title' => esc_html__('Header Side Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '70px',
						'condition' => array('header-style' => 'side'),
						'selector' => '.mediz-header-side-nav.mediz-style-side{ padding-left: #gdlr#; padding-right: #gdlr#; }' . 
							'.mediz-header-side-nav.mediz-style-left .sf-vertical > li > ul.sub-menu{ padding-left: #gdlr#; }' .
							'.mediz-header-side-nav.mediz-style-right .sf-vertical > li > ul.sub-menu{ padding-right: #gdlr#; }'
					),
					'navigation-text-top-spacing' => array(
						'title' => esc_html__('Navigation Text Top / Bottom Spaces', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '40',
						'data-type' => 'pixel',
						'default' => '16px',
						'selector' => ' .mediz-navigation .sf-vertical > li{ padding-top: #gdlr#; padding-bottom: #gdlr#; }',
						'condition' => array( 'header-style' => array('side') )
					),
					'logo-right-box1-icon' => array(
						'title' => esc_html__('Header Right Box 1 Icon', 'mediz'),
						'type' => 'text',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-box1-title' => array(
						'title' => esc_html__('Header Right Box 1 Title', 'mediz'),
						'type' => 'text',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-box1-caption' => array(
						'title' => esc_html__('Header Right Box 1 Caption', 'mediz'),
						'type' => 'text',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-box2-icon' => array(
						'title' => esc_html__('Header Right Box 2 Icon', 'mediz'),
						'type' => 'text',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-box2-title' => array(
						'title' => esc_html__('Header Right Box 2 Title', 'mediz'),
						'type' => 'text',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-box2-caption' => array(
						'title' => esc_html__('Header Right Box 2 Caption', 'mediz'),
						'type' => 'text',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-box3-icon' => array(
						'title' => esc_html__('Header Right Box 3 Icon', 'mediz'),
						'type' => 'text',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-box3-title' => array(
						'title' => esc_html__('Header Right Box 3 Title', 'mediz'),
						'type' => 'text',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-box3-caption' => array(
						'title' => esc_html__('Header Right Box 3 Caption', 'mediz'),
						'type' => 'text',
						'condition' => array('header-style' => 'bar'),
					),
					'logo-right-text-top-padding' => array(
						'title' => esc_html__('Header Right Text Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '30px',
						'condition' => array('header-style' => 'bar'),
						'selector' => '.mediz-header-style-bar .mediz-logo-right-text{ padding-top: #gdlr#; }'
					),
					'header-shadow-size' => array(
						'title' => esc_html__('Header Shadow Size', 'mediz'),
						'type' => 'text',
						'data-input-type' => 'pixel',
						'condition' => array( 'header-style' => 'plain' )
					),
					'header-shadow-color' => array(
						'title' => esc_html__('Header Shadow Color', 'mediz'),
						'type' => 'colorpicker',
						'data-type' => 'rgba',
						'default' => '#000',
						'selector-extra' => true,
						'selector' => '.mediz-header-style-plain{ ' . 
							'box-shadow: 0px 0px <header-shadow-size>t rgba(#gdlra#, 0.1); ' . 
							'-webkit-box-shadow: 0px 0px <header-shadow-size>t rgba(#gdlra#, 0.1); ' . 
							'-moz-box-shadow: 0px 0px <header-shadow-size>t rgba(#gdlra#, 0.1); }',
						'condition' => array( 'header-style' => 'plain' )
					)
				)
			), // header
			
			'logo' => array(
				'title' => esc_html__('Logo', 'mediz'),
				'options' => array(
					'enable-logo' => array(
						'title' => esc_html__('Enable Logo', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'logo' => array(
						'title' => esc_html__('Logo', 'mediz'),
						'type' => 'upload',
						'condition' => array( 'enable-logo' => 'enable' )
					),
					'logo-top-padding' => array(
						'title' => esc_html__('Logo Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.mediz-logo{ padding-top: #gdlr#; }',
						'description' => esc_html__('This option will be omitted on splitted menu option.', 'mediz'),
						'condition' => array( 'enable-logo' => 'enable' )
					),
					'logo-bottom-padding' => array(
						'title' => esc_html__('Logo Bottom Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.mediz-logo{ padding-bottom: #gdlr#; }',
						'description' => esc_html__('This option will be omitted on splitted menu option.', 'mediz'),
						'condition' => array( 'enable-logo' => 'enable' )
					),
					'logo-left-padding' => array(
						'title' => esc_html__('Logo Left Padding', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.mediz-logo.mediz-item-pdlr{ padding-left: #gdlr#; }',
						'description' => esc_html__('Leave this field blank for default value.', 'mediz'),
						'condition' => array( 'enable-logo' => 'enable' )
					),
					'max-logo-width' => array(
						'title' => esc_html__('Max Logo Width', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '200px',
						'selector' => '.mediz-logo-inner{ max-width: #gdlr#; }',
						'condition' => array( 'enable-logo' => 'enable' )
					),
					'mobile-logo' => array(
						'title' => esc_html__('Mobile/Tablet Logo', 'mediz'),
						'type' => 'upload',
						'description' => esc_html__('Leave this option blank to use the same logo.', 'mediz'),
						'condition' => array( 'enable-logo' => 'enable' )
					),
					'max-tablet-logo-width' => array(
						'title' => esc_html__('Max Tablet Logo Width', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 999px){ .mediz-mobile-header .mediz-logo-inner{ max-width: #gdlr#; } }',
						'condition' => array( 'enable-logo' => 'enable' )
					),
					'max-mobile-logo-width' => array(
						'title' => esc_html__('Max Mobile Logo Width', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .mediz-mobile-header .mediz-logo-inner{ max-width: #gdlr#; } }',
						'condition' => array( 'enable-logo' => 'enable' )
					),
					'mobile-logo-position' => array(
						'title' => esc_html__('Mobile Logo Position', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'logo-left' => esc_html__('Logo Left', 'mediz'),
							'logo-center' => esc_html__('Logo Center', 'mediz'),
							'logo-right' => esc_html__('Logo Right', 'mediz'),
						),
						'condition' => array( 'enable-logo' => 'enable' )
					),
				
				)
			),
			'navigation' => array(
				'title' => esc_html__('Navigation', 'mediz'),
				'options' => array(
					'main-navigation-top-padding' => array(
						'title' => esc_html__('Main Navigation Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '25px',
						'selector' => '.mediz-navigation{ padding-top: #gdlr#; }' . 
							'.mediz-navigation-top{ top: #gdlr#; }'
					),
					'main-navigation-bottom-padding' => array(
						'title' => esc_html__('Main Navigation Bottom Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '20px',
						'selector' => '.mediz-navigation .sf-menu > li > a{ padding-bottom: #gdlr#; }'
					),
					'main-navigation-item-right-padding' => array(
						'title' => esc_html__('Main Navigation Item Right Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '200',
						'data-type' => 'pixel',
						'default' => '0px',
						'selector' => '.mediz-navigation .mediz-main-menu{ padding-right: #gdlr#; }'
					),
					'main-navigation-right-padding' => array(
						'title' => esc_html__('Main Navigation Wrap Right Padding', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.mediz-navigation.mediz-item-pdlr{ padding-right: #gdlr#; }',
						'description' => esc_html__('Leave this field blank for default value.', 'mediz'),
					),
					'enable-main-navigation-submenu-indicator' => array(
						'title' => esc_html__('Enable Main Navigation Submenu Indicator', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable',
					),
					'navigation-right-top-margin' => array(
						'title' => esc_html__('Navigation Right ( search/cart/button ) Top Margin ', 'mediz'),
						'type' => 'text',
						'data-input-type' => 'pixel',
						'data-type' => 'pixel',
						'selector' => '.mediz-main-menu-right-wrap{ margin-top: #gdlr#; }'
					),
					'enable-main-navigation-search' => array(
						'title' => esc_html__('Enable Main Navigation Search', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'main-navigation-search-icon' => array(
						'title' => esc_html__('Main Navigation Search Icon', 'mediz'),
						'type' => 'text',
						'default' => 'fa fa-search',
						'condition' => array('enable-main-navigation-search' => 'enable')
					),
					'main-navigation-search-icon-top-margin' => array(
						'title' => esc_html__('Main Navigation Search Icon Top Margin', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.mediz-main-menu-search{ margin-top: #gdlr#; }',
						'condition' => array('enable-main-navigation-search' => 'enable')
					),
					'enable-main-navigation-cart' => array(
						'title' => esc_html__('Enable Main Navigation Cart ( Woocommerce )', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'description' => esc_html__('The icon only shows if the woocommerce plugin is activated', 'mediz')
					),
					'main-navigation-cart-icon' => array(
						'title' => esc_html__('Main Navigation Cart Icon', 'mediz'),
						'type' => 'text',
						'default' => 'fa fa-shopping-cart',
						'condition' => array('enable-main-navigation-search' => 'enable')
					),
					'main-navigation-cart-icon-top-margin' => array(
						'title' => esc_html__('Main Navigation Cart Icon Top Margin', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel', 
						'selector' => '.mediz-main-menu-cart{ margin-top: #gdlr#; }',
						'condition' => array('enable-main-navigation-search' => 'enable')
					),
					'enable-main-navigation-right-button' => array(
						'title' => esc_html__('Enable Main Navigation Right Button', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable',
						'description' => esc_html__('This option will be ignored on header side style', 'mediz')
					),
					'main-navigation-right-button-style' => array(
						'title' => esc_html__('Main Navigation Right Button Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'default' => esc_html__('Default', 'mediz'),
							'round' => esc_html__('Round', 'mediz'),
							'round-with-shadow' => esc_html__('Round With Shadow', 'mediz'),
						),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-text' => array(
						'title' => esc_html__('Main Navigation Right Button Text', 'mediz'),
						'type' => 'text',
						'default' => esc_html__('Buy Now', 'mediz'),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link' => array(
						'title' => esc_html__('Main Navigation Right Button Link', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link-target' => array(
						'title' => esc_html__('Main Navigation Right Button Link Target', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'_self' => esc_html__('Current Screen', 'mediz'),
							'_blank' => esc_html__('New Window', 'mediz'),
						),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-style-2' => array(
						'title' => esc_html__('Main Navigation Right Button Style 2', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'default' => esc_html__('Default', 'mediz'),
							'round' => esc_html__('Round', 'mediz'),
							'round-with-shadow' => esc_html__('Round With Shadow', 'mediz'),
						),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-text-2' => array(
						'title' => esc_html__('Main Navigation Right Button Text 2', 'mediz'),
						'type' => 'text',
						'default' => esc_html__('Buy Now', 'mediz'),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link-2' => array(
						'title' => esc_html__('Main Navigation Right Button Link 2', 'mediz'),
						'type' => 'text',
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'main-navigation-right-button-link-target-2' => array(
						'title' => esc_html__('Main Navigation Right Button Link Target 2', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'_self' => esc_html__('Current Screen', 'mediz'),
							'_blank' => esc_html__('New Window', 'mediz'),
						),
						'condition' => array( 'enable-main-navigation-right-button' => 'enable' ) 
					),
					'right-menu-type' => array(
						'title' => esc_html__('Secondary/Mobile Menu Type', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left Slide Menu', 'mediz'),
							'right' => esc_html__('Right Slide Menu', 'mediz'),
							'overlay' => esc_html__('Overlay Menu', 'mediz'),
						),
						'default' => 'right'
					),
					'right-menu-style' => array(
						'title' => esc_html__('Secondary/Mobile Menu Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'hamburger-with-border' => esc_html__('Hamburger With Border ( Font Awesome )', 'mediz'),
							'hamburger' => esc_html__('Hamburger', 'mediz'),
							'hamburger-small' => esc_html__('Hamburger Small', 'mediz'),
						),
						'default' => 'hamburger-with-border'
					),
					
				) // logo-options
			), // logo-navigation			
			
			'fixed-navigation' => array(
				'title' => esc_html__('Fixed Navigation', 'mediz'),
				'options' => array(

					'enable-main-navigation-sticky' => array(
						'title' => esc_html__('Enable Fixed Navigation Bar', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'enable-logo-on-main-navigation-sticky' => array(
						'title' => esc_html__('Enable Logo on Fixed Navigation Bar', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'description' => esc_html__('This option will be omitted when the logo is disabeld', 'mediz'),
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' )
					),
					'fixed-navigation-bar-logo' => array(
						'title' => esc_html__('Fixed Navigation Bar Logo', 'mediz'),
						'type' => 'upload',
						'description' => esc_html__('Leave blank to show default logo', 'mediz'),
						'condition' => array( 'enable-main-navigation-sticky' => 'enable', 'enable-logo-on-main-navigation-sticky' => 'enable' )
					),
					'fixed-navigation-max-logo-width' => array(
						'title' => esc_html__('Fixed Navigation Max Logo Width', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.mediz-fixed-navigation.mediz-style-slide .mediz-logo-inner img{ max-height: none !important; }' .
							'.mediz-animate-fixed-navigation.mediz-header-style-plain .mediz-logo-inner, ' . 
							'.mediz-animate-fixed-navigation.mediz-header-style-boxed .mediz-logo-inner{ max-width: #gdlr#; }'
					),
					'fixed-navigation-logo-top-padding' => array(
						'title' => esc_html__('Fixed Navigation Logo Top Padding', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '20px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.mediz-animate-fixed-navigation.mediz-header-style-plain .mediz-logo, ' . 
							'.mediz-animate-fixed-navigation.mediz-header-style-boxed .mediz-logo{ padding-top: #gdlr#; }'
					),
					'fixed-navigation-logo-bottom-padding' => array(
						'title' => esc_html__('Fixed Navigation Logo Bottom Padding', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '20px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.mediz-animate-fixed-navigation.mediz-header-style-plain .mediz-logo, ' . 
							'.mediz-animate-fixed-navigation.mediz-header-style-boxed .mediz-logo{ padding-bottom: #gdlr#; }'
					),
					'fixed-navigation-top-padding' => array(
						'title' => esc_html__('Fixed Navigation Top Padding', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '30px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.mediz-animate-fixed-navigation.mediz-header-style-plain .mediz-navigation, ' . 
							'.mediz-animate-fixed-navigation.mediz-header-style-boxed .mediz-navigation{ padding-top: #gdlr#; }' . 
							'.mediz-animate-fixed-navigation.mediz-header-style-plain .mediz-navigation-top, ' . 
							'.mediz-animate-fixed-navigation.mediz-header-style-boxed .mediz-navigation-top{ top: #gdlr#; }' .
							'.mediz-animate-fixed-navigation.mediz-navigation-bar-wrap .mediz-navigation{ padding-top: #gdlr#; }'
					),
					'fixed-navigation-bottom-padding' => array(
						'title' => esc_html__('Fixed Navigation Bottom Padding', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '25px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
						'selector' => '.mediz-animate-fixed-navigation.mediz-header-style-plain .mediz-navigation .sf-menu > li > a, ' . 
							'.mediz-animate-fixed-navigation.mediz-header-style-boxed .mediz-navigation .sf-menu > li > a{ padding-bottom: #gdlr#; }'  .
							'.mediz-animate-fixed-navigation.mediz-navigation-bar-wrap .mediz-navigation .sf-menu > li > a{ padding-bottom: #gdlr#; }' .
							'.mediz-animate-fixed-navigation .mediz-main-menu-right{ margin-bottom: #gdlr#; }'
					),
					'enable-fixed-navigation-slide-bar' => array(
						'title' => esc_html__('Enable Fixed Navigation Slide Bar', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'fixed-navigation-right-top-margin' => array(
						'title' => esc_html__('Fixed Navigation Right ( search/cart/button ) Top Margin', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '',
						'selector' => '.mediz-fixed-navigation .mediz-main-menu-right-wrap{ margin-top: #gdlr#; }',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
					),
					'fixed-navigation-slide-bar-top-margin' => array(
						'title' => esc_html__('Fixed Navigation Slide Bar Top Margin', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '',
						'selector' => '.mediz-fixed-navigation .mediz-navigation .mediz-navigation-slide-bar{ margin-top: #gdlr#; }',
						'condition' => array('enable-fixed-navigation-slide-bar' => 'enable')
					),
					'fixed-navigation-anchor-offset' => array(
						'title' => esc_html__('Fixed Navigation Anchor Offset ( Fixed Navigation Height )', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'default' => '75px',
						'condition' => array( 'enable-main-navigation-sticky' => 'enable' ),
					),
					'enable-mobile-navigation-sticky' => array(
						'title' => esc_html__('Enable Mobile Fixed Navigation Bar', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
					),

				)
			),

			'title-style' => array(
				'title' => esc_html__('Page Title Style', 'mediz'),
				'options' => array(

					'default-title-style' => array(
						'title' => esc_html__('Default Page Title Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'mediz'),
							'medium' => esc_html__('Medium', 'mediz'),
							'large' => esc_html__('Large', 'mediz'),
							'custom' => esc_html__('Custom', 'mediz'),
						),
						'default' => 'small'
					),
					'default-title-align' => array(
						'title' => esc_html__('Default Page Title Alignment', 'mediz'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left'
					),
					'default-title-top-padding' => array(
						'title' => esc_html__('Default Page Title Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '350',
						'default' => '93px',
						'selector' => '.mediz-page-title-wrap.mediz-style-custom .mediz-page-title-content{ padding-top: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-bottom-padding' => array(
						'title' => esc_html__('Default Page Title Bottom Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '350',
						'default' => '87px',
						'selector' => '.mediz-page-title-wrap.mediz-style-custom .mediz-page-title-content{ padding-bottom: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-page-caption-top-margin' => array(
						'title' => esc_html__('Default Page Caption Top Margin', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '200',
						'default' => '13px',						
						'selector' => '.mediz-page-title-wrap.mediz-style-custom .mediz-page-caption{ margin-top: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-font-transform' => array(
						'title' => esc_html__('Default Page Title Font Transform', 'mediz'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'' => esc_html__('Default', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
							'uppercase' => esc_html__('Uppercase', 'mediz'),
							'lowercase' => esc_html__('Lowercase', 'mediz'),
							'capitalize' => esc_html__('Capitalize', 'mediz'),
						),
						'default' => 'default',
						'selector' => '.mediz-page-title-wrap .mediz-page-title{ text-transform: #gdlr#; }'
					),
					'default-title-font-size' => array(
						'title' => esc_html__('Default Page Title Font Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '37px',
						'selector' => '.mediz-page-title-wrap.mediz-style-custom .mediz-page-title{ font-size: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-title-font-weight' => array(
						'title' => esc_html__('Default Page Title Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.mediz-page-title-wrap .mediz-page-title{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800. Leave this field blank for default value (700).', 'mediz')					
					),
					'default-title-letter-spacing' => array(
						'title' => esc_html__('Default Page Title Letter Spacing', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '20',
						'default' => '0px',
						'selector' => '.mediz-page-title-wrap.mediz-style-custom .mediz-page-title{ letter-spacing: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-caption-font-transform' => array(
						'title' => esc_html__('Default Page Caption Font Transform', 'mediz'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'' => esc_html__('Default', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
							'uppercase' => esc_html__('Uppercase', 'mediz'),
							'lowercase' => esc_html__('Lowercase', 'mediz'),
							'capitalize' => esc_html__('Capitalize', 'mediz'),
						),
						'default' => 'default',
						'selector' => '.mediz-page-title-wrap .mediz-page-caption{ text-transform: #gdlr#; }'
					),
					'default-caption-font-size' => array(
						'title' => esc_html__('Default Page Caption Font Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '16px',
						'selector' => '.mediz-page-title-wrap.mediz-style-custom .mediz-page-caption{ font-size: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'default-caption-font-weight' => array(
						'title' => esc_html__('Default Page Caption Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.mediz-page-title-wrap .mediz-page-caption{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800. Leave this field blank for default value (400).', 'mediz')					
					),
					'default-caption-letter-spacing' => array(
						'title' => esc_html__('Default Page Caption Letter Spacing', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '20',
						'default' => '0px',
						'selector' => '.mediz-page-title-wrap.mediz-style-custom .mediz-page-caption{ letter-spacing: #gdlr#; }',
						'condition' => array( 'default-title-style' => 'custom' )
					),
					'page-title-top-bottom-gradient' => array(
						'title' => esc_html__('Default Page Title Top/Bottom Gradient', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'both' => esc_html__('Both', 'mediz'),
							'top' => esc_html__('Top', 'mediz'),
							'bottom' => esc_html__('Bottom', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
						),
						'default' => 'none',
					),
					'page-title-top-gradient-size' => array(
						'title' => esc_html__('Default Page Title Top Gradient Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '1000',
 						'default' => '413px',
						'selector' => '.mediz-page-title-wrap .mediz-page-title-top-gradient{ height: #gdlr#; }',
					),
					'page-title-bottom-gradient-size' => array(
						'title' => esc_html__('Default Page Title Bottom Gradient Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '1000',
 						'default' => '413px',
						'selector' => '.mediz-page-title-wrap .mediz-page-title-bottom-gradient{ height: #gdlr#; }',
					),
					'default-title-background-overlay-opacity' => array(
						'title' => esc_html__('Default Page Title Background Overlay Opacity', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '80',
						'selector' => '.mediz-page-title-wrap .mediz-page-title-overlay{ opacity: #gdlr#; }'
					),
				) 
			), // title style

			'title-background' => array(
				'title' => esc_html__('Page Title Background', 'mediz'),
				'options' => array(

					'default-title-background' => array(
						'title' => esc_html__('Default Page Title Background', 'mediz'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.mediz-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-portfolio-title-background' => array(
						'title' => esc_html__('Default Portfolio Title Background', 'mediz'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.single-portfolio .mediz-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-personnel-title-background' => array(
						'title' => esc_html__('Default Personnel Title Background', 'mediz'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.single-personnel .mediz-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-search-title-background' => array(
						'title' => esc_html__('Default Search Title Background', 'mediz'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.search .mediz-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-archive-title-background' => array(
						'title' => esc_html__('Default Archive Title Background', 'mediz'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => 'body.archive .mediz-page-title-wrap{ background-image: url(#gdlr#); }'
					),
					'default-404-background' => array(
						'title' => esc_html__('Default 404 Background', 'mediz'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.mediz-not-found-wrap .mediz-not-found-background{ background-image: url(#gdlr#); }'
					),
					'default-404-background-opacity' => array(
						'title' => esc_html__('Default 404 Background Opacity', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '27',
						'selector' => '.mediz-not-found-wrap .mediz-not-found-background{ opacity: #gdlr#; }'
					),

				) 
			), // title background

			'blog-title-style' => array(
				'title' => esc_html__('Blog Title Style', 'mediz'),
				'options' => array(

					'default-blog-title-style' => array(
						'title' => esc_html__('Default Blog Title Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'mediz'),
							'large' => esc_html__('Large', 'mediz'),
							'custom' => esc_html__('Custom', 'mediz'),
							'inside-content' => esc_html__('Inside Content', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
						),
						'default' => 'small'
					),
					'default-blog-title-top-padding' => array(
						'title' => esc_html__('Default Blog Title Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '400',
						'default' => '93px',
						'selector' => '.mediz-blog-title-wrap.mediz-style-custom .mediz-blog-title-content{ padding-top: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => 'custom' )
					),
					'default-blog-title-bottom-padding' => array(
						'title' => esc_html__('Default Blog Title Bottom Padding', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '400',
						'default' => '87px',
						'selector' => '.mediz-blog-title-wrap.mediz-style-custom .mediz-blog-title-content{ padding-bottom: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => 'custom' )
					),
					'default-blog-feature-image' => array(
						'title' => esc_html__('Default Blog Feature Image Location', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'content' => esc_html__('Inside Content', 'mediz'),
							'title-background' => esc_html__('Title Background', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
						),
						'default' => 'content',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),
					'default-blog-title-background-image' => array(
						'title' => esc_html__('Default Blog Title Background Image', 'mediz'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.mediz-blog-title-wrap{ background-image: url(#gdlr#); }',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),
					'default-blog-top-bottom-gradient' => array(
						'title' => esc_html__('Default Blog ( Feature Image ) Title Top/Bottom Gradient', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'enable' => esc_html__('Both', 'mediz'),
							'top' => esc_html__('Top', 'mediz'),
							'bottom' => esc_html__('Bottom', 'mediz'),
							'disable' => esc_html__('None', 'mediz'),
						),
						'default' => 'enable',
					),
					'single-blog-title-top-gradient-size' => array(
						'title' => esc_html__('Single Blog Title Top Gradient Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '1000',
 						'default' => '413px',
						'selector' => '.mediz-blog-title-wrap.mediz-feature-image .mediz-blog-title-top-overlay{ height: #gdlr#; }',
					),
					'single-blog-title-bottom-gradient-size' => array(
						'title' => esc_html__('Single Blog Title Bottom Gradient Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'data-min' => '0',
						'data-max' => '1000',
 						'default' => '413px',
						'selector' => '.mediz-blog-title-wrap.mediz-feature-image .mediz-blog-title-bottom-overlay{ height: #gdlr#; }',
					),
					'default-blog-title-background-overlay-opacity' => array(
						'title' => esc_html__('Default Blog Title Background Overlay Opacity', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'opacity',
						'default' => '80',
						'selector' => '.mediz-blog-title-wrap .mediz-blog-title-overlay{ opacity: #gdlr#; }',
						'condition' => array( 'default-blog-title-style' => array('small', 'large', 'custom') )
					),

				) 
			), // post title style			

			'blog-style' => array(
				'title' => esc_html__('Blog Style', 'mediz'),
				'options' => array(
					'blog-style' => array(
						'title' => esc_html__('Single Blog Head ( Title ) Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'mediz'),
							'style-2' => esc_html__('Style 2', 'mediz'),
							'style-3' => esc_html__('Style 3', 'mediz'),
							'style-4' => esc_html__('Style 4', 'mediz'),
							'magazine' => esc_html__('Magazine', 'mediz')
						),
						'default' => 'style-1'
					),
					'blog-title-style' => array(
						'title' => esc_html__('Single Blog Title Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'' => esc_html__('Default', 'mediz'),
							'style-1' => esc_html__('Style 1', 'mediz'),
							'style-2' => esc_html__('Style 2', 'mediz'),
							'style-4' => esc_html__('Style 4', 'mediz')
						)
					),
					'blog-date-feature' => array(
						'title' => esc_html__('Enable Blog Date Feature', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'blog-title-style' => 'style-1' )
					),
					'blog-date-feature-year' => array(
						'title' => esc_html__('Enable Year on Blog Date Feature', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable',
						'condition' => array( 'blog-title-style' => 'style-1', 'blog-date-feature' => 'enable' )
					),
					'blockquote-style' => array(
						'title' => esc_html__('Blockquote Style ( <blockquote> tag )', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'mediz'),
							'style-2' => esc_html__('Style 2', 'mediz')
						),
						'default' => 'style-1'
					),
					'blog-sidebar' => array(
						'title' => esc_html__('Single Blog Sidebar ( Default )', 'mediz'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'none',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'blog-sidebar-left' => array(
						'title' => esc_html__('Single Blog Sidebar Left ( Default )', 'mediz'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'blog-sidebar'=>array('left', 'both') )
					),
					'blog-sidebar-right' => array(
						'title' => esc_html__('Single Blog Sidebar Right ( Default )', 'mediz'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'blog-sidebar'=>array('right', 'both') )
					),
					'blog-max-content-width' => array(
						'title' => esc_html__('Single Blog Max Content Width ( No sidebar layout )', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'data-input-type' => 'pixel',
						'default' => '900px',
						'selector' => 'body.single-post .mediz-sidebar-style-none, body.blog .mediz-sidebar-style-none, ' . 
							'.mediz-blog-style-2 .mediz-comment-content{ max-width: #gdlr#; }'
					),
					'blog-thumbnail-size' => array(
						'title' => esc_html__('Single Blog Thumbnail Size', 'mediz'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
					'meta-option' => array(
						'title' => esc_html__('Meta Option', 'mediz'),
						'type' => 'multi-combobox',
						'options' => array( 
							'date' => esc_html__('Date', 'mediz'),
							'author' => esc_html__('Author', 'mediz'),
							'category' => esc_html__('Category', 'mediz'),
							'tag' => esc_html__('Tag', 'mediz'),
							'comment' => esc_html__('Comment', 'mediz'),
							'comment-number' => esc_html__('Comment Number', 'mediz'),
						),
						'default' => array('author', 'category', 'tag', 'comment-number')
					),
					'blog-author' => array(
						'title' => esc_html__('Enable Single Blog Author', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-navigation' => array(
						'title' => esc_html__('Enable Single Blog Navigation', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'pagination-style' => array(
						'title' => esc_html__('Pagination Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'plain' => esc_html__('Plain', 'mediz'),
							'rectangle' => esc_html__('Rectangle', 'mediz'),
							'rectangle-border' => esc_html__('Rectangle Border', 'mediz'),
							'round' => esc_html__('Round', 'mediz'),
							'round-border' => esc_html__('Round Border', 'mediz'),
							'circle' => esc_html__('Circle', 'mediz'),
							'circle-border' => esc_html__('Circle Border', 'mediz'),
						),
						'default' => 'round'
					),
					'pagination-align' => array(
						'title' => esc_html__('Pagination Alignment', 'mediz'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'right'
					),
					'enable-related-post' => array(
						'title' => esc_html__('Enable Related Post', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
					),
					'related-post-blog-style' => array(
						'title' => esc_html__('Related Post Blog Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'blog-column' => esc_html__('Blog Column', 'mediz'), 
							'blog-column-with-frame' => esc_html__('Blog Column With Frame', 'mediz'), 
						),
						'default' => 'blog-column-with-frame',
					),
					'related-post-blog-column-style' => array(
						'title' => esc_html__('Related Post Blog Column Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'mediz'), 
							'style-2' => esc_html__('Style 2', 'mediz'), 
							'style-3' => esc_html__('Style 3', 'mediz'), 
						),
						'default' => 'blog-column-with-frame',
					),
					'related-post-column-size' => array(
						'title' => esc_html__('Related Post Column Size', 'mediz'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5 ),
						'default' => '20',
					),
					'related-post-meta-option' => array(
						'title' => esc_html__('Related Post Meta Option', 'mediz'),
						'type' => 'multi-combobox',
						'options' => array(
							'date' => esc_html__('Date', 'mediz'),
							'author' => esc_html__('Author', 'mediz'),
							'category' => esc_html__('Category', 'mediz'),
							'tag' => esc_html__('Tag', 'mediz'),
							'comment' => esc_html__('Comment', 'mediz'),
							'comment-number' => esc_html__('Comment Number', 'mediz'),
						),
						'default' => array('date', 'author', 'category', 'comment-number'),
					),
					'related-post-thumbnail-size' => array(
						'title' => esc_html__('Related Post Blog Thumbnail Size', 'mediz'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full',
					),
					'related-post-num-fetch' => array(
						'title' => esc_html__('Related Post Num Fetch', 'mediz'),
						'type' => 'text',
						'default' => '3',
					),
					'related-post-excerpt-number' => array(
						'title' => esc_html__('Related Post Excerpt Number', 'mediz'),
						'type' => 'text',
						'default' => '0',
					),
				) // blog-style-options
			), // blog-style-nav

			'blog-social-share' => array(
				'title' => esc_html__('Blog Social Share', 'mediz'),
				'options' => array(
					'blog-social-share' => array(
						'title' => esc_html__('Enable Single Blog Share', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-social-share-count' => array(
						'title' => esc_html__('Enable Single Blog Share Count', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'blog-social-facebook' => array(
						'title' => esc_html__('Facebook', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),	
					'blog-facebook-access-token' => array(
						'title' => esc_html__('Facebook Access Token', 'mediz'),
						'type' => 'text',
					),			
					'blog-social-linkedin' => array(
						'title' => esc_html__('Linkedin', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable'
					),			
					'blog-social-google-plus' => array(
						'title' => esc_html__('Google Plus', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-pinterest' => array(
						'title' => esc_html__('Pinterest', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-stumbleupon' => array(
						'title' => esc_html__('Stumbleupon', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable'
					),			
					'blog-social-twitter' => array(
						'title' => esc_html__('Twitter', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),			
					'blog-social-email' => array(
						'title' => esc_html__('Email', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
				) // blog-style-options
			), // blog-style-nav
			
			'search-archive' => array(
				'title' => esc_html__('Search/Archive', 'mediz'),
				'options' => array(
					'archive-blog-sidebar' => array(
						'title' => esc_html__('Archive Blog Sidebar', 'mediz'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'right',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-blog-sidebar-left' => array(
						'title' => esc_html__('Archive Blog Sidebar Left', 'mediz'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-blog-sidebar'=>array('left', 'both') )
					),
					'archive-blog-sidebar-right' => array(
						'title' => esc_html__('Archive Blog Sidebar Right', 'mediz'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-blog-sidebar'=>array('right', 'both') )
					),
					'archive-blog-style' => array(
						'title' => esc_html__('Archive Blog Style', 'mediz'),
						'type' => 'radioimage',
						'options' => array(
							'blog-full' => GDLR_CORE_URL . '/include/images/blog-style/blog-full.png',
							'blog-full-with-frame' => GDLR_CORE_URL . '/include/images/blog-style/blog-full-with-frame.png',
							'blog-column' => GDLR_CORE_URL . '/include/images/blog-style/blog-column.png',
							'blog-column-with-frame' => GDLR_CORE_URL . '/include/images/blog-style/blog-column-with-frame.png',
							'blog-column-no-space' => GDLR_CORE_URL . '/include/images/blog-style/blog-column-no-space.png',
							'blog-image' => GDLR_CORE_URL . '/include/images/blog-style/blog-image.png',
							'blog-image-no-space' => GDLR_CORE_URL . '/include/images/blog-style/blog-image-no-space.png',
							'blog-left-thumbnail' => GDLR_CORE_URL . '/include/images/blog-style/blog-left-thumbnail.png',
							'blog-right-thumbnail' => GDLR_CORE_URL . '/include/images/blog-style/blog-right-thumbnail.png',
						),
						'default' => 'blog-full',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-blog-full-style' => array(
						'title' => esc_html__('Blog Full Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'mediz'),
							'style-2' => esc_html__('Style 2', 'mediz'),
						),
						'condition' => array( 'archive-blog-style'=>array('blog-full', 'blog-full-with-frame') )
					),
					'archive-blog-side-thumbnail-style' => array(
						'title' => esc_html__('Blog Side Thumbnail Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'mediz'),
							'style-1-large' => esc_html__('Style 1 Large Thumbnail', 'mediz'),
							'style-2' => esc_html__('Style 2', 'mediz'),
							'style-2-large' => esc_html__('Style 2 Large Thumbnail', 'mediz'),
						),
						'condition' => array( 'archive-blog-style'=>array('blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-blog-column-style' => array(
						'title' => esc_html__('Blog Column Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'mediz'),
							'style-2' => esc_html__('Style 2', 'mediz'),
						),
						'condition' => array( 'archive-blog-style'=>array('blog-column', 'blog-column-with-frame', 'blog-column-no-space') )
					),
					'archive-blog-image-style' => array(
						'title' => esc_html__('Blog Image Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'style-1' => esc_html__('Style 1', 'mediz'),
							'style-2' => esc_html__('Style 2', 'mediz'),
						),
						'condition' => array( 'archive-blog-style'=>array('blog-image', 'blog-image-no-space') )
					),
					'archive-blog-full-alignment' => array(
						'title' => esc_html__('Archive Blog Full Alignment', 'mediz'),
						'type' => 'combobox',
						'default' => 'enable',
						'options' => array(
							'left' => esc_html__('Left', 'mediz'),
							'center' => esc_html__('Center', 'mediz'),
						),
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame') )
					),
					'archive-thumbnail-size' => array(
						'title' => esc_html__('Archive Thumbnail Size', 'mediz'),
						'type' => 'combobox',
						'options' => 'thumbnail-size'
					),
					'archive-show-thumbnail' => array(
						'title' => esc_html__('Archive Show Thumbnail', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-column-size' => array(
						'title' => esc_html__('Archive Column Size', 'mediz'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5 ),
						'default' => 20,
						'condition' => array( 'archive-blog-style' => array('blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-image', 'blog-image-no-space') )
					),
					'archive-excerpt' => array(
						'title' => esc_html__('Archive Excerpt Type', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'specify-number' => esc_html__('Specify Number', 'mediz'),
							'show-all' => esc_html__('Show All ( use <!--more--> tag to cut the content )', 'mediz'),
						),
						'default' => 'specify-number',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail'))
					),
					'archive-excerpt-number' => array(
						'title' => esc_html__('Archive Excerpt Number', 'mediz'),
						'type' => 'text',
						'default' => 55,
						'data-input-type' => 'number',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-column', 'blog-column-with-frame', 'blog-column-no-space', 'blog-left-thumbnail', 'blog-right-thumbnail'), 'archive-excerpt' => 'specify-number')
					),
					'archive-date-feature' => array(
						'title' => esc_html__('Enable Blog Date Feature', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-left-thumbnail', 'blog-right-thumbnail') )
					),
					'archive-meta-option' => array(
						'title' => esc_html__('Archive Meta Option', 'mediz'),
						'type' => 'multi-combobox',
						'options' => array( 
							'date' => esc_html__('Date', 'mediz'),
							'author' => esc_html__('Author', 'mediz'),
							'category' => esc_html__('Category', 'mediz'),
							'tag' => esc_html__('Tag', 'mediz'),
							'comment' => esc_html__('Comment', 'mediz'),
							'comment-number' => esc_html__('Comment Number', 'mediz'),
						),
						'default' => array('date', 'author', 'category')
					),
					'archive-show-read-more' => array(
						'title' => esc_html__('Archive Show Read More Button', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array('archive-blog-style' => array('blog-full', 'blog-full-with-frame', 'blog-left-thumbnail', 'blog-right-thumbnail'),)
					),
					'archive-blog-title-font-size' => array(
						'title' => esc_html__('Blog Title Font Size', 'mediz'),
						'type' => 'text',
						'data-input-type' => 'pixel',
					),
					'archive-blog-title-font-weight' => array(
						'title' => esc_html__('Blog Title Font Weight', 'mediz'),
						'type' => 'text',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
					),
					'archive-blog-title-letter-spacing' => array(
						'title' => esc_html__('Blog Title Letter Spacing', 'mediz'),
						'type' => 'text',
						'data-input-type' => 'pixel',
					),
					'archive-blog-title-text-transform' => array(
						'title' => esc_html__('Blog Title Text Transform', 'mediz'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'none' => esc_html__('None', 'mediz'),
							'uppercase' => esc_html__('Uppercase', 'mediz'),
							'lowercase' => esc_html__('Lowercase', 'mediz'),
							'capitalize' => esc_html__('Capitalize', 'mediz'),
						),
						'default' => 'none'
					),
				)
			),

			'woocommerce-style' => array(
				'title' => esc_html__('Woocommerce Style', 'mediz'),
				'options' => array(

					'woocommerce-archive-sidebar' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar', 'mediz'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'right',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'woocommerce-archive-sidebar-left' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar Left', 'mediz'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'woocommerce-archive-sidebar'=>array('left', 'both') )
					),
					'woocommerce-archive-sidebar-right' => array(
						'title' => esc_html__('Woocommerce Archive Sidebar Right', 'mediz'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'woocommerce-archive-sidebar'=>array('right', 'both') )
					),
					'woocommerce-archive-product-style' => array(
						'title' => esc_html__('Woocommerce Archive Product Style', 'mediz'),
						'type' => 'combobox',
						'options' => array( 
							'grid' => esc_html__('Grid', 'mediz'),
							'grid-2' => esc_html__('Grid 2', 'mediz'),
							'grid-3' => esc_html__('Grid 3', 'mediz'),
							'grid-4' => esc_html__('Grid 4', 'mediz'),
						),
						'default' => 'grid'
					),
					'woocommerce-archive-column-size' => array(
						'title' => esc_html__('Woocommerce Archive Column Size', 'mediz'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15
					),
					'woocommerce-archive-thumbnail' => array(
						'title' => esc_html__('Woocommerce Archive Thumbnail Size', 'mediz'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
					'woocommerce-related-product-column-size' => array(
						'title' => esc_html__('Woocommerce Related Product Column Size', 'mediz'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15
					),
					'woocommerce-related-product-num-fetch' => array(
						'title' => esc_html__('Woocommerce Related Product Num Fetch', 'mediz'),
						'type' => 'text',
						'default' => 4,
						'data-input-type' => 'number'
					),
					'woocommerce-related-product-thumbnail' => array(
						'title' => esc_html__('Woocommerce Related Product Thumbnail Size', 'mediz'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'default' => 'full'
					),
				)
			),

			'portfolio-style' => array(
				'title' => esc_html__('Portfolio Style', 'mediz'),
				'options' => array(
					'portfolio-slug' => array(
						'title' => esc_html__('Portfolio Slug (Permalink)', 'mediz'),
						'type' => 'text',
						'default' => 'portfolio',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'mediz')
					),
					'portfolio-category-slug' => array(
						'title' => esc_html__('Portfolio Category Slug (Permalink)', 'mediz'),
						'type' => 'text',
						'default' => 'portfolio_category',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'mediz')
					),
					'portfolio-tag-slug' => array(
						'title' => esc_html__('Portfolio Tag Slug (Permalink)', 'mediz'),
						'type' => 'text',
						'default' => 'portfolio_tag',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'mediz')
					),
					'enable-single-portfolio-navigation' => array(
						'title' => esc_html__('Enable Single Portfolio Navigation', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'disable' => esc_html__('Disable', 'mediz'),
							'enable' => esc_html__('Style 1', 'mediz'),
							'style-2' => esc_html__('Style 2', 'mediz'),
						),
						'default' => 'enable'
					),
					'enable-single-portfolio-navigation-in-same-tag' => array(
						'title' => esc_html__('Enable Single Portfolio Navigation Within Same Tag', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-single-portfolio-navigation' => array('enable', 'style-2') )
					),
					'single-portfolio-navigation-middle-link' => array(
						'title' => esc_html__('Single Portfolio Navigation Middle Link', 'mediz'),
						'type' => 'text',
						'default' => '#',
						'condition' => array( 'enable-single-portfolio-navigation' => 'style-2' )
					),
					'portfolio-icon-hover-link' => array(
						'title' => esc_html__('Portfolio Hover Icon (Link)', 'mediz'),
						'type' => 'radioimage',
						'options' => 'hover-icon-link',
						'default' => 'icon_link_alt'
					),
					'portfolio-icon-hover-video' => array(
						'title' => esc_html__('Portfolio Hover Icon (Video)', 'mediz'),
						'type' => 'radioimage',
						'options' => 'hover-icon-video',
						'default' => 'icon_film'
					),
					'portfolio-icon-hover-image' => array(
						'title' => esc_html__('Portfolio Hover Icon (Image)', 'mediz'),
						'type' => 'radioimage',
						'options' => 'hover-icon-image',
						'default' => 'icon_zoom-in_alt'
					),
					'portfolio-icon-hover-size' => array(
						'title' => esc_html__('Portfolio Hover Icon Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '22px',
						'selector' => '.gdlr-core-portfolio-thumbnail .gdlr-core-portfolio-icon{ font-size: #gdlr#; }' 
					),
					'enable-related-portfolio' => array(
						'title' => esc_html__('Enable Related Portfolio', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'related-portfolio-style' => array(
						'title' => esc_html__('Related Portfolio Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'grid' => esc_html__('Grid', 'mediz'),
							'modern' => esc_html__('Modern', 'mediz'),
						),
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-column-size' => array(
						'title' => esc_html__('Related Portfolio Column Size', 'mediz'),
						'type' => 'combobox',
						'options' => array( 60 => 1, 30 => 2, 20 => 3, 15 => 4, 12 => 5, 10 => 6, ),
						'default' => 15,
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-num-fetch' => array(
						'title' => esc_html__('Related Portfolio Num Fetch', 'mediz'),
						'type' => 'text',
						'default' => 4,
						'data-input-type' => 'number',
						'condition' => array('enable-related-portfolio'=>'enable')
					),
					'related-portfolio-thumbnail-size' => array(
						'title' => esc_html__('Related Portfolio Thumbnail Size', 'mediz'),
						'type' => 'combobox',
						'options' => 'thumbnail-size',
						'condition' => array('enable-related-portfolio'=>'enable'),
						'default' => 'medium'
					),
					'related-portfolio-num-excerpt' => array(
						'title' => esc_html__('Related Portfolio Num Excerpt', 'mediz'),
						'type' => 'text',
						'default' => 20,
						'data-input-type' => 'number',
						'condition' => array('enable-related-portfolio'=>'enable', 'related-portfolio-style'=>'grid')
					),
				)
			),

			'portfolio-archive' => array(
				'title' => esc_html__('Portfolio Archive', 'mediz'),
				'options' => array(
					'archive-portfolio-sidebar' => array(
						'title' => esc_html__('Archive Portfolio Sidebar', 'mediz'),
						'type' => 'radioimage',
						'options' => 'sidebar',
						'default' => 'none',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-sidebar-left' => array(
						'title' => esc_html__('Archive Portfolio Sidebar Left', 'mediz'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-portfolio-sidebar'=>array('left', 'both') )
					),
					'archive-portfolio-sidebar-right' => array(
						'title' => esc_html__('Archive Portfolio Sidebar Right', 'mediz'),
						'type' => 'combobox',
						'options' => 'sidebar',
						'default' => 'none',
						'condition' => array( 'archive-portfolio-sidebar'=>array('right', 'both') )
					),
					'archive-portfolio-style' => array(
						'title' => esc_html__('Archive Portfolio Style', 'mediz'),
						'type' => 'radioimage',
						'options' => array(
							'modern' => get_template_directory_uri() . '/include/options/images/portfolio/modern.png',
							'modern-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/modern-no-space.png',
							'grid' => get_template_directory_uri() . '/include/options/images/portfolio/grid.png',
							'grid-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/grid-no-space.png',
							'modern-desc' => get_template_directory_uri() . '/include/options/images/portfolio/modern-desc.png',
							'modern-desc-no-space' => get_template_directory_uri() . '/include/options/images/portfolio/modern-desc-no-space.png',
							'medium' => get_template_directory_uri() . '/include/options/images/portfolio/medium.png',
						),
						'default' => 'medium',
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-thumbnail-size' => array(
						'title' => esc_html__('Archive Portfolio Thumbnail Size', 'mediz'),
						'type' => 'combobox',
						'options' => 'thumbnail-size'
					),
					'archive-portfolio-grid-text-align' => array(
						'title' => esc_html__('Archive Portfolio Grid Text Align', 'mediz'),
						'type' => 'radioimage',
						'options' => 'text-align',
						'default' => 'left',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space' ) )
					),
					'archive-portfolio-grid-style' => array(
						'title' => esc_html__('Archive Portfolio Grid Content Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'normal' => esc_html__('Normal', 'mediz'),
							'with-frame' => esc_html__('With Frame', 'mediz'),
							'with-bottom-border' => esc_html__('With Bottom Border', 'mediz'),
						),
						'default' => 'normal',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space' ) )
					),
					'archive-enable-portfolio-tag' => array(
						'title' => esc_html__('Archive Enable Portfolio Tag', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ) )
					),
					'archive-portfolio-medium-size' => array(
						'title' => esc_html__('Archive Portfolio Medium Thumbnail Size', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'small' => esc_html__('Small', 'mediz'),
							'large' => esc_html__('Large', 'mediz'),
						),
						'condition' => array( 'archive-portfolio-style' => 'medium' )
					),
					'archive-portfolio-medium-style' => array(
						'title' => esc_html__('Archive Portfolio Medium Thumbnail Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'left' => esc_html__('Left', 'mediz'),
							'right' => esc_html__('Right', 'mediz'),
							'switch' => esc_html__('Switch ( Between Left and Right )', 'mediz'),
						),
						'default' => 'switch',
						'condition' => array( 'archive-portfolio-style' => 'medium' )
					),
					'archive-portfolio-hover' => array(
						'title' => esc_html__('Archive Portfolio Hover Style', 'mediz'),
						'type' => 'radioimage',
						'options' => array(
							'title' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title.png',
							'title-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title-icon.png',
							'title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/title-tag.png',
							'icon-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/icon-title-tag.png',
							'icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/icon.png',
							'margin-title' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title.png',
							'margin-title-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title-icon.png',
							'margin-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-title-tag.png',
							'margin-icon-title-tag' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-icon-title-tag.png',
							'margin-icon' => get_template_directory_uri() . '/include/options/images/portfolio/hover/margin-icon.png',
							'none' => get_template_directory_uri() . '/include/options/images/portfolio/hover/none.png',
						),
						'default' => 'icon',
						'max-width' => '100px',
						'condition' => array( 'archive-portfolio-style' => array('modern', 'modern-no-space', 'grid', 'grid-no-space', 'medium') ),
						'wrapper-class' => 'gdlr-core-fullsize'
					),
					'archive-portfolio-column-size' => array(
						'title' => esc_html__('Archive Portfolio Column Size', 'mediz'),
						'type' => 'combobox',
						'options' => array( 60=>1, 30=>2, 20=>3, 15=>4, 12=>5 ),
						'default' => 20,
						'condition' => array( 'archive-portfolio-style' => array('modern', 'modern-no-space', 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space') )
					),
					'archive-portfolio-excerpt' => array(
						'title' => esc_html__('Archive Portfolio Excerpt Type', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'specify-number' => esc_html__('Specify Number', 'mediz'),
							'show-all' => esc_html__('Show All ( use <!--more--> tag to cut the content )', 'mediz'),
							'none' => esc_html__('Disable Exceprt', 'mediz'),
						),
						'default' => 'specify-number',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ) )
					),
					'archive-portfolio-excerpt-number' => array(
						'title' => esc_html__('Archive Portfolio Excerpt Number', 'mediz'),
						'type' => 'text',
						'default' => 55,
						'data-input-type' => 'number',
						'condition' => array( 'archive-portfolio-style' => array( 'grid', 'grid-no-space', 'modern-desc', 'modern-desc-no-space', 'medium' ), 'archive-portfolio-excerpt' => 'specify-number' )
					),

				)
			),

			'personnel-style' => array(
				'title' => esc_html__('Personnel Style', 'mediz'),
				'options' => array(
					'personnel-slug' => array(
						'title' => esc_html__('Personnel Slug (Permalink)', 'mediz'),
						'type' => 'text',
						'default' => 'personnel',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'mediz')
					),
					'personnel-category-slug' => array(
						'title' => esc_html__('Personnel Category Slug (Permalink)', 'mediz'),
						'type' => 'text',
						'default' => 'personnel_category',
						'description' => esc_html__('Please save the "Settings > Permalink" area once after made a changes to this field.', 'mediz')
					),
				)
			),

			'footer' => array(
				'title' => esc_html__('Footer/Copyright', 'mediz'),
				'options' => array(

					'fixed-footer' => array(
						'title' => esc_html__('Fixed Footer', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
					'enable-footer' => array(
						'title' => esc_html__('Enable Footer', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'footer-background' => array(
						'title' => esc_html__('Footer Background', 'mediz'),
						'type' => 'upload',
						'data-type' => 'file',
						'selector' => '.mediz-footer-wrapper{ background-image: url(#gdlr#); background-size: cover; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'enable-footer-column-divider' => array(
						'title' => esc_html__('Enable Footer Column Divider', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-top-padding' => array(
						'title' => esc_html__('Footer Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '70px',
						'selector' => '.mediz-footer-wrapper{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-bottom-padding' => array(
						'title' => esc_html__('Footer Bottom Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '50px',
						'selector' => '.mediz-footer-wrapper{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'footer-style' => array(
						'title' => esc_html__('Footer Style', 'mediz'),
						'type' => 'radioimage',
						'wrapper-class' => 'gdlr-core-fullsize',
						'options' => array(
							'footer-1' => get_template_directory_uri() . '/include/options/images/footer-style1.png',
							'footer-2' => get_template_directory_uri() . '/include/options/images/footer-style2.png',
							'footer-3' => get_template_directory_uri() . '/include/options/images/footer-style3.png',
							'footer-4' => get_template_directory_uri() . '/include/options/images/footer-style4.png',
							'footer-5' => get_template_directory_uri() . '/include/options/images/footer-style5.png',
							'footer-6' => get_template_directory_uri() . '/include/options/images/footer-style6.png',
						),
						'default' => 'footer-2',
						'condition' => array( 'enable-footer' => 'enable' )
					),
					'enable-copyright' => array(
						'title' => esc_html__('Enable Copyright', 'mediz'),
						'type' => 'checkbox',
						'default' => 'enable'
					),
					'copyright-style' => array(
						'title' => esc_html__('Copyright Style', 'mediz'),
						'type' => 'combobox',
						'options' => array(
							'center' => esc_html__('Center', 'mediz'),
							'left-right' => esc_html__('Left & Right', 'mediz'),
						),
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-top-padding' => array(
						'title' => esc_html__('Copyright Top Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '38px',
						'selector' => '.mediz-copyright-container{ padding-top: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),
					'copyright-bottom-padding' => array(
						'title' => esc_html__('Copyright Bottom Padding', 'mediz'),
						'type' => 'fontslider',
						'data-min' => '0',
						'data-max' => '300',
						'data-type' => 'pixel',
						'default' => '38px',
						'selector' => '.mediz-copyright-container{ padding-bottom: #gdlr#; }',
						'condition' => array( 'enable-copyright' => 'enable' )
					),	
					'copyright-text' => array(
						'title' => esc_html__('Copyright Text', 'mediz'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable', 'copyright-style' => 'center' )
					),
					'copyright-left' => array(
						'title' => esc_html__('Copyright Left', 'mediz'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable', 'copyright-style' => 'left-right' )
					),
					'copyright-right' => array(
						'title' => esc_html__('Copyright Right', 'mediz'),
						'type' => 'textarea',
						'wrapper-class' => 'gdlr-core-fullsize',
						'condition' => array( 'enable-copyright' => 'enable', 'copyright-style' => 'left-right' )
					),
					'enable-back-to-top' => array(
						'title' => esc_html__('Enable Back To Top Button', 'mediz'),
						'type' => 'checkbox',
						'default' => 'disable'
					),
				) // footer-options
			), // footer-nav	
		
		) // general-options
		
	), 2);