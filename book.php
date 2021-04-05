       <?php
      $pname = $_GET['value1'] ;
       $ptype = $_GET['value2'] ;
      $pp = $_GET['value3'] ;
     
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

  <script src="./src/bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>
<style type="text/css">
  form .error {
color: #ff0001;
}
</style>
</head>
<body>

 <div>
<?php include'header.php'?></div> 
  
<?php
include('connect.php');
    $usern = $_SESSION['username'];
      $extract = mysqli_query($connect,"SELECT * FROM customer WHERE username = '$usern' ");
        
        while ($row = mysqli_fetch_assoc($extract))
        {
          $customer_id = $row['customer_id'];
          $fname= $row['fname'];
          $mname= $row['mname'];
          $lname= $row['lname'];
          $email_id= $row['email_id'];
          $username= $row['username'];
          
        }

?>

 <div class="container">
        <div class="row"><h2>You'll be ready to pack in a minute...</h2> </div>
           <h4 class="font-weight-bold"><?php echo $pname; ?><br>(<?php echo $ptype; ?>)</h4>


<form class="form" id="MyForm" method="post" action="add_booking.php" name="MyForm">
  <div class="form-row">
    <input type="text" name="customer_id" value="<?php echo($customer_id); ?>" hidden>
     <input type="text" name="package_name" value="<?php echo($pname); ?>" hidden>
    <div class="form-group col-md-6" name="tot_pin_requested"  required>
      <label for="hoteltype"><b>Hotel Type :</b></label> <br>
     <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" onclick="calculateAmount(this.value)"  name="inlineRadioOptions" id="inlineRadio" value="10">
      <label class="form-check-label" for="inlineRadio2">Standard</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" onclick="calculateAmount(this.value)"  name="inlineRadioOptions" id="inlineRadio" value="1990">
      <label class="form-check-label" for="inlineRadio2">Deluxe (+ 1990)</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" onclick="calculateAmount(this.value)"  name="inlineRadioOptions" id="inlineRadio" value="6990">
      <label class="form-check-label" for="inlineRadio2">Premium (+ 6990)</label>
    </div>
    </div>

    <div class="form-group col-md-6" name="tot_pin_requested" required>
      <label for="transtype"><b>Transportation Type :</b></label><br>
     
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" onclick="calculateAmountTransport(this.value)" name="inlineRadioOptions1" id="inlineRadio1" value="3490">
  <label class="form-check-label" for="inlineRadio2">Train(+ 3490 per head)</label>
</div>
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" onclick="calculateAmountTransport(this.value)" name="inlineRadioOptions1" id="inlineRadio1" value="7490">
  <label class="form-check-label" for="inlineRadio1">Airways (+ 7490 per head)</label>
</div>
    </div>
  </div>
  <label for="transtype"><b>No of Travellers : </b></label>
  <div class="form-row">
      <div class="form-group col-md-4 ">
    <label for="travelers">Adults (per room)</label>
    <br><input required type="number" name="adults" onchange="calculateAmountRoom(this.value)" id="room" value="1" min="1" max="25" step="1"/>
</div>

<div class="form-group col-md-4 ">
    <label for="travelers">Children (age below 10 yrs)</label>
    <br><input required type="number" name="child" value="0" min="0" max="6" step="1"/>
</div>
  </div>
  <div class="form-group ">
    <label for="date"><b>Date of Travel</b></label>
    <input name="travel_date" required class="form-control mb-2 mr-sm-2 mb-sm-0 col-2" onclick="myFunction()"  type="date" id="txtDate">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3 ">
      <label for="contact"><b>Mobile</b></label>
      <input type="number" class="form-control" placeholder="Enter your mobile number..." name="contact" id="contact" required>
    </div>
     
  </div>
 <h4 class="font-italic">Your booking details will be sent on your email, <?php echo $email_id; ?> </h4> <br> 
    <input type="hidden" id="pack_price" name="" value="<?php echo $pp ; ?>">
         <script>
                function calculateAmount(val)
                { 
                  var pp = document.getElementById("pack_price").value;         
                  var price = val * 1;
                  /*display the result*/
                  var tot_price=parseFloat(price) + parseFloat(pp);
                   var divobj = document.getElementById('tot_amount');
                         divobj.value = tot_price; 
                         var divobj = document.getElementById('hotel_total');
                         divobj.value = tot_price;      
                }
                function calculateAmountTransport(val)
                { 
                  var pp = document.getElementById("hotel_total").value;
                // var room = document.getElementById("room").value;
                  var price = val * 1;
                  /*display the result*/
                  var tot_price=parseFloat(price) + parseFloat(pp)  ;
                   var divobj = document.getElementById('trans_total');
                         divobj.value = tot_price;     
                         var divobj = document.getElementById('tot_amount');
                         divobj.value = tot_price; 
                }
                function calculateAmountRoom(val) {
                 // alert(val);
                   var pp = document.getElementById("trans_total").value;
                  var price = val * 1;
                  /*display the result*/
                  // if (parseFloat(price) != 1) {
                  var tot_price=parseFloat(pp) * parseFloat(price)  ;
                   var divobj = document.getElementById('tot_amount');
                         divobj.value = tot_price;  
                // }
                }

        </script>
  <div class="container font-weight-bold">
    <label><b>Price: </b></label>
    <input class="w3-input w3-border" name="hotel_total" id="hotel_total" hidden readonly>
     <input class="w3-input w3-border" name="trans_total" id="trans_total" hidden readonly>

<input class=" w3-input w3-border" id="tot_amount" name="tot_amount"  type="text"  readonly>
  </div>


  <br>
 <input type="submit"  name="submit" style="font-size: 22px;" class="btn btn-lg  btn-dark btn-outline-warning" value="Confirm Your Booking!">
  
  </form>
  </div>
   

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
