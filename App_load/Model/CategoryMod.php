<?php

include_once 'connDb.php';
include_once 'Category.php';
class CategoryMod
{
    public function getAllCategory(){
        $connDb=new ConnDb();
        $conn=$connDb->getConn();
        $data=$conn->query("SELECT * FROM category");
        //TODO: Id, Name
        $arrCategory=array();
        foreach ($data as $row){
            $id=$row['Id'];
            $name=$row['Name'];
            array_push($arrCategory,new Category($id,$name));
        }
        return $arrCategory;
    }

}
?>