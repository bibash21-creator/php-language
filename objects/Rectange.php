<?php
class Rectangle{
    public $length;
    public $breadth;
    public function __construct($length,$breadth){
        $this->length = $length;
        $this->breadth = $breadth;
    }
    public function getArea(){
        return $this->length*$this->breadth;
    }
}
$rectange1 = new Rectange(12,13);
echo "Area of the rectangle is:". $rectangle1->getArea();
?>