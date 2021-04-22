<?php
  
  $con = mysqli_connect("localhost","root","tyler","db_contact", "8888", "");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
  $username = $_POST['uname'];
  //echo $_REQUEST['uname'];
  
  $password = $_POST['pword'];
  //echo $_REQUEST['pword'];
  
  // get data from db
  $result = mysqli_query($con,"SELECT * FROM tbl_contact where uname = '" . mysqli_real_escape_string($con, $username) . "'"); 
  
  while($row = mysqli_fetch_array($result))
    {
      header('Location: homePage.html');
      exit();
    } 
      //Print("inccorect username or password");
      header("Location: signInfail.html");
      exit();
  

  mysqli_close($con);
  
?>
