<?php
 error_reporting(0);
$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con,'customers');
if(!$con){
    die("connection faile due to " .
    mysqli_connect_error());
}
else{
    echo 'success';
}

$id=$_GET['updateid'];
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
    // echo '<script type ="text/JavaScript">';  
    // echo 'alert("this username is already taken ")';  
    // echo '</script>';  
    echo 'succesful';
    header('location:user.php');
}
else{
    die("connection faile due to " .
    mysqli_connect_error($con));
}
}

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
    <title>Sign in </title>
</head>
<body>
<div class="container"> 
<div class="login-box">
        <div class="row">
            
<div class="col-md-6 login-right"> 
                <h2>Update the Information </h2>
                <form  method="post" action="<?php $_SELF ?>">
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
                    <button type="submit" name="submit" class="btn btn-primary">update</button>
                </form>
            </div>
</div>
</div>
</div>
        
</body>
</html>
