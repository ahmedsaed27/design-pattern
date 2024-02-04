# Creational Design Patterns - Factory Method

## Overview

This repository exemplifies the Factory Method pattern, a creational design pattern implemented in PHP. In the context of logistics, the Factory Method pattern allows for creating different transportation methods.

## Factory Method Pattern

The Factory Method pattern is a creational design pattern that provides an interface for creating objects but leaves the choice of their type to the subclasses, creating an instance of a class in its superclass and allowing subclasses to alter the type of objects that will be created.

## Logistics Example

Imagine you have a logistics company that handles transportation using different methods, such as sea transport and land transport. Let's explore the PHP code:

## Project Structure

- **Creator:** Abstract class defining the factory method and an info method for displaying information.
- **Logistic:** Interface defining the `deliver` method for different logistics.
- **SeaLogistic:** Concrete implementation of the Creator class representing sea transport.
- **LandLogistic:** Concrete implementation of the Creator class representing land transport.

## Code Example

```php
<?php

function runTransport(Creator $creator)
{
    echo $creator->transportInfo();
    echo '<br>';
}

// Create and run SeaLogistic
runTransport(new SeaLogistic());

// Create and run LandLogistic
runTransport(new LandLogistic());
