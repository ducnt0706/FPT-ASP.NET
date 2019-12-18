<?php


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
    public function getDetailCategory($id){
        $allCategory=$this->getAllCategory();
        $detail=null;
        foreach ($allCategory as $item){
            if($id==$item->id){
                $detail=$item;
                break;
            }
        }
        return $detail;
    }
}
?>