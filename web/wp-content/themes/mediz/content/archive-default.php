<?php
/**
 * The template part for displaying default archive
 */

	echo '<div class="mediz-content-area mediz-item-pdlr" >';

	while( have_posts() ){ the_post();

		get_template_part('content/content', 'full');
		
	} // while

	the_posts_pagination(array(
		'prev_text'          => '<i class="fa fa-angle-left" ></i>',
		'next_text'          => '<i class="fa fa-angle-right" ></i>',
	));

	echo '</div>'; // mediz-content-area