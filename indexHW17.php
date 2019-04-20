<?php
error_reporting(E_ALL);
require_once "PublicTraitHW17.php";
require_once "FreightTraitHW17.php";
require_once "AbstractChangeStateHW17.php";
require_once "TransportHW17.php";

$transportPlane = new TransportHW17();
echo "Type: Plane<br>";
$transportPlane->setMaxCount(121);
echo "Max count of passengers: " . $transportPlane->getMaxCount() . "<br>";
$transportPlane->loadPass(90);
echo "Total passengers after loading: " . $transportPlane->getActualPass() . "<br>";
$transportPlane->changeState('Fly');
echo "State: " . $transportPlane->getState() . "<br>";
$transportPlane->changeState('Load');
echo "State: " . $transportPlane->getState() . "<br>";
$transportPlane->loadPass(30);
echo "Total Passengers after loading: " . $transportPlane->getActualPass() . "<br>";
$transportPlane->changeState('Fly');
echo "State: " . $transportPlane->getState() . "<br>";
$transportPlane->changeState('Unload');
echo "State: " . $transportPlane->getState() . "<br>";
$transportPlane->removeAll();
echo "Vacant seats: " . $transportPlane->getVacantSeats() . "<br><hr>";

$transportTanker = new TransportHW17();
echo "Type: Tanker<br>";
$transportTanker->setMaxWeight(380);
echo "Max weight: " . $transportTanker->getMaxWeight() . "<br>";
$transportTanker->load(300);
echo "State: " . $transportTanker->getState() . "<br>Actual weight after loading: " . $transportTanker->getActualWeight() . "<br>";
$transportTanker->unload(20);
echo "State: " . $transportTanker->getState() . "<br>Actual weight after unloading: " . $transportTanker->getActualWeight() . "<br>";
$transportTanker->load(100);
echo "State: " . $transportTanker->getState() . "<br>Actual weight after loading: " . $transportTanker->getActualWeight() . "<br>";
$transportTanker->removeWeight();
echo "Action: Remove all. <br>Available space after full unloading: " . $transportTanker->getMaxWeight() . "<br><hr>";

$transportTruck = new TransportHW17();
echo "Type: Truck<br>";
$transportTruck->setMaxWeight(20);
echo "Max weight: " . $transportTruck->getMaxWeight() . "<br>";
$transportTruck->load(12);
echo "State: " . $transportTruck->getState() . "<br>Actual weight after loading: " . $transportTruck->getActualWeight() . "<br>";
$transportTruck->load(8);
echo "State: " . $transportTruck->getState() . "<br>Actual weight after loading: " . $transportTruck->getActualWeight() . "<br>";
$transportTruck->removeWeight();
echo "Action: Remove all. <br>Available space after full unloading: " . $transportTruck->getMaxWeight() . "<br>";