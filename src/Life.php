<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

namespace OXID;

class Life
{
    /** @var int */
    private $life = 0;

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
}