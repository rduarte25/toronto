<?php get_header(); ?>
	<div id="slider">
		<ul class="bxslider">
			<?php $args = array(
				'posts_per_page'	=> 4,
				'orderby'			=> 'date',
				'order'				=> 'DESC',
				'post_type'			=> 'post',
			);?>
			<?php $slider = new WP_Query( $args ); ?>
			<?php while( $slider->have_posts() ): $slider->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'destacada' ); ?>
					</a>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
			
		</ul>
	</div>
	<div id="queVisitar">
		<?php dynamic_sidebar( 'front-page' ) ?>
	</div>
	<div class="clear"></div>
	<div id="informacionConsejos">
		<div class="informacion">
			<?php $informacion = new WP_Query( 'page_id=10' ); ?>
			<?php while( $informacion->have_posts() ): $informacion->the_post(); ?>				
				<h2 class="consejos"><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
		<div class="consejos">
			<h2 class="consejos">Consejos para viajar a Canada</h2>
			<?php $args = array(
				'cat'				=> 9,
				'posts_per_page'	=> 2,
				'order'				=> 'DESC',
				'orderby'			=> 'date',
			); ?>			
			<?php $consejos = new WP_Query( $args ); ?>
			<?php while( $consejos->have_posts() ): $consejos->the_post(); ?>
				<div class="consejoContenido">
					<a href=" <?php the_permalink(); ?> ">
						<?php the_post_thumbnail( 'guia-toronto' ); ?>
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
					</a>
				</div>	
			<?php endwhile; wp_reset_postdata(); ?>
					
		</div>
	</div>

<?php get_footer(); ?>