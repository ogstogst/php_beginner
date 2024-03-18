<?php // array() 構文
// $array1 = array(
//   "foo" => "bar",
//   "bar" => "foo",
// );

// // ブラケット構文
// $array2 = [
//   "foo" => "barbar",
//   "bar" => "foofoo",
// ];

// echo "<pre>";
// print_r($array1);
// echo "</pre>";

// echo "<pre>";
// var_dump($array1);
// echo "</pre>";

// echo "<pre>";
// var_dump($array2);
// echo "</pre>";
?>

<?php // 連想配列
// $array3 = array(
//   1    => "a",
//   "1"  => "b",
//   1.5  => "c",
//   true => "d",
// );

// echo "<pre>";
// var_dump($array3);
// echo "</pre>";

// $array4 = array(
//   "foo" => "bar",
//   "bar" => "foo",
//   100   => -100,
//   -100  => 100,
// );

// echo "<pre>";
// var_dump($array4);
// echo "</pre>";

// echo "<pre>";
// print_r($array4);
// echo "</pre>";
?>

<?php // 関数 returnに配列
// function getArray()
// {
//   return array(1, 2, 3);
// }

// $secondElement = getArray()[1];
// $secondElements = getArray();

// echo "
// <pre>";
// var_dump($secondElement);
// echo "</pre>";

// echo "
// <pre>";
// var_dump($secondElements);
// echo "</pre>";

?>

<?php // 並び順
// $colors[0] = 'red';
// $colors[1] = 'yellow';
// $colors[3] = 'orange';
// $colors[2] = 'blue';
// foreach ($colors as $color) {
//   echo "
// <pre>";
//   print $color;
//   echo "</pre>";
// }
// foreach ($colors as $key => $value) {
//   echo "
// <pre>";
//   print $value;
//   echo "</pre>";
// }
// echo "
// <pre>";
// var_dump($colors);
// echo "</pre>";

// $colors = [
//   0 => 'red',
//   3 => 'orange',
//   1 => 'yellow',
//   2 => 'blue',
// ];

// echo "
// <pre>";
// print_r($colors);
// echo "</pre>";

// // 配列のソート
// // https://www.php.net/manual/ja/array.sorting.php
// // A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,
// // sort()
// // https: //www.php.net/manual/ja/function.sort.php
// $fruits = array(
//   "lemon",
//   "orange",
//   "banana",
//   "apple",
// );
// sort($fruits);
// foreach ($fruits as $key => $val) {
//   echo "fruits[" . $key . "] = " . $val;
//   echo "<br>";
// }
// echo "<br>";

// // asort()
// // https://www.php.net/manual/ja/function.asort.php
// $fruits = array(
//   "d" => "lemon",
//   "a" => "orange",
//   "b" => "banana",
//   "c" => "apple",
// );
// asort($fruits);
// foreach ($fruits as $key => $val) {
//   echo "$key = $val";
//   echo "<br>";
// }
// echo "<br>";

// // ksort()
// // https: //www.php.net/manual/ja/function.ksort.php
// $fruits = array(
//   "d" => "lemon",
//   "a" => "orange",
//   "b" => "banana",
//   "c" => "apple",
// );
// ksort($fruits);
// foreach ($fruits as $key => $val) {
//   echo "$key = $val";
//   echo "<br>";
// }
// echo "<br>";

// // rsort()
// // https://www.php.net/manual/ja/function.rsort.php
// $fruits = array("lemon", "orange", "banana", "apple");
// rsort($fruits);
// foreach ($fruits as $key => $val) {
//   echo "$key = $val";
//   echo "<br>";
// }
// echo "<br>";

// // arsort()
// // https: //www.php.net/manual/ja/function.arsort.php
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// arsort($fruits);
// foreach ($fruits as $key => $val) {
//   echo "$key = $val";
//   echo "<br>";
// }
// echo "<br>";

// // krsort()
// // https: //www.php.net/manual/ja/function.krsort.php
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// krsort($fruits);
// foreach ($fruits as $key => $val) {
//   echo "$key = $val\n";
//   echo "<br>";
// }
// echo "<br>";

?>

<?php // 配列を操作する主な関数
// 配列関数 https://www.php.net/manual/ja/ref.array.php
# count()
// https://www.php.net/manual/ja/function.count.php
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b));

# explode()
// https://www.php.net/manual/ja/function.explode.php
// $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
// $pieces = explode(" ", $pizza);
// echo "<pre>";
// print_r($pieces);
// echo "</pre>";
// echo "<pre>";
// print $pieces[0];
// echo "</pre>";
// echo "<pre>";
// print $pieces[1];
// echo "</pre>";

// $data = "foo:*:1023:1000::/home/foo:/bin/sh";
// list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
// echo $user; // foo
// echo "<br>";
// echo $pass; // *
// echo "<br>";
// echo $shell; // /bin/sh

# implode()
// https: //www.php.net/manual/ja/function.implode.php
// $array = ['lastname', 'email', 'phone'];
// var_dump(implode(",", $array));
// // 空の配列を使うと空文字列となります
// var_dump(implode('hello', []));
// // separator はオプションです。
// var_dump(implode(['a', 'b', 'c']));

# unset()
// https://www.php.net/manual/ja/function.unset.php
// function destroy_foo()
// {
//   global $foo;
//   unset($foo);
// }
// $foo = 'bar';
// destroy_foo();
// echo $foo;

# in_array()
// https://www.php.net/manual/ja/function.in-array.php
// $fruits = ['apple', 'banana', 'orange'];
// if (in_array('banana', $fruits)) {
//   echo "<pre>";
//   print 'バナナがありますと';
//   echo "</pre>";
// } else {
//   echo 'バナナはないですと';
// }

// $numbers = [1, 2, 3];
// if (in_array('1', $numbers, true)) {
//   echo '1が見つかりました！';
// } else {
//   echo '1は見つかりませんでした！';
// }

# array_key_exists()
// https://www.php.net/manual/ja/function.array-key-exists.php
// $search_array = array('first' => 1, 'second' => 4);
// if (array_key_exists('first', $search_array)) {
//   echo "<pre>";
//   print("この配列には 'first' という要素が存在します");
//   echo "</pre>";
// }

# array_search()
// https://www.php.net/manual/ja/function.array-search.php
// $array = array(
//   0 => 'blue',
//   1 => 'red',
//   2 => 'green',
//   3 => 'red',
// );

// $key_1 = array_search('green', $array);
// $key_2 = array_search('red', $array);

// echo "<pre>";
// print_r($key_1);
// echo "</pre>";

// echo "<pre>";
// print_r($key_2);
// echo "</pre>";

# array_reverse()
// https://www.php.net/manual/ja/function.array-reverse.php
// $input  = array(
//   "php",
//   4.0,
//   array("green", "red"),
// );
// $reversed = array_reverse($input);
// $preserved = array_reverse($input, true);

// echo "<pre>";
// print_r($input);
// echo "</pre>";

// echo "<pre>";
// print_r($reversed);
// echo "</pre>";

// echo "<pre>";
// print_r($preserved);
// echo "</pre>";

# array_splice()
// https://www.php.net/manual/ja/function.array-splice.php
// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 2);
// echo "<pre>";
// print_r($input);
// echo "</pre>";

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 1, -1);
// echo "<pre>";
// print_r($input);
// echo "</pre>";

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 1, count($input), "orange");
// echo "<pre>";
// print_r($input);
// echo "</pre>";

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, -3, 1, array("black", "maroon"));
// echo "<pre>";
// print_r($input);
// echo "</pre>";