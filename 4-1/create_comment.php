<?php
// function.phpとdb_connect.phpの読み込み
require_once('function.php');
require_once("db_connect.php");
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// $_POSTが空ではない場合
// ログインボタンが押された場合のみ、下記の処理を実行する
if (!empty($_POST)) {
    // POST送信されたpost_idを変数に格納しておく 
    $post_id = $_POST["post_id"];

    // 名前が入力されていない場合の処理
    if (empty($_POST["name"])) {
        echo "名前が未入力です。";
    }
    // コメントが入力されていない場合の処理
    if (empty($_POST["content"])) {
        echo "コメントが未入力です。";
    }

    // 両方共入力されている場合
    if (!empty($_POST["name"]) && !empty($_POST["content"])) {

        // 入力したユーザIDとパスワードを格納
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
        $content = htmlspecialchars($_POST["content"], ENT_QUOTES);

        // PDOのインスタンスを取得
        $pdo = connect();

        try {
            //データベースアクセスの処理文章。ログイン名があるか判定
            $sql = "INSERT INTO comments (post_id, name, content) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':post_id', $post_id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':content', $content);
            $stmt->execute(array($post_id, $name, $content));
            // 対象のpost_idのdetail_post.phpにリダイレクト
            header("Location: detail_post.php?id=".$post_id);
            exit;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }
} else {
    //POSTで渡されたデータがなかった場合
    //GETで渡されたpost_idを受け取る
    $post_id = $_GET['post_id'];
    //$post_idがからだった場合は不正な遷移なので、main.phpに戻す
    redirect_main_unless_parameter($post_id);
}
?>
<!DOCTYPE html>
<html>
<head> 
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>コメント</h1> 
    <form method="POST" action="">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        投稿者名:<br> 
        <input type="text" name="name"> <br> 
        コメント:<br>
        <input type="text" name="content" style="width:200px;height:100px;"><br> 
        <input type="submit" value="submit">
    </form>
    <a href="detail_post.php?id=<?php echo $post_id; ?>">記事詳細に戻る</a>
</body>
</html>