<?php 
function countCalls(){
    static $callCounts=0 ;
    $callCounts++;

    echo "Function has been called $callCounts times.";

}
countCalls();
countCalls();
countCalls();

?>
