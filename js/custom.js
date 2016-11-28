$(document).ready(function() {
	var s = document.location;
	$("#divNavBar a").each(function() {
		if (this.href == s.toString().split("#")[0]) {
			$(this).parent().addClass("active");
			return false;
		}
	});
	$("nav#page>ul.page-numbers").removeClass("page-numbers").addClass("pagination");
});