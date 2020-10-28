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
    if (empty($_POST["date"])) {
        echo "発売日が未入力です。";
    }

    // 両方共入力されている場合
    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {

        // 入力したユーザIDとパスワードを格納
        $title = htmlspecialchars($_POST["title"], ENT_QUOTES);
        $date = htmlspecialchars($_POST["date"], ENT_QUOTES);
        $stock = htmlspecialchars($_POST["stock"], ENT_QUOTES);

        // PDOのインスタンスを取得
        $pdo = connect();

        try {
            //データベースアクセスの処理文章。ログイン名があるか判定
            $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':stock', $stock);
            $stmt->execute();
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
    <link rel="stylesheet" href="create_style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div class="wrap">
        <h1>本登録画面</h1>
        <form method="POST" action="">
            <input type="text" name="title" id="title" placeholder="タイトル" value="<?php if (!empty($_POST["title"])) {
                echo $_POST["title"];
            } ?>">
            <br>
            <input type="text" name="date" id="date" placeholder="発売日" value="<?php if (!empty($_POST["date"])) {
                echo $_POST["date"];
            } ?>"><br>
            <p>在庫数</p>
            <select name="stock" id="stock" value="<?php if (!empty($_POST["stock"])) {
                echo $_POST["stock"];
            } ?>">
            <option value="">選択してください</option>
            <?php for($i = 0; $i < 101; $i++){
            ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>;
            <?php }?>
            </select>
            <input class="btn" type="submit" value="登録" id="post" name="post">
        </form>
    </div>
</body>
</html>