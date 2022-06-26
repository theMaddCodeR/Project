<?php
// session_start();


$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con,'customers');
 
if(!$con){
    die("connection faile due to " .
    mysqli_connect_error());
}
else{
    echo "succesfull";
}
// $name=$_POST['name'];
// $password=$_POST['password'];
// $sql="select * from  admin where name='$name' && password ='$password'";


$s="select name,password from  `admin` where name='affan' && password ='7484'";

$resultt=mysqli_query($con,$s);
if($resultt)
{
   echo "hum ok";
}
$sum= mysqli_num_rows($resultt);
echo $sum;
if($sum==1){
echo "hum apke hain kon" ; 
}

$row=mysqli_fetch_assoc($resultt);
$name=$row['name'];
$password=$row['password'];
echo $password;
echo $name;



// $resultt= mysqli_query($con,$sql);
// if($resultt)
// {
//     echo "successs";
// }
// $sum=mysqli_num_rows($resultt);
// echo $sum;
// if($sum==1){
// //     $_SESSION['name'] = $name;
// //    header('location:home.php');
// echo "hello";
// }else{
    
//     echo '<script type ="text/JavaScript">';  
//     echo 'alert("your response is successfully inserted")';  
//     echo '</script>'; 
   
// //    header('location:login.php');
   
   
//  }
 