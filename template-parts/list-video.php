<?php
/**
 * this is video list style,for index.php
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
$embed = get_post_meta(get_the_ID(), 'paipk1_video_embed', TRUE);
if($embed){
?>
<li class="media videolist" id="post-<?php the_ID(); ?>">
	<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
	<div class="media-body">
		<p><?php the_excerpt() ?></p>
		<h6>
		<i class="glyphicon glyphicon-time"></i>&nbsp;<?php the_time('Y-m-d') ?>&nbsp;
		<?php if(has_tag()): ?><i class="glyphicon glyphicon-tags"></i>&nbsp;
			<?php the_tags('',',') ?>
		<?php endif ?>
		<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<a href="<?php the_permalink(); ?>"><?php post_views(); ?></a>
		</h6>
	</div>
	<a class="media-right" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<div class="videodiv">
	<?php if (has_post_thumbnail()):?>
			<img src="<?php echo paipk1_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="videoIMG">
	<?php else:?>
			<img src="<?php bloginfo('template_url'); ?>/images/nopic.png" alt="<?php the_title_attribute(); ?>" class="videoIMG">
	<?php endif?>
			<i class="glyphicon glyphicon-facetime-video mask"></i>
		</div>
	</a>
</li>

<?php }else{
	include (TEMPLATEPATH . '/template-parts/list.php');
}?>