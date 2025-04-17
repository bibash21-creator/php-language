<?php
class Car{
    public $brand;
    public function __construct($brand){
        $this->brand = $brand;
    }
}
$myCar = new Car('Toyota');

if ($myCar instanceof Car) {
    echo "Yes, you are true";
} else {
    echo "No, you are false.";
}
?>