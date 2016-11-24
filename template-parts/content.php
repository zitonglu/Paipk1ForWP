<?php
/**
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<li class="media" id="post-<?php the_ID(); ?>">
	<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
	<div class="media-left">
		<div class="media-box">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php paipk1_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
			<div class="tim"><a href="<?php the_permalink(); ?>"><?php the_time('M') ?><br>><?php the_time('d') ?></a>
			</div>
			<div class="cat">
				<?php the_category(',') ?>
			</div>
		</div>
	</div>
	<div class="media-body">
		<h6>
		<i class="glyphicon glyphicon-time"></i>&nbsp;<?php the_time('Y-m-d') ?>&nbsp;
		<?php if(has_tag()): ?><i class="glyphicon glyphicon-tags"></i>&nbsp;
			<?php the_tags('',',') ?>
		<?php endif ?>
		<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<a href="#"><?php post_views(); ?></a></a>
		</h6>
		<?php the_excerpt() ?>
		<p class="clearfix"></p>
	</div>
</li>