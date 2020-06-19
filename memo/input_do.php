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
<h1 class="font-weight-normal">メモです。トップページです。</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
    require('dbconnect.php');
    $statement = $db -> prepare('INSERT INTO my_memos SET my_memo=?, created_at=NOW()');
    $statement ->bindParam(1,$_POST['my_memo']);
    $statement ->execute();
    echo'つまらぬものを追加してしまった。';
?>
</pre>
</main>
</body>
</html>
