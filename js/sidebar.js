

/* Set the width of the side navigation to 250px */
function openNav() {
	var width = screen.width;

	if (width < 640)
	{
	    document.getElementById("mySidenav").style.width = "800px";
	    document.getElementById("openSideBar").style.display = "none";
	}
	else
	{
		document.getElementById("mySidenav").style.width = "400px";
	    document.getElementById("openSideBar").style.display = "none";
	}
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";

    setTimeout(function() {
    	 document.getElementById("openSideBar").style.display = "inline";
    }, 450)  
}