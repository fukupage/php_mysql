<?php
try {
      $db = new PDO('mysql:dbname=my_db;host=localhost:8889;charset=utf8', 'root', 'root');
    } catch (PDOException $e) {
      echo 'DB接続エラー:' . $e->getMessage();
    }
?>
