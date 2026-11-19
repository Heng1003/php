```<?php
// function with default parameters
function greet($name = "World"){
    return "Hello, " . $name . "! <br>";
}

echo greet();
echo greet("Alice");
echo greet("Bob");
echo greet("Charlie");
?>```