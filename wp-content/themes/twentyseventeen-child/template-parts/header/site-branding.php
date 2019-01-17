<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">
		
		<?php if ( is_front_page() ) : ?>
		<div class="logo-site">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/formation-au-numerique-afa-multimedia_logo-2.png" alt="logo-formation-au-numerique-afa-multimedia" class="logo-img" />
		</div>
		<?php endif; ?>
		
		<?php the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="#content" class="menu-scroll-down"><span class="letter-spacing"><?php bloginfo( 'name' ); ?></span></a></h1>
			<?php elseif (is_home() ) : ?>
				<h1 class="page-titre">ACTUALITÉS</h1>
			<?php else : ?>
				<h1 class="page-titre"><?php the_title() ?></h1>
			<?php endif; ?>

			<?php
			//$description = get_bloginfo( 'description', 'display' );
			?>
				<p class="site-description"><a href="#"><?php echo $description; ?></a></p>
		</div><!-- .site-branding-text -->

		<?php if ( is_home() || is_front_page()) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
