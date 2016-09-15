var url = "";
(function ($, root, undefined) {
	
	$(function () {
		url = $("#urlsrc").val();
		//alert($(window).width());
		if ($(window).width() < 900){
			loadJS('mytheme-jquery-plugin', '/js/plugins.min.js');
			loadJS('mytheme-jquery-main', '/js/main.min.js');
			loadJS('mytheme-jquery-house', '/js/cn_interactive_house.min.js');
			loadJS('mytheme-jquery-track', '/js/SitecoreClientTracking.js');
			loadJS('mytheme-jquery-perso', '/js/SitecorePersonalizationv.js');
		}
	});
	
})(jQuery, this);

function loadJS(id, src) {
    if (document.getElementById(id) != null) return;
    var js = document.createElement('script'); 
    js.id = id; js.async = false; js.src = url+src;
    document.getElementsByTagName('head')[0].appendChild(js);
}