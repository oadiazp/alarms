function TrackSitecoreEvent(pageEventName, pageEventDataKey, pageEventData, pageEventText) {
	var xmlhttp;
	if (window.XMLHttpRequest)
		xmlhttp = new XMLHttpRequest();
	else
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	xmlhttp.open("POST", "/sitecore%20modules/EventTracker/SitecoreClientTracking.aspx?pageEventName=" + encodeURIComponent(pageEventName) + "&pageEventDataKey=" + encodeURIComponent(pageEventDataKey) + "&pageEventData=" + encodeURIComponent(pageEventData) + "&pageEventText=" + encodeURIComponent(pageEventText), true);
	xmlhttp.send();
}