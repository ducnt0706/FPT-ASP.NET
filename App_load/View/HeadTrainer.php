<?php
session_start();
include_once 'Controller/Controller.php';
$controll=new Controller();
$controll->logout();
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link" href="index_trainer.php">Home</a>
        </li>
        <li class="nav-item dropdown  " >
            <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
                Manage Trainee
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="add_trainee.php">Add Trainee</a>
                <a class="dropdown-item" href="manage_trainee.php">Edit Trainee</a>
            </div>
        </li>
        <li class="nav-item dropdown  " >
            <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
                Manage Course
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="manage_course.php">Manage Course</a>
                <a class="dropdown-item" href="add_class.php">Add Class</a>
            </div>
        </li>
        <li class="nav-item dropdown  " >
            <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
                <?php echo $_SESSION['name'] ?>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="?logout">Log out</a>
            </div>
        </li>
    </ul>



</nav>
<br>
<br>