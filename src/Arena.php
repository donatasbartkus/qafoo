<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

require_once("vendor/autoload.php");

$life = new \OXID\Life();
$life->setLife(10);

$damage = new \OXID\Damage();
$damage->setDamage(20);

$defence = new \OXID\Defence();
$defence->setDefence(15);

$firstFighter = new \OXID\Fighter($life, $damage, $defence);

$secondFighter = new \OXID\Fighter($life, $damage, $defence);

$firstFighterList = new \OXID\FighterList();
$firstFighterList->addFighter($firstFighter);
$firstFighterList->addFighter($secondFighter);
