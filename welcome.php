<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
<script type=""></script>

<?php
include('connect.php'); 
$nm=$_GET['FName'];
$email_id=$_GET['Email'];
$query = $_GET['query'];

   if( filter_var($email_id, FILTER_VALIDATE_EMAIL )){
      
			$to= $email_id;
			$headers= "From: tourzilla16@gmail.com";
			$Asubject="Query Recieved! " ;
			$Amessage = "You have an Query from ".$nm." : "."\n\n".$query ;
			$usersubject = "Query Recieved!";
			$body="";
			$body .= "We have recieved your Query,Dear " . $nm."\n\n";
			$body .= "We will get back to you within 24 hours through your email_id id :  " . $email_id."\n";
		
			if (mail($to , $usersubject,$body,$headers)) {
				    echo "Email successfully sent  ";
				} else {
				    echo "Email sending failed...";
				}
			
			mail($headers,$Asubject,$Amessage,$to );
		}

 ?>

<?php
echo "<script>
	

			setTimeout(function () { 
		swal({
			  title: 'Welcome to Tourzilla , '+'$nm',
			   text: 'We will contact you soon through : ' + '$email_id' ,
			  type: 'success',
			   confirmButtonText: 'OKAY :)',
			},
			function(isConfirm){
  if (isConfirm) {
    window.location.href = 'home_pge.php';
  }
}); }, 1000);
	</script>";
?>


</body>
</html>









<!-- 



<html>
<body>

Welcome <?php echo $_GET["FName"]; ?><br>
Your email_idail address is: <?php echo $_GET["email_idail"]; ?>

</body>
</html> -->