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
$price = 3000;$minus = 100;
//$tax = 1.08;

print($price.'円のものから、'.$minus.'円値引きした場合は、約'.floor(100 / $price * $minus).'%の値引きです<br>');
print($price.'円のものから、'.$minus.'円値引きした場合は、約'.ceil(100 / $price * $minus).'%の値引きです<br>');
print($price.'円のものから、'.$minus.'円値引きした場合は、約'.round(100 / $price * $minus,1).'%の値引きです<br>');


?>
</pre>
  </main>
</body>

</html>
