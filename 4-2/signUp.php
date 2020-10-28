<?php
require_once("db_connect.php");

// セッション開始
session_start();

// 関数db_connect()からPDOを取得する
$pdo = connect();

// エラーメッセージ、登録完了メッセージの初期化
$errorMessage = "";
$signUpMessage = "";

// ログインボタンが押された場合
if (isset($_POST["signUp"])) {
    // 1. ユーザIDの入力チェック
    if (empty($_POST)) { 
        $errorMessage = 'ユーザーIDが未入力です。';
    } else if (empty($_POST["password"])) {
        $errorMessage = 'パスワードが未入力です。';
    }


    if (!empty($_POST["name"]) && !empty($_POST["password"])) {
        // 入力したユーザIDとパスワードを格納
        $username = $_POST["name"];
        $password = $_POST["password"];

        //  エラー処理
        try {
            $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (?, ?)");
            $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT)));  // パスワードのハッシュ化を行う（今回は文字列のみなのでbindValue(変数の内容が変わらない)を使用せず、直接excuteに渡しても問題ない）
            $userid = $pdo->lastinsertid();  // 登録した(DB側でauto_incrementした)IDを$useridに入れる
            header("Location: main.php");
            // $signUpMessage = '登録が完了しました。';  // ログイン完了メッセージ
        } catch (PDOException $e) {
            // $errorMessage = 'データベースエラー';
            echo 'Error: ' . $e->getMessage();
            die();
            // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
            // echo $e->getMessage();
        }
    } 

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>ブログ</title>
    <link rel="stylesheet" href="signUp_style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div class="wrap">
        <h1>ユーザー登録画面</h1>
        <form method="POST" action="">
        <div><font color="#ff0000"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></font></div>
        <div><font color="#000000"><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></font></div>
            <input type="text" name="name" id="name" placeholder="ユーザー名" value="<?php if (!empty($_POST["name"])){
            echo htmlspecialchars($_POST["name"], ENT_QUOTES);
            } ?>">
            <br>
            <input type="password" name="password" id="password" placeholder="パスワード"><br>
            <input class="btn" type="submit" value="新規登録" id="signUp" name="signUp">
        </form>
    </div>
</body>
</html>
    

    
    



