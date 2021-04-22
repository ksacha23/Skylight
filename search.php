<?php
	
	$con = mysqli_connect("localhost","root","tyler","db_contact", "8888", "");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	
	$app = $_POST['appSearch'];
	$test = $app . "AppPage.html";
	trim($test, " ");
	
	// get data from db
	$result = mysqli_query($con,"SELECT appName FROM tbl_app where appName = '" . mysqli_real_escape_string($con, $app) . "'"); 
	
	while($row = mysqli_fetch_array($result))
		{
			header("Location: $test");
		} 
	Print("App Not Found");
	
	
	mysqli_close($con);
	
?>
