<?php
class Person {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function __toString() {
    return "Name: {$this->name}, Age: {$this->age}\n";
  }
}

// Create a new Person object
$person = new Person('John', 30);

// Convert the Person object to a string
$str = strval($person);
echo $person;