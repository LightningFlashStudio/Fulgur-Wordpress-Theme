<?php

/*
          Template Name: Default Page Template
*/
 get_header(); ?>
 <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>
<?php

if( have_posts() ):
     while( have_posts() ): the_post(); ?>
          <h1>This is my Static Title</h1>
          <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time( 'g:i a'); ?>, by <?php the_author(); ?>, in<?php the_category(); ?></small>
          <p><?php the_content(); ?></p>
          <hr>

     <?php endwhile;

endif;

?>


<?php get_footer(); ?>
