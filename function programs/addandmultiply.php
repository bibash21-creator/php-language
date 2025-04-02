<?php 
function add($a,$b){
    return $a+$b;
}

function multiply($a,$b){
    return $a*$b;
}

$additionFunction = "add";
$multiplicationFunction = "multiply";

echo "Addititon of 5 and 3:" ."\t". $additionFunction(5,3) . "\n";
echo "Multiplication of 5 and 3:". "\t". $multiplicationFunction(6,2)."\n";
?>