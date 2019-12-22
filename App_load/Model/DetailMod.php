<?php
include_once 'connDb.php';
include_once './Model/Detail.php';

class DetailMod
{
    public function getDetailByTraineeId($id){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $query="SELECT cl.Name as Name,cl.Topic as Topic, cl.Description as Description
                From Detail as de
                INNER JOIN Class as cl WHERE de.IdClass=cl.Id";
        $data=$conn->query($query);
        $item=null;
        foreach ($data as $row){
            //TODO: Id,
            $name=$row['Name'];
            $topic=$row['Topic'];
            $descript=$row['Description'];
            $item=new Detail($name,$topic,$descript);
        }
        return $item;
    }
}