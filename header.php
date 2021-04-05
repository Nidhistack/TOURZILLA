<?php session_start();
if (!isset($_SESSION['username'])) {

		header("Location:index.html"); 
}

 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    if (window.XMLHttpRequest) {
   // code for modern browsers
   xmlhttp = new XMLHttpRequest();
 } else {
   // code for old IE browsers
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>

</head>
<body data-spy="scroll" data-target=".navbar"  data-offset="50">
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
					<a href="home_pge.php" class="nav-link">HOME</a>	
				</li>
			<li class="nav-item dropdown" >
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ABOUT US</a>

					<ul class="dropdown-menu">
						<!-- <li class="dropdown-header">STATE </li> -->
						<li>
								<a href="faq.php" class="dropdown-item">Frequently Asked Questions</a>

						</li>

						<li>
						
							<a href="#about" class="dropdown-item">About Us</a>
						
						</li>

						
					</ul>	
				</li>
	<!-- DROPDOWN LINK -->
				
				<li class="nav-item dropdown" >
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">SPECIALITY TOURS</a>

					<ul class="dropdown-menu">
						<!-- <li class="dropdown-header">STATE </li> -->
						<li>
							<a href="flex.php?select=1" class="dropdown-item">All Packages</a>

						</li>
						<li>
							<a href="flex.php?select=2" class="dropdown-item">Festival Special</a>

						</li>

						<li>
							<a href="flex.php?select=3"class="dropdown-item">Senior Citizen Special</a>
						
						</li>

						<!-- <li class="dropdown-header">STATE 2</li> -->

						<li>
							<a href="flex.php?select=4" class="dropdown-item">Solo Special</a>
						
						</li>
						<li>
							<a href="flex.php?select=5" class="dropdown-item">Honeymoon Special</a>
						
						</li>
					</ul>	
				</li>

		

				<li class="nav-item">
					<a href="contact.php" class="nav-link">CONTACT US</a>	
				</li>

				
				<li>
					 <form class="form-inline" action="/action_page.php">
					    <input type="text" class="form-control mr-sm-2" placeholder="Search.." size="30" onkeyup="showHint(this.value)">
					  
					 </form>
					  <div id="txtHint" style="color:white;background:black;"></div>
				</li>
				<li class="nav-item float-right">
					<a href="log_out.php" class="nav-link">LOGOUT</a>	
				</li>
				<h1 class="hidden">
					
				 	
				 </h1>
				<li class="nav-item float-right">
						
					<a href="fetch_profile.php" class="nav-link">MyProfile</a>	
				</li>
			</ul>
			
		</div>
		
	</div>
	
					
	
</nav>

</body>
</html>
