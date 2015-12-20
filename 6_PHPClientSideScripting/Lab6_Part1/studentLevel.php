<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Student Level</title>
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
	if(isset($_POST['formSubmit'])) 
	{
		$level = $_POST['level'];
		echo("<p>");
		switch ($level){
				case "n":
					echo "No level selected<br/>";
					break;
				case "f":
					echo "You are a Freshman?<br/>";
					break;
				case "s":
					echo "You are a Sophomore?<br/>";
					break;
				case "j":
					echo "You are a Junior?<br/>";
					break;
				case "r":
					echo "You are a Senior?<br/>";
					break;
		}
			
		echo("</p>");
	}
?>
<form id="form1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" 
method="post">
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