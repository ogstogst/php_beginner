<?php
// <body text='black'> となります
$bodytag = str_replace("%body%", "black", "body text='%body%'>");
echo $bodytag;
echo "<br>";

// Hll Wrld f PHP となります
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
echo $onlyconsonants;
echo "<br>";

// You should eat pizza, beer, and ice cream every day となります
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase;
echo "<br>";

// 2 となります
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;