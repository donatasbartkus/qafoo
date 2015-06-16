<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

namespace OXID;

class Fighter
{
    /** @var Life */
    private $life;

    /** @var Damage */
    private $damage = 0;

    /**
     * @param Life $life
     * @param Damage $damage
     */
    public function __construct($life, $damage) {
        $this->life = $life;
        $this->damage = $damage;
    }

    /**
     * @return Life
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @return int
     */
    public function getDamage()
    {
        return $this->damage;
    }


}