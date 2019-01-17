<?php
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri().'/asset/css/bootstrap.min.css', false, NULL, 'all');
		wp_enqueue_script( 'child-js', get_stylesheet_directory_uri() . '/js/script.js', array(), false, true );

	}

function formation_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Entreprises accueil', 'twentyseventeen-child' ),
		'id'            => 'home-logo',
		'description'   => __( 'Add widgets here to appear home section ref.', 'twentyseventeen-child' ),
		'before_widget' => '<section id="%1$s" class="references %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Centre formation accueil', 'twentyseventeen-child' ),
		'id'            => 'home-org',
		'description'   => __( 'Add widgets here to appear home section center.', 'twentyseventeen-child' ),
		'before_widget' => '<section id="%1$s" class="references %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Zone page contact', 'twentyseventeen-child' ),
		'id'            => 'contact',
		'description'   => __( 'Add widgets here to appear on contact page.', 'twentyseventeen-child' ),
		'before_widget' => '<aside id="%1$s" class="references %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'formation_widgets_init' );
