<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	
	<footer class="footer">
		<div class="wrap">
			<div class="columns">
				<div class="column">
					<img src="<?php print get_logo(); ?>" class="footer-logo" />
				</div>
				<div class="column">
					<div class="footer-info address">
						<div class="icon">
							<img src="<?php bloginfo( 'template_url' ); ?>/img/icon-location.svg" />
						</div>
						<div class="content">
							<?php print get_address(); ?>
						</div>
					</div>
					<div class="footer-info website">
						<div class="icon">
							<img src="<?php bloginfo( 'template_url' ); ?>/img/icon-web.svg" />
						</div>
						<div class="content">
							<a href="https://www.pahofcu.org">www.pahofcu.org</a>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="footer-info website">
						<div class="icon">
							<img src="<?php bloginfo( 'template_url' ); ?>/img/icon-phone.svg" />
						</div>
						<div class="content">
							<a href="tel:2029743453">202.974.3453</a><br>
							<a href="tel:18667246328">1.866.724.6328</a> (<?php print ( get_current_language_abbrev() == 'es' ? 'número gratuito' : 'Toll-Free' ); ?>)*
						</div>
					</div>

					<?php if ( get_current_language_abbrev() == 'es' ) { ?>
					<p class="quiet"><strong>* Si llama desde fuera de los Estados Unidos:</strong> Marque primero número de acceso de AT&T correspondiente al país desde el que llama (para tono o instrucciones de un operador de AT&T) y luego marque nuestro número.</p>
					<?php } else { ?>
					<p class="quiet"><strong>* When calling from outside the United States:</strong> First dial the AT&T access number for the country you're calling from (tone, directions, or operator) and then dial the number.</p>
					<?php } ?>
				</div>
			</div>
		</div>
	</footer>
	<div class="wrap">
		<div class="subfooter">
			<div class="social-icons">
				<?php 
				theme_social_icon( 'twitter' );
				theme_social_icon( 'facebook' );
				theme_social_icon( 'instagram' );
				theme_social_icon( 'linkedin' );
				theme_social_icon( 'youtube' );
				?>
			</div>
			<div class="equal-housing"><img src="<?php bloginfo( 'template_url' ); ?>/img/icon-equal-housing.svg" /></div>
		</div>
	</div>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>