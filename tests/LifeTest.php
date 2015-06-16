<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

use OXID\Life;

class LifeTest extends \PHPUnit_Framework_TestCase
{
    public function testSetGetLife()
    {
        $amountOfLife = 10;
        $myFirstFighter = new Life();
        $myFirstFighter->setLife($amountOfLife);
        $this->assertEquals($amountOfLife, $myFirstFighter->getLife());
    }
}
