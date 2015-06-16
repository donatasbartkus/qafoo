<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

$life = new \OXID\Life();
$life->setLife(10);

$damage = new \OXID\Damage();
$damage->setDamage(20);

$defence = new \OXID\Defence();
$defence->setDefence(15);

$fighter = new \OXID\Fighter($life, $damage, $defence);