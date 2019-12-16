<?php


class Trainee
{
    //Id, Name, DateOfBirth, Address, Description, Lang, Toeic, UserName, Pass
    private $id;
    private $name;
    private $date;
    private $address;
    private $descript;
    private $lang;
    private $toeic;
    private $user;
    private $pass;

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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getDescript()
    {
        return $this->descript;
    }

    /**
     * @param mixed $descript
     */
    public function setDescript($descript)
    {
        $this->descript = $descript;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @return mixed
     */
    public function getToeic()
    {
        return $this->toeic;
    }

    /**
     * @param mixed $toeic
     */
    public function setToeic($toeic)
    {
        $this->toeic = $toeic;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

}
?>