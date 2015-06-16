<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

use OXID\Fighter;

class FighterTest extends \PHPUnit_Framework_TestCase
{
    public function testSetGetLife()
    {
        $amountOfLife = 10;
        $myFirstFighter = new Fighter();
        $myFirstFighter->setLife($amountOfLife);
        $this->assertEquals($amountOfLife, $myFirstFighter->getLife());
    }
}
