<?php

include_once 'connDb.php';
include_once 'Classroom.php';
class ClassroomMod{
    public function getClassByCourseId($id){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $query="SELECT cl.Id as Id,cl.Name as Name,cl.Pass as Pass,cl.Topic as Topic,cl.Description as Description,c.Name as Course ,t.Name as Trainer 
                FROM class as cl
                INNER JOIN Course as c ON cl.IdCourse=c.Id
                INNER JOIN Trainer as t ON cl.IdTrainer=t.Id
                WHERE c.Id='$id'";
        $data=$conn->query("$query");
        $arrClass=array();
        foreach ($data as $row){
            //TODO: Id,Name,Topic,Description, IdCourse,IdTrainer
            $id=$row['Id'];
            $name=$row['Name'];
            $pass=$row['Pass'];
            $topic=$row['Topic'];
            $description=$row['Description'];
            $course=$row['Course'];
            $trainer=$row['Trainer'];
            array_push($arrClass,new Classroom($id,$name,$pass,$topic,$description,$course,$trainer));
        }
        return $arrClass;
    }
    public function getDetailClassById($idclass){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $query="SELECT cl.Id as Id,cl.Name as Name,cl.Pass as Pass,cl.Topic as Topic,cl.Description as Description,c.Name as Course ,t.Name as Trainer 
                FROM class as cl
                INNER JOIN Course as c ON cl.IdCourse=c.Id
                INNER JOIN Trainer as t ON cl.IdTrainer=t.Id
                WHERE cl.Id='$idclass'";
        $data=$conn->query("$query");
        $item=null;
        foreach ($data as $row){
            //TODO: Id,Name,Topic,Description, IdCourse,IdTrainer
            $id=$row['Id'];
            $name=$row['Name'];
            $pass=$row['Pass'];
            $topic=$row['Topic'];
            $description=$row['Description'];
            $course=$row['Course'];
            $trainer=$row['Trainer'];
            $item=new Classroom($id,$name,$pass,$topic,$description,$course,$trainer);
        }
        return $item;
    }
}
?>