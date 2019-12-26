<?php
include_once './Model/TraineeMod.php';
include_once './Model/CategoryMod.php';
include_once './Model/CourseMod.php';
include_once './Model/ClassroomMod.php';
include_once './Model/TrainerMod.php';
include_once './Model/DetailMod.php';

class Controller{
    //TODO:Manage Trainee
    public function addTrainee(){
         $msg=null;
         if (isset($_POST['Name'])){
                //MUST DATA DO: Id,addName, DateOfBirth, Address, Description, Lang, Toeic, UserName, Pass)
             $id=$_POST['Id'];
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
            $result=$conn->query("INSERT INTO trainee (Id, Name, DateOfBirth, Address, Description, Lang, Toeic, UserName, Pass) VALUES ('$id' ,'$name', '$date', '$address', '$descript', '$lang', '$toeic', '$user', '$pass')");
            if(!$result){
                $msg="Adding fail!";
            }else{
                $msg="Adding successfully";
            }

             header("Location: ./manage_trainee.php");
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
        //TODO: Id, Name, UserName, Pass
        $msg=null;
        if (isset($_POST['Name'])){
            $name=$_POST['Name'];
            $user=$_POST['UserName'];
            $pass=$_POST['Pass'];
            //TODO: do query insert data
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $result=$conn->query("INSERT INTO trainer (Id, Name,UserName, Pass) VALUES (NULL ,'$name', '$user', '$pass')");
            if(!$result){
                $msg="Adding fail!";
            }else{
                $msg="Adding successfully";
            }

            header("Location: ./manage_trainer.php");
        }else{
            include_once './View/TrainerAdd.php';
        }
    }
    public function manageTrainer(){
        if (isset($_GET['dtrainertid'])){
            $did=$_GET['dtrainertid'];
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $conn->query("DELETE FROM Trainer WHERE Id = '$did'");
            header("Location: ./manage_trainer.php");
        }elseif (isset($_GET['utrainerid'])){
            $uid=$_GET['utrainerid'];
            //TODO: get trainer
            $model=new TrainerMod();
            $trainer=$model->getDetailTrainer($uid);

            include_once ('./View/TrainerUpdate.php');
        }elseif (isset($_POST['idTrainerU'])){
            $id=$_POST['idTrainerU'];
            $name=$_POST['Name'];
            $user=$_POST['UserName'];
            $pass=$_POST['Pass'];

            //TODO: do query update data
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $conn->query("UPDATE Trainer SET Name='$name',UserName='$user', Pass='$pass' WHERE Id = '$id'");
            header("Location: ./manage_trainer.php");
        }
        else
        {
            $model=new TrainerMod();
            $arrData=$model->getAllTrainer();

            include_once ('./View/TrainerList.php');
        }
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

    public function addClass(){
        $msg=null;
        //TODO: Id,Name,Pass,Topic,Description, IdCourse,IdTrainer
        if(isset($_POST['className'])){
            $name=$_POST['className'];
            $pass=$_POST['Pass'];
            $topic=$_POST['Topic'];
            $des=$_POST['Description'];
            $idcourse=$_POST['IdCourse'];
            $idtrainer=$_POST['IdTrainer'];
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $result=$conn->query("INSERT INTO class (Id,Name,Pass,Topic,Description, IdCourse,IdTrainer) VALUES (NULL ,'$name','$pass','$topic','$des','$idcourse','$idtrainer')");

            if(!$result){
                $msg='Adding class fail!';
            }else{
                $msg='Adding class success!';
                $connDb=new ConnDb();
                $conn=$connDb->getConn();
                $query="SELECT c.Id as Id,c.Name as Name,cat.Name as Category
                    FROM Course as c
                    INNER JOIN Category as cat ON c.IdCategory=cat.Id
                    ";
                $courseinfo=$conn->query($query);
                $trainerinfo=$conn->query("SELECT Id,Name FROM Trainer");

                include_once './View/ClassAdd.php';
            }
        }else{
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $query="SELECT c.Id as Id,c.Name as Name,cat.Name as Category
                    FROM Course as c
                    INNER JOIN Category as cat ON c.IdCategory=cat.Id
                    ";
            $courseinfo=$conn->query($query);
            $trainerinfo=$conn->query("SELECT Id,Name FROM Trainer");

            include_once './View/ClassAdd.php';
        }

    }
    public function manageClass(){
        if(isset($_GET['seecourseid'])){
            $modal=new ClassroomMod();
            $arrClass=$modal->getClassByCourseId($_GET['seecourseid']);
            include_once './View/ClassList.php';

        }
        if (isset($_GET['dclassid'])){
            $did=$_GET['dclassid'];
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $conn->query("DELETE FROM Class WHERE Id = '$did'");
            header("location: ./manage_course.php");
        }elseif (isset($_GET['vclassid'])){
            $modal=new ClassroomMod();
            $class=$modal->getDetailClassById($_GET['vclassid']);
            include_once './View/ClassDetail.php';
        }else{
            return;
        }

    }

    public function classList(){
        $msg=null;
        if(isset($_GET['courseid'])){
            $modal=new ClassroomMod();
            $arrClass=$modal->getClassByCourseId($_GET['courseid']);
            include_once './View/ClassLoad.php';

        }elseif (isset($_GET['enclassid']) && isset($_GET['course'])&& isset($_GET['name'])){
            $idclass=$_GET['enclassid'];
            $name=$_GET['name'];
            $course=$_GET['course'];
            include_once './View/ClassResign.php';
        }elseif (isset($_GET['func']) && isset($_POST['passwd'])){
            $cid=$_GET['func'];
            $pass=$_POST['passwd'];
            $modal=new ClassroomMod();
            $classinfo=$modal->getDetailClassById($cid);

            if($pass==$classinfo->pass){
                $cid=$_POST['IdClass'];
                $idtrainee=$_SESSION['tid'];
                $connDb=new ConnDb();
                $conn=$connDb->getConn();
                $conn->query("INSERT INTO detail (Id,IdTrainee,IdClass) VALUES (NULL ,'$idtrainee','$cid') ");
                $msg="Resign Success!";
            }else{
                $msg="Resign Fail!";
            }
            include_once './View/ClassHandelResign.php';
        }

    }
    public function detailView(){
            $id=$_SESSION['tid'];
            $modal=new DetailMod();
            //need session
            $arrDetail=$modal->getAllDetailByTraineeId($id);
            include_once './View/DetailShow.php';


    }
    public function detailClassView(){
        if(isset($_GET['classname'])){
            $name=$_GET['classname'];
            $idtrainee=$_SESSION['tid'];
            $modal=new DetailMod();
            //need session
            $detail=$modal->getDetailCLassByClassName($idtrainee,$name);
            include_once './View/DetailShowClass.php';
        }

    }

    //TODO:this is for security purpose
    public function sanitizeString($str) {
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $str = strip_tags($str); //remove html tags
        $str = htmlentities($str); //encode html (for special characters)
        if (get_magic_quotes_gpc()){
            $str = stripslashes($str); //Don't use the magic quotes
        }
        $str=$conn->real_escape_string($str);
        return $str;
    }

    public function adminLogin(){
        $error = $user = $pass=$name = "";
        if (isset($_POST['user'])) {
            $user = $this->sanitizeString($_POST['user']);
            $pass = $this->sanitizeString($_POST['pass']);
            if ($user == "" || $pass == "") {
                $error = "Not all fields was entered";
            } else {
                $connDb=new ConnDb();
                $conn=$connDb->getConn();
                $result=$conn->query("SELECT * FROM AdAccount WHERE UserName = '$user' AND Pass='$pass'");
                foreach ($result as $item){
                    $name=$item['Name'];
                    break;
                }
                if ($result->num_rows == 0) {
                    $error = "Username/Password invalid";
                } else {
                    session_start();
                    $_SESSION['adId'] = mysqli_fetch_array($result)['Id'];
                    $_SESSION['name'] = $name;
                    $_SESSION['pass'] = $pass;
                    header("Location: index_admin.php");
                }
            }
        }
    }
    public function traineeLogin(){
        $error = $user = $pass= $name= $trainee  = "";
        if (isset($_POST['user'])) {
            $user = $this->sanitizeString($_POST['user']) ;
            $pass = $this->sanitizeString($_POST['pass']) ;
            if ($user == "" || $pass == "") {
                $error = "Not all fields was entered";
            } else {
                $connDb=new ConnDb();
                $conn=$connDb->getConn();
                $result=$conn->query("SELECT Id,Name,Pass FROM Trainee WHERE UserName = '$user' AND Pass='$pass'");
                foreach ($result as $item){
                    $trainee=$item['Id'];
                    $name=$item['Name'];
                    break;
                }
                if ($result->num_rows == 0) {
                    $error = "Username/Password invalid";
                } else {
                    session_start();
                    $_SESSION['tid'] =$trainee;
                    $_SESSION['name'] = $name;
                    $_SESSION['pass'] = $pass;
                    header("Location: index_trainee.php");
                }
            }
        }
    }
    public function trainerLogin(){
        $error = $user = $pass= $name = "";
        if (isset($_POST['user'])) {
            $user = $this->sanitizeString($_POST['user']);
            $pass = $this->sanitizeString($_POST['pass']);
            if ($user == "" || $pass == "") {
                $error = "Not all fields was entered";
            } else {
                $connDb=new ConnDb();
                $conn=$connDb->getConn();
                $result=$conn->query("SELECT Name,Pass FROM Trainer WHERE UserName = '$user' AND Pass='$pass'");
                foreach ($result as $item){
                    $name=$item['Name'];
                    break;
                }
                if ($result->num_rows == 0) {
                    $error = "Username/Password invalid";
                } else {
                    session_start();
                    $_SESSION['name'] = $name;
                    $_SESSION['pass'] = $pass;
                    header("Location: index_trainer.php");
                }
            }
        }
    }
    public function logout(){
        if(isset($_GET['logout'])){
            session_start();
            $_SESSION = array();
            unset($_SESSION);
            session_destroy();
            header("Location:index.php");
            exit;
        }
    }
}
?>