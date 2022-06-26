<?php
session_start();


$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con,'customers');
 
if(!$con){
    die("connection faile due to " .
    mysqli_connect_error());
}
// else{
//     echo "succesfull";
// }
$name=$_POST['name'];
$password=$_POST['password'];
$sql="select name,password from `admin` where name='$name' && password='$password'";
$resultt= mysqli_query($con,$sql);

 $sum= mysqli_num_rows($resultt);

 $s="select name,password from  customers where name='$name' && password ='$password'";

 $result= mysqli_query($con,$s);
 
 $num= mysqli_num_rows($result);
 


if($sum==1)
{
  $_SESSION['name'] = $name;
   header('location:header.php');

}

elseif($num==1){
   
    $_SESSION['name'] = $name;
   header('location:header.php');

}else{
    
//     echo '<script type ="text/JavaScript">';  
//     echo 'alert("Please Enter Correct Name or Password")';  
//     echo '</script>'; 
   
//    header('location:login.php');
echo "<script>alert('Please Enter a correct name or password');
window.location.href='login.php';
</script>";
   
}

con->close();
?>
<!-- 
INSERT INTO `admin` (`sno`, `name`, `password`, `date`) VALUES ('1', 'kashifadmin', '7484074531', current_timestamp()); -->