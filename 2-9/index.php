<?php
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
      echo "FizzBizz";
      echo '<br>';
    } elseif ($i % 5 === 0) {
      echo "Bizz";
      echo '<br>';
    } elseif ($i % 3 === 0) {
      echo "Fizz";
      echo '<br>';
    } else {
      echo $i;
      echo '<br>';
    }

  }

?>