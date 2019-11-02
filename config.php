<?php
	$host = "localhost";
	$dbname = "lmnps";
	$conname = "root";
	$conpass = "55670124Xa";
	$sqlcon = mysqli_connect($host,$conname,$conpass,$dbname);
	if (!$sqlcon) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
				  }
?>