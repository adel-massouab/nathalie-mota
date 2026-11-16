<?php


get_header();

/* Boucle pour verifier si il y a du contenu à afficher  */

while ( have_posts() ) : the_post(); 
			
endwhile; // Fin de la boucle 

get_footer();
