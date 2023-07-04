<?php
/**
 * The template part for displaying single post title
 */

	$blog_date = mediz_get_option('general', 'blog-date-feature', '');
	$blog_style = mediz_get_option('general', 'blog-style', 'style-1');
	$blog_title_style = mediz_get_option('general', 'blog-title-style', '');
	if( empty($blog_title_style) ){
		if( in_array($blog_style, array('style-3', 'magazine')) ){
			$blog_title_style = 'style-1';
		}else{
			$blog_title_style = $blog_style;
		}
	}

	$blog_info_atts = array( 'wrapper' => true );
	$blog_info_atts['display'] = mediz_get_option('general', 'meta-option', '');
	if( empty($blog_date) && empty($blog_info_atts['display']) ){
		$blog_info_atts['display'] = array('author', 'category', 'tag', 'comment-number');
	}

	echo '<header class="mediz-single-article-head mediz-single-blog-title-' . esc_attr($blog_title_style) . ' clearfix" >';
	if( $blog_title_style == 'style-1' && (empty($blog_date) || $blog_date == 'enable') ){
		echo '<div class="mediz-single-article-date-wrapper  post-date updated">';
		echo '<div class="mediz-single-article-date-day">' .  get_the_time('d') . '</div>';
		echo '<div class="mediz-single-article-date-month">' . get_the_time('M') . '</div>';

		$blog_date_year = mediz_get_option('general', 'blog-date-feature-year', '');
		if( !empty($blog_date_year) && $blog_date_year == 'enable' ){
			echo '<div class="mediz-single-article-date-year">' . get_the_time('Y') . '</div>';
		} 
		echo '</div>';
	}else if( $blog_title_style == 'style-2'){
		$blog_info_atts['separator'] = '•';
		echo mediz_get_blog_info($blog_info_atts);
	}

	echo '<div class="mediz-single-article-head-right">';
	if( is_single() ){
		echo '<h1 class="mediz-single-article-title">' . get_the_title() . '</h1>';
	}else{
		echo '<h3 class="mediz-single-article-title"><a href="' . get_permalink() . '" >' . get_the_title() . '</a></h3>';
	}

	if( $blog_title_style == 'style-1' ){
		echo mediz_get_blog_info($blog_info_atts);
	}else if( $blog_title_style == 'style-4' ){
		$blog_info_atts['separator'] = '•';
		echo mediz_get_blog_info($blog_info_atts);
	}
	echo '</div>';
	echo '</header>';