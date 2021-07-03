<?php get_header(); ?>
	<div id="primary" class="primary">
		<?php while( have_posts() ): the_post(); ?>
			<?php the_title(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>