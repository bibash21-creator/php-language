<?php
$anon = new class {
    public function message(){
        echo "Hello from Anonymous Class";
    }
};
$anon -> message();
?>