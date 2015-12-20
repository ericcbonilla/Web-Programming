<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Student Level and Discount</title>
<style>
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 16px;

}
#form1 {
	width:300px;
	margin-left:100px;
	background-color:beige;
	border: 2px black solid;
	
}
</style>	
</head>

<body>
<?php
/* This function should take the price and the student level, calculate price 
after applying discount and return the price. The default value for student level
is "f" (freshman).
Discount is calculated as follows:
Freshman discount:  price - (price * 0.1). 
Sophomore discount:  price - (price * 0.2). 
Junior discount:  price - (price * 0.3). 
Senior discount:  price - (price * 0.4). 
Complete the function. Make sure the price 
you pass in as parameter is cast as a float as float($price)
*/
function calcDiscount(){
	
	
	
}
/* This function should take the studentlevel ("f","s","j" or "r")
and return a full string - (freshman, sophomore etc).
Complete the function.
*/
function getLevelString($studentLevel){
	
}
?>
<?php
	if(isset($_POST['formSubmit'])) 
	{
		// Write a statement to fetch the value for level from $_POST.
		
		
		// Write a statement to fetch the value for price from $_POST.
		//$price = ;
		
		if(empty($price)) 
		{
			echo("<p>You must enter the price!</p>\n");
		} 
		else 
		// calculate discount
		{	
			// Call the function, calcDiscount with price and level as arguments.
			//$finalPrice = ;
			// Call the function, getLevelString with level as argument.
			//$studentLevel = ;
			
			echo("<p>");
			echo "Since you are a $studentLevel
			your final price is $finalPrice<br/>";
			
			echo("</p>");
		}
	}
?>
<form id="form1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" 
method="post">
	<label for='price'>Enter Book Price:</label><br/>
	<input type="text" name="price" id="price" maxlength="10" /> <br/><br/>
	<label for='level'>Select your Student status:</label><br/><br/>
	
	<?php 	
		$statusLevels = array("n" => "Choose a level", "f" => "Freshman", "s" => "Sophomore",
							"j" => "Junior", "r" => "Senior"
							);
		echo '<Select name="level">';
		foreach ($statusLevels as $key => $value){
			echo '<option value=',"$key>", "$value", '</option>';			
		}
		echo '</select><br>';
		
	?>	
	<br/><br/>
	<input type="submit" name="formSubmit" value="Submit" >
</form>
</body>
</html>