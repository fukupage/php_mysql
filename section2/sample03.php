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
// date_default_timezone_set('Asia/Tokyo');
// date('Y年n月d日G時i分s秒');  //date単体では表示されないので、printと合わせて使い必要がある。
print('現在は' .date('Y年n月d日G時i分s秒') .'です。');
?>
</pre>
</main>
</body>
</html>
