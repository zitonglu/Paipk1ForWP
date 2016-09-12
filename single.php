<?php get_header(); ?>
<div class="container">
	<?php include (TEMPLATEPATH . '/template-parts/nav.php'); ?>
	<div class="head row">
		<div class="col-sm-4 hidden-xs">
			<img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</div>
		<div class="col-sm-5 col-sm-offset-3 col-md-4 col-md-offset-4 search-box hidden-xs">
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="输入搜索内容">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
	</div>
</div>

<div class="container hidden-xs single-nav">
	<ol class="breadcrumb">
	  <li><a href="<?php echo home_url('/'); ?>">首页</a></li> 
<?php
	$thisCategory = get_the_category();
	if($thisCategory[0]){
	echo '<li><a href="'.get_category_link($thisCategory[0]->term_id ).'" title="'.$thisCategory[0]->cat_name.'">'.$thisCategory[0]->cat_name.'</a></li>';
	}
?>
	  <li class="active">正文</li>
	</ol>
</div>

<div class="container">
	<div class="row single-body">
		<div class="col-md-9 single-box">
			<div class="single-left">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<p class="time"><?php the_time('Y年m月d日 h:i'); ?><?php the_tags(' 标签：',' ') ?></p>
			<?php the_content(); ?>
			<?php comments_template( '', true ); ?>
		<?php endwhile; /* end loop */ ?>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>