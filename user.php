<?php


$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con,'customers');
if(!$con){
    die("connection faile due to " .
    mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User's account</title>
</head>
<body>
<form>
  <div class="container">
      <button  class="btn btn-primary my-5 "><a href="regis.php" class="text-light">Add user</a></button>
    
      <button  class="btn btn-primary my-5 "><a href="header.php" class="text-light">HOME</a></button>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Mobile no</th>
      <th scope="col">City name</th>
      <th scope="col">pincode</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
  
  $sql="select * from `customers`";
  $result=mysqli_query($con,$sql);
  if($result)
  {
     while($row=mysqli_fetch_assoc($result))
      {
          $sno=$row['sno'];
         $name=$row['name']; 
         $password=$row['password']; 
         $mobile_no=$row['mobile_no']; 
         $city_name=$row['city_name']; 
         $pincode=$row['pincode']; 
         echo '<tr>
         <th scope="row">'.$name.'</th>
         <td>'.$password.'</td>
         <td>'.$mobile_no.'</td>
         <td>'.$city_name.'</td>
         <td>'.$pincode.'</td>
         <td>
        <button class="btn btn-primary"> <a href="update.php?updateid='.$sno.'" class="text-light">UPDATE</a></button>
        <button class="btn btn-danger"> <a href="delete.php?
        deleteid='.$sno.'" class="text-light">DELETE</a></button>
        
    </td>
         
       </tr>';
      }
  }


  
  ?>

    
  </tbody>
</table>
    </div>
  
</body>
</html>