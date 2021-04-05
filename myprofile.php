

<!DOCTYPE html>
<html>
<head>
	<title>YOUR DASHBOARD</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.avatar {
  vertical-align: middle;
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
</style>
<script>
$(document).ready(function(){
    $("#bclick").click(function(){
        $("#ldata").load("fetch_profile.php");
    });
});
</script>
</head>
<body data-spy="scroll" data-target=".navbar" id="ldata"  data-offset="50">
<?php
include('connect.php');
session_start();
$usern = $_SESSION['username'];
			
			$extract = mysqli_query($connect,"SELECT * FROM customer WHERE username = '$usern'");
				
				while ($row = mysqli_fetch_assoc($extract))
				{
					$fname= $row['fname'];
					$mname= $row['mname'];
					$lname= $row['lname'];
					$email_id= $row['email_id'];
					$username= $row['username'];
					
				}

?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

	<div class="container">

		<a href="" class="navbar-brand font-weight-bold text-warning">TOURZILLA!</a>

		<button class="navbar-toggler" data-toggle="collapse" data-target="
		#abc">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="abc" >
			<ul class="navbar-nav text-center ml-auto">
				<li class="nav-item">
					<a href="#" class="nav-link">HOME</a>	
				</li>
			<li class="nav-item dropdown" >
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ABOUT US</a>

					<ul class="dropdown-menu">
						<!-- <li class="dropdown-header">STATE </li> -->
						<li>
							<a href="" class="dropdown-item">About Us</a>

						</li>

						<li>
							<a href="faq.html" class="dropdown-item">Frequently Asked Questions</a>
						
						</li>

						<!-- <li class="dropdown-header">STATE 2</li> -->

						<li>
							<a href="" class="dropdown-item">Terms & Conditions</a>
						
						</li>
					</ul>	
				</li>
	<!-- DROPDOWN LINK -->
				<li class="nav-item dropdown" >
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">INDIA</a>

					<ul class="dropdown-menu">
						<li class="dropdown-header">ARUNACHAL PRADESH </li>
						<li>
							<a href="" class="dropdown-item">Nagaland</a>

						</li>

						<li>
							<a href="" class="dropdown-item">Manipur</a>
						
						</li>

						<li class="dropdown-header">KERELA</li>

						<li>
							<a href="" class="dropdown-item">Madurai</a>
						
						</li>
					</ul>	
				</li>
				<li class="nav-item dropdown" >
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SPECIALITY TOURS</a>

					<ul class="dropdown-menu">
						<!-- <li class="dropdown-header">STATE </li> -->
						<li>
							<a href="" class="dropdown-item">TOUR TYPE</a>

						</li>

						<li>
							<a href="" class="dropdown-item">TOUR TYPE</a>
						
						</li>

						<!-- <li class="dropdown-header">STATE 2</li> -->

						<li>
							<a href="" class="dropdown-item">TOUR TYPE</a>
						
						</li>
					</ul>	
				</li>

		

				<li class="nav-item">
					<a href="contact.html" class="nav-link">CONTACT US</a>	
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link">BLOG</a>	
				</li>
				<li>
					<form class="form-inline" action="/action_page.php">
					    <input class="form-control mr-sm-2" type="text" placeholder="Search">
					    <button class="btn btn-outline-dark btn-warning" type="submit">Search</button>
					 </form>
				</li>
				<li class="nav-item float-right">
					<a href="#" class="nav-link">LOGIN</a>	
				</li>
			</ul>
			
		</div>
		
	</div>

</nav>
<br><br><br>
<!-- UPDATION  -->


	<div class="container" id="about">
		<div class="col-lg-6 col-md-6 col-12 " >
				<img src="https://www.pngitem.com/pimgs/m/78-786293_1240-x-1240-0-avatar-profile-icon-png.png" class="avatar">

				

			</div>
		<h1 class="col-lg-6 col-md-6 col-12 "><?php echo $fname?>  <?=$lname?></h1>
		<hr class="w-25 ml-0 ">
		
		<div class="container font-weight-bold ml-lg-0">
		 <form class="form-inline" method="post" action="update.php">
				<div class="form-group">
					
		 		<label  class="mb-3 mr-sm-3 " >FirstName:</label>
			    <input type="text" name="fname" class="form-control-lg mb-3 mr-sm-3"   value="<?=$fname?>"  > 
			    <label  class="mb-3 mr-sm-3">MiddleName:</label>
			    <input type="text" name="mname" class="form-control-lg mb-3 mr-sm-3"  value="<?=$mname?>" >
			    <label class="mb-3 mr-sm-3">LastName:</label>
			    <input type="text" name="lname" class="form-control-lg mb-3 mr-sm-3"  value="<?=$lname?>" >
			    </div>
			    
			    <div class="form-group p-5 m-lg-auto">
		 		<label  class="mb-2 mr-sm-2 ">Email:</label>
			    <input type="text" name="email_id" class="form-control-lg mb-2 mr-sm-2"  value="<?=$email_id?>"  > 
			    <label class="mb-2 mr-sm-2">UserName:</label>
			    <input type="text" name="username" class="form-control-lg mb-2 mr-sm-2" value="<?=$username?>" >
		
		 	
		 		 <input type="submit" name="update" class="btn btn-lg btn-outline-dark btn-warning " id="bclick"  value="Update">
		 		
		 		 </div>
			  
		  </form>
		</div>
			
	</div>
</body>


<?php
include 'connect.php';

if(isset($_POST['update']))
{

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email_id = $_POST['email_id'];
$username = $_POST['username'];


$sql = mysqli_query($connect,"UPDATE customer SET fname = '$fname', mname = '$mname', lname = '$lname', email_id = '$email_id', username = '$username' WHERE customer_id = 3");
// include 'welcome.php';
//$retval = mysqli_query( $sql, $connect );
if(! $sql )
{
  die('Could not update data: ' . mysqli_error());
}
$msg =  "Updated data successfully\n";
}

?>
<footer class="text-center text-warning bg-dark" >
	<br>
	<h5 >
		©2020  TOURZILLA Tours and Travels Pvt Ltd. All Rights Reserved.
	</h5>
	<br>
	</footer>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>