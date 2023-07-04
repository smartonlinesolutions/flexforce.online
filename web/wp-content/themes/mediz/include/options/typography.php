<?php
	/*	
	*	Goodlayers Option
	*	---------------------------------------------------------------------
	*	This file store an array of theme options
	*	---------------------------------------------------------------------
	*/	

	$mediz_admin_option->add_element(array(
	
		// typography head section
		'title' => esc_html__('Typography', 'mediz'),
		'slug' => 'mediz_typography',
		'icon' => get_template_directory_uri() . '/include/options/images/typography.png',
		'options' => array(
		
			// starting the subnav
			'font-family' => array(
				'title' => esc_html__('Font Family', 'mediz'),
				'options' => array(
					'google-font-display' => array(
						'title' => esc_html__('Google Font Display', 'mediz'),
						'type' => 'combobox',
						'options' => array( 
							'' => esc_html__('Auto', 'mediz'),
							'block' => esc_html__('Block', 'mediz'),
							'swap' => esc_html__('Swap', 'mediz'),
							'fallback' => esc_html__('Fall Back', 'mediz'),
							'optional' => esc_html__('Optional', 'mediz'),
						),
						'default' => 'optional',
						'description' => wp_kses(__('This option could increase the page speed result of your site. You can learn more about the font display <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display" target="_blank" >here</a>', 'mediz'), array('a'=>array('href'=>array(), 'target'=>array())))
					),
					'heading-font' => array(
						'title' => esc_html__('Heading Font', 'mediz'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.mediz-body h1, .mediz-body h2, .mediz-body h3, ' . 
							'.mediz-body h4, .mediz-body h5, .mediz-body h6, .mediz-body .mediz-title-font,' .
							'.mediz-body .gdlr-core-title-font{ font-family: #gdlr#; }' . 
							'.woocommerce-breadcrumb, .woocommerce span.onsale, ' .
							'.single-product.woocommerce div.product p.price .woocommerce-Price-amount, .single-product.woocommerce #review_form #respond label{ font-family: #gdlr#; }'
					),
					'navigation-font' => array(
						'title' => esc_html__('Navigation Font', 'mediz'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.mediz-navigation .sf-menu > li > a, .mediz-navigation .sf-vertical > li > a, .mediz-navigation-font{ font-family: #gdlr#; }'
					),	
					'content-font' => array(
						'title' => esc_html__('Content Font', 'mediz'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.mediz-body, .mediz-body .gdlr-core-content-font, ' . 
							'.mediz-body input, .mediz-body textarea, .mediz-body button, .mediz-body select, ' . 
							'.mediz-body .mediz-content-font, .gdlr-core-audio .mejs-container *{ font-family: #gdlr#; }'
					),
					'info-font' => array(
						'title' => esc_html__('Info Font', 'mediz'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.mediz-body .gdlr-core-info-font, .mediz-body .mediz-info-font{ font-family: #gdlr#; }'
					),
					'blog-info-font' => array(
						'title' => esc_html__('Blog Info Font', 'mediz'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.mediz-body .gdlr-core-blog-info-font, .mediz-body .mediz-blog-info-font{ font-family: #gdlr#; }'
					),
					'quote-font' => array(
						'title' => esc_html__('Quote Font', 'mediz'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.mediz-body .gdlr-core-quote-font, blockquote{ font-family: #gdlr#; }'
					),
					'testimonial-font' => array(
						'title' => esc_html__('Testimonial Font', 'mediz'),
						'type' => 'font',
						'data-type' => 'font',
						'default' => 'Open Sans',
						'selector' => '.mediz-body .gdlr-core-testimonial-content{ font-family: #gdlr#; }'
					),
					'additional-font' => array(
						'title' => esc_html__('Additional Font', 'mediz'),
						'type' => 'font',
						'data-type' => 'font',
						'customizer' => false,
						'default' => 'Georgia, serif',
						'description' => esc_html__('Additional font you want to include for custom css.', 'mediz')
					),
					'additional-font2' => array(
						'title' => esc_html__('Additional Font2', 'mediz'),
						'type' => 'font',
						'data-type' => 'font',
						'customizer' => false,
						'default' => 'Georgia, serif',
						'description' => esc_html__('Additional font you want to include for custom css.', 'mediz')
					),
					
				) // font-family-options
			), // font-family-nav
			
			'font-size' => array(
				'title' => esc_html__('Font Size', 'mediz'),
				'options' => array(
				
					'h1-font-size' => array(
						'title' => esc_html__('H1 Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '52px',
						'selector' => '.mediz-body h1{ font-size: #gdlr#; }' 
					),					
					'h2-font-size' => array(
						'title' => esc_html__('H2 Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '48px',
						'selector' => '.mediz-body h2, #poststuff .gdlr-core-page-builder-body h2{ font-size: #gdlr#; }' 
					),					
					'h3-font-size' => array(
						'title' => esc_html__('H3 Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '36px',
						'selector' => '.mediz-body h3{ font-size: #gdlr#; }' 
					),					
					'h4-font-size' => array(
						'title' => esc_html__('H4 Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '28px',
						'selector' => '.mediz-body h4{ font-size: #gdlr#; }' 
					),					
					'h5-font-size' => array(
						'title' => esc_html__('H5 Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '22px',
						'selector' => '.mediz-body h5{ font-size: #gdlr#; }' 
					),					
					'h6-font-size' => array(
						'title' => esc_html__('H6 Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '18px',
						'selector' => '.mediz-body h6{ font-size: #gdlr#; }' 
					),				
					'header-font-weight' => array(
						'title' => esc_html__('Header Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.mediz-body h1, .mediz-body h2, .mediz-body h3, .mediz-body h4, .mediz-body h5, .mediz-body h6{ font-weight: #gdlr#; }' . 
							'#poststuff .gdlr-core-page-builder-body h1, #poststuff .gdlr-core-page-builder-body h2{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
					),
					'content-font-size' => array(
						'title' => esc_html__('Content Font Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.mediz-body{ font-size: #gdlr#; }' 
					),
					'content-font-weight' => array(
						'title' => esc_html__('Content Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.mediz-body{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
					),
					'content-line-height' => array(
						'title' => esc_html__('Content Line Height', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'default' => '1.7',
						'selector' => '.mediz-body, .mediz-body p, .mediz-line-height, .gdlr-core-line-height{ line-height: #gdlr#; }'
					),
					
				) // font-size-options
			), // font-size-nav			
			
			'mobile-font-size' => array(
				'title' => esc_html__('Mobile Font Size', 'mediz'),
				'options' => array(

					'mobile-h1-font-size' => array(
						'title' => esc_html__('Mobile H1 Size', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .mediz-body h1{ font-size: #gdlr#; } }' 
					),
					'mobile-h2-font-size' => array(
						'title' => esc_html__('Mobile H2 Size', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .mediz-body h2, #poststuff .gdlr-core-page-builder-body h2{ font-size: #gdlr#; } }' 
					),
					'mobile-h3-font-size' => array(
						'title' => esc_html__('Mobile H3 Size', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .mediz-body h3{ font-size: #gdlr#; } }' 
					),
					'mobile-h4-font-size' => array(
						'title' => esc_html__('Mobile H4 Size', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .mediz-body h4{ font-size: #gdlr#; } }' 
					),
					'mobile-h5-font-size' => array(
						'title' => esc_html__('Mobile H5 Size', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .mediz-body h5{ font-size: #gdlr#; } }' 
					),
					'mobile-h6-font-size' => array(
						'title' => esc_html__('Mobile H6 Size', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .mediz-body h6{ font-size: #gdlr#; } }' 
					),					
					'mobile-content-font-size' => array(
						'title' => esc_html__('Mobile Content Font Size', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '@media only screen and (max-width: 767px){ .mediz-body{ font-size: #gdlr#; } }' 
					),

				)
			),

			'navigation-font-size' => array(
				'title' => esc_html__('Navigation Font Size', 'mediz'),
				'options' => array(	
					'navigation-font-size' => array(
						'title' => esc_html__('Navigation Font Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '14px',
						'selector' => '.mediz-navigation .sf-menu > li > a, .mediz-navigation .sf-vertical > li > a{ font-size: #gdlr#; }' 
					),	
					'navigation-font-weight' => array(
						'title' => esc_html__('Navigation Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'default' => '800',
						'selector' => '.mediz-navigation .sf-menu > li > a, .mediz-navigation .sf-vertical > li > a{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
					),	
					'navigation-font-letter-spacing' => array(
						'title' => esc_html__('Navigation Font Letter Spacing', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.mediz-navigation .sf-menu > li > a, .mediz-navigation .sf-vertical > li > a{ letter-spacing: #gdlr#; }'
					),
					'navigation-text-transform' => array(
						'title' => esc_html__('Navigation Text Transform', 'mediz'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'mediz'),
							'lowercase' => esc_html__('Lowercase', 'mediz'),
							'capitalize' => esc_html__('Capitalize', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
						),
						'default' => 'uppercase',
						'selector' => '.mediz-navigation .sf-menu > li > a, .mediz-navigation .sf-vertical > li > a{ text-transform: #gdlr#; }',
					),
					'sub-navigation-font-size' => array(
						'title' => esc_html__('Sub Navigation Font Size', 'mediz'),
						'type' => 'text',
						'data-input-type' => 'pixel',
						'data-type' => 'pixel',
						'selector' => '.mediz-navigation .sf-menu > .mediz-normal-menu .sub-menu, .mediz-navigation .sf-menu>.mediz-mega-menu .sf-mega-section-inner .sub-menu a{ font-size: #gdlr#; }' 
					),
					'navigation-right-button-font-size' => array(
						'title' => esc_html__('Navigation Right Button Font Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '11px',
						'selector' => '.mediz-main-menu-right-button{ font-size: #gdlr#; }' 
					),	
					'navigation-right-button-font-weight' => array(
						'title' => esc_html__('Navigation Right Button Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.mediz-main-menu-right-button{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
					),	
					'navigation-right-button-font-letter-spacing' => array(
						'title' => esc_html__('Navigation Right Button Font Letter Spacing', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.mediz-main-menu-right-button{ letter-spacing: #gdlr#; }'
					),
					'navigation-right-button-text-transform' => array(
						'title' => esc_html__('Navigation Right Button Text Transform', 'mediz'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'mediz'),
							'lowercase' => esc_html__('Lowercase', 'mediz'),
							'capitalize' => esc_html__('Capitalize', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
						),
						'default' => 'uppercase',
						'selector' => '.mediz-main-menu-right-button{ text-transform: #gdlr#; }',
					),
				) // font-size-options
			), // font-size-nav
			
			'footer-font-size' => array(
				'title' => esc_html__('Sidebar / Footer Font Size', 'mediz'),
				'options' => array(
					
					'sidebar-title-font-size' => array(
						'title' => esc_html__('Sidebar Title Font Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '13px',
						'selector' => '.mediz-sidebar-area .mediz-widget-title{ font-size: #gdlr#; }' 
					),
					'sidebar-title-font-weight' => array(
						'title' => esc_html__('Sidebar Title Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.mediz-sidebar-area .mediz-widget-title{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
					),	
					'sidebar-title-font-letter-spacing' => array(
						'title' => esc_html__('Sidebar Title Font Letter Spacing', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.mediz-sidebar-area .mediz-widget-title{ letter-spacing: #gdlr#; }'
					),
					'sidebar-title-text-transform' => array(
						'title' => esc_html__('Sidebar Title Text Transform', 'mediz'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'mediz'),
							'lowercase' => esc_html__('Lowercase', 'mediz'),
							'capitalize' => esc_html__('Capitalize', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
						),
						'default' => 'uppercase',
						'selector' => '.mediz-sidebar-area .mediz-widget-title{ text-transform: #gdlr#; }',
					),
					'footer-title-font-size' => array(
						'title' => esc_html__('Footer Title Font Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '13px',
						'selector' => '.mediz-footer-wrapper .mediz-widget-title{ font-size: #gdlr#; }' 
					),
					'footer-title-font-weight' => array(
						'title' => esc_html__('Footer Title Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.mediz-footer-wrapper .mediz-widget-title{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
					),	
					'footer-title-font-letter-spacing' => array(
						'title' => esc_html__('Footer Title Font Letter Spacing', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.mediz-footer-wrapper .mediz-widget-title{ letter-spacing: #gdlr#; }'
					),
					'footer-title-text-transform' => array(
						'title' => esc_html__('Footer Title Text Transform', 'mediz'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'mediz'),
							'lowercase' => esc_html__('Lowercase', 'mediz'),
							'capitalize' => esc_html__('Capitalize', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
						),
						'default' => 'uppercase',
						'selector' => '.mediz-footer-wrapper .mediz-widget-title{ text-transform: #gdlr#; }',
					),
					'footer-font-size' => array(
						'title' => esc_html__('Footer Content Font Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '15px',
						'selector' => '.mediz-footer-wrapper{ font-size: #gdlr#; }' 
					),
					'footer-content-font-weight' => array(
						'title' => esc_html__('Footer Content Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.mediz-footer-wrapper .widget_text{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
					),	
					'footer-content-text-transform' => array(
						'title' => esc_html__('Footer Content Text Transform', 'mediz'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'mediz'),
							'lowercase' => esc_html__('Lowercase', 'mediz'),
							'capitalize' => esc_html__('Capitalize', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
						),
						'default' => 'none',
						'selector' => '.mediz-footer-wrapper .widget_text{ text-transform: #gdlr#; }',
					),
					'copyright-font-size' => array(
						'title' => esc_html__('Copyright Font Size', 'mediz'),
						'type' => 'fontslider',
						'data-type' => 'pixel',
						'default' => '14px',
						'selector' => '.mediz-copyright-text, .mediz-copyright-left, .mediz-copyright-right{ font-size: #gdlr#; }' 
					),
					'copyright-font-weight' => array(
						'title' => esc_html__('Copyright Font Weight', 'mediz'),
						'type' => 'text',
						'data-type' => 'text',
						'selector' => '.mediz-copyright-text, .mediz-copyright-left, .mediz-copyright-right{ font-weight: #gdlr#; }',
						'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
					),	
					'copyright-font-letter-spacing' => array(
						'title' => esc_html__('Copyright Font Letter Spacing', 'mediz'),
						'type' => 'text',
						'data-type' => 'pixel',
						'data-input-type' => 'pixel',
						'selector' => '.mediz-copyright-text, .mediz-copyright-left, .mediz-copyright-right{ letter-spacing: #gdlr#; }'
					),
					'copyright-text-transform' => array(
						'title' => esc_html__('Copyright Text Transform', 'mediz'),
						'type' => 'combobox',
						'data-type' => 'text',
						'options' => array(
							'uppercase' => esc_html__('Uppercase', 'mediz'),
							'lowercase' => esc_html__('Lowercase', 'mediz'),
							'capitalize' => esc_html__('Capitalize', 'mediz'),
							'none' => esc_html__('None', 'mediz'),
						),
						'default' => 'uppercase',
						'selector' => '.mediz-copyright-text, .mediz-copyright-left, .mediz-copyright-right{ text-transform: #gdlr#; }',
					),
				)
			),

			'font-upload' => array(
				'title' => esc_html__('Font Uploader', 'mediz'),
				'reload-after' => true,
				'customizer' => false,
				'options' => array(
					
					'font-upload' => array(
						'title' => esc_html__('Upload Fonts', 'mediz'),
						'type' => 'custom',
						'item-type' => 'fontupload',
						'wrapper-class' => 'gdlr-core-fullsize',
					),
					
				) // fontupload-options
			), // fontupload-nav
		
		) // typography-options
		
	), 4);