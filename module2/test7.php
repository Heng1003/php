<?php
// string function
$text = "Hello, World!";
echo "Original string: " . $text . "<br>";
echo "String length: " . strlen($text) . "<br>";
echo "String in uppercase: " . strtoupper($text) . "<br>";
echo "String in lowercase: " . strtolower($text) . "<br>";
echo "First 5 characters: " . substr($text, 0, 5) . "<br>";
echo "Last 6 characters: " . substr($text, -6) . "<br>";
?>