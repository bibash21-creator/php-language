<?php
class Student{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function displayInfo(){
        echo "Name:". $this->name. "<br>";
        echo "Age:". $this->age;
    }
}
$student1 = new Student("John", 21);
$student1 -> displayInfo();