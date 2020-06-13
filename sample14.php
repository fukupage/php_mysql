<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
<!-- ここにプログラムを記述します -->
<?php
$data = file_get_contents('../../../newsdata/news.txt');//こちらはファイルの内容を加工できる
// $data .= "2020-6-14：ニュースを追加しました";
$data = "2020-6-10：ニュースを追加しました\n".$data;
file_put_contents('../../../newsdata/news.txt',$data);//こちらはファイルの内容を加工できる
  print($data);
// readfile('../../../newsdata/news.txt');//こちらはファイルの内容を加工できない
?>
</pre>
  </main>
</body>

</html>
