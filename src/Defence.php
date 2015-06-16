<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

namespace OXID;

class Defence
{
    /** @var int */
    private $defence = 0;

    /**
     * @return int
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * @param int $defence
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;
    }
}