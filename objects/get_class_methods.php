<?php
class Car{
    public $brand = "Toyota";
    public $color = "Red";
    public function start(){
        echo "Car started <br>";
    }
    public function stop(){
        echo "Car stopped <br>";
    }
}

$myCar = new Car();
$methods = get_class_methods();
echo "Methods in Car class:<br>";
print_r($methods);
echo "<br> <br>";

$properties = get_class_vars('Car');
echo "Properties in Car class. <br>";
print_r($properties);
?>