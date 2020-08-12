<?php
//配列
  // $fruits = ["りんご", "みかん", "もも"];

  // foreach ($fruits as $value) {
  //   echo $value;
  //   echo '<br>';
  // }

  //連想配列
  $fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];

  foreach ($fruits as $key => $value) {
    echo $key . "といったら";
    echo $value;
    echo '<br>';
  }
?>