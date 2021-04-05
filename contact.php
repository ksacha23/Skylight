<?php
// database connection code
$con = mysqli_connect("localhost","root" ,"","db_contact");

// $con = mysqli_connect('localhost', 'root', '','db_connect');

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
}

?>
