<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
  <header>
    <h1 class="font-weight-normal">投稿削除</h1>
  </header>

  <main>
    <h2>投稿を削除しました。</h2>
    <pre>
<?php
require('dbconnect.php');
if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
  $id = $_REQUEST['id'];
  $statement = $db->prepare('DELETE FROM my_memos WHERE id=?');
  $statement->execute(array($id));
}
?>

  <p> <?php print($id); ?>番のつまらぬ投稿を削除してしまった。</p>
<p><a href="./">一覧に戻るよ。</a></p>
</pre>
  </main>
</body>

</html>
