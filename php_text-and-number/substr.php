<?php
$rest = substr("abcdef", -1); // f
echo $rest;
echo "<br>";
$rest = substr("abcdef", -2); // ef
echo $rest;
echo "<br>";
$rest = substr("abcdef", -2, 1); // e
echo $rest;

$rest = substr("abcdef", 0, -1);  // "abcde" を返す
echo $rest;
echo "<br>";
$rest = substr("abcdef", 2, -1);  // "cde" を返す
echo $rest;
echo "<br>";
$rest = substr("abcdef", 4, -4);  // "" を返す。PHP 8.0.0 より前のバージョンでは、false を返していました。
echo $rest;
echo "<br>";
$rest = substr("abcdef", -3, -1); // "de" を返す

echo substr('abcdef', 1);     // bcdef
echo "<br>";
echo substr("abcdef", 1, null); // bcdef, PHP 8.0.0 より前のバージョンでは、空の文字列を返していました。
echo "<br>";
echo substr('abcdef', 1, 3);  // bcd
echo "<br>";
echo substr('abcdef', 0, 4);  // abcd
echo "<br>";
echo substr('abcdef', 0, 8);  // abcdef
echo "<br>";
echo substr('abcdef', -1, 1); // f
echo "<br>";

// 文字列中の 1 文字にアクセスすることも
// "角括弧" を使用することで可能
$string = 'abcdef';
echo "<br>";
echo $string[0];                 // a
echo "<br>";
echo $string[3];                 // d
echo "<br>";
echo $string[strlen($string)-1]; // f