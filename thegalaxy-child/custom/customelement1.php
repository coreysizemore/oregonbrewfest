<?php

	if( have_rows('call_out_items') ):
	
		// Desktop Version
	
		echo '<div id="home_content_wrapper"><div class="container"><div class="row gutters"><div class="col_6"><div class="home_content">';
		
		$home_content = get_field('content');
		
		echo $home_content;
		
		echo '</div></div><div class="col_6"><div class="home_callout">';

		while ( have_rows('call_out_items') ) : the_row();

			$icon = get_sub_field('icon');
			$heading = get_sub_field('heading');
			$description = get_sub_field('description');
			
			echo '<div class="home_callout_item">';
			
			if (!empty($icon)):
			
				echo '<span class="hex_shape_wrapper"><span class="hex_shape_1"></span><span class="hex_shape_2"></span><span class="hex_shape_3"></span><i class="' . $icon . '"></i></span>';
			
			endif;
			
			if (!empty($heading)):
			
				echo '<h2>' . $heading . '</h2>';
			
			endif;
			
			if (!empty($description)):
			
				echo $description;
			
			endif;
			
			echo '</div>';
		
		endwhile;
		
		echo '</div></div></div></div></div>';
			
	endif;
	
	echo '<div id="image_store_wrapper"><div class="container"><div class="row gutters"><div class="col_6"><div class="image_gallery">';
	
	if( have_rows('image_gallery', 'options') ):
	
		$images = get_field('image_gallery','option');
		$galleryheading = get_field('gallery_heading');
		$gallerysubheading = get_field('gallery_sub_heading');
		$gallerypagelink = get_field('gallery_page_link');
		
		shuffle($images);
		
		$i = 1;
		
		foreach( $images as $img ):
		
			if( $i <= 4 ):
		
				$img = $img['image'];
			
				echo '<a href="' . $img['url'] . '" class="fancybox" rel="group"><img src="' . $img['url'] . '" alt="' . $img['alt'] . '" /></a>';
				
				$i++;
				
			endif;
			
		endforeach;		
		
		echo '<div class="details_bar">';
	
		echo '<h3>' . $galleryheading . '</h3>';
		
		echo '<p>' . $gallerysubheading . '</p>';
		
		echo '<a href="' . $gallerypagelink . '">View Gallery</a>';
		
		echo '</div>';
	
	endif;
	
	echo '</div></div><div class="col_6"><div class="online_store">';
	
	$storeimage = get_field('store_image');
	$storelink = get_field('store_link');
	$storeheading = get_field('store_heading');
	$storesubheading = get_field('store_sub_heading');
	
	echo '<a href="' . $storelink . '" target="_blank"><img src="' . $storeimage['url'] . '" alt="' . $storeimage['alt'] . '" /></a>';
	
	echo '<div class="details_bar">';
	
	echo '<h3>' . $storeheading . '</h3>';
	
	echo '<p>' . $storesubheading . '</p>';
	
	echo '<a href="' . $storelink . '" target="_blank">Online Store</a>';
	
	echo '</div>';
	
	echo '</div></div></div></div></div>';
		
	$page_icon = get_field('page_icon');
	$page_heading = get_field('page_heading');
	
	if( !empty($page_heading) ):
	
		echo '<div id="event_countdown"><div class="container"><div class="row gutters"><div class="col_12"><div class="countdown"><span class="hex_shape_wrapper"><span class="hex_shape_1"></span><span class="hex_shape_2"></span><span class="hex_shape_3"></span>';
		
		echo '<i class="' . $page_icon . '"></i>';
		
		echo '</span>';
		
		echo '<h1>' . $page_heading . '</h1>';
		
		echo '<span class="days"></span><span class="hours"></span><span class="minutes"></span><span class="seconds"></span></div></div></div></div></div>';
		
	endif;
	
?>