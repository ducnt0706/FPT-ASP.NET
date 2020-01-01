<?php

class ConnDb{
    public function __construct()
    {
    }
    public function getConn(){
        $host = "localhost:3306";
        $user = "root";
        $pass = "";
        $db = "fptproject";
        $conn= new mysqli($host,$user,$pass,$db);
        if(!$conn){
            die("Connect fail"+mysqli_connect_errno());
        }
        return $conn;
    }
}

?>