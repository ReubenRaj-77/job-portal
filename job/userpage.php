<?php
  $cname=$_POST['username'];
  $pwd=$_POST['password'];
	$flag=0;
  $con=mysqli_connect("localhost","root","","job");
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result=mysqli_query($con,"SELECT * FROM usernew where cname='$cname' and pwd='$pwd'");
    if( mysqli_num_rows($result)<1)
	{
		echo "<script type='text/javascript'>alert('Login Successfully');</script>";
       include 'userviewvacancy.php';
	}
    else{
      echo "<script>alert('Login Failed');</script>";
      include 'user.html';
    }
	mysqli_close($con);
?>
