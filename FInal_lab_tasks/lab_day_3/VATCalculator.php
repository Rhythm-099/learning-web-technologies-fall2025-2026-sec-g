<?php

$amount = 500.00; 
$vatRate = 0.15; // 15%

$vatAmount = $amount * $vatRate;

$totalAmount = $amount + $vatAmount;

echo "<h3>Tax Invoice Calculation</h3>";
echo "Base Amount: $" . number_format($amount, 2) . "<br>";
echo "VAT (15%): $" . number_format($vatAmount, 2) . "<br>";
echo "---------------------------<br>";
echo "<strong>Total Payable: $" . number_format($totalAmount, 2) . "</strong>";
?>