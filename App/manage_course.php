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

    <link rel="stylesheet" href="./Source/manage_course_style.css">

    <style>
        div.card {
            width: fit-content;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            float: left;
        }
        .card-img-top{
            opacity: 0.7;
        }
    </style>

</head>
<body>

<?php
include_once 'View/HeadTrainer.php';
include_once './Model/CategoryMod.php';
include_once './Model/CourseMod.php';
include_once './Controller/Controller.php';
//get data from category
$catMod=new CategoryMod();
$arrCategory=$catMod->getAllCategory();

//handle adding new category
$control=new Controller();
$control->addCategory();
$control->manageCategory();

$control->manageCourse();
?>
<br>
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
                        <a class='badge badge-warning' href='?ucatid=".$cat->id."&ucatname=".$cat->name."'>Add</a>
                        <a class='badge badge-danger' href='?dcattid=".$cat->id."'>Delete</a>
                        </button>
                        <div id='demo".$cat->id."' class=\"collapse\" data-parent=\"#accordion\">
                                
                        </div>
                    </div>
                         ";
                    foreach ($arrCourse as $course){

                        echo "<script>
                                $('#demo".$cat->id."').append('<div><span class=\"fas fa-angle-double-right\"></span><a class=\"text-decoration-none\"> $course->name </a><a class=\"dlink badge badge-info\" >Delete</a></div>');
                                $('a.dlink').attr('href','?dcourseid='+'$course->id');
                              </script>";
                        ?>
                        <script>
                            $('#demo<?php echo $cat->id ?>').append("<a class='badge badge-success' href='./manage_class.php?seecourseid=<?php echo $course->id ?>'>Seemore</a>")
                        </script>
                        <?php
                    }
                }
                ?>

            </div>
            <br>
            <!-- Button to Open the Modal -->
            <div class="text-center">
                <button class="btn btn-warning" data-toggle="modal" data-target="#myModal" >Add new Category</button>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header bg-warning">
                            <h4 class="modal-title text-danger">Adding Category</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body text-center">
                            <form action="manage_course.php" method="post" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                <input type="text" name="aNameCat" placeholder="Insert for a category...">
                                <br>
                                <br>
                                <button type="submit" class="btn btn-warning" >Create</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!--TODO:Show class available-->
        <div class="col-sm-7 ">
            <br>
            <br>
            <div class="card " >
                <img class="card-img-top" src="./Source/work3.jpg" alt="Photo">
                <div class="card-img-overlay">
                    <?php
                    $control->addCourse();
                    ?>
                    <script>

                    </script>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>


