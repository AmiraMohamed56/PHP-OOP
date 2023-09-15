<?php
class Person
{
    private $name;
    public $age;
    public $address;
    //constructor
    public function __construct($name,$address,$age) 
   {
    $this->name=$name;
    $this->address=$address;
    $this->age=$age;

   }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    // static method
    public static function setLA($newLA){
        self::$lectureAge = $newLA;
    }
    //destructor
    public function __destruct()
    {
        echo"This the end of the class!!!";
    }
}

class Student extends Person
{
    public function subject($num)
    {
        echo "You record $num subjects";
    }
}
 

$object1 = new Person;
$object1->setName("Amira");
echo $object1->getName();
echo "<br>";
Person::setLA(25);
echo"<br>";
echo Person::$lectureAge;//25

$object2 = new Student;
$object2->setName("Aya");
echo $object2->getName();
$object2->subject(5);

?>