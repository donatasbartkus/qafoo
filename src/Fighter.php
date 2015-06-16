<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

namespace OXID;

class Fighter
{
    /** @var Life */
    private $life;

    /** @var int */
    private $damage = 0;

    /**
     * @param Life $life
     */
    public function __construct($life) {
        $this->life = $life;
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

    /**
     * @param int $damage
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }


}