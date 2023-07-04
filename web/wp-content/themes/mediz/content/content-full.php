<?php
/**
 * The template part for displaying single posts
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mediz-single-article" >
		<?php
			ob_start();
			the_post_thumbnail('full');
			$post_thumbnail = ob_get_contents();
			ob_end_clean();

			if( !empty($post_thumbnail) ){
				echo '<div class="mediz-single-article-thumbnail mediz-media-image" >';
				echo gdlr_core_escape_content($post_thumbnail);
				if( is_sticky() ){
					echo '<div class="mediz-sticky-banner mediz-title-font" ><i class="fa fa-bolt" ></i>' . esc_html__('Sticky Post', 'mediz') . '</div>';
				}
				echo '</div>';
			}else{
				if( is_sticky() ){
					echo '<div class="mediz-sticky-banner mediz-title-font" ><i class="fa fa-bolt" ></i>' . esc_html__('Sticky Post', 'mediz') . '</div>';
				}
			}

			get_template_part('content/content-single', 'title');

			echo '<div class="mediz-single-article-content">';
			the_excerpt();

			echo '<a class="mediz-excerpt-read-more mediz-button mediz-rectangle" href="' . esc_attr(get_permalink()) . '">' . esc_html__('Read More', 'mediz') . '</a>';
			echo '</div>';
		?>
	</div><!-- mediz-single-article -->
</article><!-- post-id -->
