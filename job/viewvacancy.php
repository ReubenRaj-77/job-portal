  <html>
  <head>
  <title>View</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/css/util.css">
	<link rel="stylesheet" type="text/css" href="table/css/main.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="table/css/util.css">
	<link rel="stylesheet" type="text/css" href="table/css/main.css">
  <link rel="stylesheet" type="text/css" href="view.css">
  
	<div class="limiter">
		<div class="container-table100">
		<h2> Offer Details</h2>	
			<div class="wrap-table100">
			<div class="table100 ver1">
				
  <?php
  session_start();
  $con=mysqli_connect("localhost","root","","job");
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result=mysqli_query($con,"SELECT * FROM upload ");
  echo "<table border=1><tr><th>Product Name</th><th>Offer Id</th><th>Offer</th><th>Price</th><th>Address</th></tr>";
  while($row=mysqli_fetch_array($result))
 {
  
  echo  "<tr><td> ". $row['comname']."</td>";
  echo  "<td>". $row['designation']."</td>";
  echo "<td> ". $row['nov']."</td>";  
  echo  "<td> ".$row['sal']." </td>";
  echo "<td> ". $row['addr'] ."</td></tr>";
  }
 echo "</table>";
  ?> 
  
  	</tbody>
	
						</table>
						<p><a href="vacancy.html">Back</a></p>	
					</div>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  
  <!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src="table/js/main.js"></script>
