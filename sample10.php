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
  // print(date('G')."\n");
  // if(date('G') < 9 || date('G') > 18){
  //   print('営業時間外です！');
  // } else {
  //   print('営業中です！');
  // }
  $x = 'あめんぼあかいなあいうえお';
    if($x){//文字が入っていればtrue・入っていなければfalse
      print('xになにか入ってる！'."\n");
    } else {
      print('xになにか入ってると思ったけど気のせいだった'."\n");
    }

    $y = 1;
    if($y){//yが0以外ならtrue・0ならfalse
      print('yになにか入ってる！'."\n");
    } else {
      print('yになにか入ってると思ったけど気のせいだった'."\n");
    }

?>
</pre>
  </main>
</body>

</html>
