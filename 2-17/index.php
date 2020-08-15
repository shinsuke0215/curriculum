<?php

$sum=0;

for ($i = 1; $i <= 40; $i++) {
    $rand = mt_rand(1, 6);//乱数生成
    $sum = $sum + $rand;//前回の乱数と今回の乱数の合計

    echo $i."回目=".$rand;
    echo '<br>';

    if ($sum >= 40) {
      echo "合計".$i."回でゴールしました。";
    break;
    } 
}


?>