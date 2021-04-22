<?php

//// Database connection variables 
//$db_host = "localhost:3306";
//$db_user = "root";
//$db_passw = "ReginaG1998!";
//$db_name = "app_db";
//
//// Database connection code
//$conn =  mysqli_connect($db_host, $db_user, $db_passw, $db_name);
	
$con = mysqli_connect("localhost","root","tyler","db_contact", "8888", "");

// get the post records
$appName = $_POST['appName'];
$devName = $_POST['devName'];
$devSiteURL = $_POST['devSiteURL'];
$appPlatforms = $_POST['appPlatforms'];
$appVersions = $_POST['appPlatformVersion'];
$appDescription = $_POST['appDescription'];

// database insert SQL code
$sql = "INSERT INTO `tbl_app` (`appName`, `devName`, `devSiteURL`, `appPlatforms`,`appPlatformVersion`, `appDescription`) VALUES ('$appName', '$devName', '$devSiteURL', '$appPlatforms', '$appVersions', '$appDescription')";


	$rs = mysqli_query($con, $sql);
	
	if($rs)
		{
			echo "App Records Inserted For Review";
			header('Location: homePage.html');
		}


?>
