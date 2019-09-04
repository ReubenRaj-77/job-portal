<?php
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  $cname=$_POST['username'];
  $pwd=$_POST['password'];

  $con=mysqli_connect("localhost","root","","job");
  
  
  
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result=mysqli_query($con,"SELECT * FROM admin WHERE cname='$cname' ");
  $count = mysqli_num_rows($result);
  if($count!=0)
  {
    $row = mysqli_fetch_array($result);
    if($row['pwd']==$pwd){
       session_start();
       $_SESSION['cname']=$cname;
       echo "<script type='text/javascript'>alert('Login Successfully');</script>";
       include 'vacancy.html';
    } 
    else{
      echo "<script>alert('Login Failed');</script>";
      include 'admin.html';
    }
  }
	mysqli_close($con);
  }
?>
