<?php get_header(); ?>


		<?php
		if( have_posts() ): 
			while( have_posts() ): the_post(); ?>

				<?php get_template_part('/parts/template-parts/content/content', get_post_format()); ?>

				<?php endwhile;

			endif;

			?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
