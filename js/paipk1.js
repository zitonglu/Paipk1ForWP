$(document).ready(function() {
	// 侧栏滚动
	jQuery('.sidebar').theiaStickySidebar({ additionalMarginTop:60});
	// 首页导航增加active
	var s = document.location;
	$("#divNavBar a").each(function() {
		if (this.href == s.toString().split("#")[0]) {
			$(this).parent().addClass("active");
			return false;
		}
	});
	// 改变顶部导航结构
	$(".menu-item-has-children").addClass("dropdown");
	$("ul.sub-menu").removeClass("sub-menu").addClass("dropdown-menu");
	$(".menu-item-has-children>a").attr("data-toggle", "dropdown");
	// 更换翻页class
	$("nav#page>ul.page-numbers").removeClass("page-numbers").addClass("pagination");
	// 给友情链接加弹出页面
	$("#footerlinks").children("li").children("a").attr("target", "_blank");
});
// 返回顶部时影藏
$(function(){
    $(window).scroll(function() {
        var scrollY = $(document).scrollTop();
        if (scrollY <= 0){
        	$('#backTop').addClass('hiddened');
        } 
        else {
            $('#backTop').removeClass('hiddened');
        }
     });
});
// 返回顶部
$("#returnTop").click(function () {
    var speed = 300;
    $('body,html').animate({scrollTop:0}, speed);
    return false;
});
