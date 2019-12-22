<?php


class Detail
{
    public $name;
    public $topic;
    public $descript;

    /**
     * Detail constructor.
     * @param $name
     * @param $topic
     * @param $descript
     */
    public function __construct($name, $topic, $descript)
    {
        $this->name = $name;
        $this->topic = $topic;
        $this->descript = $descript;
    }


}