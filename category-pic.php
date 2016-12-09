<?php
/**
 *
 * @link http://www.paipk.com/
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
get_header(); ?>
<body id="index-pic" <?php body_class('index');?>>
<?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?>

<div class="container article">
<?php if( get_option('paipk1_if_Carousel') == 'checked' ):?>
	<div class="col-md-8 col-sm-12">
		<?php include TEMPLATEPATH .'/template-parts/istop.php';?>
	</div>
<?php endif?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<?php if (has_post_thumbnail()): ?>
		<section class="col-md-4 col-sm-6 post-box">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<img src="<?php echo paipk1_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="img-cover">
			</a>
			<div class="tim"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_time('M') ?><br><?php the_time('d') ?></a></div>
			<div class="cat">
				<?php the_category(',') ?>
			</div>
			<div class="post-text">
				<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt();?>
			</div>
		</section>
		<?php else: ?>
		<section class="col-md-4 col-sm-6 post-box post-nopic">
			<div class="post-text">
				<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt();?>
			</div>
		</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

	<div class="clearfix"></div>

	<?php paipk1_paging_nav(); ?>
</div>

<?php get_footer(); ?>