<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

use OXID\Fighter;
use OXID\Life;

class FighterTest extends \PHPUnit_Framework_TestCase
{
    public function testSetGetLife()
    {
        $amountOfLife = 10;
        $life = new Life();
        $life->setLife($amountOfLife);

        $myFirstFighter = new Fighter($life);
        $this->assertSame($life, $myFirstFighter->getLife());
    }

    public function testSetGetDamage()
    {
        $amountOfLife = 10;
        $life = new Life();
        $life->setLife($amountOfLife);

        $amountOfDamage = 10;
        $myFirstFighter = new Fighter($life);
        $myFirstFighter->setDamage($amountOfDamage);
        $this->assertEquals($amountOfDamage, $myFirstFighter->getDamage());
    }
}
