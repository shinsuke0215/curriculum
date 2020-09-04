<?php
require_once("getData.php");

    $getData = new getData();
    $User = $getData -> getUserData();
    $Post = $getData -> getPostData();
    
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>投稿一覧ページ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="header clearfix">
            <img src="http://localhost/LetsEngineer/curriculum/3-4/logo.png" alt="" width="200" height="120">
            <div class="header-right">
                <p class="name">ようこそ <?php echo $User['last_name'] . $User['first_name']; ?> さん</p>
                <p class="time">最終ログイン日：<?php echo $User['last_login']; ?></p>
            </div>
        </div>
        <table broder="1">
            <tr>
                <th bgcolor="#87ceeb">記事ID</th>
                <th bgcolor="#87ceeb">タイトル</th>
                <th bgcolor="#87ceeb">カテゴリ</th>
                <th bgcolor="#87ceeb">本文</th>
                <th bgcolor="#87ceeb">投稿日</th>
            </tr>

            <?php
            while ($row = $Post -> fetch (PDO::FETCH_ASSOC)) {
            ?> 
            <tr>
                <td bgcolor="#e0ffff"><?php echo $row['id']; ?></td>
                <td bgcolor="#e0ffff"><?php echo $row['title']; ?></td>
                <td bgcolor="#e0ffff"><?php $category = $row['category_no']; 
                if ($category == 1) {
                    echo "食事";
                } elseif ($category == 2) {
                    echo "旅行";
                } else {
                    echo "その他";
                }
                ?></td>
                <td bgcolor="#e0ffff"><?php echo $row['comment']; ?></td>
                <td bgcolor="#e0ffff"><?php echo $row['created']; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <div class="footer">
            <p class="copyright">Y&I group.inc</p>
        </div>
    </div>
</body>
</html>
    

    
    



