<?php get_header(); ?>
	<div id="primary" class="primary">
		<h1 class="categoria"><?php _e('Estas en la categoría: '); single_cat_title(); ?></h1>
		<?php while( have_posts() ): the_post(); ?>
			<h2 class="consejos"><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<div class="clear"></div>
		<?php endwhile; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>