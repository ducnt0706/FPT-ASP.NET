<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - FPT</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./Source/login_admin.css">
</head>
<body>
<?php
include_once 'Controller/Controller.php';
    $controll=new Controller();
    $controll->adminLogin();
?>

<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Login for Admin</h3>
            <form method="post" action="login_admin.php">
                <div class="form-group">
                    <input name="user" type="text" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input name="pass" type="password" class="form-control" placeholder="Your Password *" value="" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btnSubmit">Login</button>
                </div>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget Password?</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>