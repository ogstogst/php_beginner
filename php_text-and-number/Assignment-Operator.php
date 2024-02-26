<?php
$number = null;
$number = $number + 1;
$number += 1;
++$number;
++$number;
++$number;
++$number;
--$number;

$a = 3;
$a += 5; // $a を 8 にセットします。$a = $a + 5; と同じです。
$b = "Hello ";
$b .= "There!"; // $bを"Hello There!"にセットします。$b = $b . "There!";と同じです。
$b .= "あはは！";

echo $number;
echo "<br>";
echo $a;
echo "<br>";
echo $b;
