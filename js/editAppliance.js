function checkRadio(x) {

	x.querySelector("input").checked = true;
	

	var y = document.getElementsByClassName("radio");

	for (var i = 0; i < y.length; i++)
	{
		if (y[i].querySelector("input").checked == true)
		{
			y[i].querySelector("img").style.backgroundColor = "#9ea1a8";
			y[i].querySelector("img").style.borderRadius = "10px";
		}
		else
		{
			y[i].querySelector("img").style.backgroundColor = "";
		}
	}

}

function checkRad() {
	var y = document.getElementsByClassName("radio");

	for (var i = 0; i < y.length; i++)
	{
		if (y[i].querySelector("input").checked == true)
		{
			y[i].querySelector("img").style.backgroundColor = "#9ea1a8";
			y[i].querySelector("img").style.borderRadius = "10px";
		}
		else
		{
			y[i].querySelector("img").style.backgroundColor = "";
		}
	}
}

function showModalEditAppliance() {
	document.getElementById("EditAppliance").style.display = "block";
}