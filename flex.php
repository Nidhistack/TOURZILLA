<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale = 1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<title>CSS Flexbox</title>
	<style>
	html, body {
  height: 100%;
  position: relative;
	}
  .wrap{
	 width: 300vh;
	  overflow: auto;

}
	.holdingcontainer{
		
	
	  display: flex;
	  padding: 50px;
	  background: #ffc728;
	  box-sizing: border-box;
	  flex-direction: row;
	  overflow: auto;

	}


	.container1,.container2,.container3,.container4,.container5,.container6,.container7,.container8{
	  flex: 0 0 400px;
	  background: white;
	  color : black;
	  padding: 30px;
	  font-size: 16px;
	  font-family: 'Roboto', sans-serif;
	  margin: 3px;

	}
	.mySlides {display: none;}
/* Caption text */
.text {
  color: yellow;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 20px;
  width: 100%;
  text-align: absolute;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
							

	@media screen and (max-width: 768px){
	  .holdingcontainer{
		flex-direction: column-reverse;
	  }
	}
	</style>
  </head>

  <body >

  <div class="wrap">
	<div class="holdingcontainer " >
	 
 <div class="container1" id="div2"><h2>Rann of Kutch Utsav!</h2><img class="dasimages"  src="https://www.triponary.com/wp-content/uploads/2017/02/Kite_Festival_gujarat-1200x800.jpg" width="100%"/>
              <!---Content--1-->
                 <ul>
                    <li>Gujarat is the land of legends and lions</li>
                    <li> Explore this unique landscape and experience culture at its best at Rann Utsav</li>
                    <li>Enjoy the traditional Himachali folk dance</li>
                    <li> Also, discover the sights and sounds of Bhuj city, as you enjoy this splendid journey!</li>
                 </ul>
				 <a href="itenary.php?value='Ahemdabad Bhuj Tent city'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">More Details</a>
        </div>

<div class="container2" id="div2"><h2>Durga Puja Festival!</h2><img class="dasimages"src="https://static.india.com/wp-content/uploads/2020/11/TRAVEL1200.jpg" 
width="100%"/><ul>
                    <li> Walk through the heritage part of kolkata and witness its culture</li>
                    <li>Trip to Gangtok , abode to places like Namgyalak Institute of Tibetology </li>
                    <li>Visit tea estates of Darjeeling </li>
                    <li>Enjoy the beauty of remotely located hill station kalimpong </li>
                    <li>Interact with monks at Pemyangtse Monastery in Pelling </li>
                    </ul> <a href="itenary.php?value='Kolkata Gangtok Dargeeling Pelling'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">More Details</a></div>

	  <div class="container3" id="div3"><h2>Chardham Yatra</h2><img class="dasimages"  src="https://static.india.com/wp-content/uploads/2018/08/badrinath.jpg?impolicy=Medium_Resize&w=1200&h=800" width="100%"/><ul>
                    <li>Char Dham Yatra is one of the most important pilgrimages in India and holds high religious significance </li>
                    <li> Located in the mountainous state of  Uttarakhand, Char Dham are four treasured holy sites namely - Gangotri, Yamunotri, Kedarnath and Badrinath. Every shrine has its own history and religious value</li>
                    <li>As a traveller, you can also witness some of the most beautiful views on the way to these temples. From snow-capped mountains to dense forests, river confluences to beautiful waterfalls, you can experience nature at its best here </li>
                    <li>With Yatraâ€™s 10-days holy pilgrimage to these revered shrines in Uttarakhand, experience absolute serenity and explore the beauty and divinity of these immaculate mountains </li>
                   
                    </ul>
					<a href="itenary.php?value='Chardham Yatra'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">More Details</a></div>

<div class="container4" id="div3"><h2>Golden Temple - Amritsar</h2><img class="dasimages"  src="https://www.teahub.io/photos/full/17-176928_golden-temple.jpg" width="100%"/><ul>
                    <li>Combine the spiritual aura of Amritsar alongwith the breathtaking views of Dharamshala and Dalhousie in this spectacularly wonderful tour! </li>
                    <li>New experiences and incredible memories await as you go on a journey of a lifetime to Punjab & Uttaranchal on our specially handcrafted customized tour. </li>
                    <li>New experiences and incredible memories await as you go on a journey of a lifetime to Punjab & Uttaranchal on our specially handcrafted customized tour. </li>
                    <li> Khajjar known as "Mini Switzerland"</li>
                  
                    </ul>
					<a href="itenary.php?value='Golden Temple - Amritsar'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">More Details</a></div>

<div class="container5" id="div4"><h2>Jim Corbett Safari</h2><img class="dasimages"  src="https://images.newindianexpress.com/uploads/user/imagelibrary/2020/3/17/w1200X800/Corbett.jpg" width="100%"/><ul>
                    <li> Visit the charming hill stations juxtaposed against snow-capped peaks, quaint villages along winding mountain roads, serpentine rivers carving their way through hills, world renowned conservation parks like â€˜Jim Corbett Tiger National Parkâ€™ and serene lakes shimmering amidst beautiful towns. </li>
                    <li> Romantic Naini Lake </li>
                    <li> Jim Corbett Tiger Reserve </li>
                    <li> Naina Devi Temple</li>
                    </ul>
					<a href="itenary.php?value='Jim Corbett Safari'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">More Details</a></div>


<div class="container6" id="div4"><h2>Leh Ladakh</h2><img class="dasimages"  src="https://www.trillionairemindz.com/wp-content/uploads/2019/02/leh-ladakh.jpg" width="100%"/><ul>
                    <li> Juleh! Leh Ladakh Calling</li>
                    <li>An amazing journey that will let you explore the picturesque landscapes of the Land of the High Passes - Ladakh!  </li>
                    <li>Discover the pristinely beautiful Pangong Lake </li>
                    <li> Admire the many colorful monastries, hills, valleys and snow-capped mountains of Leh on this wonderful tour </li>
                  
                    </ul>
					<a href="itenary.php?value='Leh Ladakh'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">More Details</a></div>

<div class="container7" id="div5"><h2>Shimla Manali Chandigarh</h2><img class="dasimages"  src="https://www.thestatesman.com/wp-content/uploads/2019/02/Shimla-Snowfall.jpg" width="100%"/><ul>
                    <li>Explore the bustling Mall Road of Shimla</li>
                    <li>Visit Bollywood's Favourite - Christ Church</li>
                    <li>Enjoy the traditional Himachali folk dance</li>
                    <li>Get spiritual at Hidimba Mandir</li>
                    <li>Enjoy thrilling White water rafting at Beas River</li>
                    </ul>
					<a href="itenary.php?value='Shimla Manali Chandigarh'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">More Details</a></div>


<div class="container8" id="div5"><h2>Queen of Hills-Ooty</h2><img class="dasimages"  src="https://static.india.com/wp-content/uploads/2018/10/Ooty.jpg?impolicy=Medium_Resize&w=1200&h=800" width="100%"/> <ul>
                    <li>Lush green hill stations, contemporary cities, colourful culture, opulent royal palaces, intricately carved temples and delicious cuisine have made South India, a sought after destination </li>
                    <li> Explore the cities of Bangalore, Mysore, Coorg, Ooty on this tour and experience the best of the southern land! </li>
                    <li>Day trip to Coonoor </li>
                    <li> Famous Buddhist Monastery and the Golden Buddha Temple</li>
                  
                    </ul>
					<a href="itenary.php?value='Queen of Hills-Ooty'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">More Details</a></div>

	</div></div>
<?php
 $select = $_GET['select'];
if($select==2){
?>
<style type ="text/css">#div3{display:none;} </style>
<style type ="text/css">#div4{display:none;} </style>
<style type ="text/css">#div5{display:none;} </style>

<?php
}
if($select==3){
?>
<style type ="text/css">#div2{display:none;} </style>
<style type ="text/css">#div4{display:none;} </style>
<style type ="text/css">#div5{display:none;} </style>
<?php
}
if($select==4){
?>
<style type ="text/css">#div2{display:none;} </style>
<style type ="text/css">#div3{display:none;} </style>
<style type ="text/css">#div5{display:none;} </style>
<?php
}
if($select==5){
?>
<style type ="text/css">#div2{display:none;} </style>
<style type ="text/css">#div3{display:none;} </style>
<style type ="text/css">#div4{display:none;} </style>
<?php
}
?>



  </body>
</html>