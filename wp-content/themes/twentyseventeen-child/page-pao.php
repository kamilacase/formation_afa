<?php
/*
Template Name: PAO
*/
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'pao' );
			endwhile; // End of the loop.
			?>
			<div class="row">
				<div class="col-md-6 wrap-pao">
					<div class="content-pao-01">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/graphisme.jpg" alt="logo_pao" class="logo_pao"/>
						<a class="button_box color-btn" href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">Renseignement et devis</a>
						<h3>Théorie & Technique</h3>
						<h5>Acquérir les bases du graphisme</h5>
						<p>Apprenez les diffrents domaines inhérent au <strong>graphisme</strong> par une approche théorique et technique.
						Vous les découvrirez par des <strong>exercices de création</strong> en rapport avec votre activité professionelle et vos besoins.
						</p>
						<ul class="list_form">
							<li>Typographie</li>
							<li>Gammes colorées</li>
							<li>Règles chromatiques</li>
							<li>Mise en page</li>
							<li>Composition</li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-6 wrap-pao">
					<div class="content-pao-02">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/photoshop.png" alt="logo_pao" class="logo_pao"/>
						<a class="button_box color-btn" href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">Renseignement et devis</a>
						<h3>Adobe Photoshop</h3>
						<h5>Créer, traiter et retoucher des images</h5>
						<p>Découvrez le logiciel <strong>Adobe Photoshop</strong> et sa grande palette d'outils. Vous apprendrez la retouche et la
						création d'images matricielles pour gérer votre communication. Photoshop est un logiciel puissant et sans limite.
						<ul class="list_form">
							<li>Retouches de photos</li>
							<li>Conception PAO</li>
							<li>Affiches, flyer, carte de visite, etc.</li>
							<li>Dessin numérique</li>
							<li>WebDesign</li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-6 wrap-pao">
					<div class="content-pao-03">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/illustrator.jpg" alt="logo_pao" class="logo_pao"/>
						<a class="button_box color-btn" href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">Renseignement et devis</a>
						<h3>Adobe Illustrator</h3>
						<h5>Appréhender le dessin vectoriel</h5>
						<p><strong>Illustator</strong> est un logiciel de création graphique <strong>d'images vectorielles</strong>. Il vous permettra entre autre la conception
						de <strong>logotype</strong>, d'illustration ou de pictogramme.</p>
						<ul class="list_form">
							<li>Conception PAO</li>
							<li>Logotype et pictogramme</li>
							<li>Illustration vectorielle</li>
							<li>Vectorisation d'image</li>
							<li>WebDesign</li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-6 wrap-pao">
					<div class="content-pao-04">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/indesign.png" alt="logo_pao" class="logo_pao"/>
						<a class="button_box color-btn" href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">Renseignement et devis</a>
						<h3>Adobe InDesign</h3>
						<h5>Mise en page et composition</h5>
						<p>Vous pourrez, grâce à <strong>InDesign</strong>, créer des dépliants, borchures, magazines ou encore affiches et gérer facilement la <strong>mise en page</strong>
						et la composition de chaque élément.</p>
						<ul class="list_form">
							<li>Mise en page</li>
							<li>Composition</li>
							<li>Magazine</li>
							<li>Brochure</li>
							<li>Dépliant</li>
						</ul>
					</div>
				</div>
								
			</div>
			
			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<div class="contact_box contact_pao">
	<p>Pour tout renseignement sur cette formation, n'hésitez pas à nous contacter</p>
	<a href="<?php bloginfo('url'); ?>/contacter-formation-lozere/">CONTACT</a>
</div>

<div class="wrap">
	<div class="row other_form_box">
		<div class="col-md-4">
			<div class="other_form">
				<h5>Formation Web</h5>
				<p>Avoir un bon usage du Web</p>
				<a href="<?php bloginfo('url'); ?>/formation-web/">En savoir plus</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="other_form">
				<h5>Formation développement Web</h5>
				<p>Acquérir des notions de programmation et développement</p>
				<a href="<?php bloginfo('url'); ?>/formation-developpement/">En savoir plus</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="other_form">
				<h5>Formation Photo & Vidéo</h5>
				<p>Connaitre les fondamentaux de la photo et vidéo</p>
				<a href="<?php bloginfo('url'); ?>/formation-photo-video/">En savoir plus</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer();