<form action="result.php" method="post">
  私の名前：<input type="text" name="my_name" />
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  性別：
  <input type="radio" name="sex" value="男性" />男性
  <input type="radio" name="sex" value="男性" />女性
  <br>
  <input type="hidden" name="hidden_param" value="隠しパラメータから" />
  <br>
  年齢:
  <!-- <select name="age">
    <option value="21"></option>
    <option value="22"></option>
    <option value="23"></option>
    <option value="24"></option>
  </select> -->
  <select name="age">
    <?php for ($i = 21; $i <= 24; $i++) { ?>
      <option value = "<?php echo $i; ?>">
        <?php echo $i; ?>
      </option>
    <?php } ?>
  </select>
  <br>

  <input type="submit" value="送信するよ！" />
</form