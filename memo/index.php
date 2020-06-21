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

    if(isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])){
      $page = $_REQUEST['page'];
    } else {
      $page = 1;
    }
    $start = 5 * ($page - 1);

    $my_memos = $db->prepare('SELECT * FROM my_memos ORDER BY id DESC LIMIT ?, 5');
    $my_memos -> bindParam(1, $start, PDO::PARAM_INT);
    $my_memos -> execute();
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
      <?php if($page >= 2):?>
      <a href="index.php?page=<?php print($page - 1); ?>"><?php print($page - 1); ?>ページ目</a>
      <?php endif;?>｜
      <?php
      $counts = $db -> query('SELECT COUNT(*) as cnt FROM my_memos');
      $count = $counts -> fetch();
      $max_page = ceil($count['cnt'] / 5);
      if($page < $max_page):
      ?>
      <a href="index.php?page=<?php print($page + 1); ?>"><?php print($page + 1); ?>ページ目</a>
      <?php endif ?>
    </article>
  </main>
</body>

</html>
