<?php
include_once './Model/TraineeMod.php';
class Controller{
    public function loadTrainee(){
        if(isset($_GET['vtraineeid'])){
            $model=new TraineeMod();
            $data=$model->getDetailTrainee($_GET['vtraineeid']);

            include_once ('./View/TraineeDetail.php');
        }elseif (isset($_GET['dtraineetid'])){
            $did=$_GET['dtraineetid'];
            $connDb=new ConnDb();
            $conn=$connDb->getConn();
            $conn->query("DELETE FROM Trainee WHERE Id = '$did'");
            header("Location: ./index.php");
        }elseif (isset($_GET['utraineeid'])){
            $uid=$_GET['utraineeid'];

            include_once ('./View/TraineeUpdate.php');
        }
        else
        {
            $model=new TraineeMod();
            $arrData=$model->getAllTrainee();

            include_once ('./View/TraineeList.php');
        }
    }
}
?>