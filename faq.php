
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<style type="text/css">
	  	/*Make the images fully responsive*/
	  	.carousel-inner img{
						  		width: 100%;
						  		height: 100% 
						  	}

	  	.imgjmbo{
					background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('slidery.jpg');
					background-size: 100%, 100%; 
				}
	  </style> 
</head>

<body data-spy="scroll" data-target=".navbar"  data-offset="50">


 <div>
<?php include'header.php'?></div> 
<br><br>
<div class="container align-items-center">
	<br>
	<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo1">Q: Do you cancel due to bad weather ?</button>
		<div id="demo1" class="collapse">
			 No,we usually do not cancel the bookings due to bad weather.
		</div>
		<br><br>
	<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo2">Q: How does it work ?</button>
		<div id="demo2" class="collapse">
		On this site we offer you with some tour and travel packages.You can acess the details of the packages.To book any package you need to register with the site.After registration, you can can book any offered package .
		</div>
		<br><br>
	<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo3">Q: What languages are offered for the tour ?</button>
		<div id="demo3" class="collapse">
			We will provide tour guides who know English,Hindi and the local language of the area to be visited 
		</div>
		<br><br>
	<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo4">Q:Do I have to pay registration fees ?</button>
		<div id="demo4" class="collapse">
		No, don't have. Registration of tourists on this site is absolutely free. Register, book a package and enjoy the journey. 
		</div>
		<br><br>
</div>


<br><br>
<!-- FOOTER -->
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

</body>
</html>