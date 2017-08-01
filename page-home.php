<?php get_header(); ?>
<!--
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides
<div class="carousel-inner">
<div class="item active">
  <img src="la.jpg" alt="Los Angeles">
</div>

<div class="item">
  <img src="chicago.jpg" alt="Chicago">
</div>

<div class="item">
  <img src="ny.jpg" alt="New York">
</div>
</div>

<!-- Left and right controls
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>
</div> -->

	<div class="row">
		<div class=col-xs-12>

			<?php

				$lastBlog = new WP_Query('type=post&posts_per_page=1');

				if( $lastBlog->have_posts() ):
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

						<?php get_template_part('/parts/template-parts/content/content', get_post_format()); ?>

						<?php endwhile;

					endif;

					wp_reset_postdata();

					?>


		</div>
		<div class="col-xs-12 col-sm-8">
		<?php
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>

				<?php get_template_part('/parts/template-parts/content/content', get_post_format()); ?>

				<?php endwhile;

			endif;

			?>
	</div>

	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
