<?php
class Course
{
    public $id;
    public $name;
    public $descipt;
    public $idCategory;

    /**
     * Cource constructor.
     * @param $id
     * @param $name
     * @param $descipt
     * @param $idCategory
     */
    public function __construct($id, $name, $descipt, $idCategory)
    {
        $this->id = $id;
        $this->name = $name;
        $this->descipt = $descipt;
        $this->idCategory = $idCategory;
    }

}
?>