<?php
/*
Template Name: DEV
*/
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'dev' );
			endwhile; // End of the loop.
			?>
			<div class="row">
				<div class="col-md-6 wrap-pao">
					<div class="content-dev-01">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_dev.png" alt="logo html js css" class="logo_dev"/>
						<h3>Language de developpement</h3>
						<h5>Site Web sur mesure</h5>
						<p>Découvrez les différents languages de programmation Web afin de concevoir votre site.</p>
						<ul class="list_form">
							<li>HTML 5</li>
							<li>CSS 3</li>
							<li>JavaScript & Jquery</li>
							<li>PHP</li>
							<li>Frameworks</li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-6 wrap-pao">
					<div class="content-dev-02">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_cms.png" alt="logo_pao" class="logo_dev"/>
						<h3>CMS et sites administrables</h3>
						<h5>Wordpress et Prestashop</h5>
						<p>Apprenez à gérer et administrer vous même votre site Web grâce au CMS Wordpress et Prestashop.
						Que ce soit un site vitrine, institutionnel ou e-commerce vous pourrez facilement modifier le contenu de votre
						site Web grâce à une interface simple d'utilisation.</p>
						<ul class="list_form">
							<li>Administration simple du site</li>
							<li>Gestion de contenu</li>
						</ul>
					</div>
				</div>
			</div>
						
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<div class="contact_box contact_dev">
	<p>Pour tout renseignement sur cette formation, n'hésitez pas à nous contacter</p>
	<a href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">CONTACT</a>
</div>

<div class="wrap">
	<div class="row other_form_box">
		<div class="col-md-4">
			<div id="color_form" class="other_form">
				<h5>Formation Web</h5>
				<p>Avoir un bon usage du Web</p>
				<a href="<?php bloginfo('url'); ?>/formation-web/">En savoir plus</a>
			</div>
		</div>
		<div class="col-md-4">
			<div id="color_form" class="other_form">
				<h5>Formation graphisme</h5>
				<p>Se former à la création graphique & PAO</p>
				<a href="<?php bloginfo('url'); ?>/formation-graphisme/">En savoir plus</a>
			</div>
		</div>
		<div class="col-md-4">
			<div id="color_form" class="other_form">
				<h5>Formation Photo & Vidéo</h5>
				<p>Connaitre les fondamentaux de la photo et vidéo</p>
				<a href="<?php bloginfo('url'); ?>/formation-photo-video/">En savoir plus</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer();