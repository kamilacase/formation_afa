<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	
		<!-- CONTENT WORDPRESS EDITOR -->
		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

		endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>
		
		
		
		<!-- CONTENT INFO -->
		<div class="content-info">
			
			<div class="info-titre">
				<ul class="titre_list">
					<li class="titre-pro">POUR LES PROFESSIONNELS</li>
					<li class="titre-part">POUR LES PARTICULIERS</li>
				</ul>
				<div class="wrap_logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/formation-au-numerique-afa-multimedia_logo.png" alt="formation-au-numerique-afa-multimedia_logo" class="logo-formation" />
				</div>
			</div>
			<div class="content-wrap">
				<p class="intro-text"><strong>Formations numériques</strong> dans quatre domaines de compétences spécifiques</p>
			
				<div class="grid">
					<a href="formation-web/" title="Conception de site Web, stratégie éditoriale, analyse et gestion de projet.">
					<figure class="effect-slide effect-color-01">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/formation-web-01.jpg" alt="formation-au-numerique-afa-multimedia_logo"/>
						<figcaption>
							<h2>FORMATION WEB</h2>
							<p>AVOIR UN BON USAGE DU WEB</p>
						</figcaption>			
					</figure>
					</a>
					
					<a href="formation-developpement/" title="Développement PHP MySQL, intégration de site Web HTML5, CSS, JS.">
					<figure class="effect-slide effect-color-02">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/formation-web-dev-01.jpg" alt="formation-au-numerique-afa-multimedia_logo"/>
						<figcaption>
							<h2>FORMATION DÉVELLOPEMENT WEB</h2>
							<p>ACQUÉRIR DES NOTIONS AVANCÉES DE DÉVELOPPEMENT WEB</p>
						</figcaption>			
					</figure>
					</a>
				</div>
				
				<div class="grid">
					<a href="formation-graphisme/"  title="Découverte des outils des métiers de l'infographie : Webdesign, PAO, animation.">
					<figure class="effect-slide effect-color-03">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/formation-pao-graphisme-01.jpg" alt="formation-au-numerique-afa-multimedia_logo"/>
						<figcaption>
							<h2>FORMATION GRAPHISME &amp; PAO</h2>
							<p>DÉCOUVRIR TOUTES LES ÉTAPES DE CONCEPTION GRAPHIQUE<br>
							EN GRAPHISME, WEBDESIGN ET PAO<p>
						</figcaption>			
					</figure>
					</a>
					
					<a href="formation-photo-video/" title="Apprendre la photographie, le photo montage, la retouche d'image et la production de vidéo.">
					<figure class="effect-slide effect-color-04">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/formation-photo-video-01.jpg" alt="formation-au-numerique-afa-multimedia_logo"/>
						<figcaption>
							<h2>FORMATION PHOTO &amp; VIDÉO</span></h2>
							<p>CONNAITRE LES FONDAMENTAUX DE LA PHOTO<br>ET DE LA PRODUCTION AUDIOVISUELLE</p>
						</figcaption>			
					</figure>
					</a>
				</div>
				
			</div>	
			
			<div class="clear"></div>
		</div>
		
		
		
		<!-- CONTENT CONTACT -->
		<div class="content-contact">
			<div class="wrap-contact">
				<h3>CONTACTEZ-NOUS</h3>
				<div class="line-white"></div>
				<p class="intro-contact">N’hésitez pas à nous contacter pour toutes demandes de formations, de devis ou de renseignement, via le formulaire ci-dessous. Nous vous répondrons rapidement !</p>
								
				<div class="coord-content">
					<div class="wrap-coord">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/afa-multimedia.jpg" alt="formation-au-numerique-afa-multimedia_contact"/>
						<h4>AFA-MULTIMEDIA SARL</h4>
						<p>
						Lou Duplo - Le Bruel<br>
						48230 ESCLANEDES<br><br>
						+33 (0)4 66 32 37 27
						</p>
					</div>
				</div>
				
				<div class="form-content">
					<?php echo do_shortcode( '[contact-form-7 id="14" title="Formulaire de contact 1"]' ); ?>
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
		<!-- CONTENT ORGANISME -->
		<div class="content-ref">
			<h3>UNIVERSITÉS &amp; ORGANISMES O&Ugrave; NOUS INTERVENONS</h3>
            <div class="line-grey"></div>
			<?php dynamic_sidebar( 'home-org' ); ?>
		</div>
        <hr>
		<!-- CONTENT REFERENCE -->
		<div class="content-ref">
			<h3>ILS SE SONT FORMÉS AVEC NOUS</h3>
            <div class="line-grey"></div>
			<?php dynamic_sidebar( 'home-logo' ); ?>
		</div>
		
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
