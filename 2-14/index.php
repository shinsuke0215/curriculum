<?php

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members);

echo '<br>';

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
sort($members);
var_dump($members);

echo '<br>';

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("tanaka", $members)) {
  echo "田中さんがいるよ！";
} else {
  echo "田中さんはいないよ！";
}

echo '<br>';

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);

echo '<br>';

$re_members = explode ("@", $atstr);
var_dump($re_members);

echo '<br>';

$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);

echo '<br>';

$color = ['red', 'blue', 'green', 'yellow'];

for ($i = 0; $i < count($color); $i++) {
  echo $color[$i];
  echo '<br>';
}


$members = ["A", "c", "C", "b", "a","B"];
sort($members, SORT_STRING | SORT_FLAG_CASE);
var_dump($members);

echo '<br>';

$color = array(
  array('red', 'blue'),
  array('green', 'yellow'),
);

$array1 = ['red', 'blue'];
$array2 = ['blue', 'yellow'];

var_dump(in_array($array1, $color));
var_dump(in_array($array2, $color));

echo '<br>';

$pieces = ["2020", "08", "13", "(木)"];
echo implode(".", $pieces);

echo '<br>';

$arrayList = explode("/","A/B/C/D/E",2);
var_dump($arrayList);
?>