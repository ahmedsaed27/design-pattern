# Creational Design Patterns - Factory Method

## Overview

This repository explores the Factory Method pattern, a creational design pattern, implemented in PHP. Creational patterns deal with the process of object creation, providing flexibility and encapsulation in the instantiation process.

## Factory Method Pattern

The Factory Method pattern is a creational design pattern that provides an interface for creating objects but leaves the choice of their type to the subclasses, creating an instance of a class in its superclass and allowing subclasses to alter the type of objects that will be created.

### Project Structure

- `Src/Abstracts/Creator.php`: Abstract class defining the factory method and an info method for displaying information.
- `Src/App/Ships.php`: Concrete implementation of the Creator class representing a shipping method using Ships.
- `Src/App/Truck.php`: Concrete implementation of the Creator class representing a shipping method using Trucks.
- `Src/Contracts/Logistic.php`: Interface defining the `By` method for different logistics.

## Usage

To use the Factory Method pattern in your PHP code:

```php
<?php

require_once '../vendor/autoload.php';

use Src\Abstracts\Creator;
use Src\App\Ships;

function code(Creator $creator) {
    return $creator->info();
}

code(new Ships);
