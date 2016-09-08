<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<li class="media" id="post-<?php the_ID(); ?>">
	<div class="media-left">
		<div class="media-box" style="background-image:url(<?php paipk1_post_thumbnail_url(); ?>)">
			<div class="tim"><a href="<?php the_permalink(); ?>"><?php the_time('m月') ?><br><?php the_time('d') ?></a></div>
			<div class="cat">
				<?php the_category(',') ?>
			</div>
		</div>
	</div>
	<div class="media-body">
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><small>文章的副标题</small></h4>
		<h6>	
<?php the_time('Y-m-d') ?>&nbsp;<span class="glyphicon glyphicon-time"></span>&nbsp;<?php the_time('H-i') ?>&nbsp;
		<span class="glyphicon glyphicon-tags"></span>
		<?php the_tags('标签：', ', ', ''); ?>&nbsp;
		<span class="glyphicon glyphicon-eye-open"><a href="<?php the_permalink(); ?>">&nbsp;<?php post_views('','次'); ?></a></span>
		</h6>
		<hr>
		<?php the_content(); ?>
	</div>
</li>