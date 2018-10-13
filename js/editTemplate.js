function openEditTemplate() {
	document.getElementById("editTemplateBG").style.display = "inline";
	document.getElementById("editTemplate").style.display = "inline";
	closeNav();
}

function removeTemplate() {
    return confirm('Are you sure you want to delete this?');
}