<?php
class CourseMod
{
    public function getAllCourse(){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $data=$conn->query("SELECT * FROM category");
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
    public function getDetailCourse($id){
        $allCourse=$this->getAllCourse();
        $detail=null;
        foreach ($allCourse as $item){
            if($id==$item->id){
                $detail=$item;
                break;
            }
        }
        return $detail;
    }
}
?>