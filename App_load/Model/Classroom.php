<?php


class Classroom
{
    public $id;
    public $name;
    public $pass;
    public $topic;
    public $descript;
    public $course;
    public $trainer;
    //TODO: Id,Name,Pass,Topic,Description, IdCourse,IdTrainer

    /**
     * Classroom constructor.
     * @param $id
     * @param $name
     * @param $pass
     * @param $topic
     * @param $descript
     * @param $course
     * @param $trainer
     */
    public function __construct($id, $name, $pass, $topic, $descript, $course, $trainer)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pass = $pass;
        $this->topic = $topic;
        $this->descript = $descript;
        $this->course = $course;
        $this->trainer = $trainer;
    }


}
?>