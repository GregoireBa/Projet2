<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Ravenna
 */
?>

	<?php if ( !is_page_template('page-templates/page_widgetized.php') ) : ?>
	</div>
	<?php endif; ?>
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">	
			Site web réalisé dans le cadre d'une formation par Openclassroom | <a href="http://projet2.barre-gregoire.com/politique-de-confidentialite">Politique de confidentialité</a> | <a href="http://projet2.barre-gregoire.com/mentions-legales">Mentions légales</a> | <a href="http://projet2.barre-gregoire.com/admin">Panel admin</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
