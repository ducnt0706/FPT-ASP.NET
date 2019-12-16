<?php
include_once 'Trainee.php';
include_once 'connDb.php';
class TraineeMod
{
    public function __construct()
    {
    }

    public function getAllTrainee(){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $data=$conn->query("SELECT * FROM trainee");
        //Id, Name, DateOfBirth, Address, Description, Lang, Toeic, UserName, Pass
        $arrTrainee=array();
        foreach ($data as $row){
            $id=$row['Id'];
            $name=$row['Name'];
            $date=$row['DateOfBirth'];
            $address=$row['Address'];
            $des=$row['Description'];
            $lang=$row['Lang'];
            $toeic=$row['Toeic'];
            $user=$row['UserName'];
            $pass=$row['Pass'];
            array_push($arrTrainee,new Trainee($id,$name,$date,$address,$des,$lang,$toeic,$user,$pass));
        }
        return $arrTrainee;
    }
}
?>