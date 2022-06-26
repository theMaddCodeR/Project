<?php
 
$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con,'customers');
if(!$con){
    die("connection faile due to " .
    mysqli_connect_error());
}


$name=$_POST['name'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];


$s= "select name from `admin` where name = '$name'";

$result= mysqli_query($con,$s);

$num= mysqli_num_rows($result);

if($num == 1){
  
    // echo "username already taken";
    // echo '<script> alert("welcome");
    // </script>';
    myalert();
}else{
  
    
   $reg="INSERT INTO `admin` (`name`,`password`,`mobile_no`, `email`,`date`) VALUES ('$name','$password','$mobile_no','$email', current_timestamp());";
    mysqli_query($con,$reg);
    header('location:admin.php');
    
}
 function myalert()
 {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("this username is already taken ")';  
    echo '</script>';  
 }
 $con->close();
?>