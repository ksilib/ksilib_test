<?php
// 載入db.php來連結資料庫
require_once 'delete.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link href="../style/index.css" rel="stylesheet" type="text/css">
  </head>
<body>
<form class="deleteform" action="delete.inc.php" method="post" autocomplete="off">
    <label for="email">輸入信箱:</label><br>
    <input type="text" name="email"> <br>
    <label for="uid">輸入會員暱稱:</label><br>
    <input type="text" name="uid"> <br>
    <button type="submit" name="submit">刪除</button>
</form>
