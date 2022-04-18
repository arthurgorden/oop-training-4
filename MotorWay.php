<?php
// require_once 'Vehicle.php';
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    //Properties
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    //Methods
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            return 'This type of vehicle is not authorized on this type of highway';
        } else {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
