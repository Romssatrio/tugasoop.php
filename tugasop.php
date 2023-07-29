<?php

class Car {
    // Properties (attributes)
    public $brand;
    public $model;
    public $color;

    // Methods (behaviors)
    public function startEngine() {
        return "The {$this->brand} {$this->model}'s engine is starting...";
    }

    public function drive() {
        return "Driving the {$this->color} {$this->brand} {$this->model}.";
    }
}

// Creating objects (instances of the Car class)
$car1 = new Car();
$car1->brand = "Toyota";
$car1->model = "Corolla";
$car1->color = "Blue";

$car2 = new Car();
$car2->brand = "Ford";
$car2->model = "Mustang";
$car2->color = "Red";

// Using methods of the objects
echo $car1->startEngine(); // Output: The Toyota Corolla's engine is starting...
echo "<br>";
echo $car2->drive(); // Output: Driving the Red Ford Mustang.
?>
In this example, we created a class called Car with properties (brand, model, color) and methods (startEngine(), drive()). We then created two instances of the Car class ($car1 and $car2) and accessed their properties and methods using the arrow notation (->).

This is just a basic introduction to OOP in PHP. In more complex applications, OOP helps in organizing code, promoting reusability, and making it easier to maintain and extend the software. There are many other OOP concepts like inheritance, encapsulation, and polymorphism that you can explore to enhance your understanding of OOP in PHP.





