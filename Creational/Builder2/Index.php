<?php


require_once('Pizza.php');
require_once('PizzaBuilder.php');

$pizzaRecipe = (new \Builder2\PizzaBuilder(9))->cheese(true)
    ->pepperoni(true)
    ->bacon(true)
    ->build();

$order = new \Builder2\Pizza($pizzaRecipe);
echo $order->show();
