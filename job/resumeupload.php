<?php
$target_path="C:/Users/Reuben Raj/Documents/resume/";
$target_path=$target_path.$Files['filetoupload']['name'];
 if(file_exists($target_path))
	 echo "Sorry,File Already Exists";
 else if($Files['filetoupload']['size']>50000)
	 echo "Sorry,Your File is too large";
 else
 {
	 if(move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_path))
	 {
		 echo "Files Upload Sucessfully <br>";
	 }
	 else
	 {
		 echo "Sorry,File No uploaded,Please Try again<br>";
	 }
 }
 
	
?>