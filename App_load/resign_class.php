<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage class of Course</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./Source/manage_class_style.css">

</head>
<body>
<?php include_once 'Controller/Controller.php';
$control=new Controller();
?>
<div class="container">
    <div class="row">
        <!--TODO:Load class-->
        <div class="col-sm-5">
            <?php
                 $control->classList();
            ?>
        </div>
        <!--TODO:Load topic-->
        <div class="col-sm-7">
            <br>
            <br>
            <div class="card " >
                <img class="card-img-top" src="./Source/work3.jpg" alt="Photo">
                <div class="card-img-overlay">
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>