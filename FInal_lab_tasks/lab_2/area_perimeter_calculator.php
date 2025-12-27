<?php

$length = 20.67;
$width = 11.0;

$area = $length * $width;

$perimeter = 2 * ($length + $width);

echo "<h2>Rectangle Calculations</h2>";
echo "Length: " . $length . "<br>";
echo "Width: " . $width . "<br>";
echo "---------------------------<br>";
echo "<strong>Area:</strong> " . $area . " sq units<br>";
echo "<strong>Perimeter:</strong> " . $perimeter . " units";
?>