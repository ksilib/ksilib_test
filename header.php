<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link href="../style/header.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="">
        <a href="../index.php"><img src="../img/logo.png"></a>
        <h3 class="logo_text">開飯囉</h3></a>
      </nav>
      <nav class="navbar">
        <ul>
          <li><a href="">藝人<i class="fa-solid fa-chevron-down"></i></a>
            <ul>
              <li><a href="">男藝人</a>
              <li><a href="">女藝人</a>
            </ul>
          </li>
          <li><a href="">團體<i class="fa-solid fa-chevron-down"></i></a>
            <ul>
              <li><a href="">男團</a>
              <li><a href="">女團</a>
            </ul>
          </li>
          <li><a href="">壽星</a></li>
          <li><a href="">專輯</a></li>
        </ul>
      </nav>
      <nav class="">
        <?php
            if (isset($_SESSION["useruid"])) {
              echo "<a href='myfav.php'><button>我的最愛</button></a>";
              echo "<a href='../includes/logout.inc.php'><button>登出</button></a>";
            }
            else {
              echo "<a href='../login.php'><button>登入</button></a>";
              echo "<a href='../signup.php'><button>註冊</button></a>";
            }
        ?>
      </nav>
    </header>