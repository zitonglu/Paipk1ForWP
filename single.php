<?php get_header(); ?>
<body id="top" <?php body_class('index'); ?>>
<?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?>

<div class="container">
	<article class="col-md-9 article">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('template-parts/content', get_post_format()); ?>
		<?php endwhile; ?>
	<?php endif; ?>
	</article>
	<div class="col-md-3 single-box hidden-xs hidden-sm sidebar">
		<aside class="single-right theiaStickySidebar">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>

<?php get_footer(); ?>