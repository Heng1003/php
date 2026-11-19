<?php
// for each loop
$students = [
    array("name" => "John", "age" => 20),
    array("name" => "Jane", "age" => 22),
    array("name" => "Bob", "age" => 25)
];
foreach($students as $student){
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . "<br>";
}
?>