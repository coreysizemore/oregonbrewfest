<?php
	
	/*
		@package WordPress
		@subpackage hoth
	*/
	 
?>

<?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>

	<div class="sidebar">
			
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	
	</div>

<?php elseif ( get_field('display_office_information', 'options') ): ?>

	<div class="sidebar">
		
		<div class="sidebar_logo">
		
			<?php get_template_part( 'logos/logo', 'footer' ); ?>
		
		</div>
		
		<?php 
				
			if( get_field('display_office_information', 'options')):
						
				if( have_rows('office_information', 'options') ):
					
					while ( have_rows('office_information', 'options') ) : the_row();
						
						echo '<div class="office_information_wrapper">';
						
						if( get_sub_field('office_title', 'options')):
						
							echo '<h3>';
								
							the_sub_field('office_title', 'options');
								        
							echo '</h3>';
							
						endif;
						
						echo '<ul class="office_hours">';
						
						if( get_sub_field('monday', 'options')):
						
							echo '<li><span>Monday:</span><span>';
								        
							the_sub_field('monday', 'options');
							
							echo '</li>';
						
						endif;
						
						if( get_sub_field('tuesday', 'options')):
							
							echo '<li><span>Tuesday:</span><span>';
								        
							the_sub_field('tuesday', 'options');
							
							echo '</li>';
						
						endif;
						
						if( get_sub_field('wednesday', 'options')):
							
							echo '<li><span>Wednesday:</span><span>';
								        
							the_sub_field('wednesday', 'options');
							
							echo '</li>';
						
						endif;
						
						if( get_sub_field('thursday', 'options')):
							
							echo '<li><span>Thursday:</span><span>';
								        
							the_sub_field('thursday', 'options');
							
							echo '</li>';
						
						endif;
						
						if( get_sub_field('friday', 'options')):
							
							echo '<li><span>Friday:</span><span>';
							
							the_sub_field('friday', 'options');
							
							echo '</li>';
						
						endif;
						
						if( get_sub_field('saturday', 'options')):
							
							echo '<li><span>Saturday:</span><span>';
								        
							the_sub_field('saturday', 'options');
							
							echo '</li>';
						
						endif;
						
						if( get_sub_field('sunday', 'options')):
							
							echo '<li><span>Sunday:</span><span>';
								        
							the_sub_field('sunday', 'options');
							        
							echo '</li>';
						
						endif;
						
						if( get_sub_field('hours_note', 'options')):
						
							echo '<p>';
								
							the_sub_field('hours_note', 'options');
								
							echo '</p>';
							
						endif;
						
						echo '</ul>';
						
						echo '<ul class="contact_info">';
						
						if( get_sub_field('office_address', 'options') || get_sub_field('office_address_cont', 'options') ):
						
							echo '<li>';
							
							the_sub_field('office_address', 'options');
							
							echo ' ';
							
							the_sub_field('office_address_cont', 'options');
							
							echo '</li>';
						
						endif;
						
						if( get_sub_field('office_city', 'options') || get_sub_field('office_state', 'options') || get_sub_field('office_zipcode', 'options') ):
						
							echo '<li>';
							
							the_sub_field('office_city', 'options');
							
							echo ', ';
							
							the_sub_field('office_state', 'options');
							
							echo ' ';
							
							the_sub_field('office_zipcode', 'options');
							
							echo '</li>';
						
						endif;
						
						echo '</ul>';
						
						echo '<ul class="contact_info">';
						
						if( get_sub_field('office_phone', 'options')):
						
							echo '<li><a href="tel:';
							
							the_sub_field('office_phone', 'options');
							
							echo '" target="_blank">';
							
							the_sub_field('office_phone', 'options');
							
							echo '</a></li>';
							
						endif;
						
						if( get_sub_field('office_fax', 'options')):
						
							echo '<li>Fax: ';
						
							the_sub_field('office_fax', 'options');
						
							echo '</li>';
							
						endif;
						
						if( get_sub_field('office_email', 'options')):
							
							echo '<li><a href="mailto:';
						
							the_sub_field('office_email', 'options');
						
							echo '" target="_blank">';
							
							echo 'Volunteer';
						
// 							the_sub_field('office_email', 'options');
						
							echo '</a></li>';
							
						endif;
							
						echo '</ul>';
						
						echo '</div>';
							
					endwhile;
							
				else :
						
				endif;
					
			endif; 
				
		?>
	
	</div>

<?php else : ?>

	<p>You need to drag a widget into your sidebar in the WordPress Admin.</p>
	
<?php endif; ?>
