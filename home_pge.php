
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery.js"></script> 
    
	<style type="text/css">
	  	/*Make the images fully responsive*/
	  	.carousel-inner img{
						  		width: 100%;
						  		height: 100% 
						  	}

	  	.imgjmbo{
					background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('https://wonderfulengineering.com/wp-content/uploads/2016/01/nature-wallpapers-38.jpg');
					background-size: 100%, 100%; 
				}

	  </style> 

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

<div>
	<?php 
		include'header.php'
	?>
</div>
  
<br>

<div class="container">
		
	
	<div class="carousel slide" id="myslider" data-ride="carousel">

		<div class="carousel-inner">

			<div class="carousel-item active">
				<img src="https://wallpaperaccess.com/full/1883866.jpg" alt="TJ.jpg">
				<div class="carousel-caption">
					<h1>Kolkata</h1>
					<p>Beauty at its best</p>
				</div>
			</div>

			<div class="carousel-item ">
				<img src="https://www.adotrip.com/public/images/areas/5c3db4d42271b-Rann%20of%20Kutch%20Road%20trip.jpg" alt="sliderm.jpg">
				<div class="carousel-caption">
					<h1>Rann of Kutch</h1>
					<p>Beauty at its best!</p>
				</div>
			</div>

			<div class="carousel-item ">
				<img src="https://i.pinimg.com/originals/ab/51/22/ab5122cc3c3ee61b83e877695d323bdf.jpg" alt="slidery.jpg">
				<div class="carousel-caption">
					<h1>Darjeeling</h1>
					<p>Beauty at its best!</p>
				</div>
			</div>

			<div class="carousel-item ">
				<img src="https://s1.1zoom.me/b5453/970/India_Temples_Flowering_trees_Khajuraho_542965_1920x1080.jpg" alt="slidery.jpg">
				<div class="carousel-caption">
					<h1>Khajurao Temple</h1>
					<p>Beauty at its best!</p>
				</div>
			</div>

			<div class="carousel-item ">
				<img src="https://i.pinimg.com/originals/f2/53/cf/f253cff4e8ca387154910a1b6260c0db.jpg" alt="slidery.jpg">
				<div class="carousel-caption">
					<h1>Golden Temple</h1>
					<p>Beauty at its best!</p>
				</div>
			</div>
		</div>

		<ul class="carousel-indicators">
			<li data-target="#myslider" data-slide-to="0" class="active"></li>
			<li data-target="#myslider" data-slide-to="1" ></li>
			<li data-target="#myslider" data-slide-to="2" ></li>
			<li data-target="#myslider" data-slide-to="3" ></li>
			<li data-target="#myslider" data-slide-to="4" ></li>
			<li data-target="#myslider" data-slide-to="5" ></li>
			
		</ul>

		<a href="#myslider" data-slide="prev" class="carousel-control-prev">
			
			<span class="carousel-control-prev-icon">
				
			</span>

		</a>
		<a href="#myslider" data-slide="next" class="carousel-control-next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</div>

<!-- ABOUT US  -->
<section>
	<div class="container" id="about">
		<h1 class="text-center pt-3 pb-3 ">About Us</h1>
		<hr class="w-25 mx-auto">

		<div class="row mb-5">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="https://i.pinimg.com/736x/9a/5d/d7/9a5dd7c5d0f28d070cae64417b7d92ba.jpg" class="img-fluid rounded" style="width: 400px;">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h1>History of Tourzilla!</h1>
				<hr>
				<p>
					A journey of a thousand miles begins with a single step – Lao Tzu’. That single step came for Veena World in the year 2013 – the year of new foundations and the year of new beginnings! With the idea to create a world of affordable tourism and to explore as well as innovate new avenues in the travel industry, we set out on a journey to achieve ‘Our Lakshya - Bharat Ki Sabse Badi Travel Company’, a feat we are strongly working towards everyday…
				</p>
		<script type="text/javascript">
				function myFun() {
				  var x = document.getElementById("myDIV");
				  if (x.style.display === "none") {
				    x.style.display = "block";
				  } else {
				    x.style.display = "none";
				  }
				}
		</script>	
			<button class="btn btn-lg btn-outline-dark btn-warning" onclick="myFun()">Wanna Know More..</button>
			
			</div>
			
		</div>
	</div>
