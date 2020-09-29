<?php


use PHPUnit\Framework\TestCase;

class dishesTest extends TestCase
{
public function testGetDish(){
    include('\Users\Asus\phpunittest\dishes.php');

    $dishes1=new dishes(1,2,"chicken");

    $this->assertEquals('1 2 chicken', $dishes1->getDish());
}
}
