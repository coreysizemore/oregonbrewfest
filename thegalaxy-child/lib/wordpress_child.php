<?php
	
	/*
		Child Wordpress Funtions
	*/
	
	function csdd_child_scripts() {
	
		wp_enqueue_style( 'csdd-custom', get_stylesheet_directory_uri() . '/css/custom.css' );
	
	}
	add_action( 'wp_enqueue_scripts', 'csdd_child_scripts' );

?>