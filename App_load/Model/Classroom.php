<?php


class Classroom
{
    public $id;
    public $name;
    public $topic;
    public $descript;
    public $course;
    public $trainer;
    //TODO: Id,Name,Topic,Description, Course,Trainer

    /**
     * Classroom constructor.
     * @param $id
     * @param $name
     * @param $topic
     * @param $descript
     * @param $Course
     * @param $Trainer
     */
    public function __construct($id, $name, $topic, $descript, $course, $trainer)
    {
        $this->id = $id;
        $this->name = $name;
        $this->topic = $topic;
        $this->descript = $descript;
        $this->course = $course;
        $this->trainer = $trainer;
    }

}
?>