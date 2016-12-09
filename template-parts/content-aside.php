<?php
/**
 * this is content style,for single.php
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<article class="container article">

<section class="section">
	<h2 class="title"><?php the_title(); ?></h2>
	<?php include (TEMPLATEPATH . '/template-parts/baidushare.php'); ?>
	<div class="tab">
		<i class="glyphicon glyphicon-time"></i>&nbsp;<?php the_time('Y-m-d h:i'); ?>
		<span class="hidden-xs">&nbsp;
			<i class="glyphicon glyphicon-folder-open"></i>&nbsp;<?php the_category(',') ?>&nbsp;
			<i class="glyphicon glyphicon-tags"></i>&nbsp;<?php the_tags(''); ?>
			&nbsp;
			<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php post_views(); ?>&nbsp;
			<i class="glyphicon glyphicon-comment"></i>&nbsp;
			<a href="#SOHUCS" title="<?php _e('Comment','paipk1'); ?>"><?php echo comments_users($post->ID); ?></a>
		</span>
	</div><!-- Single-nav end -->
	<?php the_content(); ?>
</section>

<?php include (TEMPLATEPATH . '/template-parts/morelist.php'); ?>

<?php comments_template( '', true ); ?>

<?php if(get_option('paipk1_CommentAD') != ''):?>
	<div class="hidden-xs hidden-sm singlefooterAD">
		<?php echo get_option('paipk1_CommentAD'); ?>
	</div><!-- AD end -->
<?php endif?>

</article>