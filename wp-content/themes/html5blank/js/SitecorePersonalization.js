function TrackSitecorePersonalization(profileName, profileValues) {
	var xmlhttp;
	if (window.XMLHttpRequest)
		xmlhttp = new XMLHttpRequest();
	else
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	xmlhttp.open("POST", "/sitecore%20modules/Personalization/SitecorePersonalization.aspx?profileName=" + encodeURIComponent(profileName) + "&profileValues=" + encodeURIComponent(profileValues), true);
	xmlhttp.send();
}

$(document).ready(function() {
	$('.personalized').click(function() {
		var personalizedData = $(this).data("uv_personalized");
		if (typeof personalizedData === 'string') {
			var personalizedDataParts = personalizedData.split('|');
			if (personalizedDataParts.length == 2 && window.TrackSitecorePersonalization) {
				window.TrackSitecorePersonalization(personalizedDataParts[0], personalizedDataParts[1]);
			}
		}
	});
});