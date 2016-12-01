<?php
/**
 * this is more list style,for content.php
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<div class="text-center more-btn">
<?php $prev_post = get_adjacent_post('','',ture);$next_post = get_adjacent_post('','',false);if(get_previous_post()): ?>
  <a class="btn btn-yellowgreen" href="<?php echo get_permalink($prev_post); ?>" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;<?php _e('Previous','paipk1'); ?></a>
<?php endif ?>

  <a class="btn btn-blue" href="#" role="button" data-toggle="modal" data-target="#myshang"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;<?php _e('Gift','paipk1'); ?></a>
	<?php include (TEMPLATEPATH . '/template-parts/reward.php'); ?>

<?php if(get_next_post()): ?>
  <a class="btn btn-orange" href="<?php echo get_permalink($next_post); ?>" role="button"><?php _e('Next','paipk1')?>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
<?php endif ?>
</div><!-- Prev and Next button end -->

<div class="author-box">
  <div class="col-sm-8">
    <a href="<?php the_author_url(); ?>" title="<?php _e('Author','paipk1');?>:<?php the_author_nickname(); ?>" target="_blank">
    	<?php echo get_avatar(get_the_author_meta('ID'),50); ?>
    </a>
    <h4>
    <?php _e('Author','paipk1');?>:<a href="<?php the_author_url(); ?>" title="<?php _e('Author','paipk1');?>:<?php the_author_nickname(); ?>" target="_blank"><?php the_author_nickname(); ?></a>
    </h4>
    <p><?php the_author_description(); ?></p>
  </div>

  <div class="col-sm-4 singlebottomAD">
    <!-- AD -->
  </div>

  <div class="clearfix"></div>
</div><!-- author and AD button end -->

<?php if(is_single()):?>
<div class="more-list">

<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#aboutList" role="tab" data-toggle="tab" title="<?php _e('RelateArticles','paipk1'); ?>"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;<?php _e('RelateArticles','paipk1'); ?></a></li>
	<li role="presentation"><a href="#hotList" role="tab" data-toggle="tab" title="<?php _e('HotArticles','paipk1'); ?>"><i class="glyphicon glyphicon-fire"></i>&nbsp;<?php _e('HotArticles','paipk1'); ?></a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="aboutList">
<?php
global $post;
$post_tags = wp_get_post_tags($post->ID);
if ($post_tags) {
  foreach ($post_tags as $tag) {
  	$tag_list[] .= $tag->term_id;
  }
   $post_tag = $tag_list[ mt_rand(0, count($tag_list) - 1) ];
   $args = array(
        'tag__in' => array($post_tag),
        'category__not_in' => array(NULL),
        'post__not_in' => array($post->ID),
        'showposts' => 4,
        'caller_get_posts' => 1
    );
	query_posts($args);
	if (have_posts()) {
		while (have_posts()) {
			the_post(); update_post_caches($posts); ?>
<div class="col-sm-3 col-xs-6 more-text-box">
	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	<?php if ( has_post_thumbnail() ) { ?>
	<?php the_post_thumbnail(); ?>
	<?php } else {?>
	<img src="<?php bloginfo('template_url'); ?>/images/nopic.png" title="<?php the_title_attribute(); ?>" />
	<?php } ?>
	</a>
	<p class="BMT-title">
    	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_time('Y-m-d'); ?></a><br><br><?php _e('has been viewed ','paipk1').post_views(); ?>
  	</p>
	<p class="more-text-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</p>
</div>
			<?php }
		}
	wp_reset_query();
}
else {
  echo '<p style="text-indent:2em;">'.__('No related articles','paipk1').'</p>';
}
?>
  <div class="clearfix"></div>
  </div><!-- RelateArticles -->

<div role="tabpanel" class="tab-pane" id="hotList">
	<ul class="list-inline hotListul">
<?php
$post_num = 10; // Set number of calls
$args = array(
	'post_password' => '',
	'post_status' => 'publish', // Open the article only
	'post__not_in' => array($post->ID),//Exclude current article
	'caller_get_posts' => 1, // Exclude articles
	'orderby' => 'comment_count', // Sort by number of comments
	'posts_per_page' => $post_num
	);
$query_posts = new WP_Query();
$query_posts->query($args);
while( $query_posts->have_posts() ) { $query_posts->the_post(); ?>
		<li class="col-sm-6 col-xs-12">
			<i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</li>
<?php } wp_reset_query();?>
	</ul>
	<div class="clearfix"></div>
</div><!-- hotList -->
</div>

</div><!-- morelist end -->
<?php endif ?>