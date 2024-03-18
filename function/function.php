<?php
# 引数
function message($message, $name = 'utan')
{
  print "$message, $name";
}

message('Hello', 'taro');
echo "<br>";
message('Hello');
echo "<br>";

# 変数のスコープ
function countup($num)
{
  for ($i = 0; $i < 10; $i++) {
    $num += 1;
  }

  return $num;
}

$num = 9;
countup($num);
print $num;
echo "<br>";

$num1 = 100;
$num2 = 200;
foo();
function foo()
{
  global $num1;
  print $num1;
  echo "<br>";
  global $num2;
  print $num2;
  echo "<br>";
}

$num3 = 300;
foo_2();
function foo_2()
{
  print $GLOBALS['num3'];
  echo "<br>";
}

function add($a, $b)
{
  $a = 100;
  global $b;
  $b = 200;
  print 'local_$a =>' . $a . ', global_$b =>' . $b;
  // local_$a => 100, global_$b => 200
  echo "<br>";
}

$a = 10;
$b = 20;

add($a, $b);

print 'global_$a => ' . $a . ', global_$b =>' . $b;
// global_$a => 10, global_$b => 200
echo "<br>";

$a = 2;
$b = 3;
$c = 5;
$sum = 0;
function change($a, $b, $c)
{
  $a = 100;
  global $b;
  $b = 200;
  $GLOBALS['c'] = 300;
}
change($a, $b, $c);
$sum = $a + $b + $c;
// 2 + 200 + 300
print $sum;
echo "<br>";
