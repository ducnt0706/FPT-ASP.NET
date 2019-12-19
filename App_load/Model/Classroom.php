<?php


class Classroom
{
    public $id;
    public $name;
    public $topic;
    public $descript;
    public $idCourse;
    public $idTrainer;
    //TODO: Id,Name,Topic,Description, IdCourse,IdTrainer

    /**
     * Classroom constructor.
     * @param $id
     * @param $name
     * @param $topic
     * @param $descript
     * @param $idCourse
     * @param $idTrainer
     */
    public function __construct($id, $name, $topic, $descript, $idCourse, $idTrainer)
    {
        $this->id = $id;
        $this->name = $name;
        $this->topic = $topic;
        $this->descript = $descript;
        $this->idCourse = $idCourse;
        $this->idTrainer = $idTrainer;
    }

}
?>