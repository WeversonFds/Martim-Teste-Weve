<?php
	function striped_wp_styles()
	{
		wp_enqueue_style('style_css',get_stylesheet_uri());
		wp_enqueue_style('main_css',get_stylesheet_directory_uri().'/assets/css/main.css');
		wp_enqueue_style('boot_css',get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css');
		wp_enqueue_style('roboto_css',get_stylesheet_directory_uri().'/assets/fonts/roboto.css');
		wp_enqueue_style('flik_css',get_stylesheet_directory_uri().'/assets/css/flickity.min.css');

		
		wp_enqueue_script('jquery_js', get_stylesheet_directory_uri(). '/assets/js/jquery-3.5.1.slim.min.js', '','',true);
		wp_enqueue_script('popper_js', get_stylesheet_directory_uri(). '/assets/js/popper.min.js', '','',true);
		wp_enqueue_script('boots_js', get_stylesheet_directory_uri(). '/assets/js/bootstrap.min.js', '','',true);
		wp_enqueue_script('flick_js', get_stylesheet_directory_uri(). '/assets/js/flickity.pkgd.min.js', '','',true);
		
	}
	add_action('wp_enqueue_scripts', 'striped_wp_styles');
	add_theme_support('title-tag');
?>

