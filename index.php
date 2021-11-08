<?php
require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';
require 'MotorWay.php';

try{
    $car = new Car('green', 4, 'electric');
    $car->setParkBrake(true);
    var_dump($car->setParkBrake(true));
    echo 'Park Brake is ON';
    $car->start();

 } catch(Exception $e){
    var_dump($car->setParkBrake(false));
    echo 'Park Brake is OFF';
    echo '<br>';
 } finally {
    echo 'Ma voiture roule comme un donut !';
}


