<?php
/**
 * The template for displaying Archive pages
 *
 * @package  paipk1
 * @since paipk1 1.0
 */
get_header(); ?>
<body class="single single-search">
<?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?>

<article class="container article">
<section class="section">
<?php if (have_posts()): ?>
	<ul>
	<?php while (have_posts()) : the_post(); ?>
		<li>
		<h5 class="searchName" id="post-<?php the_ID(); ?>">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
		</li>
		<?php the_excerpt() ?>
		<div class="tab">
			<i class="glyphicon glyphicon-time"></i>&nbsp;<?php the_time('Y-m-d h:i'); ?>
			<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php post_views(); ?>&nbsp;
			<i class="glyphicon glyphicon-link"></i>&nbsp;<a href="<?php the_permalink(); ?>" target="_blank"><?php the_permalink(); ?></a>
		</div>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>
</section>
</article>

<?php get_footer(); ?>