<?php
 session_start();
 header('location:login.php');

$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con,'customers');
if(!$con){
    die("connection faile due to " .
    mysqli_connect_error());
}
else{
    echo 'connection is successfull';
}

$name=$_POST['name'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$house_no=$_POST['house_no'];
$road_name=$_POST['road_name'];
$city_name=$_POST['city_name'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];

$s= "select * from customers where name = '$name'";

$result= mysqli_query($con,$s);

$num= mysqli_num_rows($result);

if($num == 1){
  
    // echo "username already taken";
    // echo '<script> alert("welcome");
    // </script>';
    myalert();
}else{
  
    
   $reg="INSERT INTO `customers` (`name`,`password`,`mobile_no`, `email`, `house_no`, `road_name`, `city_name`, `pincode`, `state`, `date`) VALUES ('$name','$password','$mobile_no','$email','$house_no','$road_name','$city_name','$pincode','$state', current_timestamp());";
    mysqli_query($con,$reg);

    echo " Registration Successfull";
}
 function myalert()
 {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("this username is already taken ")';  
    echo '</script>';  
 }
 $con->close();
?>

