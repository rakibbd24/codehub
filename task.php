<?php  
//Task 1: HTML Basics

//


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Thi is the form</title>
</head>
<body>


<style>
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  font-size: 18px;
}

label {
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"] {
  padding: 5px;
  margin-bottom: 20px;
  font-size: 18px;
  border: 2px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>

<form method="POST" action="<?PHP ECHO $_SERVER['PHP_SELF']; ?>">
<label for="name">Name:</label>
<input type="text" id="name" name="name">

<label for="email">Email:</label>
<input type="email" id="email" name="email">

<input type="submit" value="Submit">
</form>

</body>
</html>









<?php 
//Task 2: Basic OOP in PHP

//

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

$person = new Person();
$person->setName("John Doe");
$person->setEmail("johndoe@example.com");
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br>";





//Task 3: Superglobal Variables in PHP

//
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
  
    $person = new Person();
    $person->setName($name);
    $person->setEmail($email);
  
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail() . "<br>";
  }
  
  
  
  
  ?>



