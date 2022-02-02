<?php

	$page_icon = get_field('page_icon');
	$page_heading = get_field('page_heading');
	
	if( !empty($page_heading) ):
	
		echo '<div id="page_header_wrapper"><span class="hex_shape_wrapper"><span class="hex_shape_1"></span><span class="hex_shape_2"></span><span class="hex_shape_3"></span>';
		
		echo '<i class="' . $page_icon . '"></i>';
		
		echo '</span>';
		
		echo '<h1>' . $page_heading . '</h1>';
		
		echo '</div>';
		
	endif;
	
?>