<?php
  echo "hello" . "world";
  echo '<br>';
  $hello = "Hello";
  $world = "World!!";
  echo $hello.$world;
  echo '<br>';

  echo 345 + 43;
  echo '<br>';
  echo 200 - 100;
  echo '<br>';
  echo 3 * 11;
  echo '<br>';
  echo 100 / 50;
  echo '<br>';
  echo 7 % 3;
  echo '<br>';
  echo 2 * (8 * 4 - (4 + 5) / 3);
  echo '<br>';
  echo 2 * (32 - 5);
  echo '<br>';
  echo 75 / (3 + 2) * 8;
  echo '<br>';

  //単項演算子
  // $x = $x + 1
  $x++;
  echo $x;
  echo '<br>';
  // $x = $x - 1
  $x--;
  echo $x;
  echo '<br>';

  $x = 0;
  // $x = $x + 5;
  $x += 5;
  echo $x;
  echo '<br>';
  // $x = $x * 5;
  $x *= 5;
  echo $x;
  echo '<br>';
  // $x = $x / 5;
  $x /= 5;
  echo $x;
  echo '<br>';
  // $x = $x - 5;
  $x -= 3;
  echo $x;
  echo '<br>';
?>