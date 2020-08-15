<?php

date_default_timezone_set('Asia/Tokyo');
$time = intval(date("H"));

echo "今".$time."台です。";
echo '<br>';

if (5 <= $time && $time <= 10) { // 5時～10時の時間帯 
  echo "おはようございます。";
} elseif (10 <= $time && $time <= 18) { // 10時〜18時の時間帯
  echo "こんにちわ。";
} else { // それ以外の時間帯
  echo"こんばんわ。";
}

?>