<?php
include('connect.php'); // Database Config
/* Add Student Detail Php  */

if( isset($_POST['submit'])) // Check form submit or not
{
	
$pack_type	=	$_POST['pack_type'];	
$pack_name	=	$_POST['pack_name'];
$pack_desc 	=	$_POST['pack_desc'];
$no_of_days =	$_POST['no_of_days'];

$day1_nm 	=	$_POST['day1_nm'];
$day1_desc  =	$_POST['day1_desc'];	

$day2_nm 	=	$_POST['day2_nm'];
$day2_desc  =	$_POST['day2_desc'];	

$day3_nm 	=	$_POST['day3_nm'];
$day3_desc  =	$_POST['day3_desc'];	

$day4_nm 	=	$_POST['day4_nm'];
$day4_desc  =	$_POST['day4_desc'];	

$day5_nm 	=	$_POST['day5_nm'];
$day5_desc  =	$_POST['day5_desc'];	

$day6_nm 	=	$_POST['day6_nm'];
$day6_desc  =	$_POST['day6_desc'];		

$fare		=$_POST['fare'];
$tour_highlights =$_POST['tour_highlights'];

$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$img3 = $_POST['img3'];

$query="INSERT INTO package_selection values(package_type,9,'$pack_desc','$no_of_days','$fare',10, '$day1_nm', '$day2_nm', '$day3_nm', '$day4_nm', '$day5_nm', '$day6_nm','$day1_desc', '$day2_desc', '$day3_desc', '$day4_desc', '$day5_desc','$day6_desc' , '$pack_name', '$tour_highlights','$img1','$img2','$img3')";	
$result=mysqli_query($connect,$query);	

if ( false===$result ) {
  printf("error: %s\n", mysqli_error($connect));
}
else {
  echo 'Registration done';
  header("Location:admin.html"); 
}
}
mysqli_close($connect);
?>