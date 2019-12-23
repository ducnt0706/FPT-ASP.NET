<?php
session_start();
?>
<?php
include_once 'Controller/Controller.php';
$controll=new Controller();
$controll->logout();
?>
<div><button><a href="?logout">Logout</a></button></div>
<div>THis is admin</div>
<div>chao <?php echo $_SESSION['name'] ?></div>