<?php
// array functions
$fruits = ["Apple", "Banana", "Orange", "Mango"];
echo "Original array: ";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "Array length: " . count($fruits) . "<br>";
echo "Last element: " . end($fruits) . "<br>";
echo "First element: " . reset($fruits) . "<br>";
sort($fruits);
echo "Sorted array: ";
echo "<pre>";
print_r($fruits);
echo "</pre>";
rsort($fruits);
echo "Reverse sorted array: ";
echo "<pre>";
print_r($fruits);
echo "</pre>";
?>