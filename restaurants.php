<?php

class restaurants{

    public $title;
    public $r_id;
    public $c_id;
    public $email;
    public $phone;
    public $url;
    public $o_hr;
    public $c_hr;
    public $o_day;
    public $address;

    /**
     *public function __construct($title,$c_id,$r_id,$email,$phone,$url,$o_hr,$c_hr, $o_day,$address){
     *$this->title = $title;
     *$this->r_id = $r_id;
     *$this->c_id = $c_id;
     *$this->email = $email;
     *$this->phone = $phone;
     *$this->url = $url;
     *$this->o_hr = $o_hr;
     *$this->c_hr = $c_hr;
     *$this->o_day = $o_day;
     *$this->address = $address;
     *}
     * @param $title
     * @param $r_id
     * @param $c_id
     */

    public function addRestaurant($title, $r_id, $c_id){
        $this->title = $title;
        $this->r_id = $r_id;
        $this->c_id = $c_id;
    }

    public function getRestaurant(){
        echo $this->title;
       return "$this->title $this->r_id $this->c_id";
    }
 

}