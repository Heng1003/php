<?php
// associative array
$student_group_a = array(
    "name" => "Alice",
    "age" => 20,
    "grade" => "A"
);
$student_group_b = [
    "name" => "Bob",
    "age" => 22,
    "grade" => "B"
];
echo $student_group_a["name"] . "<br>";
echo $student_group_a["age"] . "<br>";
echo $student_group_a["grade"] . "<br>";
echo "=====================<br>";
echo $student_group_b["name"] . "<br>";
echo $student_group_b["age"] . "<br>";
echo $student_group_b["grade"] . "<br>";
?>