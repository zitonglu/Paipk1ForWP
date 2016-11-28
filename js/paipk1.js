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
	// 更换翻页class
	$("nav#page>ul.page-numbers").removeClass("page-numbers").addClass("pagination");
	
});
// 返回顶部时影藏
$(function(){
	var speed = 500;
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
    var speed = 500;
    $('body,html').animate({scrollTop:0}, speed);
    return false;
});