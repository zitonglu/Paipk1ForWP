<?php
/**
 * @package WordPress
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<footer class="footer">
	<p>
	    Copyright © 2016-2017 <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>&nbsp;
	    Powered By wordpress. Theme by <a href="http://www.paipk.com" title="designer" target="_blank" >Paipk.com.</a>&nbsp;<?php echo get_option( 'zh_cn_l10n_icp_num' ); ?>
	</p>
<?php 
	if ( has_nav_menu('link') && is_home()) {
	wp_nav_menu( array(
	'theme_location'	=> 'link',
	'menu_id' 			=> 'footerlinks',
	'menu_class'		=> 'list-inline',
	'before'   			=> '<li>',
	'after'     		=> '</li>',
	'depth'          	=> 1,
	));
	}
?>
</footer>
<div class="hidden-xs top hiddened" id="backTop">
    <a target="_blank" title="comment me" href="http://wpa.qq.com/msgrd?v=3&uin={$zbp->Config('paipk1')->QQ}&site={$host}&menu=yes"><img src="<?php bloginfo('template_url'); ?>/images/qq.png" alt="QQ" class="QQstyle"></a><br>
    <a href="#top" id="returnTop"><span class="glyphicon glyphicon-chevron-up"></span></a>
</div>
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js'></script>
<script type='text/javascript' src='http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/theia-sticky-sidebar.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/paipk1.js'></script>
<?php wp_footer(); ?>
</body>
</html>