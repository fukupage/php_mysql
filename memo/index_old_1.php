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
<!-- ここにプログラムを記述します -->
<?php
  try {
    $db = new PDO('mysql:dbname=my_db;host=localhost:8889;charset=utf8','root','root');
  } catch(PDOException $e){
    echo 'DB接続エラー:' . $e -> getMessage();
  }

  //挿入の仕方
  //$count = $db -> exec('INSERT INTO my_items SET maker_id=3, item_name = "AZワゴン", price=200000, keyword="シルバー,ファミリー向け,広い"');
  //echo $count . '件のデータを挿入しました。';


  //取得の仕方
  $records = $db -> query('SELECT * FROM my_items');
  while($record = $records -> fetch()){
    print($record['item_name']. "<br>");
  }


?>
</pre>
</main>
</body>
</html>
