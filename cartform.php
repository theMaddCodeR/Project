<?php
error_reporting(0);

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
      
      
      
      
      <button  class="btn btn-primary my-5 "><a href="addadmin.php" class="text-light">Add Admins</a></button>
      <button  class="btn btn-primary my-5 "><a href="header.php" class="text-light">HOME</a></button>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
  $id=array($_GET['updateid']);
  
  $count=count($id);
  if($id)
  {
    echo "<script>alert('Item Added');
    window.location.href='header.php';
    </script>";
       
  }
  for($i=0;$i<$count;$i++){
$s="select * from `food` where sno=$id[$i]";
$result=mysqli_query($con,$s);
// $row=mysqli_fetch_assoc($resultt);
// $name=$row['name'];
// $password=$row['price'];


  if($result)
  {
     while($row=mysqli_fetch_assoc($result))
      {
          $sno=$row['sno'];
         $name=$row['name']; 
         $price=$row['price']; 
        
         
         echo '<tr>
         <td>'.$sno.'</td>
         <th scope="row">'.$name.'</th>
         <td>'.$price.'</td>
         
         
         <td>
        <button class="btn btn-primary"> <a href="updateadmin.php?updateid='.$sno.'" class="text-light">UPDATE</a></button>
        <button class="btn btn-danger"> <a href="deleteadmin.php?
        deleteid='.$sno.'" class="text-light">DELETE</a></button>
        
    </td>
         
       </tr>';
      }
  }

  }
  
  
  ?>

    
  </tbody>
</table>
    </div>
  
</body>
</html>