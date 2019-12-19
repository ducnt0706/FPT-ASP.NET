<?php

include_once 'connDb.php';
include_once 'Classroom.php';
class ClassroomMod{
    public function getClassByCourseId($id){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $data=$conn->query("SELECT * FROM Class WHERE IdCourse='$id'");
        $arrClass=array();
        foreach ($data as $row){
            //TODO: Id,Name,Topic,Description, IdCourse,IdTrainer
            $id=$row['Id'];
            $name=$row['Name'];
            $topic=$row['Topic'];
            $description=$row['Description'];
            $idCourse=$row['IdCourse'];
            $idTrainer=$row['IdTrainer'];
            array_push($arrClass,new Classroom($id,$name,$topic,$description,$idCourse,$idTrainer));
        }
        return $arrClass;
    }
}
?>