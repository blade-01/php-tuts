<!-- Object Oriented Programming -->
<?php
  /* Modifiers: public, private, protected
     - public: accessible from anywhere
     - private: accessible only within the class
     - protected: accessible within the class and its subclasses
  */

  class Person {
    // Properties
    public $name;
    private $age;
    protected $email;
    public static $species;

    // Constructor
    public function __construct($name, $age, $email) {
      $this->name = $name;
      $this->age = $age;
      $this->email = $email;
      self::$species = "Homo sapiens";
    }

    // Public method
    public function introduce() {
      return "Hi, I'm " . $this->name . ", " . $this->getAge() . " years old." . " You can contact me at " . $this->getEmail() . ".";
    }

    // Private method
    private function getAge() {
      return $this->age;
    }

    // Protected method
    protected function getEmail() {
      return $this->email;
    }
  }

  // Inheritance
  class Employee extends Person {
    private $position;
    public function __construct($name, $age, $email, $position) {
      parent::__construct($name, $age, $email);
      $this->position = $position;
    }
    public function introduce() {
      return parent::introduce() . " I work as a " . $this->position . ".";
    }
  }

  // Create objects
  $person = new Person("Alice", 30, "alice@example.com");
  $employee = new Employee("Bob", 25, "bob@example.com", "Developer");

  echo $person->introduce();
  echo "<br>";
  echo $employee->introduce();
  echo "<br>";
  echo "Species: " . Person::$species;
?>