<?php

 class yourOrders{
      public $d_id;
      public $r_id;
      public $price;

      public function __construct($d_id, $r_id,$price)
      {
          $this->d_id=$d_id;
          $this->r_id=$r_id;
          $this->price=$price;
      }

      public function getYourOrder(){
          return "$this->d_id $this->r_id $this->price";
      }
 }