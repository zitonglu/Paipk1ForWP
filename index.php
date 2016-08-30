<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<body id="index-pic" <?php body_class(); ?>>
<div class="container">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only"><?php bloginfo( 'name' ); ?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="active"><a href="#">Link</a></li>
			</ul>
		</div>
		</div>
	</nav>

<?php get_footer(); ?>