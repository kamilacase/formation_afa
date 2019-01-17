<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
			<?php 
			if(is_home() || is_front_page()):
				the_custom_header_markup();
			else:
				echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
			endif;
			?>
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
