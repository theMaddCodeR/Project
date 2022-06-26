






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
                <h2>Sign in </h2>
                <form action="authentication.php"  method="post">
                    <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                    <label for="">Mobile no</label>
                    <input type="text" name="mobile_no" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">House no</label>
                    <input type="text" name="house_no" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Road name</label>
                    <input type="text" name="road_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">City name</label>
                    <input type="text" name="city_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Pincode</label>
                    <input type="text" name="pincode" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">State</label>
                    <input type="text" name="state" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
</div>
</div>
</div>
        
</body>
</html>