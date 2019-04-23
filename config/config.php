<?php
	  $servername = "127.0.0.1";
	  $username = "root";
	  $password = "root";
	  $dbname = "db";
  
	  $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	// echo $conn;
	// if (mysqli_connect_errno()) {
	// 	die( "Failed to connect: " . mysqli_connect_errno() );
	// }
?>