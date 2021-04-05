<?php
include 'connect.php';
 session_start();
$usern = $_SESSION['username']; 
echo "$usern";



if(isset($_POST['update']))
{

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email_id = $_POST['email_id'];
$username = $_POST['username'];
	

$sql = mysqli_query($connect,"UPDATE customer SET fname = '$fname', mname = '$mname', lname = '$lname', email_id = '$email_id', username = '$username' WHERE username = '$usern' ");

if(! $sql )
{
  die('Could not update data: ' );
}
$msg =  "Updated data successfully\n";

 header("Location:http://localhost/TOURZILLA/fetch_profile.php");
 
			

 }

?>