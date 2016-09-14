<?php
/**
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="col-md-3 single-box">
	<div class="single-right">
<?php if ( is_single() && is_active_sidebar( 'sidebar-2' )) { ?>
	<div class="widget">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
<?php }else{ ?>
	<div class="widget">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
<?php }; ?>
	</div>
</div>