<?php

class Application
{

    public function makeCar()
    {
        $director = new Director();

        $carBuilder = new CarBuilder();
        $director->constructSportsCar($carBuilder);
        $car = $carBuilder->getProduct();

        $carManualBuilder = new CarManualBuilder();
        $director->constructSportsCar($carBuilder);

        $manual = $carBuilder->getProduct();
    }
}