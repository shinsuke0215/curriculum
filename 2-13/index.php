<?php
// index.php
$x = 5.2 * 3.2;
echo ceil($x);

echo '<br>';

// index.php
$x = 6.3 * 9.5;
echo floor($x);

echo '<br>';

$x = 8.66 * 23.4;
echo round($x);

echo '<br>';

echo pi();
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
// 半径が2の円の面積の計算
circleArea(5);

echo '<br>';

echo mt_rand(1, 100);

echo '<br>';

$str = ' ab cd あい ';
echo strlen($str);

echo '<br>';

$a = "福岡晋介";
if(strpos($a,"晋介")){
  echo "あります";
}
echo strpos($a,"晋介");

echo '<br>';

$str = 'shinsuke fukuoka';
$substr = substr($str, 0, 8);
print('文字列：'.$str.'戻り値：'.$substr.'<br>');

$fruits = ['赤', '青', '緑', '赤', '赤'];
$replace = str_replace('赤', '紫', $fruits, $count);
var_dump($replace);
echo '置換した回数: '.$count;

echo '<br>';

$str = "I am Yoneyama";
echo str_replace(" ", "", $str);

echo '<br>';

$str = "あいうえお";
echo strlen($str);

echo '<br>';

$str = "あいうえお";
echo mb_strlen($str);

echo '<br>';

$name = "米山さん";
$limit_number = 40;
printf("%sの残り時間はあと%dです", $name, $limit_number);

echo '<br>';

$name = "米山さん";
$limit_time = 40;
$price = 4000;
printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);

echo '<br>';

$limit_hour = 20;
$limit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

echo '<br>';

$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

echo '<br>';

$a = 'fukuoka';
$b = 'shinsuke fukuoka';

printf("[%-10s]\n",   $a);
printf("[%-10.9s]\n", $b);

echo '<br>';

$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo '<br>';
// sprintfだけでは出力までできない
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;

echo '<br>';

$money1 = 2;
$money2 = 4;
$money = $money1 + $money2;
$formatted = sprintf("代金:%01d万円です。", $money);
echo $formatted;

?>