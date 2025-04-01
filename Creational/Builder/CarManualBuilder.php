<?php

class CarManualBuilder implements IBuilder
{
    private IManual $manual;

    public function __construct()
    {
        $this->reset();
    }

    function reset()
    {
        // TODO: Implement reset() method.
    }

    function setSeats()
    {
        // TODO: Implement setSeats() method.
    }

    function setEngine()
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

    function getProduct():Manual
    {

    }
}