<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

namespace OXID;

class Fighter
{
    /** @var int */
    private $life = 0;

    /** @var int */
    private $damage = 0;

    /**
     * @return int
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param int $life
     */
    public function setLife($life)
    {
        $this->life = $life;
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