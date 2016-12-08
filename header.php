<?php
/**
 * The Header for theme
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php if ( is_home() ) {
        bloginfo('name');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "search result:"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '404';
    } else {
		wp_title( '|', true, 'right' ); 
}?>
</title>

<?php if(get_option('paipk1_if_SEO') == 'checked'){
$description = '';
$keywords = '';
if (is_home() || is_page()) {
	$description = get_option('paipk1_homeDescription');
	$keywords = get_option('paipk1_homeKeyword');
}
elseif (is_single()) {
   $description1 = get_post_meta($post->ID, "description", true);
   $description2 = str_replace("\n","",mb_strimwidth(strip_tags($post->post_content), 0, 200, "…", 'utf-8'));
   $description = $description1 ? $description1 : $description2;
   $keywords = get_post_meta($post->ID, "keywords", true);
   if($keywords == '') {
      $tags = wp_get_post_tags($post->ID);
      foreach ($tags as $tag ) {
         $keywords = $keywords . $tag->name . ", ";
      }
      $keywords = rtrim($keywords, ', ');
   }
}
elseif (is_category()) {
   $description = category_description();
   $keywords = single_cat_title('', false);
}
elseif (is_tag()){
   $description = tag_description();
   $keywords = single_tag_title('', false);
}
$description = trim(strip_tags($description));
$keywords = trim(strip_tags($keywords));
?>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php }?><!-- seo end -->

<?php if(get_option('paipk1_if_bootstrap') == 'checked'): ?>
	<link rel='stylesheet prefetch' href='<?php bloginfo('template_url'); ?>/css/bootstrap.min.css'>
<?php else: ?>
	<link rel='stylesheet prefetch' href='http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css'>
<?php endif ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?v=1" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - All articles" href="<?php echo get_bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - All coments" href="<?php bloginfo('comments_rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
<!--[if lt IE 9]>
<script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php echo get_option('paipk1_baiduStatistics'); ?>
<?php flush(); ?>
</head>