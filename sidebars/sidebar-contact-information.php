<?php
	
	/*
		@package WordPress
		@subpackage hoth
	*/
	 
?>

<?php if ( is_active_sidebar( 'contact-information-sidebar' ) ) : ?>

	<div id="contact_information">
		
		<div class="container">
			
			<div class="row gutters">
				
				<div class="col_12">
		
					<?php dynamic_sidebar( 'contact-information-sidebar' ); ?>
					
				</div>
				
			</div>
			
		</div>
	
	</div>
	
<?php elseif ( get_field('display_contact_information_top', 'options') ): ?>

	<div id="contact_information">
		
		<div class="container">
			
			<div class="row gutters">
				
				<div class="col_9 first">
					
					<div>
					
						<?php
						
							if( get_field('display_contact_information_top', 'options')):
							
								if( have_rows('office_information', 'options') ):
								
									echo '<ul class="contact_info">';
									
									if(	count( get_field('office_information', 'options') ) == 1 ):
						
										while ( have_rows('office_information', 'options') ) : the_row();
								
											if( get_sub_field('office_phone', 'options')):
											
												echo '<li><a href="tel:';
												
												the_sub_field('office_phone', 'options');
												
												echo '" target="_blank">';
												
												the_sub_field('office_phone', 'options');
												
												echo '</a></li>';
												
											endif;
											
											if( get_sub_field('office_email', 'options')):
									
												echo '<li><a href="mailto:';
											
												the_sub_field('office_email', 'options');
											
												echo '" target="_blank">';
											
												the_sub_field('office_email', 'options');
											
												echo '</a></li>';
												
											endif;
									
										endwhile;
										
									else :
									
										while ( have_rows('office_information', 'options') ) : the_row();
								
											if( get_sub_field('office_phone', 'options')):
											
												echo '<li><a href="tel:';
												
												the_sub_field('office_phone', 'options');
												
												echo '" target="_blank">';
												
												the_sub_field('office_phone', 'options');
												
												echo '</a></li>';
												
											endif;
											
										endwhile;
										
									endif;
									
									echo '<li><a class="subscribe_button" href="https://visitor.r20.constantcontact.com/d.jsp?llr=krkcv9iab&p=oi&m=1108996074026&sit=gkopi5rgb&f=ff8a6de7-1b4c-4579-a6ac-7443acf94cd3" target="_blank">Subscribe Here</a></li>';
									
									echo '</ul>';
								
								else :
										
								endif;
							
							endif;
							
						?>
						
					</div>
				
				</div>
				
				<div class="col_3 last">
					
					<?php get_template_part( 'navs/nav', 'social' ); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

<?php else : ?>

	<!-- You need to drag a widget into your sidebar in the WordPress Admin -->
	
<?php endif; ?>
