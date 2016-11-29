<?php
/**
 * this is quote list style,for index.php
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<li class="media weiyu" id="post-<?php the_ID(); ?>">
	<a class="media-left hidden-xs" href="<?php the_permalink(); ?>">
		<?php echo get_avatar( get_the_author_email(), 50 ); ?>
	</a>
	<div class="media-body">
		<h5 class="media-heading"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_author(); ?></a>：<?php the_title(); ?>。</h5>
		<p>
		<i class="glyphicon glyphicon-time"></i>&nbsp;<?php the_time('Y-m-d') ?>&nbsp;
		<?php if(has_tag()): ?><i class="glyphicon glyphicon-tags"></i>&nbsp;
			<?php the_tags('') ?>
		<?php endif ?>
		<i class="glyphicon glyphicon-comment"></i>&nbsp;<a href="<?php the_permalink(); ?>#SOHUCS" title="<?php the_title(); ?>"><?php _e('Comment','paipk1') ?></a>
		</p>
	</div>
</li>