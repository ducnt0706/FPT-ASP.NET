<?php
include_once './Model/TraineeMod.php';
include_once './Model/CategoryMod.php';
include_once './Model/CourseMod.php';

class Controller{
    //TODO:Manage Trainee
    public function addTrainee(){
         $msg=null;
         if (isset($_POST['Name'])){
                //MUST DATA DO: addName, DateOfBirth, Address, Description, Lang, Toeic, UserName, Pass)
            $name=$_POST['Name'];
            $date=$_POST['DateOfBirth'];
            $address=$_POST['Address'];
            $descript=$_POST['Description'];
            $lang=$_POST['Lang'];
            $toeic=$_POST['Toeic'];
            $user=$_POST['UserName'];
            $pass=$_POST['Pass'];

            //TODO: do query update data
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $result=$conn->query("INSERT INTO trainee (Id, Name, DateOfBirth, Address, Description, Lang, Toeic, UserName, Pass) VALUES (NULL ,'$name', '$date', '$address', '$descript', '$lang', '$toeic', '$user', '$pass')");
            if(!$result){
                $msg="Adding fail!";
            }else{
                $msg="Adding successfully";
            }

            include_once './View/TraineeAdd.php';
        }else{
             include_once './View/TraineeAdd.php';
         }
    }
    public function manageTrainee(){
        if(isset($_GET['vtraineeid'])){
            $model=new TraineeMod();
            $data=$model->getDetailTrainee($_GET['vtraineeid']);

            include_once ('./View/TraineeDetail.php');
        }elseif (isset($_GET['dtraineetid'])){
            $did=$_GET['dtraineetid'];
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $conn->query("DELETE FROM Trainee WHERE Id = '$did'");
            header("Location: ./manage_trainee.php");
        }elseif (isset($_GET['utraineeid'])){
            $uid=$_GET['utraineeid'];
            //TODO: get trainee
            $model=new TraineeMod();
            $trainee=$model->getDetailTrainee($uid);

            include_once ('./View/TraineeUpdate.php');
        }elseif (isset($_POST['idTraineeU'])){
            //MUST DATA DO:Id, Name, DateOfBirth, Address, Description, Lang, Toeic, UserName, Pass)
            $id=$_POST['idTraineeU'];
            $name=$_POST['Name'];
            $date=$_POST['DateOfBirth'];
            $address=$_POST['Address'];
            $descript=$_POST['Description'];
            $lang=$_POST['Lang'];
            $toeic=$_POST['Toeic'];
            $user=$_POST['UserName'];
            $pass=$_POST['Pass'];

            //TODO: do query update data
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $conn->query("UPDATE Trainee SET Name='$name', DateOfBirth='$date', Address='$address', Description='$descript', Lang='$lang', Toeic='$toeic', UserName='$user', Pass='$pass' WHERE Id = '$id'");
            header("Location: ./manage_trainee.php");
        }
        else
        {
            $model=new TraineeMod();
            $arrData=$model->getAllTrainee();

            include_once ('./View/TraineeList.php');
        }
    }
    //TODO: Manage Trainer
    public function addTrainer(){

    }
    public function manageTrainer(){

    }
    //TODO:
    public function addCategory(){

    }
    public function manageCategory(){
        $model=new CategoryMod();
        $arrData=$model->getAllCategory();

    }

    public function addCourse(){

    }
    public function manageCourse(){

    }
}
?>