<?php

abstract class HighWay
{

    //Properties
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    //Construct
    // public function __construct(int $nbLane, int $maxSpeed)
    // {
    //     $this->nbLane = $nbLane;
    //     $this->maxSpeed = $maxSpeed;        
    // }

    //Getters and Setters
    /**
     * Get the value of currentVehicles
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     *
     * @return  self
     */
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles[] = $currentVehicles;

        return $this;
    }

    /**
     * Get the value of nbLane
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    // Abstract Methods
    abstract public function addVehicle(Vehicle $vehicle);
}
