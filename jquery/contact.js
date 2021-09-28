function cpt(id) {
		var cp = document.createRange();
		cp.selectNode(document.getElementById(id));
		window.getSelection().removeAllRanges();
		window.getSelection().addRange(cp);
		document.execCommand('copy');
		window.getSelection().removeAllRanges();
	}