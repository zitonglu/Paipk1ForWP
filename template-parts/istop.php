<?php
/**
 * this is top carousel,for index.php
 *
 * @subpackage paipk1
 * @since paipk1 1.0
 */
?>
<div id="carousel-example-generic" class="carousel slide topbox" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
	<?php include TEMPLATEPATH .'/includes/plugin/out.html';?>
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<?php if(!is_category('pic')):?>
<div class="istop">
<div class="float-right">
	<?php if(get_option('paipk1_baiduShare') == ''){
		$nowtime = '<i class="glyphicon glyphicon-time"></i> '.date("Y-m-d h:i");
		echo $nowtime;
		}else{ ?>
			<div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
			<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	<?php } ?>
</div>
<?php $post_id = get_option('paipk1_indexTopOne');?>
<p>
<?php if($post_id == ''){echo bloginfo('description');}else{?>
<a href="<?php echo get_post($post_id)->guid;?>" title="<?php echo get_post($post_id)->post_title;?>"><i class="glyphicon glyphicon-fire"></i>&nbsp;<?php echo get_post($post_id)->post_title;?></a>
<?php }?>
</p>
</div>
<?php endif?>