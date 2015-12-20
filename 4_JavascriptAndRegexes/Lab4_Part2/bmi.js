
function calcBMI(){
	var weight = document.getElementById("weight").value;
	var height = document.getElementById("height").value;

	var bmi = (weight / (height * height)) * 703;	//Formula given
	alert("Your BMI is: " + bmi);

}