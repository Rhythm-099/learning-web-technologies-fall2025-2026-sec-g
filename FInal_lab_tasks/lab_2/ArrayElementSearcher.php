<?php
$fruits = ["Apple", "Banana", "Cherry", "Date", "Orange"];
$searchFor = "Cherry";

$found = false;

foreach ($fruits as $index => $fruit) {
    if ($fruit == $searchFor) {
        echo "Success: <strong>$searchFor</strong> was found at index $index.<br>";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "Notice: <strong>$searchFor</strong> was not found in the array.";
}
?>