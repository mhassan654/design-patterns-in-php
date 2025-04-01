<?php

class CarBuilder implements IBuilder
{
    private Car $car;

    public function __construct()
    {
        $this->reset();
    }

    function reset()
    {
       $this->car = new Car();
    }

    function setSeats($number)
    {
        // TODO: Implement setSeats() method.
    }

    function setEngine($boolean)
    {
        // TODO: Implement setEngine() method.
    }

    function setTripComputer()
    {
        // TODO: Implement setTripComputer() method.
    }

    function setGPS()
    {
        // TODO: Implement setGPS() method.
    }

    function getProduct():Car
    {
        $product = $this->car;
        $this->reset();
        return $product;
    }
}