<?php 
//areaGyms.php
// This program will display all the gyms in 408 area code.
// The data about gyms and area codes is stored in the text file, gyms.txt.

// Open a file gyms.txt in the read mode
$fp = fopen("gyms.txt", "r"); 
$data = ""; 
// create an empty array
$all408Gyms = array();

while(!feof($fp)) 	// while not end of file
{ 
	// Read a line from the file
	$data = fgets($fp, 84); 
	
	// Split the line into fields using the : 
	// explode() is another function, similar to preg_split to split an array
	// into individual tokens
	
	list($gymName,$phone) = explode(':',$data);
	
	// Get the area code. preg_split() returns an array of tokens
	// preg_split90 uses a regular expression to split the string
	
	$phoneNumber  = preg_Split('/-/',$phone);	
	
	if (array_key_exists('408', $all408Gyms)) {	
		// If the key already exists, concatenate the next gym name
		if ($phoneNumber[0] == '408'){
			$all408Gyms['408'] .= $gymName;	
		}
	}
	else{
		// key does not exist as yet in the array
		$all408Gyms['408'] = $gymName;	
	}
} 
	// Close the file
	fclose($fp);	
	// Loop through the associative array and display the gym name
	echo "<h2> All Gyms in 408 area code</h2> <br/>";	
	foreach ($all408Gyms as $itemName=>$value){
		echo "<h3> $itemName = $value</h3> <br/>";		
	}		

?> 
