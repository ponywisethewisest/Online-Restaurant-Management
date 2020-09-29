<?php


use PHPUnit\Framework\TestCase;

class restaurantTest extends TestCase
{
    public function testReturnsRestaurant()
    {
        include('\Users\Asus\phpunittest\restaurants.php');



        $restaurants1 = new restaurants;

        $restaurants1->title = "hope";
        $restaurants1->r_id = 12;
        $restaurants1->c_id = 14;

        $this->assertEquals('hope 12 14', $restaurants1->getRestaurant());

    }

}
