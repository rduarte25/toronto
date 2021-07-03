<?php
/*
* Template Name: Consejos
*/
?>

<?php get_header(); ?>

<?php while( have_posts() ): the_post(); ?>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="destacada">
			<?php the_post_thumbnail( 'destacada' ); ?>
			<?php the_title( '<h2>', '</h2>' ); ?>
		</div>
	<?php } else { ?>
		<h2 class="noimagen"><?php the_title();?></h2>
	<?php } ?>

		<div id="primary" class="primary">
			<?php $args = array(
				'cat' 				=> array( 9 ),
				'posts_per_page'	=> 5,
				'orderby'			=> 'date',
				'order'				=> 'DESC',
			); ?>
			<?php $consejos = new WP_Query( $args ); ?>
			<?php while( $consejos->have_posts() ): $consejos->the_post(); ?>
				<?php the_post_thumbnail( 'consejos' ); ?>
				<h2 class="consejos"><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
				
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
<?php endwhile; ?>	

<?php get_sidebar(); ?>
<?php get_footer(); ?>