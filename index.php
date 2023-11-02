<?php get_header(); ?>

	<h1><?php the_title()?></h1>
	<?php the_content()?>

	<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		endif;
	?>

<?php get_footer(); ?>