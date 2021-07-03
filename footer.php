		</div><!-- ESTE CIERRA EL CONTENIDO -->
		<footer class="site-footer" role="contentinfo">
			<div class="container">
				<nav id="footer-navigador" class="footer-navigador">
					<?php wp_nav_menu(array(
						'theme-location' => 'menu_principal',

					) ); ?>
				</nav>
			</div>
			<div class="clear"></div>
			<div class="copyright">
				<p>Visita Toronto <?php echo date( 'Y' ) ?></p>
			</div>
		</footer>
	</div><!-- ESTE CIERRA LA PAGINA -->
	<?php wp_footer(); ?>	
</body>
</html>