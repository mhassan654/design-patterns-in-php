<?php

namespace Builder2;

//class Pizza
//{
//    private $size;
//    private $cheese;
//    private $pepperoni;
//    private $bacon;
//
//    public function __construct($size, $cheese,$pepperoni,$bacon)
//    {
//        $this->size =$size;
//        $this->cheese=$cheese;
//        $this->pepperoni=$pepperoni;
//        $this->bacon=$bacon;
//    }
//
//    public function show()
//    {
//        $recipe = $this->size . " inch pizza with the following";
//        $recipe .= $this->cheese ? "cheese, " : "";;
//        return $recipe;
//    }
//
//}

class Pizza
{
    private $size;
    private $cheese;
    private $pepperoni;
    private $bacon;

    public function __construct(PizzaBuilder $builder)
    {
        $this->size =$builder->size;
        $this->cheese=$builder->cheese;
        $this->pepperoni=$builder->pepperoni;
        $this->bacon=$builder->bacon;
    }

    public function show()
    {
        $recipe = $this->size . " inch pizza with the following";
        $recipe .= $this->cheese ? "cheese, " : "";
        $recipe .= $this->pepperoni ? "pepperoni, " : "";
        $recipe .= $this->bacon ? "bacon, ":"";
        return $recipe;
    }

}