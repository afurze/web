function setCurrent() {
	var currentPage = document.URL.replace("http://aspinyshrub.com/"),
		links = document.getElementById("navigation").getElementsByTagName("a");

		// set home as default location
		links[0].className = "current";
		links[0].parentNode.className = "current";

	for (var i = 0; i < links.length; i++) {
		if (currentPage == links[i].href.replace("http://aspinyshrub.com/")) {
			// unset home as selected from default setting
			links[0].className = "";
			links[0].parentNode.className = "";

			links[i].className = "current";
			links[i].parentNode.className = "current";
		}
	}
}