<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom styles -->
    <link rel="stylesheet" href="CustomerReg.css">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign Up</h3>
                 
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Register" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 

   // Request
   if ($_SERVER['REQUEST_METHOD']=="POST") {
    // Add user model
        include('../model/user.php');
        $user_model=new User();
       $username=$_REQUEST['username'];
       $email=$_REQUEST['email'];
       $password=$_REQUEST['password'];
        // insert
        $res=$user_model->insert($username,$email,$password);
        if ($res) {
            echo "<script>
                alert('Registration Successfull');
                window.location.href='./login.php'
            </script>";
        } else {
            echo "<script>
                alert('Registration failed');
            </script>";
        }
        

   } 
?>