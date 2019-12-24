<?php
session_start();
include_once 'Controller/Controller.php';
$controll=new Controller();
$controll->logout();
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index_admin.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-warning" href="add_trainer.php">Add Trainer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-warning" href="manage_trainer.php">Manage Trainer</a>
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