<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
<?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
		wp_title( '|', true, 'right' ); 
	}
?>	
	</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/color.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<?php flush(); ?>