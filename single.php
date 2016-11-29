<?php get_header(); ?>
<body <?php body_class('index'); ?>>
<?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/content', get_post_format()); ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>