<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		<?php /*the_title( '<h2 class="entry-title">', '</h2>' ); */?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="content_cms">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</section><!-- #post-## -->
