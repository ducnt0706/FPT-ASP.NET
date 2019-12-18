<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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



<div class="container mt-3 text-center">
    <button class="btn btn-outline-warning"><a class="text-decoration-none text-dark" href="">Add new record!</a></button>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="text-center">Course Categories:</h4>
            <hr>
            <div id="accordion">

                <div>
                    <button class="" data-toggle="collapse" data-target="#demo">Ha Noi F2G</button>
                    <div id="demo" class="collapse" data-parent="#accordion">
                        <div>Computing Reasearch</div>
                        <div>Database</div>
                    </div>
                </div>

                <div>
                    <button class="" data-toggle="collapse" data-target="#demo1">Ha Noi F2G</button>
                    <div id="demo1" class="collapse" data-parent="#accordion">
                        <div>Computing Reasearch</div>
                        <div>Database</div>
                    </div>
                </div>

                <div>
                    <button class="" data-toggle="collapse" data-target="#demo2">Ha Noi F2G</button>
                    <div id="demo2" class="collapse" data-parent="#accordion">
                        <div>Computing Reasearch</div>
                        <div>Database</div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-7">

            <br>
            <br>

            <div class="card" >
                <img class="card-img-top" src="./Source/class.jpg" alt="Photo">
                <div class="card-img-overlay">
                    <h4 class="card-title">GCH0705</h4>
                    <p class="card-text ">Application Development</p>
                    <a href="#" class="btn btn-warning">See Profile</a>
                </div>
            </div>

            <div class="card" >
                <img class="card-img-top" src="./Source/class.jpg" alt="Photo">
                <div class="card-img-overlay">
                    <h4 class="card-title">GCH0705</h4>
                    <p class="card-text ">Application Development</p>
                    <a href="#" class="btn btn-warning">See Profile</a>
                </div>
            </div>

            <div class="card" >
                <img class="card-img-top" src="./Source/class.jpg" alt="Photo">
                <div class="card-img-overlay">
                    <h4 class="card-title">GCH0705</h4>
                    <p class="card-text ">Application Development</p>
                    <a href="#" class="btn btn-warning">See Profile</a>
                </div>
            </div>

        </div>
    </div>
</div>










</body>
</html>