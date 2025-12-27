<?php
echo "<h3>Odd Numbers between 10 and 100:</h3>";

for ($i = 10; $i <= 100; $i++) {
    
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>