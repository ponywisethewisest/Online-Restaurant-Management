<?php


use PHPUnit\Framework\TestCase;

class userTest extends TestCase
{

public function testSetId(){

    include('\Users\Asus\phpunittest\user.php');
    $user=new user('may',12,12345,'world');

    $this->assertEquals(null, $user->setId(13));
}

public function testGetId(){

    include('\Users\Asus\phpunittest\user.php');
    $user=new user('may',12,12345,'world');

    $this->assertEquals(12, $user->getId());
}
}
