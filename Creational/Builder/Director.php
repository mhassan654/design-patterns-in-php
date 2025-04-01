<?php

class Director
{
    private IBuilder $builder;

    function setBuilder(IBuilder $builder)
    {
        $this->builder=$builder;
    }

    function constructSportsCar(IBuilder $builder)
    {
        $builder->reset();
        $builder->setSeats(2);
        $builder->setEngine(new SportEngine());
        $builder->setTripComputer(true);
        $builder->setGPS(true);
    }

    function constructSUV(IBuilder $builder)
    {
        $builder->reset();
        $builder->setSeats(2);
        $builder->setEngine(new SportEngine());
        $builder->setTripComputer(true);
        $builder->setGPS(true);
    }

}