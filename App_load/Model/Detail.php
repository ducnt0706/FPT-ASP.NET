<?php


class Detail
{
    //TODO:className,Topic, Description, courseName, trainerName
    public $className;
    public $topic;
    public $descript;
    public $courseName;
    public $trainerName;

    public function __construct($className, $topic, $descript, $courseName, $trainerName)
    {
        $this->className = $className;
        $this->topic = $topic;
        $this->descript = $descript;
        $this->courseName = $courseName;
        $this->trainerName = $trainerName;
    }


}