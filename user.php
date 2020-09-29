<?php

class user{
    public $name;
    public $id;
    public $phone;
    public $address;

    public function __construct($name, $id, $phone, $address){
        $this->name=$name;
        $this->id=$id;
        $this->phone=$phone;
        $this->address=$address;
    }
    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;

    }

    public function getId(){
        return $this->id;
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
}