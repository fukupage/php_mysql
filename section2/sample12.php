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
<!--
  php.iniのtimezoneの設定に注意！
-->
<?php
  $date = sprintf('%04d年 %02d月 %02d日 (%s)', 2020, 6, 13, '土');
  $datez = sprintf('% 4d年 % 2d月 % 2d日', 2020, 6, 13);
  //%04dは四桁の数字になるように0で調整するという意味らしい。
  //dはdouble? 文字だとs（string？）。
  print($date."\n");
  print($datez."\n");
  print('2020年06月13日');
?>
</pre>
  </main>
</body>

</html>
