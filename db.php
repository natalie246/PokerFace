<?php
 //create a mySQL DB connection:
 $dbhost = "166.62.8.47";
 $dbuser = "auxstudDB1";
 $dbpass = "auxstud3DB1!";
 $dbname = "auxstudDB1";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//testing connection success
if ($connection -> connect_errno){
	echo "DB connection failed: " . $connection -> connect_errno;
}

/*
	
	if (isset($_REQUEST['$name']))
		$name = $_REQUEST['$name'];
	
	if (isset($_REQUEST['$value']))
		$value = $_REQUEST['value'];

	
	$sql = "INSERT INTO tbl_users_104 (name) VALUES ("natalie")";
	$connection -> query($sql);
	
	if ($connection -> query($sql) === FALSE)
	echo "problem sending to DB";
	 
	
mysqli_close($connection);
*/
?>

