<?php  
  if($_SERVER["REQUEST_METHOD"]="POST")
  {
  $appliname=$_POST['appliname'];
  $mbl=$_POST['mbl'];
  $cname=$_POST['cname'];
  $design=$_POST['design'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $con=mysqli_connect("localhost","root","","job");
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "INSERT INTO userupload (appliname,mbl,cname,design,email,address) VALUES ('  $appliname', $mbl, ' $cname',  '$design','$email','$address')";
       if(mysqli_query($con, $sql)){
          echo "<script>alert('Apply Successfully InterView Date Is Very Soon ');</script>";
           include 'userpage.php';
       }
       else{
          echo "<script>alert('Upload Failed');</script>";
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	   include 'userupload.html';
        }
      	mysqli_close($con);
  }
?>
