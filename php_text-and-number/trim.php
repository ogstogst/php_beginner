<?php
$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);
print "<br>";

$trimmed = trim($text);
var_dump($trimmed);
print "<br>";

$trimmed = trim($text, " \t.");
var_dump($trimmed);
print "<br>";

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);
print "<br>";

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);
print "<br>";

// ASCII 制御文字 (0 から 31 まで) を
// $binary の先頭および末尾から取り除きます
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);
