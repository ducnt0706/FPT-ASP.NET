<?php
class Trainer{
    //TODO: Id, Name, UserName, Pass
    public $id;
    public $name;
    public $user;
    public $pass;

    /**
     * Trainer constructor.
     * @param $id
     * @param $name
     * @param $user
     * @param $pass
     */
    public function __construct($id, $name, $user, $pass)
    {
        $this->id = $id;
        $this->name = $name;
        $this->user = $user;
        $this->pass = $pass;
    }

}
?>