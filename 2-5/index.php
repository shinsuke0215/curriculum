<?php
  // $age = 22;

  // if ($age >= 20) {
  //   echo "お酒が飲めるぞ！";
  // } else {
  //   echo "お酒は20歳になってから！";
  // }


  // $age = 24;
  // $is_student = true;

  // if ($age < 25 && $is_student) {
  //   echo '学生パックが使えるよ';
  // } elseif ($age < 25) {
  //   echo '若者応援割引が使えるよ';
  // }

  // $blood = 'B';
  // if ($blood == 'A') {
  //   echo "A型です";
  // } elseif ($blood == 'B') {
  //   echo "B型です";
  // } elseif ($blood == 'O') {
  //   echo "O型です";
  // } elseif ($blood == 'AB') {
  //   echo "AB型です";
  // } else {
  //   echo "A/B/O/ABから選択してください";
  // }

  // $blood = 'B';
  // switch ($blood) {
  //   case'A':
  //     print'A型です';
  //     break;
  //   case'B':
  //     print'B型です';
  //     break;
  //   case'C':
  //     print'C型です';
  //     break;
  //   case'AB':
  //     print'AB型です';
  //     break;
  //   default:
  //   echo'A/B/C/ABから選択して下さい';
  // }


  //ーーーーー三項演算子ーーーーー
    // $name = "";

    // echo ($name != "") ? '名前を受け付けました' : '名前を入力してください';

    // $string = '1';
    // $int = 1;

    // if (1 === $string) {
    //   echo '変数stringはint型です';
    // } else {
    //   echo '変数stringはstring型です';
    // }

    // echo '<br>';

    // if (1 === $int) {
    //   echo '変数stringはint型です';
    // } else {
    //   echo '変数stringはstring型です';
    // }


    //ーーーーー課題ーーーーー
    $name = 'taro';
    $password = 'pass';

    if (taro === $name && pass === $password) {
      echo 'ログイン成功です。';
    } elseif (taro === $name) {
      echo 'パスワードが間違っています。';
    } elseif (pass === $password) {
      echo '名前が間違ってます。';
    } else {
      echo '入力情報が間違ってます。';
    }


?>