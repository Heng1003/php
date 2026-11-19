<?php
// multi dimensional array
$students_group_a = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Jane", "age" => 22, "grade" => "B"),
    array("name" => "Bob", "age" => 25, "grade" => "C")
);
$student_group_b = [
    ["name" => "Alice", "age" => 21, "grade" => "A"],
    ["name" => "Charlie", "age" => 23, "grade" => "B"],
    ["name" => "David", "age" => 24, "grade" => "C"]
];
echo "Group A:<br>";
foreach($students_group_a as $student){
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}
echo "=====================<br>";
echo "Group B:<br>";
foreach($student_group_b as $student){
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}
?>