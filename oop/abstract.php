<?php
//Parent class
abstract class Person
{
    public $name;
    public function __construct($name) 
    {
      $this->name = $name;
    }
    abstract public function info();
}
  
  // Child classes
  class Student extends Person
{
    public function info()
    {
      return "My name is $this->name and i study PHP";
    }
}

  $employee1=New Student("Amira");
  echo $employee1->info();
  echo"<br>";

  $employee2=New Student("Aya");
  echo $employee2->info();
  echo"<br>";
  

?>