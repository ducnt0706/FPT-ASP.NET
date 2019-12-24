<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="View/loginform/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="View/loginform/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="View/loginform/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="View/loginform/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="View/loginform/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="View/loginform/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="View/loginform/css/util.css">
    <link rel="stylesheet" type="text/css" href="View/loginform/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<?php
include_once 'Controller/Controller.php';
$controll=new Controller();
$controll->traineeLogin();
?>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="View/loginform/images/img-01.png" alt="IMG">
            </div>

            <form action="login_trainee.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Trainee Login
					</span>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="user" placeholder="User Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">

                </div>
                <div class="text-center p-t-136">

                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="View/loginform/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="View/loginform/vendor/bootstrap/js/popper.js"></script>
<script src="View/loginform/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="View/loginform/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="View/loginform/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="View/loginform/js/main.js"></script>

</body>
</html>

