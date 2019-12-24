<?php


class Trainee
{
    //Id, Name, DateOfBirth, Address, Description, Lang, Toeic, UserName, Pass
    public $id;
    public $name;
    public $date;
    public $address;
    public $descript;
    public $lang;
    public $toeic;
    public $user;
    public $pass;

    public function __construct($id, $name, $date, $address, $descript, $lang, $toeic, $user, $pass)
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->address = $address;
        $this->descript = $descript;
        $this->lang = $lang;
        $this->toeic = $toeic;
        $this->user = $user;
        $this->pass = $pass;
    }



}
?>