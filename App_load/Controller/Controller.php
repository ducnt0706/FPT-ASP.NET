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

            //TODO: do query insert data
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

    //TODO: Add Category
    public function addCategory(){
        if(isset($_POST['aNameCat'])){

            $name=$_POST['aNameCat'];
            //TODO: do query insert data
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $conn->query("INSERT INTO category (Id, Name ) VALUES (NULL ,'$name')");

            header("location: ./manage_course.php");
        }
    }
    public function manageCategory(){
        if(isset($_GET['dcattid'])){
            $did=$_GET['dcattid'];
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $conn->query("DELETE FROM Category WHERE Id = '$did'");
            header("location: ./manage_course.php");
        }
    }

    public function addCourse(){
        if(isset($_GET['ucatid'])&&isset($_GET['ucatname'])){
            $idcat=$_GET['ucatid'];
            $namecat=$_GET['ucatname'];
            include_once './View/CourseAdd.php';
        }elseif (isset($_POST['aNameCourse'])){
            //TODO: Id, Name, Description, IdCategory
            $idCategory=$_POST['IdCategory'];
            $name=$_POST['aNameCourse'];
            $descipt=$_POST['Description'];
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $result=$conn->query("INSERT INTO course (Id, Name, Description, IdCategory ) VALUES (NULL ,'$name','$descipt','$idCategory')");
            if ($result){
                echo "<div>Adding Success</div>";
                echo "<br>";
                echo "<button class='btn btn-warning'><a class='text-decoration-none' href=\"manage_course.php\">Reload</a></button>";
            }
        }
        else{

        }
    }
    public function manageCourse(){
        if(isset($_GET['dcourseid'])){
            $did=$_GET['dcourseid'];
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $conn->query("DELETE FROM Course WHERE Id = '$did'");
            header("location: ./manage_course.php");
        }
    }
}
?>