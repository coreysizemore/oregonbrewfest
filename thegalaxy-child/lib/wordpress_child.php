<?php
	
	/*
		Call Custom Styles
	*/
	

	function galaxy_scriptss() 
	{
		
		wp_enqueue_style( 'galaxy-child-style', get_stylesheet_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'galaxy-child-custom-style', get_stylesheet_directory_uri() . '/css/custom.css' );
	    wp_enqueue_script( 'galaxy-child-custom-js', get_stylesheet_directory_uri() . '/js/custom.js' );
	    
	}
	
	add_action( 'wp_enqueue_scripts', 'galaxy_scriptss', 99 );
	
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' => 'Image Gallery',
			'menu_title' => 'Image Gallery',
			'menu_slug' => 'image-gallery',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));

	}
	
?>