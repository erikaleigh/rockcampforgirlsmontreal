<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) )
	exit ;

/**
 * Post Meta-Data Template-Part File
 *
 * @file           post-meta.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/post-meta.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */
?>

<div class="post-meta">
	<?php responsive_post_meta_data(); ?>
</div>

<?php if ( is_single() ): ?>
				<h1 class="entry-title post-title"><?php the_title( ); ?></h1>
<?php else: ?>
				<h1 class="entry-title post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title( ); ?></a></h1>
<?php endif; ?>
<!-- end of .post-meta -->