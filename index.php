<?php

require_once 'bicycle.php';
$bike = new Bicycle();
//var_dump($bike);

$bike->color = 'blue';
$bike->currentSpeed = 0;
//var_dump($bike); // then, another dump.

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo '<br>';
echo '<br>';

require_once 'car.php';
$car = new Car('red', 5, 'electricity');

echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';
echo 'The car is '.$car->getColor().', has got 5 seats and works with '.$car->getEnergy().'.';