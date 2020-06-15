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
      <?php
        $zip = '987-6543';
        $age = mb_convert_kana($zip, 'a', 'UTF-8');
        if(preg_match("/\A\d{3}[-]\d{4}\z/", $zip)){
          print('〒'.$zip);
        } else {
          print('郵便番号いれてや');
        }
      ?>

      <form action="submit.php" method="post">
      </form>
    </pre>
  </main>
</body>

</html>
