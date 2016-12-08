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
        bloginfo('name'); echo " - "; bloginfo('description');
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
	}
?>	
	</title>
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
<?php flush(); ?>
</head>