</section>
<div class="container" id="myDIV" style="padding:6px;margin-left: 100px ;margin-right: 100px; display: none;">
			   <h2 class="col-lg-6 bg-warning font-weight-bold font-italic">Benefits of TourZilla's tour</h2>
 			
       <br><br> <br><h3 class="font-italic font-weight-bold">Fully Customizable</h3>
        <p>
          Corporate tours or MICE tours (Meetings, Incentives, Conventions, and Exhibitions) provide a great platform for any organization to inspire higher performances internally and to explore opportunities of business development with partners, investors, customers and suppliers. Keeping this in mind, we provide a range of customizable corporate tour packages in India and abroad, to make your corporate team outing memorable. From hotel accommodation to meeting schedules, we are always flexible to your needs.
        </p>
        <ol>
          <li  class="font-italic font-weight-bold">Customizable activities and itineraries</li>
          <li  class="font-italic font-weight-bold">Day-long tour of the destination city with sightseeing</li>
          <li  class="font-italic font-weight-bold">Gala dinner with a celebration on the last night</li>
        </ol>
      
        <h3 class="font-italic font-weight-bold">Efficient Resources</h3>
        <p>
          We employ a comprehensive network of resources in order to provide you corporate tour packages that you will love. This is made possible with the help of our incentive tour packages and trusted business partners from around the world.
        </p>
        <ol>
          <li  class="font-italic font-weight-bold">Explore a number of exotic destinations</li>
          <li  class="font-italic font-weight-bold">We cover small towns as well as hallmark international destinations</li>
          <li  class="font-italic font-weight-bold">We cover small towns as well as hallmark international destinations</li>
          <li  class="font-italic font-weight-bold">Efficient customer support as well as expert travel advice on the go</li>
        </ol>
    
        <h3  class="font-italic font-weight-bold">Integrated Travel Services</h3>
        <p>As corporate travel agents, we provide you with forex services, travel insurance and a travel card. All you need to do is contact us and we will take care of everything.</p>
         <ol>
          <li  class="font-italic font-weight-bold">Full VISA services</li>
          <li  class="font-italic font-weight-bold">Currency exchange and comprehensive forex services</li>
          <li  class="font-italic font-weight-bold">Travel insurance along with travel card</li>
        </ol>
    
        <p>
          Work along with passion can take you places and the concept of corporate tours are truly based on it. Keeping a balance in life and work is often seen as a secret of success and the hardest task to maintain. Let the work take you places and bring the world of experiences closer to you. Explore destinations like Bali, Dubai, Switzerland, Central Europe, Singapore, Thailand, Hyderabad, Goa, Jaipur and more; along with Corporate Tour Packages. Work out some interesting strategies and erase the concept of work pressure or stress with exciting Incentive travel destinations. Redefine work for everybody and inspire many others as you keep travel with Veena World’s MICE tour packages. Work gets better, if it feels rewarding! Raise your spirits of life as you raise the profits of the company! After all, that’s what Business Travel is about.
        </p>
	</div>
<br>
<!-- SERVICES -->
<section id="Services">
<div class="container-fluid">
		<h1 class="text-center pt-3 pb-3 ">Exciting Packages...</h1>
		<hr class="w-25  mx-auto">
<!-- CARDS -->

<div class="container">
		
		<div class="row mb-5">
			<div class="col-lg-4 col-md-4 col-12 container card card-outline-dark " >
			<img src="https://media.cntraveller.in/wp-content/uploads/2018/10/GujaratTourism3.jpg" class="card-img">
				<div class="card-body">
					<h4 class="card-title text-center font-weight-bold">FESTIVAL DESTINATIONS</h4>
					<p class="text-center">
					The anticipation of the upcoming celebrations of some of the best festivals in the world is just as exciting as the festivities itself. You would be amazed to know that the ways of celebrating a particular festival may differ from culture to culture or region to region, the underlying essence remains more or less the same. And this makes festive tours and visiting cultural festivals around the world so worthwhile.
					</p>
					<a href="flex.php?select=2" class="btn btn-outline-dark btn-warning container-fluid">View Details</a>						
				</div>
			</div>
			

				
			<div class="col-lg-4 col-md-4  col-12 container card card-outline-dark " >
			<img src="https://hellovizag.online/wp-content/uploads/2020/02/Palm-beach-vizag.jpg" class="card-img">
				<div class="card-body">
					<h4 class="card-title text-center font-weight-bold">HONEYMOON DESTINATIONS</h4>
					<p class="text-center">
				Celebrate the journey of bonding and getting to know each other better along with our best honeymoon packages. Make your honeymoon tour experience pleasant and memorable with our extra special honeymoon tour packages. We empower you to make the most fascinating memories with us and relish our legacy to travel, explore and celebrate life.
					</p>
					<a href="flex.php?select=5" class="btn  btn-outline-dark btn-warning container-fluid">View Details</a>						
				</div>
			</div>
			

				
			<div class="col-lg-4 col-md-4  col-12 container card card-outline-dark " >
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV3MowVLYIMHjl66pkeeKjnrwvjdK0XZAZ4g&usqp=CAU" class="card-img">
				<div class="card-body">
					<h4 class="card-title text-center font-weight-bold">SENIOR CITIZENS SPECIAL</h4>
					<p class="text-center">
					Enjoy the benefits of Seniors’ Special tour packages which invite even the single travellers by offering a guaranteed partner without any single occupancy charges. What are you waiting for? Pack your bag with confidence and head for a new adventure, meet new friends and capture the most fascinating memories. Join our legacy to travel, explore and celebrate life!
					</p>
					<a href="flex.php?select=3" class="btn btn-outline-dark btn-warning container-fluid">View Details</a>						
				</div>
			</div>
		</div>

