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
<article class="container article">

<div class="col-md-7 video-left">
<?php 
$embed = get_post_meta(get_the_ID(), 'paipk1_video_embed', TRUE);
if($embed){
	echo stripslashes(htmlspecialchars_decode($embed));
}?>
</div><!-- video end -->

<section class="col-md-5 section video-right">
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
	<h2 class="title"><?php the_title(); ?></h2>
	<?php the_content(); ?>
</section>
	<div class="clearflx"></div>

<?php include (TEMPLATEPATH . '/template-parts/morelist.php'); ?>

<?php comments_template( '', true ); ?>

</article>
</div>