<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="col-md-4 col-sm-6 post-list" id="post-<?php the_ID(); ?>">
	<div class="post-box" style="background-image:url(<?php paipk1_post_thumbnail_url(); ?>)">
		<div class="tim"><a href="<?php the_permalink(); ?>"><?php the_time('m月') ?><br><?php the_time('d') ?></a></div>
		<div class="cat">
			<?php the_category(',') ?>
		</div>
		<div class="tit">
			<p><a href="<?php the_permalink(); ?>"><?php
echo wp_trim_words(get_the_excerpt(),40);// 截取40字的文章摘要内容
?></a></p>
			<hr>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</div>
	</div>
</div>