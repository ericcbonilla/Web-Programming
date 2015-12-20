<?php 

// Open a file,in the read mode
$fp = fopen("stocks.txt", "r"); 
$data = ""; 

$startX = 50;
$startY = 50;
while(!feof($fp)) 	// while not end of file
{ 
	// Read a line from the file
	$data = fgets($fp, 84); 
	// Remove any trailing new lines and carriage returns
	$data = trim($data,"\n");
	$data = trim($data,"\r");
	
	// Split the line into fields using the : into 3 fields
	
	list($stock,$stockid,$price) = explode(':',$data);
	
	// Append then as SVG into stocksstats.html file
	writeToSVGFile("stockstats.html",$stock,$stockid,$price);
} 	

	// Write the ending tags to the file
	writeEndingToFile("stockstats.html");
	// Close the file
	fclose($fp);
	
	
	function writeToSVGFile($filename,$stock,$stockid,$price){
		
		global $startX;
		global $startY;
		
		// Open the file in the append mode
		if (!$file = fopen ($filename,"a") ){		
			echo " could not open file";
			exit;
		}
		$x = $startX;
		$y = $startY;
		//convert it to lowercase
		$id = strtolower($stockid);
		// Write the stock name
		$string = "<text ";
		$string .= 'x="' . $x .'" ';
		$string .= 'y="' . $y .'" ';
		$string .= ">";
		$string .=  $stock;
		$string .= "</text>";
		$string .= "\n";
		fwrite($file, $string);
		
		// Write an SVG rect element to represent the price
		$x += 100;
		$string = "<rect ";
		$string .= 'id="' . $id .'" ';	
		$string .= 'x="' . $x .'" ';
		$string .= 'y="' . $y .'" ';
		$string .= 'height="' . 50 .'" ';
		$string .= 'width="' . 100 .'" ';
		$string .= "/>";
		$string .= "\n";
		fwrite($file, $string);		
		fclose($file);		
		$startY += 100;
	}
	function writeEndingToFile($filename)
	{
		if (!$file = fopen ($filename,"a") ){		
				echo " could not open file";
				exit;
		}
		$string = "</svg></body></html> ";
		fwrite($file, $string);
		
		fclose($file);
	}	
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Stock Stats</title>
</head>
<body> 
<a href="stockstats.html"> Click here to see the output </a>
</body></html> 