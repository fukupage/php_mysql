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

$week_name = [
  'sun'=>'日',
  'mon'=>'月',
  'tue'=>'火',
  'wed'=>'水',
  'the'=>'木',
  'fri'=>'金',
  'sat'=>'土'
];
// print($week_name['sun']."\n");
// print($week_name['mon']."\n");
// print($week_name['wed']."\n");

// foreach($week_name as $val){
//   print($val."\n");
// }

foreach($week_name as $eng => $jan){
  print($eng.':'.$jan."\n");
}
?>
</pre>
  </main>
</body>

</html>
