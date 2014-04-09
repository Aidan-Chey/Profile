var VPWidth  = document.documentElement.clientWidth;
var VPHeight = document.documentElement.clientHeight;
var slideSum = document.getElementById("slideShow").children;
var slideCount = 1;
var sFrame = document.getElementById("frame");
var scrollMax;
setTimeout(scrollWait, 2000);

// Disables mousewheel
/*document.onmousewheel = function(event){
	return false;
}*/

function scrollWait(){
	sFrame.scrollLeft = sFrame.scrollWidth;
	scrollMax = sFrame.scrollLeft;
	slide();
}

// Function to activate slide function based on which category is selected
function category(a){
	switch(true){
		case a.innerHTML == "Vision College - Coding":
			slideCount = 1;
			break;
		case a.innerHTML == "Vision College - Design":
			slideCount = 2;
			break;/*
		case a.innerHTML == "Career":
			slideCount = 6;
			break;*/
	}
	slide();
}
// Function removes gallary side bars after reaching the end
function removeArrow(){
	if (slideCount == 0){
		document.getElementById("leftArrow").style.display = "none";
		document.getElementById("leftGalShader").style.display = "none";
	}
	else{
		document.getElementById("leftArrow").style.display = "block";
		document.getElementById("leftGalShader").style.display = "block";
	}
	if (slideCount == slideSum.length-1){
		document.getElementById("rightArrow").style.display = "none";
		document.getElementById("rightGalShader").style.display = "none";
	}
	else{
		document.getElementById("rightArrow").style.display = "block";
		document.getElementById("rightGalShader").style.display = "block";
	}
}
// Function to activate slide function when arrows pressed
function arrow(b){
	if (b.id == "leftGalShader" && slideCount > 0){
		slideCount--;
	}
	if (b.id == "rightGalShader" && slideCount < 2){
		slideCount++;
	}
	slide();
	catHigh();
}
// Function to change the highlighted category
function catHigh(){
	switch(true){
		case slideCount <= 1: 
			document.getElementById("catOne").checked = "true";
			break;	
		case slideCount >= 2 && slideCount <= 5: 
			document.getElementById("catTwo").checked = "true";
			break;
		/*case slideCount >= 6: 
			document.getElementById("catThree").checked = "true";
			break;*/
	}
}
// Function to desaturate images that are not in the center
function overlay(){
	for (i = 0; i < slideSum.length; i++) {
		slideSum[i].className = "slideShow overlay";
	};
	slideSum[slideCount].className = "slideShow";
}
// Function to automatically scroll the gallary side to side
function slide(){
	switch(true){
		case slideCount == 0:
			sFrame.scrollLeft = 0;
			break;
		case slideCount == 1: 
			sFrame.scrollLeft = scrollMax / 2;
			break;
		case slideCount == 2: 
			sFrame.scrollLeft = scrollMax;
			break;/*
		case slideCount == 3: 
			sFrame.scrollLeft = sFrame.scrollWidth;
			break;*/
	}
}
// Function to detect scrolling and update UI
function imScrolling(){
	switch(true){
		case sFrame.scrollLeft <= scrollMax / 3:
			slideCount = 0;
			break;
		case sFrame.scrollLeft > scrollMax / 3 && sFrame.scrollLeft < (scrollMax / 3) * 2:
			slideCount = 1;
			break;
		case sFrame.scrollLeft >= (scrollMax / 3) * 2:
			slideCount = 2;
			break;
		/*case sFrame.scrollLeft >= :
			slideCount = 3;
			break;*/
	}
	overlay();
	catHigh();
	removeArrow();
}