</section>

<br>
<!--ENQUIRY FORM -->
	
		<div class="container-fluid fixed-bottom float-right">
			 <a href="ENQUIRY.html" class="btn btn-outline-dark btn-warning">Enquire Now</a>
		</div>

<!-- HOLIDAY! -->
<br><br>
<section id="PLAN">
	<div class="container">
		<div class="jumbotron imgjmbo">
			<h1 class=" text-warning  text-capitalize font-weight-bold">tell us about your dream holiday!</h1>
			<hr class=" ml-5 w-75 bg-warning">
			<!-- FORM -->
			<div class="container ">

				<form class="form-inline ">
				  <label class="sr-only" for="inlineFormInput">Name</label>
				  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Fist name *">
				  <br>
				  <label class="sr-only" for="inlineFormInputGroup">Username</label>
				  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				 
				    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Last name *">
				  </div>
				 </form>
				  
				   <br>


				<form class="form-inline">
				  <label class="sr-only" for="inlineFormInput">Name</label>
				  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Nationality *">
				   <br>
				  <label class="sr-only" for="inlineFormInputGroup">Username</label>
				  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				  
				    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Departure City *">
				  </div>
				 </form>
				 <br>

				<form class="form-inline">
				  <label class="sr-only" for="inlineFormInput">Name</label>
				  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Mobile no. *">

				  <label class="sr-only" for="inlineFormInputGroup">Username</label>
				  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				
				    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email id *">
				  </div>
				 </form>
				
				 <br>
<script type="text/javascript">
	function myFunction() {
	
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtDate').attr('min', minDate);
	}

</script>
				 <div class="form-group row" id="demo">
				  <label class=" bg-white form-control-lg  mb-2 mr-sm-2 mb-sm-0 " for="customRange">DATE: </label>
				  <div class="col-4">
				    <input class="form-control mb-2 mr-sm-2 mb-sm-0" onclick="myFunction()"  type="date" id="txtDate">
				  </div>
				</div>

				<br>
			<form>
  			<label class=" bg-white form-control-lg  mb-2 mr-sm-2 mb-sm-0 " for="customRange">BUDGET: </label>
  			<label class="text-white form-control-lg  mb-2 mr-sm-2 mb-sm-0 " for="customRange">0 </label>

			  <input type="range" class="default-range " id="customRange" name="points1">
			  <label class="text-white  form-control-lg  mb-2 mr-sm-2 mb-sm-0 " for="customRange">5 Cr + </label>

			</form>


			<br>

			<button class=" btn btn-lg btn-outline-dark btn-warning rounded " data-target="#myymodal" data-toggle="modal" >PLAN MY HOLIDAY</button>
			<div class="modal " id="myymodal">	
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="text-center text-warning">REGISTERED SUCCESSFULLY!</h3>
								<button  type="button" class="close " data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body justify-content-center">
								<form >
									<div class="text-center display-4 text-capitalize font-italic">
										
										<h3 >	your details are saved successfully.</h3>
											<h3>please wait, you will soon be contacted by our travelists.</h3>
										<h3 class="text-warning">	Be ready to experience your dreams turning into reality!</h3>
									
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
		</div>
		<br><br>
	</div>
</section>



<br>
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
