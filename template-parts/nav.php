<?php
/**
 *
 * @link http://www.paipk.com/
 *
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<nav class="navbar navbar-default navbar-mycolor navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only"><?php bloginfo( 'name' ); ?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand visible-xs" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php 
	if ( has_nav_menu( 'primary' )) {
	wp_nav_menu( array(
	'theme_location'	=> 'primary',
	'menu_class'		=> 'nav navbar-nav',
	'menu_id'			=> 'divNavBar',
	'before'   			=> '',
	'after'     		=> '',
	'depth'          	=> 2,
	) );
	}
?>
			<ul class="nav navbar-nav navbar-right hidden-xs">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-search"></i></a>
				<div class="dropdown-menu search-box">
					<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
						<div class="input-group">
							<input value="" name="s" id="s" type="text" placeholder="<?php _e('Please enter the search content','paipk1');?>" size="12" class="form-control">
							<span class="input-group-btn">
							<input id="searchsubmit" value="go!" type="submit" class="btn btn-default">
							</span>
						</div>
					</form>
				</div><!-- search-box end -->
				</li>	
			</ul>
		</div>
	</div>
</nav>