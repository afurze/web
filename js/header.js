function setCurrent() {
	var currentPage = document.URL.replace("http://aspinyshrub.com/"),
		links = document.getElementById("navigation").getElementsByTagName("a");

	for (var i = 0; i < links.length; i++) {
		if (currentPage == links[i].href.replace("http://aspinyshrub.com/")) {
			links[i].className = "current";
			links[i].parentNode.className = "current";
		}
	}
}