<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title> Part 1 - Exercise 1 - version2</title>
<style>
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}
</style>	
</head>
<body>
<?php
	// If the form is submitted
	if(isset($_POST['formSubmit'])) {
		$langs = $_POST['langs'];
		
		if(!isset($langs)) 
		{
			echo("<p>You didn't select any language!</p>\n");
		} 
		else {
			$langCount = count($langs);
			echo("<p>You selected $langCount languages: ");
			for($i=0; $i < $langCount; $i++)
			{
				echo($langs[$i] . " ");
			}
			echo("</p>");
		}
	}
?>
<!-- Create an HTML form with items fron an array  -->

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<label for='langs[]'>Select the Programming Languages you know:</label><br/>
	
	<?php
		// create an array with languages
		$langs = array("C" => "C", "C++" => "C++",
							"Java" => "Java", "Python" => "Python" 
							);
		echo '<Select multiple="multiple" name="langs[]">';
		// In the drop-down list, key is the value of the option,
		// the name that appears as a label, is the value.
		foreach ($langs as $key => $value){
			echo '<option value=',"$key>", "$value", '</option>';			
		}
		echo '</select><br>';
		
	?>
	
	<input type="submit" name="formSubmit" value="Submit" >
</form>

</body>
</html>