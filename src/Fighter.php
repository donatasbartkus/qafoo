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
    private $damage;

    /** @var Defence */
    private $defence;

    /**
     * @param Life $life
     * @param Damage $damage
     * @param Defence $defence
     */
    public function __construct($life, $damage, $defence) {
        $this->life = $life;
        $this->damage = $damage;
        $this->defence = $defence;
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
     * @return int
     */
    public function getDefence()
    {
        return $this->defence;
    }
}
