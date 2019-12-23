<?php
require_once './functions.php';
// require_once './index.php';

$error = $user = $pass = "";

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    if ($user == "" || $pass == "") {
        $error = "Not all fields was entered";
    } else {
        $token = passwordToToken($pass);
        $result = queryMysql("SELECT * FROM adaccount WHERE UserName = '$user' AND Pass = '$token' AND status='1'");
        if ($result->num_rows == 0) {
            $error = "Username/Password invalid";
        } else {
            session_start();
            $_SESSION['uId'] = mysqli_fetch_array($result)[0];
            $_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			
            header("Location: index.php"); //redirect to index.php
            die("You already log in. Please <a href='index2.php'>click here</> to continue.");
        }
    }
}
?>