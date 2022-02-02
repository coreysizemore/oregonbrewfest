<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	// primary header starts here
	
	if( get_field('display_search', 'options') == 'display'):

		get_search_form();

	endif;
	
	if( get_field('utilize_login_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/loggedin' );
	
	endif;
	
	if( get_field('utilize_top_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/topbar' );
	
	endif;
	
	if ( is_active_sidebar( 'attention-sidebar-3' ) ):
	 
		get_template_part( 'sidebars/sidebar' , 'attentionheader' );
	
	endif;

	if( get_field('home_selection', 'options') == 'full' ):
	
		echo '<header id="header_home" class="full">';
			
	elseif( get_field('home_selection', 'options') == 'fixedtall' ):
		
		echo '<header id="header_home" class="fixed_tall">';
		
	elseif( get_field('home_selection', 'options') == 'fixedshort' ):
		
		echo '<header id="header_home" class="fixed_short">';
		
	elseif( get_field('home_selection', 'options') == 'slide' ):
	
		echo '<header id="header_home" class="slideshow"><div id="slideshow_wrapper">';
		
		$slides = get_field('slideshow','options');
		
		$counter = 1;
		
		if( $slides ):
			
			foreach( $slides as $slide ):
			
				echo '<div class="image_slide slide_' . $counter . '">';
				
				if( $slide['caption'] ):
				
					echo '<div class="caption">';
				
					echo $slide['caption'];
					
					echo '</div>';
					
				endif;
				
				echo '</div>';
				
				$counter++;
			
			endforeach;
				
		endif;
		
		echo '</div>';
		
	elseif( get_field('home_selection', 'options') == 'slidetall' ):
	
		echo '<header id="header_home" class="slideshow_tall"><div id="slideshow_wrapper">';
		
		$slides = get_field('slideshow','options');
		
		$counter = 1;
		
		if( $slides ):
			
			foreach( $slides as $slide ):
			
				echo '<div class="image_slide slide_' . $counter . '">';
				
				if( $slide['caption'] ):
				
					echo '<div class="caption">';
				
					echo $slide['caption'];
					
					echo '</div>';
					
				endif;
				
				echo '</div>';
				
				$counter++;
			
			endforeach;
				
		endif;
		
		echo '</div>';
		
	elseif( get_field('home_selection', 'options') == 'slideshort' ):
	
		echo '<header id="header_home" class="slideshow_short"><div id="slideshow_wrapper">';
		
		$slides = get_field('slideshow','options');
		
		$counter = 1;
		
		if( $slides ):
			
			foreach( $slides as $slide ):
			
				echo '<div class="image_slide slide_' . $counter . '">';
				
				if( $slide['caption'] ):
				
					echo '<div class="caption">';
				
					echo $slide['caption'];
					
					echo '</div>';
					
				endif;
				
				echo '</div>';
				
				$counter++;
			
			endforeach;
				
		endif;
		
		echo '</div>';
			
	endif;
	
	if( get_field('imageslideshow_overlay', 'options') == 'enable' ):
	
		echo '<div class="image_overlay"></div>';
	
	endif;
	
	if( get_field('utilize_nav_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/primarynav' );
	
	endif;
		
	get_template_part( 'misc/homelogo' );
	
	/* custom event details area */
	
	echo '<div id="event_details">';
	
	echo '<div class="event_date"><i class="far fa-calendar-alt"></i><span class="heading">DATE</span><span class="details">' . get_field('event_date') . '</span></div>';
	
	echo '<div class="event_time"><i class="far fa-clock"></i><span class="heading">TIME</span><span class="details">' . get_field('event_time') . '</span></div>';
	
	echo '<div class="event_location"><i class="fas fa-map-marker-alt"></i><span class="heading">LOCATION</span><span class="details">' . get_field('event_location') . '</span></div>';
	
	echo '</div>';
	
	/* end custom */

	echo '</header>';
	
	
	
	// mobile header starts here
	
	echo '<header id="header_home_mobile">';
	
	if( get_field('utilize_nav_bar', 'options') == 'display' ):
	
		get_template_part( 'misc/mobilenav' );
	
	endif;
	
	if( get_field('imageslideshow_overlay', 'options') == 'enable' ):
		
		echo '<div class="image_overlay"></div>';
		
	endif;
	
	get_template_part( 'misc/homelogomobile' );
	
	/* custom event details area */
	
	echo '<div id="event_details">';
	
	echo '<div class="event_date"><i class="far fa-calendar-alt"></i><span class="heading">DATE</span><span class="details">' . get_field('event_date') . '</span></div>';
	
	echo '<div class="event_time"><i class="far fa-clock"></i><span class="heading">TIME</span><span class="details">' . get_field('event_time') . '</span></div>';
	
	echo '<div class="event_location"><i class="fas fa-map-marker-alt"></i><span class="heading">LOCATION</span><span class="details">' . get_field('event_location') . '</span></div>';
	
	echo '</div>';
	
	/* end custom */
	
	echo '</header>';
	
?>