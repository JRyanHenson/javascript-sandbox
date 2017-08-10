/**
 * changes the text on a click event
 **/
function clickEvent() {
	document.getElementById("click").innerHTML = "Thank you.";
}

/**
 * changes the background color when moused over
 **/
function mouseOver() {
	document.getElementById("mouse").style.backgroundColor = "red";
}

/**
 * changes background color when moused out
 **/
function mouseOut() {
	document.getElementById("mouse").style.backgroundColor = "blue";
}
/**
 * changes font when double clicked
 **/
function doubleClick() {
	document.getElementById("doubleClick").style.fontFamily = "Arial Hebrew";
}
/**
 * finds value then replaces with if replacement is given. If no replacement is given highlights searched text
 */
function findMyText(find, replacement) {
	var searchText = document.getElementById("searchText").innerHTML;
	var match = new RegExp(find, "ig");
	var replaced = "";

	if (replacement.length > 0) {
		replaced = searchText.replace(match, replacement);
	}
	else {
		var boldText = "<div style=\"background-color: yellow; display: inline; font-weight: bold;\">" + find + "</div>";
		replaced = searchText.replace(match, boldText);
	}
	document.getElementById("searchText").innerHTML = replaced;
}