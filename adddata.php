<?php
include('connect.php'); // Database Config
/* Add Student Detail Php  */

if( isset($_POST['submit'])) // Check form submit or not
{
	
$fname=$_POST['FName'];	
$mname=$_POST['MName'];
$lname=$_POST['LName'];

$uname=$_POST['username'];

$mail=$_POST['Email'];		

$pwd=$_POST['Pwd'];

$query="INSERT INTO customer values(default,'$fname','$mname','$lname','$uname','$pwd', '$mail')";	
$result=mysqli_query($connect,$query);	

if ( false===$result ) {
  printf("error: %s\n", mysqli_error($connect));
}
else {
  echo 'Registration done';
  header("Location:index.html"); 
}
}
mysqli_close($connect);
?>