<?php 
//findgyms.php
// Open a file,gyms.txt in the read mode
$fp = fopen("gyms.txt", "r"); 
$data = ""; 
// create an emty array
$allgyms = array();
while(!feof($fp)) 	// while not end of file
{ 
	// Read a line from the file
	$data = fgets($fp, 84); 
	
	// Split the line into fields using the : 
	// explode() is another function, similar to preg_split to split an array
	// into individual tokens
	
	list($gymName,$phone) = explode(':',$data);
	
	// Get the area code. preg_split() returns an array of tokens
	
	$phoneNumber  = preg_Split('/-/',$phone);
	$areaCode = $phoneNumber[0];
	
	
	if (array_key_exists($areaCode, $allgyms)) {	
		// If the key already exists, concatenate the next gym name		
			$allgyms[$areaCode] .= $gymName;
	}
	else{
		// key does not exist as yet in the array
		$allgyms[$areaCode] = $gymName;
	}
} 
	// Close the file
	fclose($fp);
	
	// Read the user input from the form
	if (isset($_POST['areacode'])){
		$inputAreacode = $_POST['areacode'];
		
		// Loop through the associative array and display the gym names
		echo "<h2> All Gyms in area code</h2> <br/>";	
		foreach ($allgyms as $itemName=>$value){
			echo "<h5> $itemName = $value</h5> <br/>";			
		}
	}

?> 
