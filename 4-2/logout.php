<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
    <link rel="stylesheet" href="logout_style.css">
</head>
    <body>
    <div class="wrap">
        <h1>ログアウト画面</h1>
        <div class="logout">ログアウトしました</div>
        <div class="btn"><a href="login.php">ログイン画面に戻る</a></div>
    </div>
    </body>
</html>