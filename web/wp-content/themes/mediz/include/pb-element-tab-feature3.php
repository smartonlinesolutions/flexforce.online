<?php
	/*	
	*	Goodlayers Item For Page Builder
	*/
	
	if( class_exists('gdlr_core_page_builder_element') ){
		gdlr_core_page_builder_element::add_element('tab-feature3', 'mediz_gdlr_core_pb_element_tab_feature3'); 
	}
	
	if( !class_exists('mediz_gdlr_core_pb_element_tab_feature3') ){
		class mediz_gdlr_core_pb_element_tab_feature3{
			
			// get the element settings
			static function get_settings(){
				return array(
					'icon' => 'fa-folder-o',
					'title' => esc_html__('Tab Feature 3', 'mediz')
				);
			}
			
			// return the element options
			static function get_options(){
				global $gdlr_core_item_pdb;
				
				return array(
					'general' => array(
						'title' => esc_html__('General', 'mediz'),
						'options' => array(
							'tabs' => array(
								'title' => esc_html__('Add New Tab', 'mediz'),
								'type' => 'custom',
								'item-type' => 'tabs',
								'wrapper-class' => 'gdlr-core-fullsize',
								'options' => array(
									'title' => array(
										'title' => esc_html__('Title', 'mediz'),
										'type' => 'text'
									),
									'caption' => array(
										'title' => esc_html__('Caption', 'mediz'),
										'type' => 'text'
									),
									'video-url' => array(
										'title' => esc_html__('Lightbox Video Url', 'mediz'),
										'type' => 'text'
									),
									'content-background' => array(
										'title' => esc_html__('Content Background', 'mediz'),
										'type' => 'upload'
									),
									'content-left-title' => array(
										'title' => esc_html__('Content Left Title', 'mediz'),
										'type' => 'text'
									),
									'content-left-image' => array(
										'title' => esc_html__('Content Left Image', 'mediz'),
										'type' => 'upload'
									),
									'content-right' => array(
										'title' => esc_html__('Content Right', 'mediz'),
										'type' => 'textarea',
									)
								),
								'default' => array(
									array(
										'title' => esc_html__('Tab Title', 'mediz'),
										'content-right' => esc_html__('Tab content area', 'mediz'),
									),
									array(
										'title' => esc_html__('Tab Title', 'mediz'),
										'content-right' => esc_html__('Tab content area', 'mediz'),
									),
								)
							),
						),
					),
					'settings' => array(
						'title' => esc_html__('Settings', 'mediz'),
						'options' => array(
							'thumbnail-size' => array(
								'title' => esc_html__('Content Left Image Thumbnail Size', 'mediz'),
								'type' => 'combobox',
								'options' => 'thumbnail-size',
								'default' => 'full'
							),
							'height-before-content' => array(
								'title' => esc_html__('Height Before Content', 'mediz'),
								'type' => 'text',
								'data-input-type' => 'pixel'
							),
							'height-before-bottom-gradient' => array(
								'title' => esc_html__('Height Before Bottom Gradient', 'mediz'),
								'type' => 'text',
								'data-input-type' => 'pixel'
							)
						)
					),
					'color' => array(
						'title' => esc_html__('Color', 'mediz'),
						'options' => array(
							'tab-title-text' => array(
								'title' => esc_html__('Tab Title Text', 'mediz'),
								'type' => 'colorpicker'
							),
							'tab-caption' => array(
								'title' => esc_html__('Tab Caption', 'mediz'),
								'type' => 'colorpicker'
							),
							'tab-title-background' => array(
								'title' => esc_html__('Tab Title Background', 'mediz'),
								'type' => 'colorpicker'
							),
							'tab-title-border' => array(
								'title' => esc_html__('Tab Title Border', 'mediz'),
								'type' => 'colorpicker'
							),
							'content-background' => array(
								'title' => esc_html__('Content Background & Gradient', 'mediz'),
								'type' => 'colorpicker'
							),
							'video-icon' => array(
								'title' => esc_html__('Video Icon', 'mediz'),
								'type' => 'colorpicker'
							),
							'content-left-title' => array(
								'title' => esc_html__('Content Left Title', 'mediz'),
								'type' => 'colorpicker'
							),
							'content-left-divider' => array(
								'title' => esc_html__('Content Left Title Divider', 'mediz'),
								'type' => 'colorpicker'
							),
							'content-right' => array(
								'title' => esc_html__('Content Right', 'mediz'),
								'type' => 'colorpicker'
							),
						),
					),
					'color2' => array(
						'title' => esc_html__('Color Active', 'mediz'),
						'options' => array(
							'tab-title-text-active' => array(
								'title' => esc_html__('Tab Title Text Active', 'mediz'),
								'type' => 'colorpicker'
							),
							'tab-caption-active' => array(
								'title' => esc_html__('Tab Caption Active', 'mediz'),
								'type' => 'colorpicker'
							),
							'tab-title-background-active' => array(
								'title' => esc_html__('Tab Title Background Active', 'mediz'),
								'type' => 'colorpicker'
							),
							'tab-title-background-active-gradient' => array(
								'title' => esc_html__('Tab Title Background Active Gradient', 'mediz'),
								'type' => 'colorpicker'
							),
						),
					),
					'typography' => array(
						'title' => esc_html__('Typography', 'mediz'),
						'options' => array(
							'content-left-title-font-size' => array(
								'title' => esc_html__('Content Left Title Font Size', 'mediz'),
								'type' => 'text',
								'data-input-type' => 'pixel',
							),
							'content-left-title-font-weight' => array(
								'title' => esc_html__('Content Left Title Font Weight', 'mediz'),
								'type' => 'text',
								'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
							),
							'content-font-size' => array(
								'title' => esc_html__('Content Font Size', 'mediz'),
								'type' => 'text',
								'data-input-type' => 'pixel',
							),
							'content-font-weight' => array(
								'title' => esc_html__('Content Font Weight', 'mediz'),
								'type' => 'text',
								'description' => esc_html__('Eg. lighter, bold, normal, 300, 400, 600, 700, 800', 'mediz')
							),
						)
					),
					'spacing' => array(
						'title' => esc_html__('Spacing', 'mediz'),
						'options' => array(
							'padding-bottom' => array(
								'title' => esc_html__('Padding Bottom ( Item )', 'mediz'),
								'type' => 'text',
								'data-input-type' => 'pixel',
								'default' => $gdlr_core_item_pdb
							)
						)
					)
				);
			}

			// get the preview for page builder
			static function get_preview( $settings = array() ){
				$content  = self::get_content($settings, true);
				$id = mt_rand(0, 9999);
				
				ob_start();
?><script id="gdlr-core-preview-tab-feature3-<?php echo esc_attr($id); ?>" >
jQuery(document).ready(function(){
	jQuery('#gdlr-core-preview-tab-feature3-<?php echo esc_attr($id); ?>').parent().gdlr_core_tab();
});
</script><?php	
				$content .= ob_get_contents();
				ob_end_clean();
				
				return $content;
			}		
			
			// get the content from settings
			static function get_content( $settings = array(), $preview = false ){
				global $gdlr_core_item_pdb;

				// default variable
				if( empty($settings) ){
					$settings = array(
						'tabs' => array(
							array(
								'title' => esc_html__('Tab Title', 'mediz'),
								'content' => esc_html__('Tab content area', 'mediz'),
							),
							array(
								'title' => esc_html__('Tab Title', 'mediz'),
								'content' => esc_html__('Tab content area', 'mediz'),
							),
						),
						'padding-bottom' => $gdlr_core_item_pdb
					);
				}

				$settings['thumbnail-size'] = empty($settings['thumbnail-size'])? 'full': $settings['thumbnail-size'];

				$tab_item_class  = empty($settings['class'])? '': ' ' . $settings['class'];
				$tab_item_class .= empty($settings['tabs'])? '': ' gdlr-core-size-' . sizeOf($settings['tabs']);

				// custom style
				$custom_style  = '';
				if( !empty($settings['tab-title-text-active']) ){
					$custom_style .= '#custom_style_id .gdlr-core-tab-feature3-title-wrap.gdlr-core-active .gdlr-core-tab-feature3-title{ color: ' . $settings['tab-title-text-active']  . ' !important; }';
				}
				if( !empty($settings['tab-caption-active']) ){
					$custom_style .= '#custom_style_id .gdlr-core-tab-feature3-title-wrap.gdlr-core-active .gdlr-core-tab-feature3-caption{ color: ' . $settings['tab-caption-active']  . ' !important; }';
				}

				// print
				if( !empty($custom_style) ){
					if( empty($settings['id']) ){
						global $gdlr_core_tabf2_id; 
						$gdlr_core_tabf2_id = empty($gdlr_core_tabf2_id)? array(): $gdlr_core_tabf2_id;

						// generate unique id so it does not get overwritten in admin area
						$rnd_tabf2_id = mt_rand(0, 99999);
						while( in_array($rnd_tabf2_id, $gdlr_core_tabf2_id) ){
							$rnd_tabf2_id = mt_rand(0, 99999);
						}
						$gdlr_core_tabf2_id[] = $rnd_tabf2_id;
						$settings['id'] = 'gdlr-core-tab-feature2-' . $rnd_tabf2_id;
					}

					$custom_style = str_replace('custom_style_id', $settings['id'], $custom_style); 
					if( $preview ){
						$custom_style = '<style>' . $custom_style . '</style>';
					}else{
						gdlr_core_add_inline_style($custom_style);
						$custom_style = '';
					}
				}

				// start printing item
				$ret  = '<div class="gdlr-core-tab-feature3-item gdlr-core-tab-action gdlr-core-js gdlr-core-item-pdb ' . esc_attr($tab_item_class) . '" ';
				if( !empty($settings['padding-bottom']) && $settings['padding-bottom'] != $gdlr_core_item_pdb ){
					$ret .= gdlr_core_esc_style(array('padding-bottom'=>$settings['padding-bottom']));
				}
				if( !empty($settings['id']) ){
					$ret .= ' id="' . esc_attr($settings['id']) . '" ';
				}
				$ret .= ' >';

				if( !empty($settings['tabs']) ){
					$count = 0; $active = 1;
					$column = (sizeof($settings['tabs']) > 6)? (60/6): (60 / sizeof($settings['tabs'])); 

					$ret .= '<div class="gdlr-core-tab-feature3-title-item-wrap clearfix" >';
					foreach( $settings['tabs'] as $tab ){ $count++;
						if( $count > 6 ) continue; 

						$ret .= '<div class="gdlr-core-tab-feature3-title-wrap gdlr-core-tab-action-title ';
						$ret .= 'gdlr-core-column-' . esc_attr($column) . ' ';
						$ret .= ($count == $active? ' gdlr-core-active': '') . ' gdlr-core-js clearfix" ';
						$ret .= 'data-tab-id="' . esc_attr($count) . '" ';
						$ret .= gdlr_core_esc_style(array(
							'background' => empty($settings['tab-title-background'])? '': $settings['tab-title-background'],
							'border-color' => empty($settings['tab-title-border'])? '': $settings['tab-title-border']
						));
						$ret .= '>';
						$ret .= '<div class="gdlr-core-tab-feature3-title-overlay" ' . gdlr_core_esc_style(array(
							'background' => empty($settings['tab-title-background-active'])? '': $settings['tab-title-background-active'],
							'gradient-v' => (empty($settings['tab-title-background-active']) || empty($settings['tab-title-background-active-gradient']))? '': array(
								$settings['tab-title-background-active'], $settings['tab-title-background-active-gradient']
							)
						)) . ' ></div>';
						
						$ret .= '<div class="gdlr-core-tab-feature3-title-sign" ></div>';
						$ret .= '<div class="gdlr-core-tab-feature3-title-content" >'; 
						if( !empty($tab['title']) ){
							$ret .= '<h3 class="gdlr-core-tab-feature3-title" ' . gdlr_core_esc_style(array(
								'color' => empty($settings['tab-title-text'])? '': $settings['tab-title-text']
							)) . ' >' . gdlr_core_text_filter($tab['title']) . '</h3>';
						}
						if( !empty($tab['caption']) ){
							$ret .= '<div class="gdlr-core-tab-feature3-caption" ' . gdlr_core_esc_style(array(
								'color' => empty($settings['tab-caption'])? '': $settings['tab-caption']
							)) . ' >' . gdlr_core_text_filter($tab['caption']) . '</div>';
						}
						$ret .= '</div>';

						$ret .= '</div>';
					}
					$ret .= '</div>'; 
					
					$count = 0;
					$ret .= '<div class="gdlr-core-tab-feature3-item-content-wrap gdlr-core-tab-action-content-wrap clearfix" >';
					foreach( $settings['tabs'] as $tab ){ $count++;

						$ret .= '<div class="gdlr-core-tab-feature3-content-wrap ' . ($count == $active? ' gdlr-core-active': '') . '" ';
						$ret .= ' data-tab-id="' . esc_attr($count) . '" ' . gdlr_core_esc_style(array(
							'background-image' => empty($tab['content-background'])? '': $tab['content-background']
						)) . ' >';
						$ret .= '<div class="gdlr-core-tab-feature3-content-top-overlay" ' . gdlr_core_esc_style(array(
							'bottom' => empty($settings['height-before-bottom-gradient'])? '': $settings['height-before-bottom-gradient'],
							'gradient' => empty($settings['content-background'])? '': array(
								array($settings['content-background'], 0),
								array($settings['content-background'], 1)
							)
						)) . ' ></div>';
						$ret .= '<div class="gdlr-core-tab-feature3-content-top-overlay2" ></div>';
						$ret .= '<div class="gdlr-core-tab-feature3-content-bottom-overlay" ' . gdlr_core_esc_style(array(
							'height' => empty($settings['height-before-bottom-gradient'])? '': $settings['height-before-bottom-gradient'],
							'background' => empty($settings['content-background'])? '': $settings['content-background']
						)) . ' ></div>';
						$ret .= '<div class="gdlr-core-container clearfix" >';

						$ret .= '<div class="gdlr-core-tab-feature3-top" ' . gdlr_core_esc_style(array(
							'height' => empty($settings['height-before-content'])? '': $settings['height-before-content']
						)) . ' >';
						if( !empty($tab['video-url']) ){
							$ret .= '<a ' . gdlr_core_get_lightbox_atts(array(
								'url' => $tab['video-url'],
								'class' => 'gdlr-core-tab-feature3-video-lb'
							)) . ' ><i class="fa fa-play" ' . gdlr_core_esc_style(array(
								'color' => empty($settings['video-icon'])? '': $settings['video-icon']
							)) . ' ></i></a>';
							$ret .= '<div class="clear" ></div>';
						}
						$ret .= '</div>';

						if( !empty($tab['content-left-image']) || !empty($tab['content-left-title']) ){
							$ret .= '<div class="gdlr-core-tab-feature3-content-left gdlr-core-item-pdlr" ' . gdlr_core_esc_style(array(
								'border-radius' => empty($settings['content-left-image-radius'])? '': $settings['content-left-image-radius'],
								'background-shadow-size' => empty($settings['content-left-image-shadow-size'])? '': $settings['content-left-image-shadow-size'],
								'background-shadow-color' => empty($settings['content-left-image-shadow-color'])? '': $settings['content-left-image-shadow-color'],
								'background-shadow-opacity' => empty($settings['content-left-image-shadow-opacity'])? '': $settings['content-left-image-shadow-opacity'],
							)) . ' >';
							if( !empty($tab['content-left-title']) ){
								$ret .= '<h3 class="gdlr-core-tab-feature3-content-left-title" ' . gdlr_core_esc_style(array(
									'font-size' => empty($settings['content-left-title-font-size'])? '': $settings['content-left-title-font-size'],
									'font-weight' => empty($settings['content-left-title-font-weight'])? '': $settings['content-left-title-font-weight'],
									'color' => empty($settings['content-left-title'])? '': $settings['content-left-title']
								)) . ' >';
								$ret .= gdlr_core_text_filter($tab['content-left-title']);
								$ret .= '<span class="gdlr-core-tab-feature3-content-left-title-divider" ' . gdlr_core_esc_style(array(
									'border-color' => empty($settings['content-left-divider'])? '': $settings['content-left-divider']
								)) . ' ></span>'; 
								$ret .= '</h3>';
							}
							if( !empty($tab['content-left-image']) ){
								$ret .= '<div class="gdlr-core-tab-feature3-content-left-image gdlr-core-media-image" >';
								$ret .= gdlr_core_get_image($tab['content-left-image'], $settings['thumbnail-size']);
								$ret .= '</div>';
							}
							$ret .= '</div>'; // gdlr-core-tab-feature-content-left
						}

						$ret .= '<div class="gdlr-core-tab-feature3-content-right gdlr-core-item-pdlr" ' . gdlr_core_esc_style(array(
							'font-size' => empty($settings['content-font-size'])? '': $settings['content-font-size'],
							'font-weight' => empty($settings['content-font-weight'])? '': $settings['content-font-weight'],
							'color' => empty($settings['content-right'])? '': $settings['content-right']
						)) . '>' . gdlr_core_text_filter($tab['content-right']) . '</div>'; // gdlr-core-tab-feature-content-right
						
						$ret .= '</div>'; // gdlr-core-container
						$ret .= '</div>'; // gdlr-core-tab-feature-content-wrap
					}
					$ret .= '</div>'; // gdlr-core-tab-item-tab */
				}
				$ret .= '</div>'; // gdlr-core-tab-item
				$ret .= $custom_style;

				return $ret;
			}			
			
		} // gdlr_core_pb_element_tab_feature3
	} // class_exists