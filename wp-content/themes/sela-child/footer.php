<?php
/**
 * Footer content updates
 *
 * @package Sela
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>

		<div class="site-info"  role="contentinfo">
		 <?php printf('Mailing Address: 163B ave. Van Horne, Montreal, QC H2T 2J2'); ?>
		 <span class="sep"> | </span>
		 <a href="mailto:info@girlsrockmontreal.com" target="_top"><?php printf('info@girlsrockmontreal.com'); ?></a>
			<span class="sep"> | </span>
			<?php printf('&copy'); ?>
			<?php printf('RC4G Montreal'); ?>
			<?php echo date ("Y") ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
