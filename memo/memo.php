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

    $id = $_REQUEST['id'];
    if(!is_numeric($id) ||$id <= 0){
      print('「あいでー」はいちいじょうのすうじでおねがいしますこ');
      exit();
    } else if($id == ''){
      print('その「あいでー」はそんざいしねーぞ！');
      exit();
    } else {
      $my_memos = $db->prepare('SELECT * FROM my_memos WHERE id=?');
      $my_memos ->execute(array($id));
      $my_memo = $my_memos->fetch();
    }
    ?>
    <article>
      <p>
        <?php print($my_memo['my_memo']); ?>
      </p>
      <time><?php print($my_memo['created_at']); ?></time>
      <hr>
      <a href="./">一覧に戻る</a>
    </article>
  </main>
</body>

</html>
