<?php
for ($i = 0; $i < 10; ++$i) {
  echo "<pre>";
  echo $i;
  echo "</pre>";
}

for ($i = 1;; ++$i) {
  if ($i > 10) {
    break;
  }
  echo $i;
}

$numbers = [1, 2, 3, 4, 5, 6];

for ($i = 0; $i < count($numbers); ++$i) {
  echo "<pre>";
  echo $numbers[$i];
  echo "</pre>";
}

$lines = file("strcmp.php");

foreach ($lines as $line) {
  echo $line;
}
