<?php

	define('MEDIZ_ITEM_ID', 25323227);
	define('MEDIZ_PURCHASE_VERFIY_URL', 'https://goodlayers.com/licenses/wp-json/verify/purchase_code'); 
	define('MEDIZ_PLUGIN_VERSION_URL', 'https://goodlayers.com/licenses/wp-json/version/plugin');
	define('MEDIZ_PLUGIN_UPDATE_URL', 'https://goodlayers.com/licenses/wp-content/plugins/goodlayers-verification/download/');
	
	// define('MEDIZ_PURCHASE_VERFIY_URL', 'http://localhost/mediz/wp-json/verify/purchase_code'); 
	// define('MEDIZ_PLUGIN_VERSION_URL', 'http://localhost/mediz/wp-json/version/plugin'); 
	// define('MEDIZ_PLUGIN_UPDATE_URL', 'http://localhost/Gdl%20Theme/plugins/goodlayers-verification/download/');

	if( !function_exists('mediz_is_purchase_verified') ){
		function mediz_is_purchase_verified(){
			$purchase_code = mediz_get_purchase_code();
			return empty($purchase_code)? false: true;
		}
	}
	if( !function_exists('mediz_get_purchase_code') ){
		function mediz_get_purchase_code(){
			return get_option('envato_purchase_code_' . MEDIZ_ITEM_ID, '');
		}
	}
	if( !function_exists('mediz_get_download_url') ){
		function mediz_get_download_url($file){
			$download_key = get_option('mediz_download_key', '');
			$purchase_code = mediz_get_purchase_code();
			if( empty($download_key) ) return false;

			return add_query_arg(array(
				'purchase_code' => $purchase_code,
				'download_key' => $download_key,
				'file' => $file
			), MEDIZ_PLUGIN_UPDATE_URL);
		}
	}

	# delete_option('envato_purchase_code_' . MEDIZ_ITEM_ID);
	# delete_option('mediz_download_key');
	if( !function_exists('mediz_verify_purchase') ){
		function mediz_verify_purchase($purchase_code, $register){
			$response = wp_remote_post(MEDIZ_PURCHASE_VERFIY_URL, array(
				'body' => array(
					'register' => $register,
					'item_id' => MEDIZ_ITEM_ID,
					'website' => get_site_url(),
					'purchase_code' => $purchase_code
				)
			));

			if( is_wp_error($response) || wp_remote_retrieve_response_code($response) != 200 ){
				throw new Exception(wp_remote_retrieve_response_message($response));
			}

			$data = json_decode(wp_remote_retrieve_body($response), true);
			if( $data['status'] == 'success' ){
				update_option('envato_purchase_code_' . MEDIZ_ITEM_ID, $purchase_code);
				update_option('mediz_download_key', $data['download_key']);
				return true;
			}else{
				update_option('envato_purchase_code_' . MEDIZ_ITEM_ID, '');
				update_option('mediz_download_key', '');

				if( !empty($data['message']) ){
					throw new Exception($data['message']);
				}else{
					throw new Exception(esc_html__('Unknown Error', 'mediz'));
				}
				
			}

		} // mediz_verify_purchase
	}

	// delete_option('mediz_daily_schedule');
	// delete_option('mediz-plugins-version');
	add_action('init', 'mediz_admin_schedule');
	if( !function_exists('mediz_admin_schedule') ){
		function mediz_admin_schedule(){
			if( !is_admin() ) return;

			$current_date = date('Y-m-d');
			$daily_schedule = get_option('mediz_daily_schedule', '');
			if( $daily_schedule != $current_date ){
				update_option('mediz_daily_schedule', $current_date);
				do_action('mediz_daily_schedule');
			}
		}
	}

	# update version from server
	add_action('mediz_daily_schedule', 'mediz_plugin_version_update');
	if( !function_exists('mediz_plugin_version_update') ){
		function mediz_plugin_version_update(){
			$response = wp_remote_get(MEDIZ_PLUGIN_VERSION_URL);

			if( !is_wp_error($response) && !empty($response['body']) ){
				update_option('mediz-plugins-version', json_decode($response['body'], true));
			}
		}
	}