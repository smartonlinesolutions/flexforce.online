<?php 
	/*	
	*	Goodlayers Function Inclusion File
	*	---------------------------------------------------------------------
	*	This file contains the script to includes necessary function to the theme
	*	---------------------------------------------------------------------
	*/

	// Set the content width based on the theme's design and stylesheet.
	if( !isset($content_width) ){
		$content_width = str_replace('px', '', '1150px'); 
	}

	// Add body class for page builder
	add_filter('body_class', 'mediz_body_class');
	if( !function_exists('mediz_body_class') ){
		function mediz_body_class( $classes ) {
			$classes[] = 'mediz-body';
			$classes[] = 'mediz-body-front';

			// layout class
			$layout = mediz_get_option('general', 'layout', 'full');
			if( $layout == 'boxed' ){
			 	$classes[] = 'mediz-boxed';

			 	$border = mediz_get_option('general', 'enable-boxed-border', 'disable');
			 	if( $border == 'enable' ){
			 		$classes[] = 'mediz-boxed-border';
			 	}
			}else{
				$classes[] = 'mediz-full';
			}

			// background class
			if( $layout == 'boxed' ){
				$post_option = mediz_get_post_option(get_the_ID());
				if( empty($post_option['body-background-type']) || $post_option['body-background-type'] == 'default' ){
					$background = mediz_get_option('general', 'background-type', 'color');
				 	if( $background == 'pattern' ){
				 		$classes[] = 'mediz-background-pattern';
				 	}
				}
			}

			// header style
			$header_style = mediz_get_option('general', 'header-style', 'plain');
			if( !in_array($header_style, array('side', 'side-toggle')) ){
				if( is_page() ){
					$post_option = mediz_get_post_option(get_the_ID());
				}

				if( empty($post_option['sticky-navigation']) || $post_option['sticky-navigation'] == 'default' ){
					$sticky_menu = mediz_get_option('general', 'enable-main-navigation-sticky', 'enable');
				}else{
					$sticky_menu = $post_option['sticky-navigation'];
				}
				if( $sticky_menu == 'enable' ){
					$classes[] = ' mediz-with-sticky-navigation';
					
					$sticky_menu_logo = mediz_get_option('general', 'enable-logo-on-main-navigation-sticky', 'enable');
					if( $sticky_menu_logo == 'disable' ){
						$classes[] = ' mediz-sticky-navigation-no-logo';
					}
				}
			}

			// blog style
			if( is_single() && get_post_type() == 'post' ){
				$blog_style = mediz_get_option('general', 'blog-style', 'style-1');
				$classes[] = ' mediz-blog-' . $blog_style;
			}

			// blockquote style
			$blockquote_style = mediz_get_option('general', 'blockquote-style', 'style-1');
			$classes[] = ' mediz-blockquote-' . $blockquote_style;
			
			return $classes;
		}
	}

	// Set the neccessary function to be used in the theme
	add_action('after_setup_theme', 'mediz_theme_setup');
	if( !function_exists( 'mediz_theme_setup' ) ){
		function mediz_theme_setup(){
			
			// define textdomain for translation
			load_theme_textdomain('mediz', get_template_directory() . '/languages');

			// add default posts and comments RSS feed links to head.
			add_theme_support('automatic-feed-links');

			// declare that this theme does not use a hard-coded <title> tag in <head>
			add_theme_support('title-tag');

			// tmce editor stylesheet
			add_editor_style('/css/editor-style.css');

			// define menu locations
			register_nav_menus(array(
				'main_menu' => esc_html__('Primary Menu', 'mediz'),
				'right_menu' => esc_html__('Secondary Menu', 'mediz'),
				'top_bar_menu' => esc_html__('Top Bar Menu', 'mediz'),
				'mobile_menu' => esc_html__('Mobile Menu', 'mediz'),
			));

			// enable support for post formats / thumbnail
			add_theme_support('post-thumbnails');
			add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio')); // 'status', 'chat'
			
			// switch default core markup
			add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
			
			// add custom image size
			$thumbnail_sizes = mediz_get_option('plugin', 'thumbnail-sizing');
			if( !empty($thumbnail_sizes) ){
				foreach( $thumbnail_sizes as $thumbnail_size ){
					add_image_size($thumbnail_size['name'], $thumbnail_size['width'], $thumbnail_size['height'], true);
				}
			}

		}
	}

	// turn the page comment off by default
	add_filter( 'wp_insert_post_data', 'mediz_page_default_comments_off' );
	if( !function_exists('mediz_page_default_comments_off') ){
		function mediz_page_default_comments_off( $data ) {
			if( $data['post_type'] == 'page' && $data['post_status'] == 'auto-draft' ) {
				$data['comment_status'] = 0;
			} 

			return $data;
		}
	}

	// top bar menu
	if( !function_exists('mediz_get_top_bar_menu') ){
		function mediz_get_top_bar_menu($position = 'left'){
			if( has_nav_menu('top_bar_menu') ){
				wp_nav_menu(array(
					'menu_id' => 'mediz-top-bar-menu',
					'theme_location'=>'top_bar_menu', 
					'container'=> '', 
					'menu_class'=> 'sf-menu mediz-top-bar-menu mediz-top-bar-' . esc_attr($position) . '-menu',
					'walker' => new mediz_menu_walker()
				));
			}
		}
	}

	// logo displaying
	if( !function_exists('mediz_get_logo') ){
		function mediz_get_logo($settings = array()){

			$enable_logo = get_post_meta(get_the_ID(), 'gdlr-enable-logo', true);
			if( empty($enable_logo) ){
				$enable_logo = mediz_get_option('general', 'enable-logo', 'enable');
			}
			if( $enable_logo == 'disable' ){ return ''; }

			$extra_class  = (isset($settings['padding']) && $settings['padding'] === false)? '': ' mediz-item-pdlr';
			$extra_class .= empty($settings['wrapper-class'])? '': ' ' . $settings['wrapper-class'];
			
			$ret  = '<div class="mediz-logo ' . esc_attr($extra_class) . '">';
			$ret .= '<div class="mediz-logo-inner">';
		
			// fixed nav logo
			$orig_logo_class = ''; 
			if( empty($settings['mobile']) ){
				$enable_fixed_nav = mediz_get_option('general', 'enable-main-navigation-sticky', 'enable');
				$fixed_nav_sticky = mediz_get_option('general', 'enable-logo-on-main-navigation-sticky', 'enable');
				$fixed_nav_logo = mediz_get_option('general', 'fixed-navigation-bar-logo', '');
				if( $enable_fixed_nav == 'enable' && $fixed_nav_sticky == 'enable' && !empty($fixed_nav_logo) ){
					$ret .= '<a class="mediz-fixed-nav-logo" href="' . esc_url(home_url('/')) . '" >';
					$ret .= gdlr_core_get_image($fixed_nav_logo);
					$ret .= '</a>';

					$orig_logo_class = ' mediz-orig-logo'; 
				}
			}
		
			// print logo / mobile logo
			if( !empty($settings['mobile']) ){
				$logo_id = mediz_get_option('general', 'mobile-logo');
			} 
			if( empty($logo_id) ){
				$logo_id = mediz_get_option('general', 'logo');
			}
			if( is_numeric($logo_id) && !wp_attachment_is_image($logo_id) ){
				$logo_id = '';
			}
			$ret .= '<a class="' . esc_attr($orig_logo_class) . '" href="' . esc_url(home_url('/')) . '" >';
			if( empty($logo_id) ){
				if( !empty($settings['mobile']) && file_exists(get_template_directory() . '/images/logo-mobile.png') ){
					$ret .= gdlr_core_get_image(get_template_directory_uri() . '/images/logo-mobile.png');
				}else{
					$ret .= gdlr_core_get_image(get_template_directory_uri() . '/images/logo.png');
				}
			}else{
				$ret .= gdlr_core_get_image($logo_id);
			}
			$ret .= '</a>';

			$ret .= '</div>';
			$ret .= '</div>';

			return $ret;
		}	
	}

	// set anchor color
	add_action('wp_enqueue_scripts', 'mediz_set_anchor_color', 12);
	if( !function_exists('mediz_set_anchor_color') ){
		function mediz_set_anchor_color(){
			$post_option = mediz_get_post_option(get_the_ID());

			$anchor_css = '';
			if( !empty($post_option['bullet-anchor']) ){
				foreach( $post_option['bullet-anchor'] as $anchor ){
					if( !empty($anchor['title']) ){
						$anchor_section = str_replace('#', '', $anchor['title']);

						if( !empty($anchor['anchor-color']) ){
							$anchor_css .= '.mediz-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a:before{ background-color: ' . esc_html($anchor['anchor-color']) . '; }';
						}
						if( !empty($anchor['anchor-hover-color']) ){
							$anchor_css .= '.mediz-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a:hover, ';
							$anchor_css .= '.mediz-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a.current-menu-item{ border-color: ' . esc_html($anchor['anchor-hover-color']) . '; }';
							$anchor_css .= '.mediz-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a:hover:before, ';
							$anchor_css .= '.mediz-bullet-anchor[data-anchor-section="' . esc_attr($anchor_section) . '"] a.current-menu-item:before{ background: ' . esc_html($anchor['anchor-hover-color']) . '; }';
						}
					}
				}
			}

			if( !empty($anchor_css) ){
				wp_add_inline_style('mediz-style-core', $anchor_css);
			}
		}
	}

	// remove id from nav menu item
	add_filter('nav_menu_item_id', 'mediz_nav_menu_item_id', 10, 4);
	if( !function_exists('mediz_nav_menu_item_id') ){
		function mediz_nav_menu_item_id( $id, $item, $args, $depth ){
			return '';
		}
	}

	// add additional script
	add_action('wp_head', 'mediz_header_script', 99);
	if( !function_exists('mediz_header_script') ){
		function mediz_header_script(){
			$header_script = mediz_get_option('plugin', 'additional-head-script', '');
			if( !empty($header_script) ){
				echo '<script>' . $header_script . '</script>';
			}

			$header_script2 = mediz_get_option('plugin', 'additional-head-script2', '');
			if( !empty($header_script2) ){
				echo gdlr_core_text_filter($header_script2);
			}

		}
	}
	add_action('gdlr_core_after_body', 'mediz_after_body_script');
	if( !function_exists('mediz_after_body_script') ){
		function mediz_after_body_script(){
			$body_script = mediz_get_option('plugin', 'additional-body-script', '');
			if( !empty($body_script) ){
				echo gdlr_core_text_filter($body_script);
			}

		}
	}
	add_action('wp_footer', 'mediz_footer_script');
	if( !function_exists('mediz_footer_script') ){
		function mediz_footer_script(){
			$footer_script = mediz_get_option('plugin', 'additional-script', '');
			if( !empty($footer_script) ){
				echo '<script>' . $footer_script . '</script>';
			}

		}
	}

	remove_action('tgmpa_register', 'newsletter_register_required_plugins');