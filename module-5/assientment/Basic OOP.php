<?php

class Person {
  private $name;
  private $email;
  
  public function setName($name) {
    $this->name = $name;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getEmail() {
    return $this->email;
  }
}

// create an instance of the Person class and set the name and email properties
$person = new Person();
$person->setName("John Smith");
$person->setEmail("john.smith@example.com");

// display the properties using the getName() and getEmail() methods
echo "Name: " . $person->getName() ;
echo "Email: " . $person->getEmail() ;

?>
