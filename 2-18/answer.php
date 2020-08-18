<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];

$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];

$answer1_param = $_POST['answer1_param'];
$answer2_param = $_POST['answer2_param'];
$answer3_param = $_POST['answer3_param'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

function question ($question, $answer) {
  if ($question == $answer) {
    echo "正解！";
  } else {
    echo "残念・・・";
  }
}

?>
<div class="wrap">
  <p><?php echo $my_name; ?>さんの結果は・・・？</p>
  <p>①の答え</p>
  <!--作成した関数を呼び出して結果を表示-->
  <?php echo question($question1, $answer1_param) ?>
  <p>②の答え</p>
  <!--作成した関数を呼び出して結果を表示-->
  <?php echo question($question2, $answer2_param) ?> 
  <p>③の答え</p>
  <!--作成した関数を呼び出して結果を表示-->
  <?php echo question($question3, $answer3_param) ?>
</div>

</body>
</html>