<?php  
  if($_SERVER["REQUEST_METHOD"]="POST")
  {
  $appliname=$_POST['appliname'];
  $npass=$_POST['mbl'];
  $cpass=$_POST['cname'];
  $mbl=$_POST['design'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  session_start();
  $con=mysqli_connect("localhost","root","","job");
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "INSERT INTO userupload (appliname,mbl,cname,design,email,address) VALUES ('  $appliname', $mbl, ' $cname',  '$design','$email','$address')";
       if(mysqli_query($con, $sql)){
          echo "<script>alert('Apply Successfully InterView Date Is Very Soon ');</script>";
           include 'user.html';
       }
       else{
          echo "<script>alert('Upload Failed');</script>";
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	   include 'reg.html';
        }
      	mysqli_close($con);
  }
?>
