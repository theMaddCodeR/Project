<?php


 error_reporting(0);
$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con,'customers');
if(!$con){
    die("connection faile due to " .
    mysqli_connect_error());
}


$id=$_GET['updateid'];


$s="select * from `customers` where name='$id'";
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


  $con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" type="text/css" href="sign.css"> -->
    <link rel="stylesheet" type="text/css" href="style9.css">
    <title>Profile </title>
</head>
<body>
  <section class="top">
<div class="container"> 
<div class="login-box">
        <div class="row">
            
<div class="col-md-6 login-right"> 
                <h2>PROFILE</h2>
                <button  class="btn btn-primary my-2 "><a href="header.php" class="text-light">HOME</a></button>
      
                <form  action="updateuser.php" method="post" > 
                 
                    <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="name" class="form-control" value=<?php  echo $name;?> required>
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" value=<?php  echo $password;?> required>
                    </div>
                    
                    <div class="form-group">
                    <label for="">Mobile no</label>
                    <input type="text" name="mobile_no" class="form-control"value=<?php  echo $mobile_no;?> required>
                    </div>
                    <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value=<?php  echo $email;?> required>
                    </div>
                    <div class="form-group">
                    <label for="">House no</label>
                    <input type="text" name="house_no" class="form-control" value=<?php  echo $house_no;?> required>
                    </div>
                    <div class="form-group">
                    <label for="">Road name</label>
                    <input type="text" name="road_name" class="form-control" value=<?php  echo $road_name;?> required>
                    </div>
                    <div class="form-group">
                    <label for="">City name</label>
                    <input type="text" name="city_name" class="form-control" value=<?php  echo $city_name;?> required>
                    </div>
                    <div class="form-group">
                    <label for="">Pincode</label>
                    <input type="text" name="pincode" class="form-control"  value=<?php  echo $pincode;?>  required>
                    </div>
                    <div class="form-group">
                    <label for="">State</label>
                    <input type="text" name="state" class="form-control" value=<?php  echo $state;?> required>
                    </div>
 <?php
 $con = mysqli_connect('localhost','root','',);
 mysqli_select_db($con,'customers');
 if(!$con){
     die("connection faile due to " .
     mysqli_connect_error());
 }
$idd=$_GET['updateid'];

$t="select sno from customers where name='$idd'";

$resulttt=mysqli_query($con,$t);
$num= mysqli_num_rows($resulttt);


$q=mysqli_fetch_assoc($resulttt);
$p=$q['sno'];

 echo '<button class="btn btn-primary my-2" name="submit"><a href="updateuser.php?dateid='.$p.'"  class="text-light" >Update</a></button>';
?>
                   </form>
            </div>
</div>
</div>
</div>
</section>    
</body>
</html>
