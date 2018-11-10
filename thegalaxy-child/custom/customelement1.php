<?php

	if( get_field('sponsors') ):
	
		echo '<div class="row gutters">';
	
		if( have_rows('sponsors') ):
		
			echo '<div class="sponsors"><div class="content"><h2>Special Thanks To All Our Sponsors</h2>';
					
			while ( have_rows('sponsors') ) : the_row();
			
				if( get_sub_field('link') ):
				
					echo '<a href="';
					
					the_sub_field('link');
					
					echo '" target="_blank">';
					        
					echo '<img src="';
						        
					the_sub_field('logo');
						
					echo '" alt="sponsor-logo" />';
					
					echo '</a>';
					
				else :
				
					echo '<img src="';
						        
					the_sub_field('logo');
						
					echo '" alt="sponsor-logo" />';
				
				endif;
					
			endwhile;
				
			echo '</div></div>';
						
		else :
			
		endif;
		
		echo '</div>';
		
	endif;
	
?>