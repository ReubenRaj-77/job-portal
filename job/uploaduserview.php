<?php
include 'useruploading.php'
  //session_start();
  $con=mysqli_connect("localhost","root","","job");
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result=mysqli_query($con,"SELECT * FROM userupload appliname='$appliname' ");
  echo "<table border=1><tr><th>Applicant Name</th><th>Mobile Number</th><th>Company Name</th><th>Designation</th><th>Email</th><th>Address</th></tr>";
  while($row=mysqli_fetch_array($result))
 {
  
  echo  "<tr><td> ". $row['appliname']."</td>";
  echo  "<td>". $row['mbl']."</td>";
  echo "<td> ". $row['cname']."</td>";  
  echo  "<td> ".$row['design']." </td>";
  echo "<td> ". $row['email'] ."</td>";
  echo "<td> ". $row['address'] ."</td></tr>";
  }
 echo "</table>";
  ?> 