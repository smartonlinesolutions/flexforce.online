<?php
/**
 * The template for displaying archive not found
 */

	echo '<div class="mediz-not-found-wrap" id="mediz-full-no-header-wrap" >';
	echo '<div class="mediz-not-found-background" ></div>';
	echo '<div class="mediz-not-found-container mediz-container">';
	echo '<div class="mediz-header-transparent-substitute" ></div>';
	
	echo '<div class="mediz-not-found-content mediz-item-pdlr">';
	echo '<h1 class="mediz-not-found-head" >' . esc_html__('Not Found', 'mediz') . '</h1>';
	echo '<div class="mediz-not-found-caption" >' . esc_html__('Nothing matched your search criteria. Please try again with different keywords.', 'mediz') . '</div>';

	echo '<form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '">';
	echo '<input type="text" class="search-field mediz-title-font" placeholder="' . esc_attr__('Type Keywords...', 'mediz') . '" value="" name="s">';
	echo '<div class="mediz-top-search-submit"><i class="fa fa-search" ></i></div>';
	echo '<input type="submit" class="search-submit" value="Search">';
	echo '</form>';
	echo '<div class="mediz-not-found-back-to-home" ><a href="' . esc_url(home_url('/')) . '" >' . esc_html__('Or Back To Homepage', 'mediz') . '</a></div>';
	echo '</div>'; // mediz-not-found-content

	echo '</div>'; // mediz-not-found-container
	echo '</div>'; // mediz-not-found-wrap