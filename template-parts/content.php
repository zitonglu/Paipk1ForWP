<?php
/**
 * this is content style,for single.php
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<section class="section">
	<h2 class="title"><?php the_title(); ?></h2>
	<?php include (TEMPLATEPATH . '/template-parts/baidushare.php'); ?>
	<div class="tab">
		<i class="glyphicon glyphicon-time"></i>&nbsp;<?php the_time('Y-m-d h:i'); ?>
		<span class="hidden-xs">&nbsp;
			<i class="glyphicon glyphicon-folder-open"></i>&nbsp;<?php the_category(',') ?>&nbsp;
			<i class="glyphicon glyphicon-tags"></i>&nbsp;<?php the_tags(""); ?>
			&nbsp;
			<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php post_views(); ?>&nbsp;
			<i class="glyphicon glyphicon-comment"></i>&nbsp;
			<a href="#SOHUCS" title="发表评论">发表评论</a>
		</span>
	</div><!-- Single-nav end -->
	<?php the_content(); ?>
</section>

<div class="text-center more-btn">
<?php $prev_post = get_adjacent_post('','',ture);$next_post = get_adjacent_post('','',false);if(get_previous_post()): ?>
  <a class="btn btn-yellowgreen" href="<?php echo get_permalink($prev_post); ?>" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;<?php _e('Previous','paipk1'); ?></a>
<?php endif ?>

  <a class="btn btn-blue" href="#" role="button" data-toggle="modal" data-target="#myshang"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;打赏</a>
	<?php include (TEMPLATEPATH . '/template-parts/reward.php'); ?>

<?php if(get_next_post()): ?>
  <a class="btn btn-orange" href="<?php echo get_permalink($next_post); ?>" role="button"><?php _e('Next','paipk1')?>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
<?php endif ?>
</div><!-- Prev and Next button end -->

<?php comments_template( '', true ); ?>