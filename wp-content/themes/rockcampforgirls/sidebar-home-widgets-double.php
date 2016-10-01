<?php
/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home-widgets-double.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home-widgets-double.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
    <div id="widgets" class="home-widgets">
        <div class="grid col-540">
        <?php responsive_widgets(); // above widgets hook ?>
 
            <?php if (!dynamic_sidebar('home-widgets-double-1')) : ?>
            <div class="widget-wrapper">
 
                <div class="widget-title-home"><h3><?php _e('Home Widgets Double 1', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your first double home widget box. To edit please go to Appearance > Widgets and choose the widget called Home Widgets Double 1. Title is also manageable from widgets as well.','responsive'); ?></div>
 
            </div><!-- end of .widget-wrapper -->
            <?php endif; //end of home-widgets-double-1 ?>
 
        <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div><!-- end of .col-460 -->
 
        <div class="grid col-380 fit">
        <?php responsive_widgets(); // responsive above widgets hook ?>
 
            <?php if (!dynamic_sidebar('home-widgets-double-2')) : ?>
            <div class="widget-wrapper">
 
                <div class="widget-title-home"><h3><?php _e('Home Widgets Double 2', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your second home widget box. To edit please go to Appearance > Widgets and choose the widget called Home Widgets Doouble 2. Title is also manageable from widgets as well.','responsive'); ?></div>
 
            </div><!-- end of .widget-wrapper -->
            <?php endif; //end of home-widgets-double-2 ?>
 
        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-460 fit -->
 
    </div><!-- end of #widgets -->