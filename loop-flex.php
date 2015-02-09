<?php 

/* page resume */
$type = get_field('page_type_acf');

while ( have_rows('contenu') ) : the_row();

    // if( get_row_layout() == 'ligne' ):

   	// check if template exist and call it
  	$template = locate_template( 'templates/'.get_row_layout().'.php' );
  	if(file_exists($template)) {
  		include($template);
  	}

endwhile;


?>