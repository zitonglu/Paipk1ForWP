<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row single-body">
		<div class="col-md-9 single-box">
			<div class="list-left">
				<ul class="media-list">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<?php get_template_part( 'template-parts/content' ); ?>
<?php endwhile; ?>
<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>