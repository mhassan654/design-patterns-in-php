<?php


/**
 * The abstrsct factory interface declares a set of methods that return
 * different abstract products. These products are called a family and are related
 * by a high-level them or concept.
 * Products of one family are usually able to collaborate among themeselves.
 * A family of products may have several variants, but the products of one
 * variant are incompatible with the products of another variant.
 *
 **/
interface GUIFactory
{
   public function createButton():Button;
   public function createCheckbox():Checkbox;
}


/**
 * concrete factories produce a family of products that belong to a single variant.
 * The factory guarantees that the resulting products are compatible.
 * Signatures of the concrete factory's methods return an abstract product, while inside
 * method a concrete product is instantiated.
 */
class WinFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}


/**
 * Each concrete factory has a corresponding product variant
 *
 */
class MacFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}


/**
 * Each distinct product of a product family should have a base interface.
 * All variants of the product must implement this interface
 */
interface Button{
    public function paint();
}


class WinButton implements Button{
    public function paint()
    {
       echo "paint windows button";
    }
}

class MacButton implements Button{
    public function paint()
    {
        return "paint mac os button";
    }
}

interface Checkbox{
    public function paint();
}

class WinCheckbox implements Checkbox
{
    public function paint()
    {
        echo "paint windows checkbox";
    }
}


class MacCheckbox implements Checkbox
{
    public function paint()
    {
        echo "paint mac os checkbox";
    }
}


