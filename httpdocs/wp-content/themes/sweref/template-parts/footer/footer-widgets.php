<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) && is_active_sidebar( 'sidebar-4' ) && is_active_sidebar( 'sidebar-5' ) ) :?>

<div class="footer-block">
  <div class="row footer-content">
 	<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>			
				<?php dynamic_sidebar( 'sidebar-2' ); ?>			
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
		<?php } 
		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
		<?php } 
		if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
		<?php } ?>
    


<!-- .widget-area -->

<?php endif; ?>
