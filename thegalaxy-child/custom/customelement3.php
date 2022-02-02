<?php

	if( have_rows('image_gallery', 'options') ):
	
		$images = get_field('image_gallery','option');
		
		shuffle($images);
		
		echo '<div id="image_gallery_wrapper">';

		foreach( $images as $img ):
		
			$img = $img['image'];
			
			echo '<a href="' . $img['url'] . '" class="fancybox" rel="group"><img src="' . $img['url'] . '" alt="' . $img['alt'] . '" /></a>';	

		endforeach;
		
		echo '</div>';
	
	endif;
	
?>