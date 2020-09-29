<?php
// function.phpとdb_connect.phpの読み込み
require_once('function.php');
require_once("db_connect.php");
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// $_POSTが空ではない場合
// ログインボタンが押された場合のみ、下記の処理を実行する
if (!empty($_POST)) {
    // ログイン名が入力されていない場合の処理
    if (empty($_POST["title"])) {
        echo "タイトルが未入力です。";
    }
    // パスワードが入力されていない場合の処理
    if (empty($_POST["content"])) {
        echo "コンテンツが未入力です。";
    }

    // 両方共入力されている場合
    if (!empty($_POST["title"]) && !empty($_POST["content"])) {

        // 入力したユーザIDとパスワードを格納
        $title = htmlspecialchars($_POST["title"], ENT_QUOTES);
        $content = htmlspecialchars($_POST["content"], ENT_QUOTES);

        // PDOのインスタンスを取得
        $pdo = connect();

        try {
            //データベースアクセスの処理文章。ログイン名があるか判定
            $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->execute(array($title, $content));
            header("Location: main.php");
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>記事登録</h1>
    <form method="POST" action="">
        title:<br>
        <input type="text" name="title" id="title" style="width:200px;height:50px;">
        <br>
        content:<br>
        <input type="text" name="content" id="content" style="width:200px;height:100px;"><br>
        <input type="submit" value="submit" id="post" name="post">
    </form>
</body>
</html>