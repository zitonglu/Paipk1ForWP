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
</footer>

<script src='http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js'></script>
<script src='http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js'></script>
<script src='<?php bloginfo('template_url'); ?>/js/custom.js'></script>
<script src='<?php bloginfo('template_url'); ?>/js/theia-sticky-sidebar.js'></script>
<?php wp_footer(); ?>
</body>
</html>