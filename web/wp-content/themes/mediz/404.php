<?php
/**
 * The template for displaying 404 pages (not found)
 */

	get_header();
	
	?>
	<div class="mediz-not-found-wrap" id="mediz-full-no-header-wrap" >
		<div class="mediz-not-found-background" ></div>
		<div class="mediz-not-found-container mediz-container">
			<div class="mediz-header-transparent-substitute" ></div>
	
			<div class="mediz-not-found-content mediz-item-pdlr">
			<?php
				echo '<h1 class="mediz-not-found-head" >' . esc_html__('404', 'mediz') . '</h1>';
				echo '<h3 class="mediz-not-found-title mediz-content-font" >' . esc_html__('Page Not Found', 'mediz') . '</h3>';
				echo '<div class="mediz-not-found-caption" >' . esc_html__('Sorry, we couldn\'t find the page you\'re looking for.', 'mediz') . '</div>';

				echo '<form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '">';
				echo '<input type="text" class="search-field mediz-title-font" placeholder="' . esc_attr__('Type Keywords...', 'mediz') . '" value="" name="s">';
				echo '<div class="mediz-top-search-submit"><i class="fa fa-search" ></i></div>';
				echo '<input type="submit" class="search-submit" value="Search">';
				echo '</form>';
				echo '<div class="mediz-not-found-back-to-home" ><a href="' . esc_url(home_url('/')) . '" >' . esc_html__('Or Back To Homepage', 'mediz') . '</a></div>';
			?>
			</div>
		</div>
	</div>
	<?php

	get_footer(); 
