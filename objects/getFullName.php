<?php 
class person{
    public $firstName;
    public $lastName;
    public function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function getFullName(){
        return $this->firstName ."". $this->lastName;
    }
}
$person1= new person("Bibash","Poudel");
$person1 -> getFullName();
?>