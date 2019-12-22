<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Class</title>
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
include_once './Controller/Controller.php';
//get data from category
$catMod=new CategoryMod();
$arrCategory=$catMod->getAllCategory();

//get data from CourseMod:

$controller=new Controller();
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
                        <button  class='btn btn-outline-success' data-toggle=\"collapse\" data-target='#demo".$cat->id."'>
                        <span class='fas fa-anchor'></span>
                        <span>$cat->name</span>
                        </button>
                        <div id='demo".$cat->id."' class=\"collapse\" data-parent=\"#accordion\">
                                
                        </div>
                    </div>
                         ";
                    foreach ($arrCourse as $course){

                        echo "<script>
                                $('#demo".$cat->id."').append('<div><span class=\"fas fa-angle-double-right\"></span><a class=\"text-decoration-none\"> $course->name </a></div>');
                              </script>";
                        ?>
                        <script>
                            $('#demo<?php echo $cat->id ?>').append("<a class='badge badge-success' href='./resign_class.php?courseid=<?php echo $course->id ?>'>Seemore</a>")
                        </script>
                        <?php
                    }
                }
                ?>

            </div>
        </div>

        <!--TODO:Show class available-->
        <div class="col-sm-7">

        <?php
            $controller->detailView();
        ?>

        </div>
    </div>
</div>

</body>
</html>


