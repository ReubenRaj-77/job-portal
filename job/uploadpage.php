<?php  
  if($_SERVER["REQUEST_METHOD"]="POST")
  {
  $comname=$_POST['comname'];
  $designation=$_POST['designation'];
  $nov=$_POST['nov'];
  $sal=$_POST['sal'];
  $addr=$_POST['addr'];
  session_start();
  $con=mysqli_connect("localhost","root","","job");
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "INSERT INTO upload (comname,designation, nov,sal,addr) VALUES (' $comname', '$designation', $nov, $sal,'$addr')";
       if(mysqli_query($con, $sql)){
          echo "<script>alert('Upload Successfully');</script>";
          //header("refresh:3;Location:upload.html");
		  include 'vacancy.html';
       }
       else{
          echo "<script>alert('Upload Failed');</script>";
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	  header("refresh:3;Location:upload.html");
        }
      	mysqli_close($con);
  }
?>
