<?php
class dishes{
    public $d_id;
    public $r_id;
    public $title;

    public function __construct($d_id, $r_id, $title)
    {
        $this->d_id=$d_id;
        $this->r_id=$r_id;
        $this->title=$title;
    }


    public function addDish($title, $r_id, $d_id){
        $this->d_id=$d_id;
        $this->r_id=$r_id;
        $this->title=$title;
    }


    public function getDishId()
    {
        return $this->d_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDish(){
        return "$this->d_id $this->r_id $this->title";
    }
}