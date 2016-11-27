<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package  paipk1
 * @since paipk1 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title>{$name} 404</title>
</head>
<body>
	<script type="text/javascript" src="http://www.qq.com/404/search_children.js" charset="utf-8" homePageUrl="<?php echo home_url() ?>" homePageName="<?php bloginfo('name') ?>"></script>
	<script>
		window.onload=function changeURL() {
			if (!document.getElementsByClassName('desc_link')) return true;
			oldUrl=document.getElementsByClassName('desc_link');
			oldUrl[0].setAttribute('href', "<?php echo home_url()?>");
			oldUrl[0].firstChild.nodeValue="<?php bloginfo('name') ?>";
		}
	</script>
</body>
</html>