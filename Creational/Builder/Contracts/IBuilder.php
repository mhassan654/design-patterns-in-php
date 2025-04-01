<?php

interface IBuilder
{
    function reset();
    function setSeats($number);

    function setEngine($engine);
    function setTripComputer($boolean);

    function setGPS($boolean);
}