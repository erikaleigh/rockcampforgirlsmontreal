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
		<a href="http://www.girlsrockmontreal.dev/donate">
		 <?php printf('Support RC4G MTL'); ?></a>
		 <span class="sep"> | </span>
		 <a href="http://www.girlsrockmontreal.dev/contact"><?php printf('Contact'); ?></a>
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
