<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<body id="index-pic" <?php body_class(); ?>>
<div class="container">
	<?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?>
	<!-- <div class="head row">
		<div class="col-sm-4 hidden-xs">
			<img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</div>
		<div class="col-sm-5 col-sm-offset-3 col-md-4 col-md-offset-4 search-box hidden-xs">
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="输入搜索内容">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
	</div> -->
</div>

<div class="container body">
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part( 'template-parts/content' ); ?>
	<?php endwhile; ?>
	<?php endif; ?>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>