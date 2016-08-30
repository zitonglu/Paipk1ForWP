<?php
/**
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!-- footer -->
<div class="container-fluid footer">
	<div class="container">
		<div class="footer-list">
			<p>本站发布文章版权归原作者所有，任何商业用途均须联系作者。如未经授权用作他处，作者将保留追究侵权者法律责任的权利。</p>
			<p>Copyright © 2016-2017 <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>&nbsp;Powered By <a href="http://wordpress.org/" rel="nofollow" title="wordpress">WordPress.</a> Theme by <a href="http://www.paipk.com" title="网站版权归拍拍看科技所有" target="_blank" >Paipk.com.</a>&nbsp;苏ICP备09094874号-2 <a href="#" target="_blank">站长统计</a>&nbsp;<a href="#"><span class="glyphicon glyphicon-user"></span></a></p>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
<script src='<?php bloginfo('template_url'); ?>/js/jquery.min.js'></script>
<script src='<?php bloginfo('template_url'); ?>/js/bootstrap.min.js'></script>
<!-- <script src='http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js'></script>
<script src='http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js'></script> -->
</html>