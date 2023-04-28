<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	// page header starts here
	
	if( get_field('display_search', 'options') == 'display'):

		get_search_form();

	endif;
	
	if( get_field('utilize_login_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/loggedin' );
	
	endif;
	
	if( get_field('utilize_top_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/topbar' );
	
	endif;

	echo '<header id="header_page">';
	
	if( get_field('imageslideshow_overlay', 'options') == 'enable' ):
	
		echo '<div class="image_overlay"></div>';
	
	endif;
	
	if( get_field('utilize_nav_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/primarynav' );
	
	endif;
	
	if( get_field('back_page_heading_location', 'options') == 'left' ):
	
		echo '<div id="page_title" class="page_title_left"><h1 class="heading">';
	
	elseif( get_field('back_page_heading_location', 'options') == 'right' ):
	
		echo '<div id="page_title" class="page_title_right"><h1 class="heading">';
	
	else :
	
		echo '<div id="page_title" class="page_title_center"><h1 class="heading">';
	
	endif;
	
	echo get_the_title();
		
	echo '</h1>';

	if(get_field('page_sub_heading')):
		
		echo '<h2 class="subheading">' . get_field('page_sub_heading') . '</h2>';

	endif;
	
	// EDIT FOR PAGE LOGO HERE
	
	echo '<div class="header_page_logo_image">';
	
	echo '<img src="https://oregonbrewfest.com/wp-content/uploads/2023/04/obf-rose-logo.png" alt="oregon brewers festival logo" />';
	
	echo '</div>';

	echo '</header>';
	
	
	
	// mobile page header starts here
	
	echo '<header id="header_page_mobile">';
	
	if( get_field('utilize_nav_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/mobilenav' );
	
	endif;
	
	if( get_field('imageslideshow_overlay', 'options') == 'enable' ):
		
		echo '<div class="image_overlay"></div>';
		
	endif;
	
	echo '<div id="page_title"><h1 class="heading">';
	
	echo get_the_title();
		
	echo '</h1>';

	if(get_field('page_sub_heading')):
		
		echo '<h2 class="subheading">' . get_field('page_sub_heading') . '</h2>';

	endif;
	
	// EDIT FOR PAGE LOGO HERE
	
	echo '<div class="header_page_logo_image">';
	
	echo '<img src="https://oregonbrewfest.com/wp-content/uploads/2018/11/OBF-Logo.png" alt="oregon brewers festival logo" />';
	
	echo '</div>';
	
	echo '</header>';
	
?>