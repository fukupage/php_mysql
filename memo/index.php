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
    <!-- ここにプログラムを記述します -->
    <?php
    require('dbconnect.php');

    $my_memos = $db->query('SELECT * FROM my_memos ORDER BY id DESC');
    ?>
    <article>
      <?php while($my_memo = $my_memos->fetch()) : ?>
        <p>
          <a href="memo.php?id=<?php print($my_memo['id']); ?>">
            <?php print(mb_substr($my_memo['my_memo'], 0, 50)); ?>
          </a>
        </p>
        <time><?php print($my_memo['created_at']); ?></time>
        <hr>
      <?php endwhile; ?>
    </article>
  </main>
</body>

</html>
