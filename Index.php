<?php

require_once 'vendor/autoload.php';

// Include required classes (use autoloader in real projects)
//require_once '';
//require_once 'WinFactory.php';
//require_once 'MacFactory.php';
require_once 'Creational/AbstractFactory/GUIFactory.php';
require_once 'Creational/AbstractFactory/ApplicationConfigurator.php';

try {
    $configurator = new ApplicationConfigurator();
    $factory = $configurator->main(); // Gets the correct factory

    // Example usage:
    $button = $factory->createButton();
    $checkbox = $factory->createCheckbox();

    echo "Successfully created platform-specific UI components!";
} catch (RuntimeException $e) {
    die("Error: " . $e->getMessage());
} catch (Exception $e) {
}