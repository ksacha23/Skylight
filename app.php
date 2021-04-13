<?php
// database connection code
$conn = mysqli_connect("localhost","root" ,"","app_db");


// get the post records
$appName = $_POST['appName'];
$devName = $_POST['devName'];
$devSiteURL = $_POST['devSiteURL'];
$appPlatforms = $_POST['appPlatforms'];
$appVersions = $_POST['appVersions'];
$appDescription = $_POST['appDescription'];

// database insert SQL code
$sql = "INSERT INTO `app_tbl` (`appName`, `devName`, `devSitURL`, `appPlatforms`,`appVersions`, `appDescription`) VALUES ('$appName', '$devName', '$devSiteURl', '$appPlatforms', '$appVersions', '$appDescription')";

// insert in database 
$result = mysqli_query($conn, $sql);

if($result)
{
	echo "Application Submission Recieved.";
}

?>

