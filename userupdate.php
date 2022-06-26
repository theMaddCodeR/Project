<?php

session_start();

   


//  error_reporting(0);
$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con,'customers');
if(!$con){
    die("connection faile due to " .
    mysqli_connect_error());
}


$id=$_GET['dateid'];

$s="select * from `customers` where sno=$id";
$resultt=mysqli_query($con,$s);
$row=mysqli_fetch_assoc($resultt);
$name=$row['name'];
$password=$row['password'];
$mobile_no=$row['mobile_no'];
$email=$row['email'];
$house_no=$row['house_no'];
$road_name=$row['road_name'];
$city_name=$row['city_name'];
$pincode=$row['pincode'];
$state=$row['state'];


if(isset($_POST['submit'])){
$name=$_POST['name'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$house_no=$_POST['house_no'];
$road_name=$_POST['road_name'];
$city_name=$_POST['city_name'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];


  
   $sql="update `customers`  set sno =$id, name='$name',password='$password',mobile_no='$mobile_no',email='$email',
   house_no='$house_no',road_name='$road_name',city_name='$city_name',pincode='$pincode',state='$state' where sno=$id"; 
   $result= mysqli_query($con,$sql);
   if($result)
{
    
    $_SESSION['name'] = $name;
    header('location:header.php');
}
else{
    die("connection faile due to " .
    mysqli_connect_error($con));
}
}

  $con->close();
?>
