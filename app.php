<?php

// Database connection variables 
$db_host = "localhost:3306";
$db_user = "root";
$db_passw = "ReginaG1998!";
$db_name = "app_db";

// Database connection code
$conn =  mysqli_connect($db_host, $db_user, $db_passw, $db_name);

// get the post records
$appName = $_POST['appName'];
$devName = $_POST['devName'];
$devSiteURL = $_POST['devSiteURL'];
$appPlatforms = $_POST['appPlatforms'];
$appVersions = $_POST['appVersions'];
$appDescription = $_POST['appDescription'];

// database insert SQL code
$sql = "INSERT INTO `app_tbl` (`appName`, `devName`, `devSiteURL`, `appPlatforms`,`appVersions`, `appDescription`) VALUES ('$appName', '$devName', '$devSiteURL', '$appPlatforms', '$appVersions', '$appDescription')";


if($conn->query($sql) === TRUE) {
	echo "Application Submission Accepted. Status: Pending Approval";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close Connection
$conn->close();

?>

