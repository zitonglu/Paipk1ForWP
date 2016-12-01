<?php
/**
 * this is content style,for single.php
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<div class="container">
<article class="col-md-9 article">

<section class="section">
	<h2 class="title"><?php the_title(); ?></h2>
	<?php include (TEMPLATEPATH . '/template-parts/baidushare.php'); ?>

<?php if(is_page()): ?>
	<div class="tab">
		<i class="glyphicon glyphicon-time"></i>&nbsp;<?php the_time('Y-m-d h:i'); ?>&nbsp;
		<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php post_views(); ?>
	</div><!-- Page-nav end -->
<?php else: ?>
	<div class="tab">
		<i class="glyphicon glyphicon-time"></i>&nbsp;<?php the_time('Y-m-d h:i'); ?>
		<span class="hidden-xs">&nbsp;
			<i class="glyphicon glyphicon-folder-open"></i>&nbsp;<?php the_category(',') ?>&nbsp;
			<i class="glyphicon glyphicon-tags"></i>&nbsp;<?php the_tags(""); ?>
			&nbsp;
			<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php post_views(); ?>&nbsp;
			<i class="glyphicon glyphicon-comment"></i>&nbsp;
			<a href="#SOHUCS" title="<?php _e('Comment','paipk1'); ?>"><?php echo comments_users($post->ID); ?></a>
		</span>
	</div><!-- Single-nav end -->
<?php endif ?>
	
	<?php the_content(); ?>
</section>

<?php include (TEMPLATEPATH . '/template-parts/morelist.php'); ?>

<?php comments_template( '', true ); ?>

</article>

<div class="col-md-3 single-box hidden-xs hidden-sm sidebar">
	<aside class="single-right theiaStickySidebar">
		<?php get_sidebar('single'); ?>
	</aside>
</div><!-- sidebar -->

</div>