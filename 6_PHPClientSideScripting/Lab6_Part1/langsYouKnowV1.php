<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Part 1 - Exercise 1</title>
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
			echo("<p>You selected $langCount language(s): ");
			for($i=0; $i < $langCount; $i++)
			{
				echo($langs[$i] . " ");
			}
			echo("</p>");
		}
	}
?>
<!-- Create an HTML form with hard-coded values for options in the
drop-down box -->
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<label for='langs[]'>Select the Programming Languages you know:</label><br/>
	
	<?php 
		echo '<Select multiple="multiple" name="langs[]">';
		echo '<option value="C">C</option>';
		echo '<option value="C++">C++</option>';
		echo '<option value="PHP">PHP</option>';
		echo '<option value="Java">Java</option>';
		echo '<option value="Python">Python</option>';
		echo '</select><br>';
	?>
	
	<input type="submit" name="formSubmit" value="Submit" >
</form>

</body>
</html>