<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

namespace OXID;

class FighterList
{
    /** @var array */
    private $fighters = array();

    /**
     * @return array
     */
    public function getFighters()
    {
        return $this->fighters;
    }

    /**
     * @param Fighter $fighters
     */
    public function addFighter($fighters)
    {
        $this->fighters[] = $fighters;
    }
}
