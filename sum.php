<?php
function times($i) {
    $result = 0;
    $result = $i * 2;
    return $result;
}
echo times(19);
?>

<?php
function f($a,$b) {
    $result= 0;
    $result = $a + $b;
    return $result;
}
echo f(3,123);
?>

<?php
function values($arr) {
    $result = 1;
    foreach($arr as $num){
      $result *= $num;
    }
    echo $result;
}
echo values(array(1,3,5,7,9));
?>

<?php
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
     if($max_number < $a) {
      $max_number = $a;
     }
   }
    return $max_number;
} 
echo max_array(array(1,3,5,7,9));
?>

<?php
$string = "<h1>サンプル</h1>";
$result = strip_tags($string);
echo $result;
echo "\n";

$animals = ["cat","dog"];
array_push($animals,"monkey","cow");
print_r($animals);
echo "\n";

$animals1 = ["car","dog"];
$animals2 = ["monkey","cow"];
$animals3 = ["lion","tiger"];
$animal_merge = array_merge($animals1,$animals2,$animals3);
print_r($animal_merge);
echo "\n";

$timestamp = time();
echo $timestamp;
echo "\n";

$timestamp = mktime(1,30,30,4,24,2020);
echo $timestamp;
echo "\n";



$week = [
    "日",
    "月",
    "火",
    "水",
    "木",
    "金",
    "土"
];
$date = date("w");
echo $week[$date];
echo "\n";



