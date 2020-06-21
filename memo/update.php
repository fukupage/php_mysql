<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>修正画面</title>
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
<h1 class="font-weight-normal">修正画面</h1>
</header>

<main>
<h2>投稿内容を修正できます。</h2>
<pre>
<?php
  if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $my_memos = $db->prepare('SELECT * FROM my_memos WHERE id=?');
    $my_memos -> execute(array($id));
    $my_memo = $my_memos -> fetch();
  }
?>

<form action="update_do.php" method="post">
  <input type="hidden" name="id" value="<?php print($id); ?>">
  <textarea name="my_memo" cols="50" rows="10"><?php print($my_memo['my_memo']); ?></textarea><br>
  <button type="submit">登録する</button>

</form>

</pre>
</main>
</body>
</html>
