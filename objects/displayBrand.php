<?php
class Car{
    public $brand;
    public function __construct($brand){
        $this->brand = $brand;
    }
    public function displayBrand(){
        echo "The brand of the car is:". $this->brand;
    }

}

$myCar = new Car("Toyota");
$myCar->displayBrand();
?>
