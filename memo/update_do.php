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
<h1 class="font-weight-normal">投稿修正</h1>
</header>

<main>
<h2>投稿を修正しました。</h2>
<pre>
<?php
    require('dbconnect.php');
    $statement = $db -> prepare('UPDATE my_memos SET my_memo=? WHERE id=?');
    $statement ->execute(array($_POST['my_memo'], $_POST['id']));
    ?>

  <p> <?php print($_POST['id']); ?>番の投稿に、つまらぬものを修正してしまった。</p>
<p><a href="./">一覧に戻るよ。</a></p>
</pre>
</main>
</body>
</html>
