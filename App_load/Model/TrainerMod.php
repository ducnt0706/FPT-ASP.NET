<?php
include_once 'Trainer.php';
include_once 'connDb.php';
class TrainerMod{
    public function __construct(){}

    public function getAllTrainer(){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $data=$conn->query("SELECT * FROM trainer");
        //TODO: Id, Name, UserName, Pass
        $arrTrainer=array();
        foreach ($data as $row){
            $id=$row['Id'];
            $name=$row['Name'];
            $user=$row['UserName'];
            $pass=$row['Pass'];
            array_push($arrTrainer,new Trainer($id,$name,$user,$pass));
        }
        return $arrTrainer;
    }
    public function getDetailTrainer($tid){
        $allTrainer=$this->getAllTrainer();
        $trainer=null;
        foreach ($allTrainer as $train){
            if($tid==$train->id){
                $trainer=$train;
                break;
            }
        }
        return $trainer;
    }
}
?>
