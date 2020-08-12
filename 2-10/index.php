<?php
  // function getTriangleArea($base, $height) {
  //   $area = $base * $height / 2;
  //   print "三角形の面積は".$area."だよ。";
  // }

  // getTriangleArea(10,5);
  // getTriangleArea(15,8);
  // getTriangleArea(8,6);


  // function sayHi($name = "goto") {
  //   $myname = "php";
  //   return "Hi! ".$name." from ".$myname;
  // }

  // echo sayHi();

  // $myname = "ruby";

  // function sayHi ($name = "goto") {
  //   $myname = "php";
  //   return "Hi" .$name. "from" .$myname;
  // }

  // echo sayHi();
  // echo '<br>';
  // echo $myname;


  function getTriangleArea($vertical, $side, $height) {
       $area = $vertical * $side * $height;
       print "長方体の体積は".$area."だよ。";
     }

     getTriangleArea(5,10,8);

?>