<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <h3><a href="http://www.afa-multimedia.com" title="Conception de site Web en Lozère.">AFA-Multimédia SARL</a></h3>
        <p>Lou Duplo Le Bruel<br>48230 ESCLANEDES</p>
        <p>Tél : +33.4 66 32 37 27</p>
        <iframe src="https://www.google.com/maps/d/embed?mid=1knfejxtvT8PMty5pc1gJyvGtw-3c7UY5&hl=fr" class="map"></iframe>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
        <?php dynamic_sidebar('contact'); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</section><!-- #post-## -->