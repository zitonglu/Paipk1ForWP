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
<body <?php body_class('index'); ?>>
<?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?>

<div class="container">
	<aside class="col-md-2 col-sm-3 hidden-xs sidebar">
		<div class="theiaStickySidebar">
		<?php get_sidebar('left'); ?>
		</div>
	</aside>
	<div class="col-md-7 col-sm-9 list-body">
	<?php if( get_option('paipk1_if_Carousel') == 'checked' ){
		include TEMPLATEPATH .'/template-parts/istop.php';}
	?><!-- istop -->

		<?php if(have_posts()) : ?>
<div class="article">
	<ul class="media-list">
		<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/list',get_post_format()); ?>
		<?php endwhile; ?>
	</ul>
</div>
		<?php endif; ?>
		
		<?php paipk1_paging_nav(); ?>
	</div>
	<aside class="col-md-3 hidden-xs hidden-sm sidebar">
		<div class="theiaStickySidebar">
		<?php get_sidebar(); ?>
		</div>
	</aside>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>