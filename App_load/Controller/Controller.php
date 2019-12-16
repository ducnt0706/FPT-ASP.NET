<?php
include_once './Model/TraineeMod.php';
class Controller{
    public function loadTrainee(){
        if(isset($_GET['stid'])){

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