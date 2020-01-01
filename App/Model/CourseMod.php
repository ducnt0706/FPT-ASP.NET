<?php
include_once 'connDb.php';
include_once 'Course.php';
class CourseMod
{
    public function getAllCourse(){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $data=$conn->query("SELECT * FROM course");
        //TODO: Id, Name, Description, IdCategory
        $arrCourse=array();
        foreach ($data as $row){
            $id=$row['Id'];
            $name=$row['Name'];
            $descipt=$row['Description'];
            $idCategory=$row['IdCategory'];
            array_push($arrCourse,new Course($id,$name,$descipt,$idCategory));
        }
        return $arrCourse;
    }

    public function getCourseFromCategory($catid){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $data=$conn->query("SELECT * FROM course WHERE IdCategory='$catid'");
        //TODO: Id, Name, Description, IdCategory
        $arrCourse= array();
        foreach ($data as $row){
            $id=$row['Id'];
            $name=$row['Name'];
            $descipt=$row['Description'];
            $idCategory=$row['IdCategory'];
            array_push($arrCourse,new Course($id,$name,$descipt,$idCategory));
        }
        return $arrCourse;
    }
}
?>