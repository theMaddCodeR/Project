<?php
$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con,'customers');
if(!$con){
    die("connection faile due to " .
    mysqli_connect_error());
}

if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql="delete from `admin` where sno=$id";
$result=mysqli_query($con,$sql);
if($result)
{
    header('location:admin.php');
}
else{
    die("connection faile due to " .
    mysqli_connect_error($con));
}
}
?>