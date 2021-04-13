<?php
  
  $con = mysqli_connect("localhost","root","tyler","db_contact", "8888", "");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
  $uname = $_POST['uname'];
  $pword = $_POST['pword'];
  
  // get data from db
  $result = mysqli_query($con,"SELECT uname, pword FROM tbl_contact ");

//      echo "<table border='1'>
//<tr>
//<th>Username</th>
//<th>Password</th>
//</tr>";
//      
//      while($row = mysqli_fetch_array($result))
//        {
//          echo "<tr>";
//          echo "<td>" . $row['uname'] . "</td>";
//          echo "<td>" . $row['pword'] . "</td>";
//          echo "</tr>";
//        }
//      echo "</table>";
//      
//    
//  
//  
//  mysqli_close($con);
  
  if ($row = mysqli_fetch_array($result)){
    header('Location: homePage.html');
    exit;
  }
  mysqli_close($con);
  
?>
