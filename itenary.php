<!DOCTYPE html >
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
 
}

table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
 
}
th,td {
  padding: 5px;
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar"  data-offset="50" >
 <div>
  <?php 
    include'header.php'
  ?>
</div>
<?php
include('connect.php');
    $usern = $_SESSION['username'];
    $name = $_GET['value'];
      $extract = mysqli_query($connect,"SELECT * FROM package_selection WHERE package_name = $name  ");
        
        while ($row = mysqli_fetch_assoc($extract))
        {
          $package_name = $row['package_name'];
          $description= $row['description'];
          $D1_name= $row['D1_name'];
          $D2_name= $row['D2_name'];
          $D3_name= $row['D3_name'];         
          $D4_name= $row['D4_name'];
          $D5_name= $row['D5_name'];
          $D6_name= $row['D6_name'];   

          $D1_desc= $row['D1_desc'];
          $D2_desc= $row['D2_desc'];
          $D3_desc= $row['D3_desc'];
          $D4_desc= $row['D4_desc'];
          $D5_desc= $row['D5_desc'];
          $D6_desc= $row['D6_desc'];
          $tour_highlights= $row['tour_highlights'];
          $fare= $row['fare'];
          $image_1 = $row['image_1'];
          $image_2 = $row['image_2'];
          $image_3 = $row['image_3'];       
        }

?>


<section>
      <div class="container" id="about">
     
      <div class="row mb-5">
      <div class="col-lg-6 col-md-6 col-12">
      <div class="slideshow-container">

         <div class="mySlides">
      <div class="img-fluid rounded"> </div>
      <img src="<?php echo($image_1); ?>" style="width:100%">
      </div>
      
      <div class="mySlides">
      <div class="img-fluid rounded"> </div>
      <img src="<?php echo($image_2); ?>" style="width:100%">
      </div>

     <div class="mySlides">
      <div class="img-fluid rounded"> </div>
      <img src="<?php echo($image_3); ?>" style="width:100%">
      </div>

     
     
     
      </div>
      </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h1 class="p-3 mb-2  text-warning " style=" border-radius: 15px 50px 30px;"><?php echo $description; ?> </h1>
             <h1 class="p-3 mb-2 bg-dark text-warning font-italic font-weight-bold" style=" border-radius: 15px 50px 30px;"><?php echo $package_name; ?></h1>
                    <br><br><h3><b>TOUR HIGHLIGHTS</b> </h3>
                    <hr>
                    <p>   <?php echo $tour_highlights; ?>  </p>
                    <h4 class="disabled">Starting From...</h4>
                    <h2>  &#x20B9; <?php echo $fare; ?></h2>
                     <a href="book.php?value1=<?php echo($package_name)?> &value2=<?php echo($description)?> &value3=<?php echo($fare) ?>" class="btn btn-lg btn-outline-dark btn-warning">BOOK NOW</a>
                    </div>

              </div>
          </div>
</section>
<div class="container">
   <div class="container">
    <h2><b>Inclusions</b></h2><br>

    <div class="row mb-12">
    <div class="col-lg-2 col-md-4 col-sm-6">
    <img style="width: 70px;" src="https://cdn.iconscout.com/icon/free/png-256/food-kitchen-appliances-soup-boul-spoon-restaurant-4-11435.png"><br>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
    <img style="width: 90px;" src="https://banner2.cleanpng.com/20180701/psh/kisspng-computer-icons-clip-art-accommodation-5b3986b7e4fbb5.7854169215304966959379.jpg">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
    <img style="width: 70px;" src="https://cdn.iconscout.com/icon/premium/png-512-thumb/binoculars-59-124988.png"><br>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
    <img style="width: 70px;" src="https://cdn4.iconfinder.com/data/icons/travel-guide/32/icon2_Kereta-512.png"><br>
    </div>
    </div>
    <div class="row mb-12">
    <div class="col-lg-2 col-md-4 col-sm-6">
    <h4><b>Meals</b></h4><br>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
    <h4><b>Accomdation</b></h4><br>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
    <h4><b>Sight Seeing</b></h4><br>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
    <h4><b>Transportation</b></h4><br>
    </div>
    </div>
    </div><br>

<div class="container">
  <hr class="w-50 ml-lg-5">
    <div class="row mb-12">
                  <div class="col-lg-12 col-md-12 col-12">
                  <h2><b><?php echo $D1_name; ?></b></h2>
                   <?php echo $D1_desc; ?><br><br>
                  </div>

                  <hr class="w-50 ml-lg-5">

     <div class="col-lg-12 col-md-12 col-12">
                  <h2><b><?php echo $D2_name; ?></b></h2>
                   <?php echo $D2_desc; ?><br><br>
                  </div>

  <hr class="w-50 ml-lg-5">

      <div class="col-lg-12 col-md-12 col-12">
                  <h2><b><?php echo $D3_name; ?></b></h2>
                   <?php echo $D3_desc; ?><br><br>
                  </div>

   <hr class="w-50 ml-lg-5">

      <div class="col-lg-12 col-md-12 col-12">
                  <h2><b><?php echo $D4_name; ?></b></h2>
                   <?php echo $D4_desc; ?><br><br>
                  </div>
 
  <hr class="w-50 ml-lg-5">

  <div class="col-lg-12 col-md-12 col-12">
                  <h2><b><?php echo $D5_name; ?></b></h2>
                   <?php echo $D5_desc; ?><br><br>
                  </div>
 
  <hr class="w-50 ml-lg-5">

  <div class="col-lg-12 col-md-12 col-12">
                  <h2><b><?php echo $D6_name; ?></b></h2>
                   <?php echo $D6_desc; ?><br><br>
                  </div>
 
  
</div>

<br>

<div class="container justify-content-center align-self-center">
<button class="btn btn-outline-dark btn-warning" onclick="loadXMLDoc()">View Cancellation Policy</button>
<br><br>
<table id="demo"></table><br>

<script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
         
          slides[slideIndex-1].style.display = "block";  
         
          setTimeout(showSlides, 4000); // Change image every 2 seconds
         
        }
        function loadXMLDoc() {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              myFunction(this);
            }
          };
          xmlhttp.open("GET", "cancel.xml", true);
          xmlhttp.send();
        }
        function myFunction(xml) {
          var i;
          var xmlDoc = xml.responseXML;
          var table="<tr><th>Cancellation recieved no. of days prior to departure</th><th>% of Cancellation on Net Tour Price(Per Person)</th></tr>";
          var x = xmlDoc.getElementsByTagName("CD");

          for (i = 0; i <x.length; i++) {
                  table += "<tr><td>" +
                  x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
                  "</td><td>" +
                  x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
                  "</td></tr>";

                
          }
             


          document.getElementById("demo").innerHTML = table;
        }
</script>

</div>
<div class="container">
  <h2 class="text-gray-dark">Tour Information</h2>
  <div class="container">
  <h3>Inclusions</h3>
  <ul>
    <li>Meals i.e; Breakfast, Dinner as specified in the itinerary.</li>
     <li>All transfers and sightseeing in Private vehicle</li>
      <li>2-3 guests based on Etios/Dzire for transfers and sightseeing.</li>
       <li>Sightseeing as mentioned in the itinerary (entrance and guide charges not included)</li>
     
  </ul>
  <br>
 <hr class="w-50 ml-lg-5">
 <br>
  <h3>Exclusions</h3>
  <ul>
     <li>Any other meals than those mentioned above</li>
      <li>Any items of personal nature like tips to guides, drivers, laundry,telephone charges,shopping, wines & alcoholic beverages, mineral water (unless specified) and food and drink which is not part of set group menu</li>
       <li>Any extra cost incurred on behalf of any individual due to illness, accident , hospitalization or any personal emergency</li>
        <li>GST 5% (Government Tax) on total package price</li>
        <li>Any upgradation in hotel room category,Entrance fees of all sightseeing places to be visited from inside</li>
  </ul>
  <br>
</div>
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


</body>
</html> 
