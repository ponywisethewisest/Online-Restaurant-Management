<?php


use PHPUnit\Framework\TestCase;

class yourOrdersTest extends TestCase
{
    public function testGetYourOrder(){
        include('\Users\Asus\phpunittest\yourOrders.php');

        $yourOrder1=new yourOrders(1,2,100);

        $this->assertEquals('1 2 100', $yourOrder1->getYourOrder());
    }
}
