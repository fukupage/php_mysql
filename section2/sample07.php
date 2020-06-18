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

//print('現在は' .date('Y年n月d日G時i分s秒') .'です。');
// print(date('n/j(D)'));
// print"\n";
// print(date('n/j(D)', time() + 60 * 60 * 24));
// print"\n";
// print(date('n/j(D)', strtotime('+2day')));
// print"\n";

for ($i = 1; $i <= 365; $i++) :
  $date = strtotime('+' . $i . 'day');
  print(date('n/j(D)', $date));
  print "\n";
endfor;
?>
</pre>
  </main>
</body>

</html>
