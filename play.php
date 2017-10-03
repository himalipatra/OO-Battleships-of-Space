<?php

require_once __DIR__.'/lib/ship.php';

/**
 * @param Ship $someShip
 */
function printShipSummary($someShip)
{
    echo 'Ship Name: '.$someShip->getName();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

$myShip = new Ship();
$myShip->setName('Jedi Starship');
$myShip->setWeaponPower(10);
$myShip->setStrength(100);

$otherShip = new Ship();
$otherShip->setName('Imperial Shuttle');
$otherShip->setWeaponPower(5);
$otherShip->setStrength(50);

printShipSummary($myShip);
echo '<hr/>';
printShipSummary($otherShip);

echo '<hr/>';
if($myShip->doesGivenShipHaveMoreStrength($otherShip))
{
    echo $otherShip->getName(). ' has more strength';
} else {
    echo $myShip->getName(). ' has more strength';
}


