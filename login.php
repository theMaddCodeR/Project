
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in page</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
   
    <div class="container"> 
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left"> 
                <h2>login Here</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="name" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                   
                </form>
                <a href="signin.php">Create an account</a>
            </div>
            <!-- <div class="col-md-6 login-right"> 
                <h2>Sign in </h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div> -->
        </div>
        </div>
    </div>
</body>
</html>