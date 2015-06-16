<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

namespace OXID;

class Damage
{
    /** @var int */
    private $damage = 0;

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