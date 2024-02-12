<?php
$price = 5;
$off = 0.79;

printf('Price 2f: $%.2f', $price - $off);
echo '<br>';
printf('Price 4f: $%.4f', $price - $off);
echo '<br>';
printf('Price 10f: $%.10f', $price - $off);