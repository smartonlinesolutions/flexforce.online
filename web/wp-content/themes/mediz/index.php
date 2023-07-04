<?php
/**
 * The main template file
 */ 


	get_header();

	echo '<div class="mediz-content-container mediz-container">';
	echo '<div class="mediz-sidebar-style-none" >'; // for max width

	get_template_part('content/archive', 'default');

	echo '</div>'; // mediz-content-area
	echo '</div>'; // mediz-content-container

	get_footer(); 
