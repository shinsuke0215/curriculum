<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// URLの?以降で渡されるIDをキャッチ
$id = $_GET['id'];
// もし、$idが空であったらmain.phpにリダイレクト
// 不正なアクセス対策
redirect_main_unless_parameter($id);

// PDOのインスタンスを取得
$pdo = connect();

try {
    // SQL文の準備
    $sql = "DELETE FROM books WHERE id = :id";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // idのバインド
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    //main.phpにリダイレクト
    header("Location: main.php");
    exit;
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}

// 結果が1行取得できたら
if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
} else {
    // 対象のidでレコードがない => 不正な画面遷移
    echo "対象のデータがありません。";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>削除完了</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>削除完了</h1>
        <p>ID: <?php echo $id; ?>を削除しました。</p>
        <a href="main.php">ホームへ戻る</a>
    </body>
</html>