<?php

$name = "Pramila";
$marks = rand(40, 100);

echo "<h2>Student Result</h2>";
echo "Name: " . $name . "<br>";
echo "Marks: " . $marks . "<br>";

if ($marks >= 90) {
    echo "Grade: A+";
} elseif ($marks >= 80) {
    echo "Grade: A";
} elseif ($marks >= 70) {
    echo "Grade: B";
} elseif ($marks >= 60) {
    echo "Grade: C";
} elseif ($marks >= 50) {
    echo "Grade: D";
} else {
    echo "Grade: F - Fail";
}

?>