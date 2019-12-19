<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Class</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./Source/view_class_style.css">
</head>
<body>

<?php
include_once './Model/CategoryMod.php';
include_once './Model/CourseMod.php';
//get data from category
$catMod=new CategoryMod();
$arrCategory=$catMod->getAllCategory();

//get data from CourseMod:

?>

<div class="container">
    <div class="row">

        <!--TODO:Show category-->
        <div class="col-sm-5">
            <h4 class="text-center">Course Categories:</h4>
            <hr>
            <div id="accordion">

                <?php
                $courseMod=new CourseMod();
                foreach($arrCategory as $cat){
                    //TODO: get course of category
                    $arrCourse=$courseMod->getCourseFromCategory($cat->id);

                    echo "
                    <div>                   
                        <button  class='btn btn-outline-success' data-toggle=\"collapse\" data-target='#demo".$cat->id."'><span class='fas fa-anchor'></span> $cat->name </button>
                        <div id='demo".$cat->id."' class=\"collapse\" data-parent=\"#accordion\">
                                
                        </div>
                    </div>
                         ";
                    foreach ($arrCourse as $course){
                        echo "<script>
                                $('#demo".$cat->id."').append('<div>$course->name</div>'); 
                              </script>";
                    }
                }
                ?>

            </div>
        </div>

        <!--TODO:Show class available-->
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


