<?php
// database connection code
$con = mysqli_connect("localhost","root","tyler","db_contact", "8888", "");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


// get the post records
$email = $_POST['email'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];



// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`email`, `uname`, `pword`) VALUES ('$email', '$uname', '$pword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
	header('Location: homePage.html');
}

?>


