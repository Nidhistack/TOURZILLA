<!DOCTYPE html>
<html>
<head>
	<title></title>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
<?php
include('connect.php'); // Database Config

if( ! empty($_POST['submit'])) // Check form submit or not
{
	

$customer_id	=	$_POST['customer_id'];	
$package_name	=	$_POST['package_name'];
$hotel_type		=	$_POST['inlineRadioOptions'];
$trans_type		=	$_POST['inlineRadioOptions1'];
$adults			=	$_POST['adults'];
$child			=	$_POST['child'];		
$travel_date	=	$_POST['travel_date'];
$contact		=	$_POST['contact'];		
$tot_amount		=	$_POST['tot_amount'];	

switch (settype($hotel_type, 'int')) {
	case 10 :
			$htype = 'Standard';
			break;
  case 1990 :
    	$htype = 'Deluxe';
  	    break;
  case 6990:
	   	$htype = 'Premium';
	    break;
 
  default:
    
}

switch (settype($trans_type, 'int')) {
  case 7490 :
   $ttype = 'Airways';
    break;
  case 3490:
   $ttype = 'Train';
    break;
 
  default:
    
}

$query="INSERT INTO booking values(default,$customer_id,'$package_name','$htype','$ttype',$adults, $child, '$travel_date', $contact, $tot_amount)";	
$result=mysqli_query($connect,$query);	

if ( false===$result ) {
  printf("error: %s\n", mysqli_error($connect));
}
else {
  echo 'BOOKING DONE';
}
}
  
      $extract = mysqli_query($connect,"SELECT * FROM customer WHERE customer_id = $customer_id ");
        
        while ($row = mysqli_fetch_assoc($extract))
        {
         
          $fname= $row['fname'];
          $mname= $row['mname'];
          $lname= $row['lname'];
          $email_id= $row['email_id'];
          $username= $row['username'];
          echo $email_id;
        }

       if( filter_var($email_id, FILTER_VALIDATE_EMAIL )){
      
			$to= $email_id;
			$headers= "From: tourzilla16@gmail.com";
			$Asubject="You have an Booking from ".$fname. " ". $lname ;
			$Amessage = "You have an Booking from ".$fname. " ". $lname ;
			$usersubject = "Booking Confirmation!";
			$body="";
			$body .= "From :  " . $fname. " ". $lname."\n";
			$body .= "Email :  " . $email_id."\n";
			$body .= "BOOKING DETAILS :  " . "\r\n";
			$body .= "PACKAGE DETAILS :  " . $package_name   ."\n";
			$body .= "HOTEL DETAILS :  " . $htype   ."\n";
			$body .= "TRANSPORTATION DETAILS : " .  $ttype  ."\n";
			$body .= "NO. OF TRAVELLERS :  " . $adults   ."\n";
			$body .= "DATE OF TRAVEL :  " . $travel_date   ."\n";
			$body .= "PACKAGE TARIFF :  " .  $tot_amount  ."\n\n";
			$body .= "For sharing Payment and transportation details we will be scheduling a meet!" . "\n\n" ;
			$body .= "Thank you and have a Great Day!";
			if (mail($to , $usersubject,$body,$headers)) {
				   // echo "Email successfully sent  ";
				} else {
				    //echo "Email sending failed...";
				}
			
			mail($headers,$Asubject,$Amessage,$to );
			echo "<script>	
						setTimeout(function () { 
					swal({
						  title: 'Thanks For Booking , ' + '$fname' + '$lname',
						   text: 'Your Booking details will be sent through : ' + '$email_id' '\n' + 'For sharing Payment and transportation details we will be scheduling a meet!' ,
						  type: 'success',
						   confirmButtonText: 'OKAY :)',
						},
						function(isConfirm){
			  if (isConfirm) {
			    window.location.href = 'home_pge.php';
			  }
			}); }, 1000);
				</script>";
					}
mysqli_close($connect);


?>
</body>
</html>
