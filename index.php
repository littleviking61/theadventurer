<?php get_header(); ?>
	
	<div class="wrap">
		<?php if ( have_posts() ) :
		 
			while ( have_posts() ) : the_post();

				if ( have_rows('contenu') ) :
					
					get_template_part( 'loop', 'flex' ); 

				else : 
					
					get_template_part( 'content', get_post_format() );
				
				endif;

			endwhile;

		endif; ?>
	</div>

<?php get_footer(); ?>
