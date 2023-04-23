<?php
  include_once 'header.php';
?>
<link href="../style/login.css" rel="stylesheet" type="text/css">
  <nav>
    <form class="loginform" action="../includes/login.inc.php" method="post" autocomplete="off">
      <h2>登入</h2>
      <label for="usernameemail">暱稱 或 信箱 : </label>
      <input type="text" name="uid" id = "usernameemail"> <br>
      <label for="password">密碼 : </label>
      <input type="password" name="password" id = "password"> <br>
      <button type="submit" name="submit">登入</button>
      <p>或</p>
      <input type="button" onclick="location.href='signup.php'" value="註冊" id="sign">
    </form>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          $message = "請輸入資料!";
          echo "<script>alert('$message');</script>";
        }
        else if ($_GET["error"] == "wronglogin") {
          $message = "暱稱/信箱不正確 或 密碼不正確!";
          echo "<script>alert('$message');</script>";
        }
        
      }
    ?>
  </nav>
  </body>
</html>