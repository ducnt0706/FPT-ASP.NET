<?php
include_once 'connDb.php';
include_once './Model/Detail.php';

class DetailMod
{
    public function getAllDetailByTraineeId($id){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $query="SELECT cl.Name as className,cl.Topic as Topic, cl.Description as Description, c.Name as courseName,t.Name trainerName
                From Detail as de
                INNER JOIN Class as cl ON de.IdClass=cl.Id
                INNER JOIN course as c ON cl.IdCourse=c.Id
                INNER JOIN trainer as t ON cl.IdTrainer=t.Id
                WHERE de.IdTrainee='$id'";
        $data=$conn->query($query);
        $arrDetail=array();
        foreach ($data as $row){
            //TODO:className,Topic, Description, courseName, trainerName
            $className=$row['className'];
            $topic=$row['Topic'];
            $descript=$row['Description'];
            $course=$row['courseName'];
            $trainer=$row['trainerName'];
            array_push($arrDetail,new Detail($className,$topic,$descript,$course,$trainer));
        }
        return $arrDetail;
    }

    public function getDetailCLassByClassName($id,$name){
        $arrDetail=$this->getAllDetailByTraineeId($id);
        $item=null;
        foreach ($arrDetail as $detail){
            if($name==$detail->className){
                $item=$detail;
                break;
            }
        }
        return $item;
    }
}