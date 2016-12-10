<?php
/**
 * this is image list style,for index.php
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<?php 
	$post_images_array = paipk1_get_post_images(get_the_content());
	$post_images = $post_images_array[0];
	$arraylength = count($post_images);
	if($arraylength >=3 ){
 ?>
<li class="threepic" id="post-<?php the_ID(); ?>">
	<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
		<div class="row">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="col-xs-4"><?php echo $post_images[0] ?></a>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="col-xs-4"><?php echo $post_images[1] ?></a>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="col-xs-4"><?php echo $post_images[2] ?></a>
		</div>
	<?php the_excerpt() ?>
	<h6>
	<i class="glyphicon glyphicon-time"></i>&nbsp;<?php the_time('Y-m-d') ?>&nbsp;
	<?php if(has_tag()): ?>
		<i class="glyphicon glyphicon-tags"></i>&nbsp;
		<?php the_tags('') ?>
	<?php endif ?>
	<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<a href="<?php the_permalink(); ?>"><?php post_views(); ?></a>
	</h6>
</li>
<?php }else{
	include (TEMPLATEPATH . '/template-parts/list.php');
}
?>