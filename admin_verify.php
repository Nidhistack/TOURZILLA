
<?php
include('connect.php');
   session_start();
$user = $_POST['admin_name'];
$pwd  = $_POST['Pwd'];

$qry   = mysqli_query($connect,"SELECT * FROM admin WHERE admin_name='$user' and password='$pwd'");
if(!$qry) {
    die("Query Failed: ". mysqli_error($connect));
} else {

    $row=mysqli_fetch_array($qry);
    if($user==$row['admin_name'])
    {
       // $_SESSION['admin_name'] = $row['admin_name'];
     if($user==$row['admin_name'] && $pwd==$row['password'])
    { 
            header("Location:admin_pg1.php");         
    }
    
    }
else
   {   
   echo '<script>alert("Incorrect Username or Password Please Try Again")</script>'; 
 //  header("Location:admin.html");
    }  
}   
?>
