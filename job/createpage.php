<?php  
  if($_SERVER["REQUEST_METHOD"]="POST")
  {
  $appliname=$_POST['appliname'];
  $npass=$_POST['npass'];
  $cpass=$_POST['cpass'];
  $mbl=$_POST['mbl'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  session_start();
  $con=mysqli_connect("localhost","root","","job");
  
  


  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "INSERT INTO user (appliname,npass,cpass,mbl,email,address) VALUES ('  $appliname', '$npass', ' $cpass',  $mbl,'$email','$address')";
       if(mysqli_query($con, $sql)){
          echo "<script>alert('Upload Successfully');</script>";
           include 'user.html';
       }
       else{
          echo "<script>alert('Upload Failed');</script>";
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	   include 'reg.html';
        }
		 $sql1 = "INSERT INTO usernew (cname,pwd) VALUES ('  $appliname', '$npass')";
		 mysqli_query($con, $sql1);
      	mysqli_close($con);
  }
?>
