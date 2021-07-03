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
		<div class="piblicacion">
			<div class="columna">
				<?php the_tags( __( 'Etiquetas en este post:' ), ', ', '<br>' ); ?>
			</div>
			<div class="columna">
				<?php _e( 'Categorizado en: ' ); the_category(); ?>
			</div>
			<br>
			<div class="columna">
				<?php _e( 'Escrito por: ' ); ?> <span><?php the_author(); ?></span>
			</div>
			<div class="clear"></div>		
		</div>
		
		<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
			<?php the_title(); ?>
			<?php the_content(); ?>
		</article>
		
		<?php edit_post_link(); ?>

	</div>
<?php endwhile; ?>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>