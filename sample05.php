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
  変数は$を頭につけて、正文字・数字・アンダースコアなどを利用できる。
  ただし、$の後ろに数字が来てはいけない。
-->
<?php $sum = 100 + 1050 + 2500 + 1500 + 2000; ?>
<?php $taxsum = 1.08; ?>
<?php $taxonly = 0.08; ?>
<?php print('税込価格は' . $sum * $taxsum . '円です<br>' ); ?>
<?php print('税抜価格は' . $sum . '円です<br>' ); ?>
<?php print('消費税は' . $sum * $taxonly . '円です' ); ?>
</pre>
</main>
</body>
</html>
