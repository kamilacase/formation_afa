<?php
/*
Template Name: Photo-video
*/
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'photo' );
			endwhile; // End of the loop.
			?>
			<div class="row">
				<div class="col-md-6 wrap-pao">
					<div class="content-photo-01">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_photo.png" alt="logo_pao" class="logo_pao"/>
						<a class="button_box color-btn-01" href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">Renseignement et devis</a>
						<h3>Photographie</h3>
						<h5>Technique de prise de vue</h5>
						<p>Apprenez les bonnes méthodes de photographie (plan, cadrage, éclairage, etc.) et aussi les
						fonctionnalités de l'appareil photo (exposition, ISO, ouverture, mise au point, etc.)</p>
						<ul class="list_form">
							<li>Éclairage</li>
							<li>Cadrage et plan</li>
							<li>Sensibilité ISO</li>
							<li>Temps d'obturation</li>
							<li>Ouverture du diaphragme</li>
						</ul>
					</div>	
				</div>
				
				<div class="col-md-6 wrap-pao">
					<div class="content-photo-01">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_cam.png" alt="logo_pao" class="logo_pao"/>
						<a class="button_box color-btn-01" href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">Renseignement et devis</a>
						<h3>Film & Vidéo</h3>
						<h5>Technique de captation</h5>
						<p>Apprenez... </p>
						<ul class="list_form">
							<li>Éclairage</li>
							<li>Cadrage et plan</li>
							<li>Sensibilité ISO</li>
							<li>Temps d'obturation</li>
							<li>Ouverture du diaphragme</li>
						</ul>
					</div>		
				</div>
				
				<div class="col-md-12 wrap-pao">
					<div class="content-photo-02">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_log.png" alt="logo_pao" class="logo_pao"/>
						<a class="button_box color-btn-01" href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">Renseignement et devis</a>
						<h3>Logiciel de montage et motion-design</h3>
						<h5>Adobe Premiere Pro & After Effect</h5>
						<p>Vous pourrez apprendre le montage vidéo grâce au logiciel Adobe Premiere Pro ainsi que l'animation et le motion-design grâce
						à After Effect.</p>
						<ul class="list_form">
							<li>Animation</li>
							<li>Effets spéciaux</li>
							<li>Montage vidéo</li>
							<li>Post-production</li>
						</ul>
					</div>		
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<div class="contact_box contact_photo">
	<p>Pour tout renseignement sur cette formation, n'hésitez pas à nous contacter</p>
	<a href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">CONTACT</a>
</div>

<div class="wrap">
	<div class="row other_form_box">
		<div class="col-md-4">
			<div id="color_form_02" class="other_form">
				<h5>Formation Web</h5>
				<p>Avoir un bon usage du Web</p>
				<a href="<?php bloginfo('url'); ?>/formation-web/">En savoir plus</a>
			</div>
		</div>
		<div class="col-md-4">
			<div id="color_form_02" class="other_form">
				<h5>Formation graphisme</h5>
				<p>Se former à la création graphique & PAO</p>
				<a href="<?php bloginfo('url'); ?>/formation-graphisme/">En savoir plus</a>
			</div>
		</div>
		<div class="col-md-4">
			<div id="color_form_02" class="other_form">
				<h5>Formation développement Web</h5>
				<p>Acquérir des notions de programmation et développement</p>
				<a href="<?php bloginfo('url'); ?>/formation-developpement/">En savoir plus</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer();