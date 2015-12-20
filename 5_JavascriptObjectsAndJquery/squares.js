var maxz = 1000;
window.onload = function(){
	// add an event handler on the "add" button
	var add = document.getElementById("add");
	add.onclick = addSquare;
	// add an event handler on the "colors" button
	var colors = document.getElementById("colors");
	colors.onclick = changeColors;	
	var squareCount = Math.floor(Math.random() * 21) + 30;
	for (var i = 0; i < squareCount; ++i){
		addSquare();
	}
};
function changeColors()
{
	var squareArea = document.getElementById("squarearea");
	var squares = squareArea.getElementsByTagName("div");
	for (var i = 0; i < squares.length;++i){
		// Call the randomColor() and assign the result to backGroundColor
		squares[i].style.backgroundColor = getRandomColor();
	}
}
function addSquare(){
	var square = document.createElement("div");
	square.className = "square";
	square.style.left = Math.floor(Math.random() * 650) +"px";
	square.style.top = Math.floor(Math.random() * 250) +"px";
	square.style.backgroundColor = getRandomColor();
	square.onclick = squareClick;
	var squareArea = document.getElementById("squarearea");
	squareArea.appendChild(square);
}
function getRandomColor()
{
	var letters = "0123456789abcdef";
	var result = "#";
	for (var i = 0; i < 6; ++i){	//Creates random hex value
		result += letters.charAt(parseInt(Math.random() * letters.length));	
	}
	return result;
}

function removeSquare(element){
	var squareArea = document.getElementById("squarearea").removeChild(element);
	//squareArea.removeChild(square);
}

function squareClick(event){
	removeSquare(event.srcElement);
}


