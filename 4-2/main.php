<?php
// function.phpとdb_connect.phpとgetData.phpの読み込み
require_once('function.php');
// require_once("db_connect.php");
require_once("getData.php");
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

$getData = new getData();
$Post = $getData -> getPostData();

// 関数db_connect()からPDOを取得する
$pdo = connect();


?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>メイン</title>
    <link rel="stylesheet" href="main_style.css">
</head>
<body>
    <div class="wrap">
        <h1>在庫一覧画面</h1>
        <!-- <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p> -->
        <div class="btn1"><a href="create_post.php">新規登録</a></div>
        <div class="btn2"><a href="logout.php">ログアウト</a></div>
        <table>
            <tr class="karamu">
                <th>タイトル</th>
                <th>発売日</th>
                <th>在庫数</th>
                <th></th>
            </tr>
            <?php while ($row = $Post->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><div class="delete"><a class="btn3" href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></div></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>

    
    



