<?php
// 載入db.php來連結資料庫
require_once 'C:\xampp\htdocs\includes\dbinfo.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link href="../style/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>
<body>
<form class="updateform" action="update.inc.php" method="post" autocomplete="off">
    <input type="text" name="artist"> <br>
    <button type="submit" name="submit">查詢</button>
</form>

