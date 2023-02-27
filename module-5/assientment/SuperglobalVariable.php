<!DOCTYPE html>
<html>
  <head>
    <title>Input Name and Email Form</title>
  </head>
  <body>
    <?php
      // include the Person class definition
      include 'Person.php';
      
      // check if the form has been submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // retrieve the name and email values from the form
        $name = $_POST["name"];
        $email = $_POST["email"];
        
        // create a new instance of the Person class
        $person = new Person();
        
        // set the name and email properties using the setName() and setEmail() methods
        $person->setName($name);
        $person->setEmail($email);
        
        // display the properties using the getName() and getEmail() methods
        echo "Name: " . $person->getName() . "<br>";
        echo "Email: " . $person->getEmail() . "<br>";
      }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>
