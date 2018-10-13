	function showOptions(x) {
		x.querySelector("#imgCh1").style.filter = "blur(15px)";
		x.querySelector(".fa-edit").style.display = "inline"
		x.querySelector(".fa-times").style.display = "inline"
	}

	function hideOptions(x) {
		x.querySelector("#imgCh1").style.filter = "none";
		x.querySelector(".fa-edit").style.display = "none"
		x.querySelector(".fa-times").style.display = "none"
	}