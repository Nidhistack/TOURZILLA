
<?php
include('connect.php');
   session_start();
$user = $_POST['username'];
$pwd  = $_POST['Pwd'];

$qry   = mysqli_query($connect,"SELECT * FROM customer WHERE username='$user' and password='$pwd'");
if(!$qry) {
    die("Query Failed: ". mysqli_error($connect));
} else {

    $row=mysqli_fetch_array($qry);
    if($user==$row['username'])
    {
        $_SESSION['username'] = $row['username'];
     if($user==$row['username'] && $pwd==$row['password'])
    { 
            header("Location:home_pge.php?value1=$user");         
    }
    
    }
else
   {   
    echo '<script>alert("Incorrect Username or Password Please Try Again")</script>'; 
    header("Location:index.html");
    }  
}   
?>
