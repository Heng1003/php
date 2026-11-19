<?php
// for each loop
$colors = array("red", "green", "blue", "yellow");

for($i=0; $i<count($colors); $i++){
    echo "The color is " . $colors[$i] . "<br>";
}
foreach($colors as $value){
    echo "The color is $value <br>";
}
?>